<?php

namespace App\Imports;

use App\Models\ArchiveCreator;
use App\Models\Archives;
use App\Models\Mapping;
use App\Models\Rack;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class ArchivesInactiveImport implements ToModel, WithHeadingRow, WithValidation
{
    use RemembersRowNumber;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $mapping = Mapping::where('archive_type', $row['jenis_arsip'])->first();
        $creator = ArchiveCreator::where('name', $row['pencipta_arsip'])->first();
        $explode = explode(".", $row['lokasi_rak']);
        $rack = Rack::where('floor', $explode[1])->where('type', $explode[2])->where('no_rack', $explode[3])->first();
        if ($mapping == null) {
            $error = ['Data jenis arsip tidak ditemukan'];
            $failures[] = new Failure($this->getRowNumber(), 'jenis_arsip', $error, $row);

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
        return new Archives([
            "name" => $row['nama'],
            "mapping_id" => $mapping->id,
            "archive_creator_id" => $creator->id,
            "year" => $row['tahun'],
            "amount" => $row['jumlah'],
            "dev_level" => $this->get_dev_level($row['tingkat_perkembangan']),
            "rack_id" => $rack->id,
            "box" => $row['box'],
            "officer" => auth()->user()->id,
            "status" => '2'
        ]);
    }

    public function rules(): array
    {
        return [
            '*.nama' => 'required',
            '*.jenis_arsip' => 'required',
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
                return '1';
                break;
        }
    }
}
