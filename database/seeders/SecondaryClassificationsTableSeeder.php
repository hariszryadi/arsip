<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SecondaryClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secondary_classifications')->insert([
            // PR
            [
                'primary_classification_id' => 1,
                'code' => 'PR.01',
                'name' => 'Penyusunan Rencana Pembangunan',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana pembangunan mulai dari Pengkajian dan pengusulan kebijakan, penyiapan kebijakan, perumusan dan penyusunan bahan, Pemberian masukan dan dukungan dalam penyusunan kebijakan, hingga penetapan dalam bentuk peraturan perundang-undangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.02',
                'name' => 'Pelaksanaan Musyawarah Perencanaan Pembangunan/Musrenbang',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.03',
                'name' => 'Perencanaan Pembangunan Daerah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.04',
                'name' => 'Penyusunan Kontrak Kinerja',
                'description' => 'Arsip yang berkaitan dengan penyusunan kontrak kinerja meliputi kontrak kinerja esolon IV, III hingga eselon II.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.05',
                'name' => 'Penyusunan Laporan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.06',
                'name' => 'Evaluasi Program',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.07',
                'name' => 'Koordinasi dan Sinkronisasi Perencanaan Pembangunan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan koordinasi dan sinkronisasi perencanaan pembangunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.08',
                'name' => 'Konsultasi Perencanaan Pembangunan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan kegiatan konsultasi penyusunan rencana pembangunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.09',
                'name' => 'Pemantauan, Evaluasi, Penilaian dan Pelaporan Perencanaan Pembangunan',
                'description' => 'Arsip yang berkaitan dengan kegiatan monitoring perencanaan pembangunan mulai dari pemantauan, evaluasi, penilaian hingga pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.10',
                'name' => 'Penyusunan Rencana Aksi Strategis Daerah',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan penyusunan rencana aksi strategis daerah mulai dari penyusunan rancangan awal, rapat pembahasan, sosialisasi hingga penetapan rencana aksi strategis daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 1,
                'code' => 'PR.11',
                'name' => 'Perencanaan Pendanaan Pembangunan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HK
            [
                'primary_classification_id' => 2,
                'code' => 'HK.01',
                'name' => 'Pembentukan Peraturan Perundang-Undangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembentukan peraturan perundang-undangan muali dari penyampaian usulan/prakarsa peraturan perundang-undangan sampai dengan penyusunan program legislasi pemerintah daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.02',
                'name' => 'Penyusunan Peraturan Perundang-Undangan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.03',
                'name' => 'Publikasi Peraturan Perundang-Undangan',
                'description' => 'Arsip yang beraitan dengan kegiatan publikasi peraturan perundang-undangan meliputi kegiatan sosialisasi/penyuluha/diseminasi peraturan perundang- undangan penyebarluasan peraturan perundang- undangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.04',
                'name' => 'Penyusunan Naskah Kerja Sama',
                'description' => 'Arsip yang berkaitan dengan penyusunan naskah kerja sama mulai dari penyampaian usul prakarsa, konsultasi/koordinasi, penyusunan draf awal, penjajakan, perundingan, perumusan naskah, penerimaan/pemarafan, penyusunan draf final sampai dengan pengesahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.05',
                'name' => 'Pengelolaan Dokumentasi Hukum',
                'description' => 'Arsip yang berkaitan dengan pengelolaan dokumentasi produk hukum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.06',
                'name' => 'Penyusunan Uji Materi Peraturan Perundang-undangan/Opini Hukum',
                'description' => 'Arsip yang berkaitan dengan kegiatan uji materi peraturan perundang-undangan atau pemberian opini hukum mulai dari pengajuan permohonan, pendaftaran, penjadwalan sidang sampai dengan pembuatan putusan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.07',
                'name' => 'Pemberian Bantuan Hukum dan Penyelesaian Sanggah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 2,
                'code' => 'HK.08',
                'name' => 'Penanganan Permasalahan Hukum',
                'description' => 'Arsip yang berkaitan dengan penanganan permasalahan hukum antara lain meliputi penanganan masalah kontrak dan penanganan permasalahan hukum dengan keterangan ahli.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP
            [
                'primary_classification_id' => 3,
                'code' => 'KP.01',
                'name' => 'Penyusunan dan Penetapan Kebutuhan Aparatur Sipil Negara',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.02',
                'name' => 'Penyusunan Formasi dan Pengadaan Pegawai',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.03',
                'name' => 'Mutasi Pegawai',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.04',
                'name' => 'Pengembangan Karir',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.05',
                'name' => 'Penilaian Kinerja',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.06',
                'name' => 'Pembinaan Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.07',
                'name' => 'Pemberian Bantuan Hukum',
                'description' => 'Arsip yang berkaitan dengan Pemberian Bantuan Hukum pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.08',
                'name' => 'Pengelolaan Status dan Kedudukan Pegawai',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.09',
                'name' => 'Pengelolaan Sistem Informasi Kepegawaian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.10',
                'name' => 'Pengawasan dan Pengendalian Kepegawaian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.11',
                'name' => 'Administrasi Pegawai',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.12',
                'name' => 'Layanan Kesejahteraan Pegawai',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.13',
                'name' => 'Administrasi Perseorangan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 3,
                'code' => 'KP.14',
                'name' => 'Penilaian Kompetensi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // OR
            [
                'primary_classification_id' => 4,
                'code' => 'OR.01',
                'name' => 'Analisis Struktur Organisasi',
                'description' => 'Arsip yang berkaitan dengan analisis struktur organisasi meliputi pembentukan organisasi, pengubahan organisasi, dan pembubaran organisasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 4,
                'code' => 'OR.02',
                'name' => 'Analisis Uraian Jabatan dan Tata Kerja',
                'description' => 'Arsip yang berkaitan dengan analisis uraian jabatan dan tata kerja meliputi penyusunan Sistem dan Prosedur Kerja, analisis jabatan/analisis manajemen.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 4,
                'code' => 'OR.03',
                'name' => 'Penyusunan Standar Kompetensi Jabatan Struktural dan Fungsional',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan standar kompetensi jabatan struktural dan fungsional meliputi penyusunan informasi jabatan, uraian tugas, dan spesifikasi atau persyaratan jabatan struktural.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 4,
                'code' => 'OR.04',
                'name' => 'Analisis Tata Laksana',
                'description' => 'Arsip yang berkaitan dengan kegiatan analisis tata laksana meliputi prosedur tetap dan mekanisme kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 4,
                'code' => 'OR.05',
                'name' => 'Evaluasi Organisasi dan Tata Laksana',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi organisasi dan tata laksana meliputi strutur organisasi, tugas pokok dan fungsi organisasi, uraian jabatan serta tata laksana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU
            [
                'primary_classification_id' => 5,
                'code' => 'KU.01',
                'name' => 'Penyusunan Rencana Anggaran Pendapatan dan Belanja Daerah (RAPBD) dan Anggaran Pendapatan dan Belanja Daerah Perubahan (APBD-P)',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.02',
                'name' => 'Penyusunan Anggaran',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.03',
                'name' => 'Pelaksanaan Anggaran',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.04',
                'name' => 'Pengelolaan Pinjaman/Hibah Luar Negeri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.05',
                'name' => 'Pengelolaan Sistem Akuntansi Keuangan Daerah (SAKD)',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sistem akuntansi keuangan daerah mulai dari penyusunan manual impelemntasi samapi dengan pengelolaan data komputer dan penyusunan berita acara rekonsiliasi untuk penyusunan laporan realisasi anggaran dan neraca bulanan/triwulan/semesteran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.06',
                'name' => 'Penyaluran Anggaran Tugas Pembantuan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.07',
                'name' => 'Pengelolaan Aanggaran Pilkada dan Biaya Bantuan Pemilu dari APBD',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.08',
                'name' => 'Pengelolaan Anggaran Pemerintahan Desa',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 5,
                'code' => 'KU.09',
                'name' => 'Pemeriksaan/Pengawasan Keuangan Daerah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PL
            [
                'primary_classification_id' => 6,
                'code' => 'PL.01',
                'name' => 'Pengelolaan Barang',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 6,
                'code' => 'PL.02',
                'name' => 'Pengelolaan Aset',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // RT
            [
                'primary_classification_id' => 7,
                'code' => 'RT.01',
                'name' => 'Pengurusan Administrasi Telekomunikasi',
                'description' => 'Arsip yang berkaitan dengan pengurusan administrasi telekomunikasi meliputi penggunaan/peralatan telepon, radio, teleks, TV kabel, dan internet.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.02',
                'name' => 'Pengurusan Perjalanan Dinas',
                'description' => 'Arsip yang yang berkaitan dengan pengurusan perjalanan dinas meliputi perjalan dinas dalam negeri dan perjalanan dinas luar negeri (surat perintah, visa, passport, tiket, laporan, SPD, dll.).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.03',
                'name' => 'Pengelolaan Fasilitas Kantor',
                'description' => 'Arsip yang berkaitan dengan pengelolaan fasilitas kantor meliputi sarana dan prasarana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.04',
                'name' => 'Penyelenggaraan Rapat',
                'description' => 'Arsip yang berkaitan penyelenggaraan rapat pimpinan dan rapat staf.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.05',
                'name' => 'Pengelolaan Administrasi Penyediaan Konsumsi dan Akomodasi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan penyediaan konsumsi dan akomodasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.06',
                'name' => 'Pengurusan Kendaraan Dinas',
                'description' => 'Arsip yang berkaitan dengan pengurusan kendaraan dinas meliputi pengurusan surat-surat kendaraan dinas, pemeliharaan dan perbaikan, pengurusan kehilangan dan masalah kendaraan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.07',
                'name' => 'Pemeliharaan Gedung dan Taman',
                'description' => 'Arsip yang berkaitan dengan pemeliharaan gedung, pertamanan/landscaping, penghijauan taman, perbaikan gedung, perbaikan rumah dinas/wisma, serta kebersihan gedung dan taman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.08',
                'name' => 'Pengelolaan Jaringan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan jaringan meliputi perbaikan/pemeliharaan serta pemasangan jaringan listrik, air, telepon, dan komputer.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.09',
                'name' => 'Pengelolaan Ketertiban dan Keamanan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan ketertiban dan keamanan meliputi pelaksanaan pengamanan, penjagaan, dan pengawalan terhadap pejabat, kantor, dan rumah dinas, daftar piket, surat ijin keluar masuk orang, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.10',
                'name' => 'Administrasi Pengelolaan Parkir',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan perparkiran gedung/kantor/rumah dinas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 7,
                'code' => 'RT.11',
                'name' => 'Administrasi Pakaian Dinas',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengadaan dan pendistiribusian pakaian dinas pegawai, satpam, petugas kebersihan dan pegawai lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PG
            [
                'primary_classification_id' => 8,
                'code' => 'PG.01',
                'name' => 'Penyusunan Rencana Umum Pengadaan',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana umum pengadaan mulai dari identifikasi dan analisis kebutuhan barang/jasa, penyusunan dan penetapan rencana anggaran, penetapan kebijakan umum, penyusunan KAK, sampai dengan pengumuman rencana umum pengadaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 8,
                'code' => 'PG.02',
                'name' => 'Pelaksanaan Pengadaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 8,
                'code' => 'PG.03',
                'name' => 'Pengembangan Strategi dan Sistem Pengadaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 8,
                'code' => 'PG.04',
                'name' => 'Monitoring dan Evaluasi Pengadaan',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi pelaksanaan kebijakan pengadaan serta kinerja pelaksanaan pengadaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HM
            [
                'primary_classification_id' => 9,
                'code' => 'HM.01',
                'name' => 'Penyelenggaraan Keprotokolan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.02',
                'name' => 'Dokumentasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan dokumentasi/liputan kegiatan dinas pimpinan, acara kedinasan dan peristiwa- peristiwa bidang masing-masing, dalam berbagai media antara lain kertas/foto/video/rekaman suara/multi media.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.03',
                'name' => 'Penyajian Informasi Kelembagaan',
                'description' => 'Arsip yang berkaitan dengan pengumpulan, pengolahan dan penyajian informasi kelembagaan mulai dari kliping koran, brosur/leaflet/poster/plakat, pengumuman/pemberitahuan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.04',
                'name' => 'Hubungan Antar lembaga dan Pemerintah Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan hubungan antar lembaga dan pemerintah daerah meliputi hubungan antar lembaga pemerintah, hubungan dengan organisasi sosial/LSM, hubungan dengan perusahaan, hubungan dengan perguruan tinggi/sekolah, termasuk magang, Pendidikan Sistem Ganda (PSG)/praktek kerja lapangan (PKL), forum kehumasan (Bakohumas/Perhumas).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.05',
                'name' => 'Rapat Dengar Pendapat/Hearing DPRD Kabupaten',
                'description' => 'Arsip yang berkaitan dengan rapat dengar pendapat/hearing DPRD kabupaten meliputi bahan/materi pidato/sidang DPRD serta Muspida kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.06',
                'name' => 'Publikasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan publikasi meliputi penerbitan majalah, buletin, koran dan jurnal, publikasi melalui media cetak maupun elektronik, pemeran/sayembara/lomba, festival, pembuatan spanduk dan iklan, danpemberian penghargaan/tanda kenang- kenangan/upacara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 9,
                'code' => 'HM.07',
                'name' => 'Pemberian Penghargaan/ Tanda Kenang-kenangan/Ucapan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian penghargaan/tanda kenag-kenagan/ upacara antara lain piagam penghargaan, sertifikat, piala dll.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DL
            [
                'primary_classification_id' => 10,
                'code' => 'DL.01',
                'name' => 'Pengembangan Program dan Pembinaan Diklat',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 10,
                'code' => 'DL.02',
                'name' => 'Pembinaan Widyaiswara',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 10,
                'code' => 'DL.03',
                'name' => 'Penyelenggaraan Pendidikan dan Pelatihan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 10,
                'code' => 'DL.04',
                'name' => 'Pelaporan Statistik Penyelenggaraan Diklat',
                'description' => 'Arsip yang berkaitan dengan pelaporan penyelenggaraan pendidikan dan pelatihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KA
            [
                'primary_classification_id' => 11,
                'code' => 'KA.01',
                'name' => 'Pembinaan Kearsipan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 11,
                'code' => 'KA.02',
                'name' => 'Pengelolaan Arsip Dinamis',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 11,
                'code' => 'KA.03',
                'name' => 'Pengelolaan Arsip Statis',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 11,
                'code' => 'KA.04',
                'name' => 'Pengelolaan JIKN dan SIKN',
                'description' => 'Arsip yang berkaitan pengelolaan jaringan informasi kearsipan nasional (JIKN) dan sistem informasi kearsipan nasional (SIKN) berupa database arsip daerah yang masuk simpul JIKN maupun SIKN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PP
            [
                'primary_classification_id' => 12,
                'code' => 'PP.01',
                'name' => 'Pengembangan Bahan Pustaka dan Jasa Informasi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 12,
                'code' => 'PP.02',
                'name' => 'Pengembangan Sumber Daya Perpustakaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 12,
                'code' => 'PP.03',
                'name' => 'Pemasyarakatan Minat Baca',
                'description' => 'Arsip yang berkaitan dengan pemasyarakatan minat baca melalui organisasi perpustakaan berupa forum perpustakaan umum, khusus, dan sekolah, serta gerakan pemasyarakatan minat baca, dan organisasi perpustakaan lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 12,
                'code' => 'PP.04',
                'name' => 'Pembinaan Pustakawan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 12,
                'code' => 'PP.05',
                'name' => 'Pengelolaan Pangkalan Data/Basis Data Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan pangkalan data/basis data tenaga perpustakaan dan tim penilai perpustakaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK
            [
                'primary_classification_id' => 13,
                'code' => 'DK.01',
                'name' => 'Pembinaan Pendidikan Usia Dini dan Pendidikan Non Formal',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.02',
                'name' => 'Penyelengaraan Pendidikan Dasar',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.03',
                'name' => 'Pembinaan Pendidik dan Tenaga Kependidikan',
                'description' => 'Arsip yang berkaitan dengan pembinaan pendidik dan tenaga kependidikan meliputi pendataan dan pemetaan pendidik dan tenaga kependidikan, peningkatan kualitas, penilaian prestasi kerja, pemberian penghargaan guru dan tenaga kependidikan, peningkatan kesejahteraan, pengurusan block grant serta sosialisasi pembinaan pendidik dan tenaga kependidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.04',
                'name' => 'Pembinaan Kurikulum',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.05',
                'name' => 'Pengadaan Buku Pelajaran',
                'description' => 'Arsip yang berkaitan dengan pengadaan buku pelajaran mulai dari penyusunan standar mutu buku, pengumpulan naskah, penilaian mutu baku dan pemilihan, persetujuan dan pengesahan naskah, distribusi buku, pengembangan naskah hingga pengkajian buku.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.06',
                'name' => 'Penilaian Pendidikan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.07',
                'name' => 'Pengembangan dan Pembinaan Bahasa',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.08',
                'name' => 'Pengembangan SDM Pendidikan serta Penjaminan Mutu Pendidikan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.09',
                'name' => 'Pengembangan Teknologi Informasi dan Komunikasi Pendidikan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.10',
                'name' => 'Pengelolaan Data dan Statistik Pendidikan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 13,
                'code' => 'DK.11',
                'name' => 'Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi pembinaan pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD
            [
                'primary_classification_id' => 14,
                'code' => 'BD.01',
                'name' => 'Pembinaan Pelestarian Cagar Budaya dan Permuseuman',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.02',
                'name' => 'Pembinaan Kesenian dan Perfilman',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.03',
                'name' => 'Pembinaan Kepercayaan terhadap Tuhan Yang Maha Esa dan Tradisi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.04',
                'name' => 'Pembinaan Sejarah dan nilai budaya',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.05',
                'name' => 'Internalisasi Nilai dan Diplomasi Budaya',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.06',
                'name' => 'Pengembangan SDM Kebudayaan serta Penjaminan Mutu Kebudayaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.07',
                'name' => 'Pengembangan Arkeologi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 14,
                'code' => 'BD.08',
                'name' => 'Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi pembinaan kebudayaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PO
            [
                'primary_classification_id' => 15,
                'code' => 'PO.01',
                'name' => 'Pemberdayaan Pemuda',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 15,
                'code' => 'PO.02',
                'name' => 'Pengembangan Pemuda',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 15,
                'code' => 'PO.03',
                'name' => 'Pembudayaan Olahraga',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 15,
                'code' => 'PO.04',
                'name' => 'Peningkatan Prestasi Olahraga',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE
            [
                'primary_classification_id' => 16,
                'code' => 'PE.01',
                'name' => 'Pengembangan Destinasi Pariwisata',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 16,
                'code' => 'PE.02',
                'name' => 'Pemasaran Pariwisata',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 16,
                'code' => 'PE.03',
                'name' => 'Pengembangan Ekonomi Kreatif Berbasis Seni dan Budaya',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 16,
                'code' => 'PE.04',
                'name' => 'Pengembangan Ekonomi Kreatif Berbasis Media, Ilmu Pengetahuan dan Teknologi (Iptek)',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 16,
                'code' => 'PE.05',
                'name' => 'Pengembangan Sumber Daya Pariwisata dan Ekonomi Kreatif',
                'description' => 'Arsip yang berkaitan dengan pengembangan Sumber daya pariwisata dan ekonomi kreatif meliputi penelitian dan pengembangan kebijakan kepariwisataan, penelitian dan pengembangan kebijakan ekonomi kreatif, pengembangan SDM kepariwisataan dan ekonomi kreatif, kompetensi kepariwisataan dan ekonomi kreatif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 16,
                'code' => 'PE.06',
                'name' => 'Penyusunan Laporan Statistik Kepariwisataan',
                'description' => 'Arsip yang berkaitan dengan penyusunan laporan meliputi laporan statistik bulanan, triwulan, semester dan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PN
            [
                'primary_classification_id' => 17,
                'code' => 'PN.01',
                'name' => 'Penyusunan Rencana Penanaman Modal',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 17,
                'code' => 'PN.02',
                'name' => 'Pengembangan Iklim Penanaman Modal',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 17,
                'code' => 'PN.03',
                'name' => 'Promosi Penanaman Modal',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 17,
                'code' => 'PN.04',
                'name' => 'Pelayanan Penanaman Modal',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 17,
                'code' => 'PN.05',
                'name' => 'Pengendalian Pelayanan Penanaman Modal',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian pelayanan penanaman modal meliputi pemantauan, bimbingan/sosialisasi, fasilitasi penyelesaian masalah, pengawasan, pencabutan/pembatalan perizinan serta penyusunan kualifikasi pelayanan terpadu satu pintu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 17,
                'code' => 'PN.06',
                'name' => 'Pelaporan Bidang Penanaman Modal',
                'description' => 'Arsip yang berkaitan dengan pelaporan bidang penanaman modal meliputi laporan bulanan, triwulan, semesteran dan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD
            [
                'primary_classification_id' => 18,
                'code' => 'PD.01',
                'name' => 'Pembinaan Perdagangan dalam Negeri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 18,
                'code' => 'PD.02',
                'name' => 'Pengelolaan Standarisasi Perdagangan dan Perlindungan Konsumen',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 18,
                'code' => 'PD.03',
                'name' => 'Pembinaan Perdagangan Luar Negeri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 18,
                'code' => 'PD.04',
                'name' => 'Pembinaan Kerja Sama Perdagangan Internasional',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 18,
                'code' => 'PD.05',
                'name' => 'Pembinaan Perdagangan Ekspor Nasional',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI
            [
                'primary_classification_id' => 19,
                'code' => 'PI.01',
                'name' => 'Pengembangan Iklim Usaha dan Kerja Sama',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.02',
                'name' => 'Promosi Industri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.03',
                'name' => 'Pengembangan Standarisasi dan Teknologi Industri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.04',
                'name' => 'Pengusulan Hak dan Kekayaan Intelektual Industri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.05',
                'name' => 'Pengembangan Industri Hijau',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.06',
                'name' => 'Analisis Industri Unggulan Kabupaten',
                'description' => 'Arsip yang berkaitan dengan analisis industri unggulan kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.07',
                'name' => 'Monitoring dan Evaluasi Kompetensi Inti Industri Kabupaten',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi kompetensi inti industri kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.08',
                'name' => 'Pengembangan Infrastruktur Pendukung',
                'description' => 'Arsip yang berkaitan dengan pengembangan infrastruktur pendukung industri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.09',
                'name' => 'Fasilitasi Pengembangan Kawasan Industri',
                'description' => 'Arsip yang berkaitan dengan fasilitasi pengembangan kawasan industri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.10',
                'name' => 'Kerja Sama Industri Internasional',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.11',
                'name' => 'Pengelolaan Implementasi Standarisasi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.12',
                'name' => 'Pengkajian Kebijakan dan Iklim Usaha Industri',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.13',
                'name' => 'Pengkajian Industri Hijau dan Lingkungan Hidup',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 19,
                'code' => 'PI.14',
                'name' => 'Pengkajian Teknologi dan Hak Kekayaan Intelektual',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK
            [
                'primary_classification_id' => 20,
                'code' => 'UK.01',
                'name' => 'Pengembangan Kelembagaan Koperasi dan UKM',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.02',
                'name' => 'Pengelolaan Produksi Koperasi dan UMKM',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.03',
                'name' => 'Pembiayaan Usaha Koperasi dan UMKM',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.04',
                'name' => 'Pemasaran dan Jaringan Usaha',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.05',
                'name' => 'Pengembangan Sumber Daya Koperasi dan UMKM',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.06',
                'name' => 'Pengembangan dan Restrukturisasi Usaha',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.07',
                'name' => 'Pengkajian Sumber Daya Koperasi dan UKM',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 20,
                'code' => 'UK.08',
                'name' => 'Kerja Sama Internasional dan Hubungan Antar Lembaga',
                'description' => 'Arsip yang berkaitan dengan kerja sama internasional dan hubungan antar lembaga di bidang koperasi dan UMK.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK
            [
                'primary_classification_id' => 21,
                'code' => 'TK.01',
                'name' => 'Perencanaan Tenaga Kerja Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan perencanaan tenaga kerja daerah mulai dari pelaksanaan kebijakan tenaga kerja dearah, pembinaan dan pemantauan perencanaan tenaga kerja daerah, sampai dengan analisis, evaluasi, dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 21,
                'code' => 'TK.02',
                'name' => 'Pembinaan Pelatihan dan Produktivitas',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 21,
                'code' => 'TK.03',
                'name' => 'Pembinaan dan Penempatan Tenaga Kerja',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 21,
                'code' => 'TK.04',
                'name' => 'Pembinaan Hubungan Industrial dan Jaminan Sosial Tenaga Kerja',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 21,
                'code' => 'TK.05',
                'name' => 'Pembinaan Pengawasan Ketenagakerjaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 21,
                'code' => 'TK.06',
                'name' => 'Pengkajian dan Pengembangan Pelayanan Keselamatan dan Kesehatan Kerja (K3)',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM
            [
                'primary_classification_id' => 22,
                'code' => 'PM.01',
                'name' => 'Pembinaan Kesatuan Bangsa dan Politik',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.02',
                'name' => 'Penyelenggaraan Fasilitasi Pemerintahan Umum',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.03',
                'name' => 'Penyelenggaraan Otonomi Daerah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.04',
                'name' => 'Pembinaan Pembangunan Daerah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.05',
                'name' => 'Pemberdayaan Masyarakat dan Desa',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.06',
                'name' => 'Kependudukan dan Pencatatan Sipil',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 22,
                'code' => 'PM.07',
                'name' => 'Pengelolaan Anggaran dan Pendapatan Daerah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KD
            [
                'primary_classification_id' => 23,
                'code' => 'KD.01',
                'name' => 'Pengendalian Penduduk',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 23,
                'code' => 'KD.02',
                'name' => 'Pembinaan Keluarga Berencana dan Kesehatan Reproduksi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 23,
                'code' => 'KD.03',
                'name' => 'Pembinaan Keluarga Sejahtera dan Pemberdayaan Keluarga',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 23,
                'code' => 'KD.04',
                'name' => 'Pelayanan Advokasi dan Informasi Kependudukan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 23,
                'code' => 'KD.05',
                'name' => 'Pelaporan Data Kependudukan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PA
            [
                'primary_classification_id' => 24,
                'code' => 'PA.01',
                'name' => 'Pengarusutamaan Gender Ekonomi, Politik Sosial dan Hukum',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengarusutamaan gender ekonomi, politik sosial dan hukum meliputi pengelolaan data gender, advokasi dan fasilitasi, serta monitoring, evaluasi dan analisa kebijakan gender.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 24,
                'code' => 'PA.02',
                'name' => 'Perlindungan Perempuan',
                'description' => 'Arsip yang berkaitan dengan kegiatan perlindungan perempuan meliputi pengelolaan data perlindungan perempuan, advokasi dan fasilitasi, sistem aplikasi dan jaringan informasi, analisis dan penyajian informasi, serta monitoring, evaluasi dan analisa kebijakan perlindungan perempuan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 24,
                'code' => 'PA.03',
                'name' => 'Perlindungan Anak',
                'description' => 'Arsip yang berkaitan dengan kegiatan perlindungan anak meliputi pengelolaan data perlindungan anak, advokasi dan fasilitasi, serta monitoring, evaluasi dan analisa kebijakan perlindungan anak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 24,
                'code' => 'PA.04',
                'name' => 'Pengelolaan Tumbuh Kembang Anak',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan timbuh kembang anak meliputi pengelolaan data tumbuh kembang anak, advokasi dan fasilitasi, serta monitoring, evaluasi dan analisa kebijakan tumbuh kembang anak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 24,
                'code' => 'PA.05',
                'name' => 'Pelaporan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelaporan pemberdayaan perempuan dan perlindungan anak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT
            [
                'primary_classification_id' => 25,
                'code' => 'PT.01',
                'name' => 'Peternakan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.02',
                'name' => 'Layanan Kesehatan Hewan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.03',
                'name' => 'Pengelolaan Perkebunan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.04',
                'name' => 'Pengelolaan Hortikultura',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.05',
                'name' => 'Pengelolaan Prasarana dan Sarana Pertanian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.06',
                'name' => 'Pembudidayaan Tanaman Pangan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.07',
                'name' => 'Pengolahan dan Pemasaran Hasil Pertanian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.08',
                'name' => 'Pengeloaan Ketahanan Pangan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.09',
                'name' => 'Karantina Pertanian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.10',
                'name' => 'Perlindungan Varietas Tanaman dan Perizinan Pertanian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.11',
                'name' => 'Bimbingan Teknis Pertanian',
                'description' => 'Arsip yang berkaitan dengan kegiatan bimbingan teknis pertanian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.12',
                'name' => 'Penyuluhan Pertanian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.13',
                'name' => 'Pengawasan Usaha Pertanian',
                'description' => 'Arsip yang berkaitan dengan pengawasan usaha pertanian meliputi monitoring usaha di bidang pertanian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 25,
                'code' => 'PT.14',
                'name' => 'Evaluasi dan Pelaporan',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi dan pelaporan bidang pertanian',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PK
            [
                'primary_classification_id' => 26,
                'code' => 'PK.01',
                'name' => 'Pengelolaan Perikanan Budidaya',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 26,
                'code' => 'PK.02',
                'name' => 'Karantina Ikan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 26,
                'code' => 'PK.03',
                'name' => 'Evaluasi dan Pelaporan Bidang Perikanan',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi dan pelaporan bidang perikanan meliputi pelaporan statistik bulanan, triwulanan, semesteran, dan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PS
            [
                'primary_classification_id' => 27,
                'code' => 'PS.01',
                'name' => 'Pembinaan dan Pengendalian Persandian',
                'description' => 'Arsip yang berkaitan dengan pembinaan dan pengendalian persandian meliputi: pembinaan dan pegendalian SDM persandian, pembinaan dan pegendalian Materiil dan Jaring Komunikasi Persandian, pembinaan dan pegendalian kreditasi dan sertifikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 27,
                'code' => 'PS.02',
                'name' => 'Pengamanan Persandian',
                'description' => 'Arsip yang berkaitan dengan pengamanan persandian meliputi pengamanan sinyal, analisis sinyal, materil sinyal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 27,
                'code' => 'PS.03',
                'name' => 'Pengkajian Persandian',
                'description' => 'Arsip yang berkaitan dengan pengkajian persandian pada Kriptografi, Peralatan Sandi, dan Komunikasi Sandi mulai dari perencanaan pengkajian, administrasi pengkajian, pelaksanaan pengkajian, hingga laporan pengkajian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // ST
            [
                'primary_classification_id' => 28,
                'code' => 'ST.01',
                'name' => 'Sensus Penduduk, Pertanian, dan Ekonomi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 28,
                'code' => 'ST.02',
                'name' => 'Survei',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 28,
                'code' => 'ST.03',
                'name' => 'Konsolidasi Data Statistik',
                'description' => 'Arsip yang berkaitan dengan kegiatan konsolidasi data statistik mulai dari kompilasi data, analisis data, sampai dengan penyusunan publikasi data statistik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 28,
                'code' => 'ST.04',
                'name' => 'Evaluasi dan Pelaporan Sensus, Survei, serta Konsolidasi data Statistik',
                'description' => 'Arsip yang berkaitan dengan evaluasi dan pelaporan sensus, survei, serta konsolidasi data statistik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BC
            [
                'primary_classification_id' => 29,
                'code' => 'BC.01',
                'name' => 'Pemetaan Potensi Pencarian dan Pertolongan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 29,
                'code' => 'BC.02',
                'name' => 'Operasi Pencarian dan Pertolongan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 29,
                'code' => 'BC.03',
                'name' => 'Penanggulangan Bencana',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 29,
                'code' => 'BC.04',
                'name' => 'Pelaporan',
                'description' => 'Arsip yang berkaitan dengan pelaporan data bencana, kecelakaan dan kondisi bahaya meliputi pelaporan statistik bulanan, triwulanan, semesteran, dan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // SO
            [
                'primary_classification_id' => 30,
                'code' => 'SO.01',
                'name' => 'Penyelenggaraan Rehabilitasi dan Pelayanan Sosial',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 30,
                'code' => 'SO.02',
                'name' => 'Pelayanan Perlindungan dan Jaminan Sosial',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 30,
                'code' => 'SO.03',
                'name' => 'Pemberdayaan Sosial dan Penanggulangan Kemiskinan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 30,
                'code' => 'SO.04',
                'name' => 'Pelaporan Statistik Sosial',
                'description' => 'Arsip yang berkaitan dengan pelaporan statistik pelayanan sosial meliputi pelaporan statistik bulanan, triwulanan, semesteran, dan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS
            [
                'primary_classification_id' => 31,
                'code' => 'KS.01',
                'name' => 'Penyelenggaraan Upaya Kesehatan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.02',
                'name' => 'Pengendalian Penyakit dan Penyehatan Lingkungan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.03',
                'name' => 'Pengembangan teknologi dan layanan laboratorium',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.04',
                'name' => 'Penyelenggaraan Layanan Gizi dan Kesehatan Ibu dan Anak',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.05',
                'name' => 'Pelayanan Kesehatan Tradisional Alternatif, dan Komplementer',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.06',
                'name' => 'Pelayanan Kesehatan Kerja dan Olahraga',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.07',
                'name' => 'Pengawasan Kefarmasian dan Alat Kesehatan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.08',
                'name' => 'Akreditasi, Sertifikasi dan Perizinan Layanan Kesehatan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.09',
                'name' => 'Penanggulangan Krisis Kesehatan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.10',
                'name' => 'Pengembangan Jaminan Kesehatan Nasional',
                'description' => 'Arsip yang berkaitan dengan pengembangan jaminan kesehatan nasional meliputi pendataan NHA tahunan dan pelaksanaan teknis penguatan pelaksanaan JKN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.11',
                'name' => 'Pengelolaan Intelegensia Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pemeliharaan dan peningkatan kemampuan intelegensi kesehatan serta penanggulangan masalah intelegensi kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.12',
                'name' => 'Pelayanan Kesehatan Haji',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 31,
                'code' => 'KS.13',
                'name' => 'Pengembangan Promosi dan Kemitraan Kesehatan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI
            [
                'primary_classification_id' => 32,
                'code' => 'KI.01',
                'name' => 'Perencananan Teknologi, Informasi dan Komunikasi',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana teknologi, informasi dan komunikasi mulai dari pengkajian, pengusulan, penyiaan, perumusan, pemberian masukan dan dukungan, sampai pada penetapan kebijakan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.02',
                'name' => 'Manual/Standar Teknologi, Informasi dan Komunikasi',
                'description' => 'Arsip yang berkaitan dengan penyusunan manual/standar teknologi, informasi, dan komunikasi meliputi manual teknik telekomunikasi, manual teknik komunikasi radio, manual penerapan standar telekomunikasi, manual kualitas pelayanan dan harmonisasi standar, serta manual audit perangkat lunak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.03',
                'name' => 'Pengelolaan Sumber Daya dan Perangkat Pos dan Informatika',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.04',
                'name' => 'Penyelengaraan Informatika',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.05',
                'name' => 'Pengembangan Aplikasi Informatika dan Pemberdayaan Informatika',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.06',
                'name' => 'Pengelolaan Keamanan Informasi',
                'description' => 'Arsip yang berkaitan dengan keamanan informasi meliputi kegiatan tata kelola keamanan informasi, teknologi keamanan informasi, monitoring, evaluasi dan tanggap darurat keamanan informasi, penyidikan dan penindakan kejahatan informasi (ciber crime), serta sosialisasi budaya keamanan informasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.07',
                'name' => 'Penyelenggaraan Layanan Informasi dan Komunikasi Publik',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.08',
                'name' => 'Pengelolaan Data dan Sarana Informasi',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 32,
                'code' => 'KI.09',
                'name' => 'Penyusunan Laporan Statistik Komunikasi dan Informatika',
                'description' => 'Arsip yang berkaitan dengan penyusunan laporan statistik komunikasi dan informatika meliputi laporan ststistik bulanan, triwulanan, semesteran, serta laporan statistik tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PH
            [
                'primary_classification_id' => 33,
                'code' => 'PH.01',
                'name' => 'Pengelolaan Lalu-lintas dan Angkutan Jalan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 33,
                'code' => 'PH.02',
                'name' => 'Bina Sistem Transportasi Perkotaan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 33,
                'code' => 'PH.03',
                'name' => 'Pengelolaan Keselamatan Transportasi Darat',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 33,
                'code' => 'PH.04',
                'name' => 'Pengelolaan Lalu-Lintas Antarkota dan Perkotaan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan lalu-lintas antarkota dan lalu-lintas perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 33,
                'code' => 'PH.05',
                'name' => 'Pengelolaan Angkutan Antarkota dan Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan angkutan antarkota dan angkutan perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 33,
                'code' => 'PH.06',
                'name' => 'Evaluasi dan Pelaporan Bidang Perhubungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi dan pelaporan bidang perhubungan meliputi pelaporan bulanan, triwulanan, sesemteran, serta tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH
            [
                'primary_classification_id' => 34,
                'code' => 'LH.01',
                'name' => 'Pengelolaan Tata Lingkungan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.02',
                'name' => 'Pengendalian Pencemaran Lingkungan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.03',
                'name' => 'Pengendalian Kerusakan Lingkungan dan Perubahan Iklim',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.04',
                'name' => 'Pengelolaan B3, Limbah, dan Sampah',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.05',
                'name' => 'Penyelenggaraan Tata Cara Hukum Lingkungan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.06',
                'name' => 'Komunikasi Lingkungan dan Pemberdayaan Masyarakat',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.07',
                'name' => 'Pembinaan Sarana Teknis Lingkungan dan Peningkatan Kapasitas',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 34,
                'code' => 'LH.08',
                'name' => 'Evaluasi dan Pelaporan Bidang Lingkungan Hidup',
                'description' => 'Arsip yang berkaitan dengan evaluasi dan pelaporan bidang lingkungan hidup meliputi pelaporan bulanan, triwulanan, semesteran, serta tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PU
            [
                'primary_classification_id' => 35,
                'code' => 'PU.01',
                'name' => 'Pengelolaan Sumber Daya Air',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 35,
                'code' => 'PU.02',
                'name' => 'Pengelolaan Sumber Daya Jalan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 35,
                'code' => 'PU.03',
                'name' => 'Pengelolaan Sumber Daya Infrastruktur',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KK
            [
                'primary_classification_id' => 36,
                'code' => 'KK.01',
                'name' => 'Pembinaan Profesi dan Pengamanan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 36,
                'code' => 'KK.02',
                'name' => 'Pembinaan Pemelihara Keamanan',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 36,
                'code' => 'KK.03',
                'name' => 'Penanggulangan Kejahatan Terorisme',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 36,
                'code' => 'KK.04',
                'name' => 'Intelijen keamanan',
                'description' => 'Arsip yang berkaitan dengan operasi intelijen kemanan terhadap kegiatan masyarakat dan orang asing.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 36,
                'code' => 'KK.05',
                'name' => 'Pengelolaan Komunitas Intelelejen daerah (Kominda)',
                'description' => 'Arsip yang berkaitan dengan pengelolaan komunitas intelijen daerah meliputi pengelolaan data dan kegiatan fasiltasi komunitas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LB
            [
                'primary_classification_id' => 37,
                'code' => 'LB.01',
                'name' => 'Penelitian dan Pengkajian',
                'description' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.02',
                'name' => 'Pengembangan dan Inovasi',
                'description' => 'Arsip yang berkaitan dengan pengembangan dan inovasi, mulai dari penyusunan rencana kerja, administrasi, pelaksanaan, serta hasil pengembangan dan inovasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.03',
                'name' => 'Pemanfaatan dan Pendayagunaan Hasil Penelitian',
                'description' => 'Arsip yang berkaitan dengan pemanfaatan dan pendayagunaan hasil penelitian, meliputi penerapan, replikasi, prototipe hasil penelitian, serta perekayasaan pengembangan inovasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.04',
                'name' => 'Advokasi dan Fasilitasi Penelitian, Pengembangan, dan Inovasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan advokasi dan fasilitasi penelitian, pengembangan, dan inovasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.05',
                'name' => 'Diseminasi Hasil Penelitian dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan diseminasi hasil penelitian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi, meliputi promosi dan pemasyarakatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.06',
                'name' => 'Pembinaan Penelitian dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan kegiatan pembinaan penelitian/pengkajian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.07',
                'name' => 'Pengelolaan Jaringan Sistem Penelitian dan Pengembangan Nasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan jaringan sistem nasional terkait penelitian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.08',
                'name' => 'Pengelolaan Data dan Informasi Hasil Penelitian dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan data dan informasi hasil penelitian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.09',
                'name' => 'Pengelolaan Master Proceeding/Jurnal Penelitian dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan Pengelolaan Master proceeding/jurnal penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi, meliputi penerbitan, leaflet dan booklet, serta kamus istilah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.10',
                'name' => 'Pengelolaan Hak atas Kekayaan Intelektual (HaKI)',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan Hak atas kekayaan intelektual (HaKI).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.11',
                'name' => 'Forum komunikasi Penelitian dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan keikutsertaan dalam forum komunikasi penelitian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.12',
                'name' => 'LayananJasaPenelGandanPengembangan', // noted
                'description' => 'Arsip yang berkaitan dengan kegiatan Layanan jasa penelitian, pengembangan, serta penerapan ilmu pengetahuan dan teknologi, meliputi jasa laboratorium pengujian, jasa teknologi produksi, jasa studi, jasa penyewaan peralatan, jasa tenaga ahli/profesi, jasa sertifikasi/kalibrasi, dan buku rekaman barang yg di uji/dikalibrasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.13',
                'name' => 'Sertifikasi Peneliti',
                'description' => 'Arsip yang berkaitan dengan kegiatan sertifikasi personil penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'primary_classification_id' => 37,
                'code' => 'LB.14',
                'name' => 'Akreditasi Laboratorium',
                'description' => 'Arsip yang berkaitan dengan kegiatan akreditasi laboratorium penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
