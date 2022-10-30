<?php

namespace App\Imports;

use App\Models\ArchiveCreator;
use App\Models\Archives;
use App\Models\PrimaryClassification;
use App\Models\Rack;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class ArchivesStaticImport implements ToModel, WithHeadingRow, WithValidation
{
    use RemembersRowNumber;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $classification = [];
        $primary = PrimaryClassification::orderBy('id')->get();
        foreach ($primary as $p) {
            if ($p->secondary()->exists()) {
                array_push($classification, $p->code);
                foreach ($p->secondary as $s) {
                    if ($s->tertiary()->exists()) {
                        array_push($classification, $s->code);
                        foreach ($s->tertiary as $t) {
                            array_push($classification, $t->code);
                        }
                    } else {
                        array_push($classification, $s->code);
                    }
                }
            } else {
                array_push($classification, $p->code);
            }
        }
        $creator = ArchiveCreator::where('name', $row['pencipta_arsip'])->first();
        $explode = explode(".", $row['lokasi_rak']);
        $rack = Rack::where('floor', $explode[1])->where('type', $explode[2])->where('no_rack', $explode[3])->first();

        if(!in_array($row['kode_klasifikasi'], $classification)) {
            $error = ['Data kode klasifikasi arsip tidak ditemukan'];
            $failures[] = new Failure($this->getRowNumber(), 'kode_klasifikasi', $error, $row);

            throw new \Maatwebsite\Excel\Validators\ValidationException(\Illuminate\Validation\ValidationException::withMessages($error), $failures);
        }

        if ($creator == null) {
            $error = ['Data pencipta arsip tidak ditemukan'];
            $failures[] = new Failure($this->getRowNumber(), 'pencipta_arsip', $error, $row);

            throw new \Maatwebsite\Excel\Validators\ValidationException(\Illuminate\Validation\ValidationException::withMessages($error), $failures);
        }

        if ($rack == null) {
            $error = ['Data rak tidak ditemukan'];
            $failures[] = new Failure($this->getRowNumber(), 'lokasi_rak', $error, $row);

            throw new \Maatwebsite\Excel\Validators\ValidationException(\Illuminate\Validation\ValidationException::withMessages($error), $failures);
        }

        $rack->update([
            'used' => DB::raw('used + 1')
        ]);

        return new Archives([
            "name" => $row['nama'],
            "code_classification" => $row['kode_klasifikasi'],
            "archive_creator_id" => $creator->id,
            "year" => $row['tahun'],
            "amount" => $row['jumlah'],
            "dev_level" => $this->get_dev_level($row['tingkat_perkembangan']),
            "rack_id" => $rack->id,
            "box" => $row['box'],
            "officer" => auth()->user()->id,
            "status" => '1'
        ]);
    }

    public function rules(): array
    {
        return [
            '*.nama' => 'required',
            '*.kode_klasifikasi' => 'required',
            '*.pencipta_arsip' => 'required',
            '*.tahun' => 'required',
            '*.jumlah' => 'required',
            '*.tingkat_perkembangan' => 'required',
            '*.lokasi_rak' => 'required',
            '*.box' => 'required'
        ];
    }

    private function get_dev_level($dev_level) 
    {
        switch ($dev_level) {
            case 'Asli':
                return '1';
                break;
            case 'Copy':
                return '2';
                break;
            case 'Salinan':
                return '3';
                break;
            case 'Pertinggal':
                return '4';
                break;
            case 'Asli/Copy':
                return '5';
                break;
            
            default:
                return '-';
                break;
        }
    }
}
