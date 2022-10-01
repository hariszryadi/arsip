<?php

namespace App\Imports;

use App\Models\Archives;
use App\Models\Mapping;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArchivesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $mapping = Mapping::where('archive_type', $row['jenis_arsip'])->first();
        $user = User::where('name', $row['petugas'])->first();

        return new Archives([
            "name" => $row['nama'],
            "mapping_id" => $mapping->id,
            "year" => $row['tahun'],
            "amount" => $row['jumlah_berkas'],
            "dev_level" => $this->get_dev_level($row['tingkat_perkembangan']),
            "location" => 'R'.$row['lantai'].$this->get_loc_status($row['status']).$row['rak'].$row['box'],
            "loc_floor" => $row['lantai'],
            "loc_status" => $this->get_loc_status($row['status']),
            "loc_rack" => $row['rak'],
            "loc_box" => $row['box'],
            "officer" => $user->id,
            "status" => '1'
        ]);
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

    private function get_loc_status($loc_status)
    {
        switch ($loc_status) {
            case 'Statis':
                return 'S';
                break;
            case 'Dinamis':
                return 'D';
                break;
            
            default:
                return '-';
                break;
        }
    }
}
