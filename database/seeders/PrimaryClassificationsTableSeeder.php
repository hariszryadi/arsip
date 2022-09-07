<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_classifications')->insert([
            // fasilitatif
            [
                'category' => '1',
                'code' => 'PR',
                'name' => 'Perencanaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'HK',
                'name' => 'Hukum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'KP',
                'name' => 'Kepegawaian',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'OR',
                'name' => 'Organisasi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'KU',
                'name' => 'Keuangan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'PL',
                'name' => 'Perlengkapan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'RT',
                'name' => 'Kerumahtanggaan dan Ketatausahaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'PG',
                'name' => 'Pengadaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'HM',
                'name' => 'Hubungan Masyarakat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'DL',
                'name' => 'Diklat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'KA',
                'name' => 'Kearsipan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '1',
                'code' => 'PP',
                'name' => 'Perpustakaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // subtantif
            [
                'category' => '2',
                'code' => 'DK',
                'name' => 'Pendidikan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'BD',
                'name' => 'Kebudayaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PO',
                'name' => 'Kepemudaan dan Olah Raga',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PE',
                'name' => 'Pariwisata dan Ekonomi Kreatif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PN',
                'name' => 'Penanaman Modal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PD',
                'name' => 'Perdagangan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PI',
                'name' => 'Perindustrian',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'UK',
                'name' => 'Koperasi dan Usaha Kecil, Menengah (UKM)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'TK',
                'name' => 'Ketenagakerjaan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PM',
                'name' => 'Pemerintahan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'KD',
                'name' => 'Kependudukan dan Keluarga Berencana',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PA',
                'name' => 'Pemberdayaan dan Perlindungan Anak',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PT',
                'name' => 'Pertanian',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PK',
                'name' => 'Perikanan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PS',
                'name' => 'Persandian',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'ST',
                'name' => 'Statistk',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'BC',
                'name' => 'Bencana, Kecelakaan dan Kondisi Bahaya',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'SO',
                'name' => 'Sosial',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'KS',
                'name' => 'Kesehatan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'KI',
                'name' => 'Komunikasi dan Informatika',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PH',
                'name' => 'Perhubungan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'LH',
                'name' => 'Lingkungan Hidup',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'PU',
                'name' => 'Pekerjaan Umum dan Perumahan Rakyat',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'KK',
                'name' => 'Keamanan dan Ketertiban',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category' => '2',
                'code' => 'LB',
                'name' => 'Penelitian dan Pengembangan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
