<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SecurityClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('security_classifications')->insert([
            [
                'name' => 'Sangat Rahasia',
                'access_rights' => 'Penentu kebijakan, pengawas internal dan eksternal serta penegak hukum',
                'basic_consideration' => 'Apabila diketahui oleh pihak yang tidak berhak dapat membahayakan kedaulatan negara, keutuhan wilayah Negara Kesatuan Republik Indonesia, dan keselamatan bangsa.',
                'processing_unit' => 'Unit Pengolah Terkait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rahasia',
                'access_rights' => 'Penentu kebijakan, pengawas internal dan eksternal serta penegak hukum',
                'basic_consideration' => 'Apabila diketahui oleh pihak yang tidak berhak dapat mengakibatkan terganggunya pelaksanaan tugas dan fungsi lembaga',
                'processing_unit' => 'Unit Pengolah Terkait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terbatas',
                'access_rights' => 'Penentu Kebijakan, pengawas Internal dan eksternal serta penegak hukum',
                'basic_consideration' => 'Apabila diketahui oleh pihak yang tidak berhak dapat mengakibatkan terganggunya pelaksanaan tugas dan fungsi lembaga',
                'processing_unit' => 'Unit Pengolah Terkait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terbuka',
                'access_rights' => 'Pengguna internal dan eksternal serta publik',
                'basic_consideration' => '-',
                'processing_unit' => 'Unit Pengolah Terkait',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
