<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racks')->insert([
            // vital
            [
                'floor' => 2,
                'type' => 'V',
                'no_rack' => '001',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // statis
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '001',
                'capacity' => 80,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '002',
                'capacity' => 80,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '003',
                'capacity' => 250,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '004',
                'capacity' => 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '005',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '006',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '007',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '008',
                'capacity' => 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '009',
                'capacity' => 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '010',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '011',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '012',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '013',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '014',
                'capacity' => 200,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '015',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '016',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '017',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '018',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '019',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '020',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '021',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '022',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '023',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '024',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '025',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '026',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '027',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '028',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '029',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '030',
                'capacity' => 150,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '031',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '032',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'S',
                'no_rack' => '033',
                'capacity' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // inaktif
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '001',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '002',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '003',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '004',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '005',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '006',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '007',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '008',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '009',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '010',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '011',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '012',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '013',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '014',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '015',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '016',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '017',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '018',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '019',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '020',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '021',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '022',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '023',
                'capacity' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '024',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '025',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '026',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '027',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '028',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '029',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '030',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '031',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '032',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '033',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '034',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '035',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '036',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '037',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '038',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '039',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '040',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '041',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '042',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '043',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '044',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '045',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '046',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '047',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '048',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '049',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '050',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '051',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '052',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '053',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '054',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '055',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '056',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '057',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '058',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '059',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '060',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '061',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '062',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '063',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '064',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '065',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '066',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '067',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '068',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '069',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '070',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '071',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '072',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '073',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '074',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '075',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '076',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '077',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '078',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '079',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '080',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '081',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '082',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '083',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '084',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '085',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '086',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '087',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '088',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '089',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '090',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '091',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '092',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '093',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '094',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '095',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '096',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '097',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '098',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '099',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '100',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '101',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '102',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '103',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '104',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '105',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '106',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '107',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '108',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '109',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '110',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '111',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '112',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '113',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '114',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'floor' => 2,
                'type' => 'D',
                'no_rack' => '115',
                'capacity' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
