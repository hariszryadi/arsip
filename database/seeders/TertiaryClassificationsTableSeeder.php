<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TertiaryClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tertiary_classifications')->insert([
            // PR.02
            [
                'secondary_classification_id' => 2,
                'code' => 'PR.02.01',
                'name' => 'Musrenbang Kabupaten',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan musyawarah perencanaan pembangunan tingkat kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 2,
                'code' => 'PR.02.02',
                'name' => 'Musrenbang Kecamatan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan musyawarah perencanaan pembangunan tingkat kecamatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PR.03
            [
                'secondary_classification_id' => 3,
                'code' => 'PR.03.01',
                'name' => 'Rencana Pembangunan Jangka Menengah/Renstra',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana kerja/ pembangunan menengah/rencana strategis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 3,
                'code' => 'PR.03.02',
                'name' => 'Rencana Pembangunan Tahunan Kabupaten',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana kerja/ pembangunan tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 3,
                'code' => 'PR.03.03',
                'name' => 'Penyusunan Program Kerja Tahunan',
                'description' => 'Arsip yang berkaitan dengan penyusunan program kerja daerah tahunan mulai dari penerimaan usulan program kerja dari unit kerja, OPD, hingga penyusunan program kerja tahunan pemerintah kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PR.05
            [
                'secondary_classification_id' => 5,
                'code' => 'PR.05.01',
                'name' => 'Laporan Berkala',
                'description' => 'Arsip yang berkaitan dengan penyusunan laporan berkala meliputi laporan triwulan, semesteran, tahunan, kinerja utama, dan akuntabilitas kinerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 5,
                'code' => 'PR.05.02',
                'name' => 'Laporan Insidental OPD/Kabupaten',
                'description' => 'Arsip yang berkaitan dengan penyusunan laporan kegiatan insidental OPD dan kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PR.06
            [
                'secondary_classification_id' => 6,
                'code' => 'PR.06.01',
                'name' => 'Unit Kerja Setingkat Eselon IV dan III',
                'description' => 'Arsip kerja yang berkaitan dengan kegiatan evaluasi program unit kerja setingkat eselon IV dan III.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 6,
                'code' => 'PR.06.02',
                'name' => 'Unit Kerja Setingkat Eselon II',
                'description' => 'Arsip kerja yang berkaitan dengan kegiatan evaluasi program unit kerja setingkat eselon II.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 6,
                'code' => 'PR.06.03',
                'name' => 'Pemerintah Daerah Kabupaten',
                'description' => 'Arsip kerja yang berkaitan dengan kegiatan evaluasi program pemerintah daerah kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PR.11
            [
                'secondary_classification_id' => 11,
                'code' => 'PR.11.01',
                'name' => 'Pendanaan Luar Negeri dan Hibah',
                'description' => 'Arsip yang berkaitan dengan perencanaan pendanaan luar negeri dan hibah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 11,
                'code' => 'PR.11.02',
                'name' => 'Pendanaan Dalam Negeri',
                'description' => 'Arsip yang berkaitan dengan perencanaan pendanaan dalam negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 11,
                'code' => 'PR.11.03',
                'name' => 'Kerja Sama Pembangunan Internasional',
                'description' => 'Arsip yang berkaitan dengan perencanaan kerja sama pembangunan internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 11,
                'code' => 'PR.11.04',
                'name' => 'Pendanaan dari Surat Berharga Syariah Negara',
                'description' => 'Arsip yang berkaitan dengan perencanaan pendanaan surat berharga syariah negara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 11,
                'code' => 'PR.11.05',
                'name' => 'Pendanaan On Top dan atau Inisiatif Baru',
                'description' => 'Arsip yang berkaitan dengan perencanaan pendanaan on top atau inisiatif baru.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HK.02
            [
                'secondary_classification_id' => 13,
                'code' => 'HK.02.01',
                'name' => 'Penyusunan Peraturan Daerah',
                'description' => 'Arsip yang berkaitan dengan penyusunan peraturan daerah mulai dari pengkajian dan pengusulan kebijakan, penyiapan, perumusan dan penyusunan bahan, pemberian masukan/pembahasan sampai dengan pengundanganan dan penetapan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 13,
                'code' => 'HK.02.02',
                'name' => 'Penyusunan Keputusan/Penetapan',
                'description' => 'Arsip yang berkaitan dengan penyusunan keputusan/penetapan mulai dari pengajuan draf, telaah hukum, perbaikan draf sampai dengan penetapan keputusan/penetapan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HK.07
            [
                'secondary_classification_id' => 18,
                'code' => 'HK.07.01',
                'name' => 'Bantuan/Konsultasi Hukum Pidana',
                'description' => 'Arsip yang berkaitan dengan pemberian bantuan/konsultasi hukum pidana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 18,
                'code' => 'HK.07.02',
                'name' => 'Bantuan/Konsultasi Hukum Perdata',
                'description' => 'Arsip yang berkaitan dengan pemberian bantuan/konsultasi hukum perdata.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 18,
                'code' => 'HK.07.03',
                'name' => 'Bantuan/Konsultasi Hukum PTUN dan Agama',
                'description' => 'Arsip yang berkaitan dengan pemberian bantuan/konsultasi hukum PTUN dan agama.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.01
            [
                'secondary_classification_id' => 20,
                'code' => 'KP.01.01',
                'name' => 'Perencanaan Kebutuhan ASN',
                'description' => 'Arsip yang berkaitan dengan perencanaan kebutuhan ASN terdiri dari bahan penyusunan rencana kebutuhan, hasil analisis kebutuhan ASN ataupun PPPK dan dokumen pengolahan data kebutuhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 20,
                'code' => 'KP.01.02',
                'name' => 'Perencanaan Pertimbangan Formasi',
                'description' => 'Arsip yang berkaitan dengan perencanaan pertimbangan formasi meliputi pertimbangan teknis penetapan formasi ASN dan formasi ikatan dinas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 20,
                'code' => 'KP.01.03',
                'name' => 'Penetapan Kebutuhan Aparatur Sipil Negara',
                'description' => 'Arsip yang berkaitan dengan penetapan kebutuhan aparatur sipil negara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 20,
                'code' => 'KP.01.04',
                'name' => 'Standarisasi Jabatan',
                'description' => 'Arsip yang berkaitan dengan standarisasi jabatan yang terdiri dari informasi jabatan, kompetensi jabatan dan klasifikasi jabatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.02
            [
                'secondary_classification_id' => 21,
                'code' => 'KP.02.01',
                'name' => 'Penyusunan Formasi ASN',
                'description' => 'Arsip yang berkaitan dengan formasi ASN meliputi usulan formasi, usulan permintaan formasi ke Menpan RB dan Kepala BKN, persetujuan formasi, penetapan formasi, dan penetapan formasi khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 21,
                'code' => 'KP.02.02',
                'name' => 'Pelaksanaan Pengadaan Aparatur Sipil Negara (ASN)',
                'description' => 'Arsip yang berkaitan dengan pengadaan ASN meliputi hasil kegiatan proses rekrutmen ASN, penetapan pengumuman kelulusan, berkas lamaran yang tidak diterima, nota usul pengangkatan ASN, open bidding (seleksi terbuka jabatan).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 21,
                'code' => 'KP.02.03',
                'name' => 'Penyusunan Sistem Rekrutmen ASN',
                'description' => 'Arsip yang berkaitan dengan penyusunan sistem rekrutmen ASN mulai dari pengelolaan sistem rekrutmen, fasilitasi penyelenggaraan seleksi sampai dengan sertifikasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.03
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.01',
                'name' => 'Alih Status/Pindah Instansi',
                'description' => 'Arsip yang berkaitan dengan mutasi pegawai meliputi usulan alih status, pindah instansi, pindah wilayah kerja, diperbantukan, dipekerjakan, penugasan sementara, mutasi antar perwakilan, mutasi ke dan dari perwakilan, pemindahan sementara, hingga persetujuan/pertimbangan Kepala BKN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.02',
                'name' => 'Kenaikan Pangkat/Golongan/Jabatan',
                'description' => 'Arsip yang berkaitan dengan usulan kenaikan pangkat/golongan/jabatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.03',
                'name' => 'Pengangkatan dan Pemberhentian',
                'description' => 'Arsip yang berkaitan dengan usulan pengangkatan dan pemberhentian dalam jabatan struktural/fungsional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.04',
                'name' => 'Penetapan Perubahan Data Pegawai',
                'description' => 'Arsip yang berkaitan dengan penetapan perubahan data dasar/status/kedudukan, hukum pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.05',
                'name' => 'Peninjauan Masa Kerja',
                'description' => 'Arsip yang berkaitan dengan usulan peninjauan masa kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 22,
                'code' => 'KP.03.06',
                'name' => 'Pelaksanaan Pertimbangan Jabatan dan Pangkat',
                'description' => 'Arsip yang berkaitan dengan hasil pelaksanaan pertimbangan dari Badan Pertimbangan Jabatan dan Pangkat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.04
            [
                'secondary_classification_id' => 23,
                'code' => 'KP.04.01',
                'name' => 'Pelaksanaan Pendidikan Formal',
                'description' => 'Arsip yang berkaitan dengan pengembangan karir melalui pendidikan informal meliputi penyusunan rencana dan analisis kebutuhan, penerimaan usulan diklat/kursus/magang/ujian dinas/praktek kerja di instansi lain sampai dengan pelaporan hasil pelaksanaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 23,
                'code' => 'KP.04.02',
                'name' => 'Pelaksanaan Pendidikan Informal',
                'description' => 'Arsip yang berkaitan dengan pengembangan karir melalui pendidikan formal meliputi penyusunan rencana dan analisis kebutuhan, penerimaan usulan tugas belajar/izin belajar/ sampai dengan pelaporan hasil pelaksanaan pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 23,
                'code' => 'KP.04.03',
                'name' => 'Penyesuaian Ijazah',
                'description' => 'Arsip yang berkaitan dengan usulan penyesuaian ijazah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 23,
                'code' => 'KP.04.04',
                'name' => 'Penyusunan Sistem Karier',
                'description' => 'Arsip yang berkaitan dengan penyusunan sistem karir.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 23,
                'code' => 'KP.04.05',
                'name' => 'Pengajuan Angka Kredit',
                'description' => 'Arsip yang berkaitan dengan penilaian angka kredit mulai dari pengajuan daftar usul penetapan angka kredit sampai dengan penetapan angka kredit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.05
            [
                'secondary_classification_id' => 24,
                'code' => 'KP.05.01',
                'name' => 'Penyusunan Sistem Penilaian dan Standar Kinerja',
                'description' => 'Arsip yang berkaitan dengan penyusunan sistem penilaian dan standar kerja meliputi sistem penilaian kinerja ASN, standar kinerja jabatan pegawai ASN hingga penilaian kinerja pegawai ASN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 24,
                'code' => 'KP.05.02',
                'name' => 'Pengelolaan Sistem Informasi Kinerja',
                'description' => 'Arsip yang berkaitan dengan pengelolaan database dan analisis sistem informasi kinerja pegawai ASN meliputi hasil pengelolaan database penilaian kinerja pegawai ASN, analisis sistem informasi kinerja pegawai ASN, dan teknis penilaian kinerja ASN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 24,
                'code' => 'KP.05.03',
                'name' => 'Evaluasi dan Pemantauan Penilaian Kinerja',
                'description' => 'Arsip yang berkaitan dengan hasil evaluasi dan pemantauan penilaian kinerja dan standar kinerja jabatan pegawai ASN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.06
            [
                'secondary_classification_id' => 25,
                'code' => 'KP.06.01',
                'name' => 'Kode Etik Pegawai',
                'description' => 'Asip yang berkaitan dengan pembinaan kode etik pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 25,
                'code' => 'KP.06.02',
                'name' => 'Disiplin Pegawai',
                'description' => 'Arsip yang berkaitan dengan penegakan disiplin dan peningkatan disiplin.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 25,
                'code' => 'KP.06.03',
                'name' => 'Pemberhentian',
                'description' => 'Arsip yang berkaitan dengan pemberhentian dengan hormat, tidak hormat maupun pemberhentian sementara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 25,
                'code' => 'KP.06.04',
                'name' => 'Pensiun',
                'description' => 'Arsip yang berkaitan dengan pengurusan pensiun pegawai meliputi administrasi pengajuan pensiun hingga penetapan pensiun.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.08
            [
                'secondary_classification_id' => 27,
                'code' => 'KP.08.01',
                'name' => 'Penyusunan Pertimbangan Status Kepegawaian',
                'description' => 'Arsip yang berkaitan dengan penyusunan pertimbangan status pegawai meliputi analisis status kepegawaian dan penyusunan pertimbanan status kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 27,
                'code' => 'KP.08.02',
                'name' => 'Penyusunan Pertimbangan Kedudukan Kepegawaian',
                'description' => 'Arsip yang berkaitan dengan penyusunan dan analisis pertimbangan kedudukan pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 27,
                'code' => 'KP.08.03',
                'name' => 'Penyelesaian Keberatan Pegawai',
                'description' => 'Arsip yang berkaitan dengan penyelesaian keberatan pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 27,
                'code' => 'KP.08.04',
                'name' => 'Penyelesaian Perselisihan/sengketa kepegawaian',
                'description' => 'Arsip yang berkaitan dengan penyelesaian perselisihan/sengketa kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.09
            [
                'secondary_classification_id' => 28,
                'code' => 'KP.09.01',
                'name' => 'Pengolahan Data dan Informasi Kepegawaian',
                'description' => 'Arsip yang berkaitan dengan pengolahan data dan informasi kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 28,
                'code' => 'KP.09.02',
                'name' => 'Pengembangan sistem informasi kepegawaian',
                'description' => 'Arsip yang berkaitan dengan pengembangan sistem informasi kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 28,
                'code' => 'KP.09.03',
                'name' => 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian',
                'description' => 'Arsip yang berkaitan dengan pengembangan sistem pengelolaan arsip kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.10
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.01',
                'name' => 'Formasi, Pengadaan dan Pasca Diklat',
                'description' => 'Arsip yang berkaitan dengan pengawasan dan pengendalian terhadap formasi, pengadaan dan pasca diklat mulai dari pelaksanaan peraturan perundang- undangan, monitoring dan evaluasi sampai dengan penyusunan rekomendasi, dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.02',
                'name' => 'Kepangkatan, Pengangkatan, dan Pemberhentian',
                'description' => 'Arsip yang berkaitan dengan pengawasan dan pengendalian kepangkatan, pengangkatan, dan pemberhentian mulai dari pelaksanaan peraturan perundang-undangan, monitoring dan evaluasi sampai dengan rekomendasi, dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.03',
                'name' => 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja',
                'description' => 'Arsip yang berkaitan dengan gaji dan tunjangan, kesejahteraan dan kinerja mulai dari pelaksanaan peraturan perundang-undangan, monitoring dan evaluasi sampai dengan rekomendasi, dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.04',
                'name' => 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN',
                'description' => 'Arsip yang berkaitan dengan pengawsan dan pengendalian kode etik, disiplin, pemberhentian dan pensiun ASN mulai dari pelaksanaan peraturan perundang-undangan, monitoring dan evaluasi, sampai dengan rekomendasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.05',
                'name' => 'Pelaporan Hasil Pengawasan dan Pengendalian',
                'description' => 'Arsip yang berkaitan dengan pelaporan hasil Pengawasan dan pengendalian kepegawaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 29,
                'code' => 'KP.10.06',
                'name' => 'Sanggahan terhadap Permasalahan Tenaga Honorer',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan sanggahan terhadap permasalahan tenaga honorer.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.11
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.01',
                'name' => 'Administrasi Surat Perintah Dinas/Surat Tugas',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan administrasi Surat Perintah Dinas/Surat Tugas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.02',
                'name' => 'Administrasi Cuti Sakit, Cuti Bersalin, Cuti Tahunan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan administrasi cuti sakit, cuti bersalin, dan cuti tahunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.03',
                'name' => 'Administrasi Cuti Alasan Penting',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan administrasi cuti alasan penting.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.04',
                'name' => 'Administrasi Cuti Besar dan Cuti Diluar Tanggungan Negara',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan administrasi cuti besar dan cuti diluar tanggungan negara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.05',
                'name' => 'Dokumentasi Identitas Pegawai',
                'description' => 'Arsip yang berkaitan dengan dokumentasi identitas pegawai meliputi pengusulan penetapan Karpeg/KPE/Karis/Karsu, keanggotaan organisasi profesi/kedinasan, dan pelaporan pajak penghasilan pribadi (LP2P).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.06',
                'name' => 'Pengurusan Daftar Urut Kepangkatan (DUK)',
                'description' => 'Arsip yang berkaitan dengan pengurusan Daftar Urut Kepangkatan (DUK).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 30,
                'code' => 'KP.11.07',
                'name' => 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan',
                'description' => 'Arsip yang berkaitan dengan pengurusan kenaikan gaji berkala, mutasi gaji/tunjangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.12
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.01',
                'name' => 'Layanan Pemeliharaan Kesehatan Pegawai',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan pemeliharaan kesehatan pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.02',
                'name' => 'Layanan Asuransi Pegawai/BPJS',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan asuransi pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.03',
                'name' => 'Layanan Tabungan Perumahan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan tabungan perumahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.04',
                'name' => 'Layanan Bantuan Sosial',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan bantuan sosial.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.05',
                'name' => 'Layanan Pemberian Pakaian Dinas',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian pakaina dinas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.06',
                'name' => 'Layanan Pegawai yang meninggal karena Dinas',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian santunan pegawai yang meninggal karena dinas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.07',
                'name' => 'Pemberian Tali Kasih',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian tali kasih.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.08',
                'name' => 'Pemberian Piagam Penghargaan dan Tanda Jasa',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian piagam penghargaan dan tanda jasa pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.09',
                'name' => 'Layanan Olahraga dan Rekreasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan olahraga dan rekreasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 31,
                'code' => 'KP.12.10',
                'name' => 'Layanan Medical Cek Up',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberian layanan medical cek up.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.13
            [
                'secondary_classification_id' => 32,
                'code' => 'KP.13.01',
                'name' => 'Berkas Perseorangan Aparatur Sipil Negara (ASN)',
                'description' => 'Arsip yang berkaitan dengan pengelolaan berkas perseorangan Aparatur Sipil Negara (ASN) mulai dari berkas lamaran sampai dengan pensiun.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 32,
                'code' => 'KP.13.02',
                'name' => 'Berkas Perseorangan Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)',
                'description' => 'Arsip yang berkaitan dengan berkas perseorangan Pegawai Pemerintah dengan Perjanjian Kerja (PPPK).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 32,
                'code' => 'KP.13.03',
                'name' => 'Berkas Perseorangan Pejabat Negara dan Pejabat lainnya yang disetarakan',
                'description' => 'Arsip yang berkaitan dengan berkas perseorangan pejabat negara dan pejabat lainnya yang disetarakan meliputi bupati dan wakil bupati, ketua, wakil ketua dan anggota DPRD, ketua, wakil ketua, dan anggota KPUD/ Bawaslu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 32,
                'code' => 'KP.13.04',
                'name' => 'Berkas Perseorangan Kepala Desa',
                'description' => 'Arsip yang berkaitan dengan berkas perseorangan kepala desa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KP.14
            [
                'secondary_classification_id' => 33,
                'code' => 'KP.14.01',
                'name' => 'Penilaian Kompetensi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan berkas perseorangan Aparatur Sipil Negara (ASN) mulai dari berkas lamaran sampai dengan pensiun.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 33,
                'code' => 'KP.14.02',
                'name' => 'Pengelolaan Hasil Penilaian Kompetensi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan hasil penilaian kompetensi pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.01
            [
                'secondary_classification_id' => 39,
                'code' => 'KU.01.01',
                'name' => 'Penyusunan Prioritas Plafon Anggaran (PPA)',
                'description' => 'Arsip yang berkaitan dengan penyusunan Prioritas Plafon Anggaran (PPA) meliputi kebijakan umum, renstra, strategi dan prioritas, dokumen Rancangan Kebijakan Umum Anggaran (KUA) yang telah dibahas bersama DPRD, KUA beserta nota kesepakatantannya, dokumen rencana PPAS, nota kesepakatan PPA dan Prioritas Plafon Anggaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 39,
                'code' => 'KU.01.02',
                'name' => 'Penyusunan Rencana Kerja Anggaran Satuan Kerja Perangkat Daerah/Perangkat Daerah (RKA-SKPD/PD)',
                'description' => 'Arsip yang berkaitan dengan penyusunan Rencana Kerja Anggaran Satuan Kerja Perangkat Daerah/Perangkat Daerah (RKA-SKPD/PD) meliputi dokumen penyusuan RKA-PD yang telah disetujui Sekda dan dokumen RKA- SKPD/PD.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 39,
                'code' => 'KU.01.03',
                'name' => 'Penyampaian Rancangan Anggaran Pendapatan dan Belanja Daerah kepada Dewan Perwakilan Rakyat Daerah (DPRD)',
                'description' => 'Arsip yang berkaitan dengan penyampaian Rancangan Anggaran Pendapatan dan Belanja Daerah kepada Dewan Perwakilan Rakyat Daerah (DPRD) meliputi pengantar nota keuangan pemerintah dan Rancangan Peraturan Daerah RAPBD, hasil pembahasan RAPBD oleh DPRD dan pemerintah daerah, dokumen rancangan penjabaran APBD beserta lampirannya, penyampaian permohonan evaluasi kepada gubernur tentang RAPBD dan penjabarannya, hasil evaluasi Menteri Dalam Negeri tentang RAPBD, penetapan Perda APBD oleh gubernur beserta penjabarannya, dan PERDA tentang APBD.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 39,
                'code' => 'KU.01.04',
                'name' => 'Penyusunan Anggaran Pendapatan dan Belanja Daerah Perubahan (RAPBD- P)',
                'description' => 'Arsip yang berkaitan dengan penyusunan RAPBD-P mulai dari penyusunan prioritas plafon anggaran perubahan, rencana kerja anggaran/(RKA-SKPD/OPD) Perubahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.02
            [
                'secondary_classification_id' => 40,
                'code' => 'KU.02.01',
                'name' => 'Musyawarah Rencana Pembangunan (Musrenbang) Kecamatan',
                'description' => 'Arsip yang berkaitan dengan Musyawarah Rencana Pembangunan (Musrenbang) tingkat Kecamatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 40,
                'code' => 'KU.02.02',
                'name' => 'Musyawarah Rencana Pembangunan( Musrenbang) Kabupaten',
                'description' => 'Arsip yang berkaitan dengan Musyawarah Rencana Pembangunan (Musrenbang) tingkat Kabupaten.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 40,
                'code' => 'KU.02.03',
                'name' => 'Penyusunan Dokumen Pelaksanaan Anggaran (RDPA) SKPD/OPD',
                'description' => 'Arsip yang berkaitan dengan penyusunan Dokumen Pelaksanaan Anggaran (RDPA) SKPD/OPD mulai dari penyusunan rancangan sampai dengan persetujuan oleh sekretaris daerah sampai dengan pengesahan dokumen pelaksanaan anggaran oleh pejabat pengelola keuangan daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.03
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.01',
                'name' => 'Pengelolaan Pendapatan Daerah',
                'description' => 'Arsip yang berkaitan dengan pengelolaan pendapatan daerah meliputi pendapatan ali daerah, penerimaan dana perimabngan, penerimaan lain-lain pendapatan yang sah, setoran pajak, sisa lebih perhitungan anggaran, barang milik daerah, piutang daerah serta investasi daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.02',
                'name' => 'Pelaksanaan Belanja',
                'description' => 'Arsip yang berkaitan dengan belanja terdiri dari dokumen belanja langsung dan dokumen belanja tidak langsung.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.03',
                'name' => 'Pelaksanaan Pembiayaan Daerah',
                'description' => 'Arsip yang berkaitan dengan pembiayaan daerah meliputi penerimaan pembiayaan dan pengeluaran pembiayaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.04',
                'name' => 'Penatausahaan Keuangan',
                'description' => 'Arsip yang berkaitan dengan dokumen penatausahaan keuangan baik dengan pengajuan secara UP, GU, TU, LS terdiri dari Surat Penyediaan Dana (SPD), Surat Permohonan Pembayaran (SPP), Surat Perintah Membayar (SPM), dan Surat Perintah Pencairan Dana (SP2D).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.05',
                'name' => 'Pertanggungjawaban Penggunaan Dana',
                'description' => 'Arsip yang berkaitan dengan Berkas Pertanggujawaban Pengguna Dana terdiri dari Buku Kas Umum (BKU), Buku Kas Pembantu (BKP), ringkasan perincian pengeluaran objek, rekening koran bank, laporan pertanggungjawaban fungsional dan administrasi, bukti penyetoran pajak, register penutupan kas, berita acara pemeriksaan, Laporan Realisasi Anggaran (LRA), neraca, Catatan atas Laporan Keuangan (CaLK) Termasuk Arsip Data Komputer (ADK), laporan pendapatan negara/daerah, dan Laporan Keadaan Kredit Anggaran (LKKA) bulanan/triwulan/semesteran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.06',
                'name' => 'Penatausahaan Gaji',
                'description' => 'Arsip yang berkaitan dengan penatausahaan gaji pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 41,
                'code' => 'KU.03.07',
                'name' => 'Penyusunan Laporan Keuangan Tahunan',
                'description' => 'Arsip yang berkaitan dengan Laporan Keuangan tahunan terdiri dari Laporan Realisasi Anggaran (LRA), Neraca, Laporan Perubahan Saldo Lebih, Laporan Operasional, Laporan Arus Kas, Laporan Perubahan Ekuitas, dan Catatan atas Laporan Keuangan (CaLK).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.04
            [
                'secondary_classification_id' => 42,
                'code' => 'KU.04.01',
                'name' => 'Pengajuan Pinjaman Hibah Luar Negeri',
                'description' => 'Arsip yang berkaitan dengan pengajuan pinjaman/hibah luar negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 42,
                'code' => 'KU.04.02',
                'name' => 'Penarikan dan Penggunaan Pinjaman.Hibah Luar Negeri',
                'description' => 'Arsip yang berkaitan dengan penarikan dan penggunaan hibah luar negeri meliputi alokasi penggunaan, penarikan dana, realisasi pencairan sampai dengan permintaan penarikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 42,
                'code' => 'KU.04.03',
                'name' => 'Pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN)',
                'description' => 'Arsip yang berkaitan dengan pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 42,
                'code' => 'KU.04.04',
                'name' => 'Pelaporan',
                'description' => 'Arsip yang berkaitan dengan pelaporan pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.06
            [
                'secondary_classification_id' => 44,
                'code' => 'KU.06.01',
                'name' => 'Penetapan penugasan penyaluran anggaran',
                'description' => 'Arsip yang berkaitan dengan penetapan penugasan penyaluran anggaran mulai dari penetapan pimpinan proyek sampai dengan keputusan penbukaan rekening.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 44,
                'code' => 'KU.06.02',
                'name' => 'Penerimaan Anggaran Tugas Pembantuan',
                'description' => 'Arsip yang berkaitan dengan Penerimaan Anggaran Tugas Pembantuan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 44,
                'code' => 'KU.06.03',
                'name' => 'Pembukuan anggaran',
                'description' => 'Arsip yang berakaitan dengan Pembukuan anggaran terdiri dari Pembukuan anggaran terdiri dari Buku Kas Umum (BKU), Buku Pembantu, Register dan Buku Tambahan Daftar Pembukuan Pencarian/Pengeluaran (DPP), Daftar Himpunan Pencarian (DHP) dan Rekening Koran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.07
            [
                'secondary_classification_id' => 45,
                'code' => 'KU.07.01',
                'name' => 'Penyusunan Anggaran Pilkada dan Biaya Bantuan Pemilu dari APBD',
                'description' => 'Arsip yang berkaitan dengan enyusunan anggaran pilkada dan biaya bantuan pemilu dari APBD terdiri dari kebijakan keuangan pilkada dan penyusunan anggaran aantuan pemilu, peraturan/pedoman/standar belanja pegawai, barang dan jasa, operasional dan kontingensi untuk biaya pilkada dan bantuan pemilu, bahan usulan Rencana Kegiatan dan Anggaran (RKA) pilkada KPUD dan Bawalu Kabupaten, PPK, PPS, KPPS dan permohonan pengajuan RKA KPUD dan Panwas/Bawaslu, berkas pembahasan RKA pilkada dan bantuan pemilu, Rencana Anggaran Satuan Kerja (RASK) pilkada dan bantuan pemilu kabupaten, Dokumen Rancangan Anggaran Satuan Kerja (DRASK) pilkada KPUD dan Panwas/Bawaslu Kabupaten dan bantuan biaya pemilu dari APBD, berkas pembentukan dana cadangan pilkada, bahan rapat rancangan peraturan daerah tentang pilkada, dan bantuan biaya pemilu dari APBD, dan nota persetujuan DPRD tentang perda APBD pilkada dan bantuan biaya pemilu dari APBD.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 45,
                'code' => 'KU.07.02',
                'name' => 'Pelaksanaan Anggaran Pilkada dan Anggaran Biaya Bantuan Pemilu',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan anggaran pilkada dan anggaran biaya bantuan pemilu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 45,
                'code' => 'KU.07.03',
                'name' => 'Pelaksanaan Anggaran Operasional Pemilu',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan anggaran operasional pemilu meliputi penyediaan pembiayaan kegiatan dan penyaluran biaya pemilu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.08
            [
                'secondary_classification_id' => 46,
                'code' => 'KU.08.01',
                'name' => 'Penyusunan Rencana Anggaran Desa',
                'description' => 'Arsip yang berkaitan dengan penyusunan program dan rencana anggaran pemerintahan desa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 46,
                'code' => 'KU.08.02',
                'name' => 'Pelaksanaan dan Pertanggangjawaban Anggaran Desa',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan pertanggunjawaban anggaran desa meliputi pungutan desa, pelepasan eks tanah desa, sewa tanah kas desa, pendapatan asli desa hingga pembukuan kas desa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 46,
                'code' => 'KU.08.03',
                'name' => 'Pelaporan',
                'description' => 'Arsip yang berkaitan dengan pelaporan keuangan desa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KU.09
            [
                'secondary_classification_id' => 47,
                'code' => 'KU.09.01',
                'name' => 'Penyusunan Rencana Pengawasan',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana pengawasan keuangan daerah meliputi penyusunan Rencana Strategis Pengawasan, Rencana Kerja Pengawasan Tahunan, Rencana Kinerja Tahunan Pengawasan, Penetapan Kinerja Tahunan Pengawasan, dan Rakor Pengawasan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 47,
                'code' => 'KU.09.02',
                'name' => 'Pelaksanaan Pengawasan',
                'description' => 'Arsip yeng berkaitan dengan pelaksanaan pengawasan meliputi kegiatan audit, pengawasan, reviu, evaluasi, pemauntauan/monitoring dan bimbingan teknis/konsultasi/asistensi/sosialisasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 47,
                'code' => 'KU.09.03',
                'name' => 'Analisis, Evaluasi dan Pengolahan Hasil Pengawasan',
                'description' => 'Arsip yang berkaitan dengan analisis, evaluasi dan pengolahan hasil pengawasan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PL.01
            [
                'secondary_classification_id' => 48,
                'code' => 'PL.01.01',
                'name' => 'Inventarisasi Barang',
                'description' => 'Arsip yang berkaitan dengan inventarisasi barang bergerak dan tidak bergerak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 48,
                'code' => 'PL.01.02',
                'name' => 'Distribusi Barang',
                'description' => 'Arsip yang berkaitan dengan pendistribusian barang habis pakai, barang bergerak dan barang tidak bergerak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 48,
                'code' => 'PL.01.03',
                'name' => 'Pemeliharaan Barang',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemeliharaan barang meliputi pemeliharaan dan perbaikan perabot kantor, kendaraan dinas dan barang inventaris lainnya, serta balik nama barang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 48,
                'code' => 'PL.01.04',
                'name' => 'Administrasi Pergudangan',
                'description' => 'Arsip terkait dengan administrasi pergudangan meliputi pencatatan pergudangan, pengelolaan gudang persediaan, dan pelaporan mutasi barang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PL.02
            [
                'secondary_classification_id' => 49,
                'code' => 'PL.02.01',
                'name' => 'Pengelolaan Bukti Kepemilikan Aset',
                'description' => 'Arsip yang berkaitan dengan pengelolaan bukti kepemilikan aset meliputi bukti-bukti kepemilikan gedung/bangunan antara lain sertifikat tanah, izin bangunan, rancang bangun gedung, silsilah riwayat bangunan, cara perolehan pengalihan kepemilikan dan bukti-bukti kepemilikan barang bergerak seperti kendaraan dinas, barang inventaris, dan barang bergerak lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 49,
                'code' => 'PL.02.02',
                'name' => 'Penghapusan aset',
                'description' => 'Arsip yang berkaitan dengan penghapusan aset meliputi penjualan, pemindahtanganan, tukar guling, hibah gedung bangunan, dan kelengkapan persyaratan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PG.02
            [
                'secondary_classification_id' => 62,
                'code' => 'PG.02.01',
                'name' => 'Pemilihan Penyedia',
                'description' => 'Arsip yang berkaitan dengan pemilihan penyedia mulai dari persiapan sampai dengan pemilihan penyedia pengadaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 62,
                'code' => 'PG.02.02',
                'name' => 'Penandatanganan Kontrak dan Pelaksanaan Kontrak',
                'description' => 'Arsip yang berkaitan dengan penandatangan dan pelaksanaan kontrak pengadaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 62,
                'code' => 'PG.02.03',
                'name' => 'Pelaksanaan Swakelola',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan pengadaan swakelola mulai dari perencanaan sampai dengan pengawasan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PG.03
            [
                'secondary_classification_id' => 63,
                'code' => 'PG.03.01',
                'name' => 'Pengembangan Strategi Pengadaan Umum',
                'description' => 'Arsip yang berkaitan dengan pengembangan stratregi pengadaan umum meliputi pengadaan barang/jasa dan pekerjaan konstruksi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 63,
                'code' => 'PG.03.02',
                'name' => 'Pengembangan Strategi Pengadaan Khusus',
                'description' => 'Arsip yang berkaitan dengan strategi pengadaaan khusus meliputi kemitraan pemerintah dengan badan usaha serta badan usaha dan keadaan khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 63,
                'code' => 'PG.03.03',
                'name' => 'Pengembangan Sistem Katalog',
                'description' => 'Arsip yang berkaitan dengan pengembangan sistem katalog mulai dari riset dan kontrak, pengendalian pelaksanaan katalog sampai dengan evaluasi katalog.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 63,
                'code' => 'PG.03.04',
                'name' => 'Pengembangan Sistem Pengadaan Secara Elektronik',
                'description' => 'Arsip yang berkaitan dengan pengembangan sistem pengadaan secara elektronik meliputi pengembangan aplikasi dan teknologi informasi serta pengelolaan dan pembinaan layanan pengadaan secara elektronik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HM.01
            [
                'secondary_classification_id' => 65,
                'code' => 'HM.01.01',
                'name' => 'Penyelenggaraan Acara Kedinasan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan acara kedinasan antara lain upacara kedinasan, acara pelatikan, acara peresmian, acara jamuan tamu, dan acara peringatan hari-hari besar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 65,
                'code' => 'HM.01.02',
                'name' => 'Penyelenggaraan Kunjungan Dinas Dalam dan Luar Negeri',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan kunjungan dinas dalam negeri dan luar negeri meliputi kunjungan dinas pimpinan lembaga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 65,
                'code' => 'HM.01.03',
                'name' => 'Penyusunan Agenda Kegiatan Pimpinan Daerah',
                'description' => 'Arsip yang berkaitan dengan agenda kegiatan pimpinan daerah antara lain: jadwal pimpinan, jadwal tamu pimpinan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HM.04
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.01',
                'name' => 'Hubungan Antar Lembaga Pemerintah',
                'description' => 'Arsip yang berkaitan dengan kegiatan hubungan antar lembaga pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.02',
                'name' => 'Hubungan dengan Organisasi Sosial/LSM',
                'description' => 'Arsip yang berkaitan dengan kegiatan hubungan dengan organisasi sosial/LSM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.03',
                'name' => 'Hubungan dengan Perusahaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan hubungan dengan perusahaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.04',
                'name' => 'Hubungan dengan Perguruan Tinggi',
                'description' => 'Arsip yang berkaitan dengan kegiatan hubungan dengan perguruan tinggi/ sekolah termasuk magang, pendidikan sistem ganda (PSG)/praktek kerja lapangan (PKL).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.05',
                'name' => 'Forum Kehumasan (Bakohumas/Perhumas)',
                'description' => 'Arsip yang berkaitan dengan kegiatan forum kehumasan (Bakohumas/Perhumas).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 68,
                'code' => 'HM.04.06',
                'name' => 'Hubungan dengan Media Massa',
                'description' => 'Arsip yang berkaitan dengan kegiatan media massa meliputi siaran pers/konferensi pers/press relaase, kunjungan wartawan/peliputan, dan wawancara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // HM.06
            [
                'secondary_classification_id' => 70,
                'code' => 'HM.06.01',
                'name' => 'Penerbitan Majalah, Buletin, Koran dan Jurnal',
                'description' => 'Arsip yang berkaitan dengan kegiatan publikasi antara lain penerbitan majalah, buletin, koran dan jurnal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 70,
                'code' => 'HM.06.02',
                'name' => 'Publikasi melalui Media Cetak maupun Elektronik',
                'description' => 'Arsip yang berkaitan dengan kegiatan publikasi melalui media cetak maupun elektronik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 70,
                'code' => 'HM.06.03',
                'name' => 'Pameran/ Sayembara/ Lomba, Festival, Pembuatan Spanduk dan Iklan',
                'description' => 'Arsip yang berkaitan dengan kegiatan publikasi antara lain pemeran/sayembara/lomba, festival, pembuatan spanduk dan iklan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DL.01
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.01',
                'name' => 'Penyusunan Standarisasi Pendidikan dan Pelatihan',
                'description' => 'Arsip yang berkaitan dengan penyusunan standarisasi pendidikan dan pelatihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.02',
                'name' => 'Akreditasi',
                'description' => 'Arsip yang berkaitam dengan pelaksanaan akreditasi pendidikan dan pelatihan meliputi akreditasi institusi penilai dan akreditasi program/institusi yang dinilai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.03',
                'name' => 'Kurikulum dan Modul',
                'description' => 'Arsip yang berkaitam dengan penyusunan kurikulum dan modul.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.04',
                'name' => 'Sistem Informasi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sistem informasi pengembangan program dan pembinaan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.05',
                'name' => 'Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi pengembangan program dan pembinaan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 72,
                'code' => 'DL.01.06',
                'name' => 'Konsultasi, Advokasi, Asistensi Diklat',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan konsultasi, advokasi dan asistensi program dan pembinaan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DL.02
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.01',
                'name' => 'Seleksi dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan seleksi dan pengembangan wisyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.02',
                'name' => 'Sertifikasi',
                'description' => 'Arsip yang berkaitan dengan sertifikasi widyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.03',
                'name' => 'Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi pengembangan program dan pembinaan widyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.04',
                'name' => 'Penilaian',
                'description' => 'Arsip yang berkaitan dengan penilaian widyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.05',
                'name' => 'Konsultasi, Advokasi dan Asistensi',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan konsultasi, advokasi dan asistensi widyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 73,
                'code' => 'DL.02.06',
                'name' => 'Sistem Informasi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sistem informasi widyaiswara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DL.03
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.01',
                'name' => 'Perencanaan',
                'description' => 'Arsip yang berkaitan dengan perencanaan penyelenggaraan diklat meliputi perencanaan peserta, pengajar dan penjadwalan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.02',
                'name' => 'Penyelenggaraan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.03',
                'name' => 'Konsultasi, Advokasi, Asistensi Penyelenggaraan Diklat',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan konsultasi, advokasi dan asistensi penyelenggaraan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.04',
                'name' => 'Pengembangan Bahan Ajar dan Metodologi Pembelajaran',
                'description' => 'Arsip yang berkaitan dengan pengembangan bahan ajar dan metodologi pembelajaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.05',
                'name' => 'Sistem Informasi Diklat',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sistem informasi penyelengaraan diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.06',
                'name' => 'Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi penyelengaraan diklat dan pasca diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 74,
                'code' => 'DL.03.07',
                'name' => 'Pengelolaan Data Alumni',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data alumni diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KA.01
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.01',
                'name' => 'Akreditasi Lembaga Kearsipan Daerah (LKD)',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan akreditasi kearsipan daerah mulai dari proses permohonan, penilaian, sampai dengan sertifikat akreditasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.02',
                'name' => 'Sertifikasi Arsiparis',
                'description' => 'Arsip yang berkaitan dengan sertifikasi arsiparis mulai dari proses permohonan, penilaian, sampai dengan daftar pemegang sertifikat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.03',
                'name' => 'Bina Arsiparis',
                'description' => 'arsip yang berkaitan dengan pembinaan profesi arsiparis meliputi penentuan formasi jabatan arsiparis sampai dengan penetapan standar kompetensi arsiparis, bimbingan konsultasi, pengajuan Daftar Usulan Penetapan Angka Kredit (DUPAK), sampai dengan berkas Penetapan Angka Kredit (PAK) Arsiparis dan apresiasi arsiparis melalui pemilihan arsiparis teladan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.04',
                'name' => 'Bimbingan dan Konsultasi Kearsipan',
                'description' => 'Arsip yang berkaitan dengan bimbingan dan konsultasi penerapan sistem kearsipan (Klasifikasi Arsip, Tata Naskah Dinas, dan Klasifikasi Keamanan dan Akses Arsip), penggunaan sarana dan prasarana kearsipan, unit kearsipan, dan sumberdaya manusia kearsipan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.05',
                'name' => 'Supervisi dan Evaluasi Kearsipan',
                'description' => 'Arsip yang berkaitan dengan supervisi dan evaluasi implementasi pengelolaan kearsipan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.06',
                'name' => 'Pengelolaan Data Base Bimbingan, Konsultasi dan Supervisi',
                'description' => 'Arsip yang berkaitan dengan pengeloaan database bimbingan, konsultasi dan supervisi kearsipan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.07',
                'name' => 'Fasilitasi Kearsipan',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi kearsipan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.08',
                'name' => 'Penilaian Organisasi Kearsipan (LKD/Unit Kearsipan) Teladan',
                'description' => 'Arsip yang berkaitan dengan penilaian organisasi kearsipan (LKD/unit kearsipan) teladan mulai dari penyelenggaraan sampai dengan penetapan/penghargaan organisasi kearsipan teladan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 76,
                'code' => 'KA.01.09',
                'name' => 'Penyusunan Jadwal Retensi Arsip',
                'description' => 'Arsip yang berkaitan dengan jadwal retensi arsip mulai dari pengusulan dan persetujuan jadwal retensi arsip sampai dengan database pengusulan dan persetujuan jadwal retensi arsip.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KA.02
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.01',
                'name' => 'Penciptaan Arsip',
                'description' => 'Arsip yang berkaitan dengan proses penciptaan arsip mulai dari pencatatan sampai dengan pendistribusian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.02',
                'name' => 'Penggunaan Arsip',
                'description' => 'Arsip yang berkaitan dengan kegiatan penggunaan arsip mulai dari pengklasifikasian pengamanan dan akses arsip sampai dengan data peminjaman arsip.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.03',
                'name' => 'Pemeliharaan Arsip Dinamis',
                'description' => 'Arsip yang berkaitan dengan pemeliharaan arsip dinamis mulai dari pemberkasan, penataan arsip inaktif, penyimpanan arsip, alih media serta penentuan program arsip vital.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.04',
                'name' => 'Autentikasi Arsip Dinamis',
                'description' => 'Arsip yang berkaitan dengan autentikasi arsip dinamis yang terdiri dari pembuktian autentisitas, pendapat tenaga ahli, pengujian dan penetapan autentisitas arsip.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.05',
                'name' => 'Penyusutan Arsip',
                'description' => 'Arsip yang berkaitan dengan penyusutan arsip meliputi kegiatan pemindahan arsip inaktif ke record center, pemusnahan arsip yang tidak bernilai guna dan penyerahan arsip statis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 77,
                'code' => 'KA.02.06',
                'name' => 'Pengelolaan Data Base Pengelolaan Arsip Dinamis',
                'description' => 'Arsip yang berkaitan dengan pengelolaan database pengelolaan arsip dinamis baik pengelolaan arsip aktif maupun inaktif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KA.03
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.01',
                'name' => 'Akuisisi',
                'description' => 'Arsip yang berkaitan dengan kegiatan akuisisi arsip mulai dari monitoring fisik dan daftar arsip, verifikasi terhadap daftar arsip, menetapkan status arsip statis, persetujuan untuk penyerahan, penetapan arsip yang diserahkan, berita acara penerahan arsip sampai dengan daftar arsip yang diserahkan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.02',
                'name' => 'Pengumpulan Sejarah Lisan',
                'description' => 'Arsip yang berkaitan dengan sejarah lisan meliputi administasi pelaksanaan sejarah lisan dan hasil wawancara sejarah lisan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.03',
                'name' => 'Pencarian Arsip Statis',
                'description' => 'Arsip yang berkaitan dengan daftar pencarian arsip statis mulai dari pengumuman sampai dengan akuisisi daftar pencarian arsip statis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.04',
                'name' => 'Pengolahan Arsip',
                'description' => 'Arsip yang berkaitan dengan pengelolaan arsip statis mulai dari menata informasi, fisik, sampai dengan menyusun sarana bantu temu balik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.05',
                'name' => 'Preservasi Arsip',
                'description' => 'Arsip yang berhubungan dengan preservasi arsip baik secara preventif maupun kuratif serta laporan hasil pengujian mutu preservasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.06',
                'name' => 'Autentikasi Arsip Statis',
                'description' => 'Arsip yang berkaitan dengan autentikasi arsip statis terdiri dari pembuktian autentisitas, pendapat tenaga ahli, pengujian dan penetapan autentisitas arsip statis/surat pernyataan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 78,
                'code' => 'KA.03.07',
                'name' => 'Layanan Akses Arsip Statis',
                'description' => 'Arsip yang berkaitan dengan akses arsip statis meliputi layanan arsip, penerbitan naskah sumber/sumber sejarah, dan pameran arsip.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PP.01
            [
                'secondary_classification_id' => 80,
                'code' => 'PP.01.01',
                'name' => 'Layanan Deposit Bahan Pustaka',
                'description' => 'Arsip yang berkaitan dengan layanan deposit bahan pustaka mulai dari serah simpan karya cetak dan karya rekam, pemantauan wajib serah simpan karya cetak dan karya rekam, pembuatan bibliografi dan katalog pendaftaran nomor ISBN, sampai dengan pendaftaran nomor ISMN.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 80,
                'code' => 'PP.01.02',
                'name' => 'Pengembangan Koleksi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan koleksi pustaka melalui akuisisi koleksi perpustakaan, pembelian, hibah, hadiah, tukar menukar, implementasi undang-undang KCKR, terbitan internal, pendistribusian bahan pustaka surplus, ataupun inventarisasi koleksi (Buku Induk), pengolahan bahan pustaka serta pengelolaan pangkalan data katalog koleksi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 80,
                'code' => 'PP.01.03',
                'name' => 'Layanan Jasa Perpustakaan dan Informasi',
                'description' => 'Arsip yang berkaitan dengan layanan jasa perpustakaan dan informasi mulai dari keanggotan, sirkulasi, referensi, alih aksara, bahasa dan kajian naskah nusantara, kerja sama perpustakaan, pengembangan implementasi teknologi informasi perpustakaan, serta pangkalan data layanan perpustakaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 80,
                'code' => 'PP.01.04',
                'name' => 'Preservasi Bahan Pustaka',
                'description' => 'Arsip yang berkaitan dengan preservasi bahan pustaka meliputi konservasi, reprografi, tranformasi digital, dan kurasi digital.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PP.02
            [
                'secondary_classification_id' => 81,
                'code' => 'PP.02.01',
                'name' => 'Pengembangan Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan pengembangan perpustakaan baik perpustakaan umum, khusus, maupun perpustakaan sekolah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 81,
                'code' => 'PP.02.02',
                'name' => 'Akreditasi Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan akreditasi perpustakaan mulai dari permintaan akreditasi sampai dengan pemberian akreditasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 81,
                'code' => 'PP.02.03',
                'name' => 'Pengelolaan Pangkalan Data Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan pangkalan data perpustakaan meliputi nomor pokok perpustakaan dan data perpustakaan berbasis wilayah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 81,
                'code' => 'PP.02.04',
                'name' => 'Penerbitan Jurnal (Master)',
                'description' => 'Arsip yang berkaitan dengan penerbitan jurnal (master).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PP.04
            [
                'secondary_classification_id' => 83,
                'code' => 'PP.04.01',
                'name' => 'Sertifikasi Tenaga Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan sertifikasi tenaga perpustakaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 83,
                'code' => 'PP.04.02',
                'name' => 'Penilaian Jabatan Fungsional Pustakawan',
                'description' => 'Arsip yang berkaitan dengan penilaian jabatan fungsional baik oleh tim penilai instansi/Perpustakaan Nasional RI maupun tim penilai pusat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 83,
                'code' => 'PP.04.03',
                'name' => 'Pemasyarakatan',
                'description' => 'Arsip yang berkaitan dengan pemasyarakatan profesi pustakawan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 83,
                'code' => 'PP.04.04',
                'name' => 'Evaluasi Tenaga Perpustakaan',
                'description' => 'Arsip yang berkaitan dengan evaluasi tenaga perpustakaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.01
            [
                'secondary_classification_id' => 85,
                'code' => 'DK.01.01',
                'name' => 'Penyelenggaraan PAUD',
                'description' => 'Arsip yang berkaitan dengan pembinaan penyelenggaraan PAUD meliputi uji kompetensi, penilaian dan penetapan kinerja lembaga, penyusunan bahan ajar, pelatihan, pengelolaan block grant hingga sosialisasi pentelenggaraan PAUD.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 85,
                'code' => 'DK.01.02',
                'name' => 'Pendidikan Masyarakat',
                'description' => 'Arsip yang berkaitan dengan pembinaan penyelenggaraan pendidikan masyarakat meliputi penyusunan bahan ajar, pemberian bantuan sosial, pendampingan pelaksanaan program, peningkatan kapasitas kelembagaan, penyelenggaraan lomba/pemberian penghargaan/anugerah hingga pelaksanaan sosialisasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 85,
                'code' => 'DK.01.03',
                'name' => 'Penyelenggaran Peringatan Hari Anak',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan peringatan hari anak nasional dan internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 85,
                'code' => 'DK.01.04',
                'name' => 'Penyelenggaraan Kursus dan Pelatihan',
                'description' => 'Arsip yang brerkaitan dengan pembinaan penyelenggaraan kursus dan pelatihan bagi masyarakat meliputi uji kompetensi, penilaian dan penetapan kinerja lembaga kursus dan pelatihan, pendataan dan penguatan kerja sama dengan lembaga/mitra, pemberian bantuan sosial, pembinaan program, penyusunan standar kursus dan pelatihan, sertifikasi lembaga kursus dan pelatihan serta sosialisasi penyelenggaraan kursus dan pelatihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.02
            [
                'secondary_classification_id' => 86,
                'code' => 'DK.02.01',
                'name' => 'Penyelenggaraan Sekolah Dasar',
                'description' => 'Arsip yang berkaitan dengan pembinaan penyelenggaraan pendidikan sekolah dasar meliputi penyusunan kurikulum, bahan ajar, pelatihan, pengurusan block grant, bimbingan teknis, penyelenggaraan lomba/sayembara/festival, pemberian bantuan operasional sekolah, bantuan siswa miskin serta pengelolaan data induk siswa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 86,
                'code' => 'DK.02.02',
                'name' => 'Dokumen Penyelenggaraan Sekolah Menengah Pertama (SMP)',
                'description' => 'Arsip yang berkaitan dengan pembinaan penyelenggaraan pendidikan sekolah menengah pertama meliputi penyusunan kurikulum, bahan ajar, pelatihan, pengurusan block grant, bimbingan teknis, penyelenggaraan lomba/sayembara/festival, pemberian bantuan operasional sekolah, bantuan siswa miskin serta pengelolaan data induk siswa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 86,
                'code' => 'DK.02.03',
                'name' => 'Penyelenggaraan Pendidikan Khusus- Layanan Khusus/PK-LK',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pendidikan khusus meliputi penyusunan bahan ajar, kurikulum, alat bantu pembelajaran, petunjuk teknis, pengurusan block grant, penyelenggaraan lomba/sayembara/festival, sosialisasi, pendataan serta pengelolaan kelembagaan pendidikan khusus-layanan khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.04
            [
                'secondary_classification_id' => 88,
                'code' => 'DK.04.01',
                'name' => 'Pelaksanaan Pembinaan Kurikulum',
                'description' => 'Arsip yang berkaitan dengan pembinaan kurikulum pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 88,
                'code' => 'DK.04.02',
                'name' => 'Evaluasi Penyusunan Kurikulum',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi penyusunan kurikulum pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.06
            [
                'secondary_classification_id' => 90,
                'code' => 'DK.06.01',
                'name' => 'Penilaian Akademik',
                'description' => 'Arsip yang berkaitan dengan kegiatan penilaian akademik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 90,
                'code' => 'DK.06.02',
                'name' => 'Penilaian non akademik',
                'description' => 'Arsip yang berkaitan dengan kegiatan penilaian non akademik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 90,
                'code' => 'DK.06.03',
                'name' => 'Analisis dan Sistem Informasi Penilaian',
                'description' => 'Arsip yang berkaitan dengan kegiatan analisis dan sistem informasi penilaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.07
            [
                'secondary_classification_id' => 91,
                'code' => 'DK.07.01',
                'name' => 'Pengembangan dan Pelindungan',
                'description' => 'Arsip yang berkaitan dengan pengembangan dan pelindungan bahasa mulai dari kegiatan pengkajian, pembakuan dan pelindungan serta publikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 91,
                'code' => 'DK.07.02',
                'name' => 'Pembinaan dan Pemasyarakatan',
                'description' => 'Arsip yang berkaitan dengan pembinaan dan pemasyarakatan bahasa meliputi penyuluhan dan bantuan teknis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 91,
                'code' => 'DK.07.03',
                'name' => 'Pembelajaran',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembelajaran bahasa dan kesusateraan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 91,
                'code' => 'DK.07.04',
                'name' => 'Peningkatan dan Pengendalian',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan fungsi dan peran serta pengendalian penggunaan bahasa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.08
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.01',
                'name' => 'Pengembangan Profesi Pendidik',
                'description' => 'Arsip yang berkaitan dengan pengembangan profesi pendidik meliputi peningkatan kompetensi dan sertifikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.02',
                'name' => 'Pengembangan Tenaga Kependidikan',
                'description' => 'Arsip yang berkaitan dengan pengembangan tenaga kependidikan meliputi pengembangan tenaga teknis dan fungsional pedidik serta pimpinan dan pegawai.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.03',
                'name' => 'Penjaminan Mutu Pendidikan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penjaminan mutu pendidikan mulai dari pemetaan mutu sampai dengan pengelolaan sistem informasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.04',
                'name' => 'Penyusunan Panduan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan penyusunan panduan pengembangan meliputi materi/SOP/instrumen/panduan/pedoman dan proposal/TOR/KAK.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.05',
                'name' => 'Penyelenggaraan Pelatihan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pelatihan pelatihan/diseminasi/sosialisasi mutu pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.06',
                'name' => 'Penyelenggaraan Bimtek/Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan bimtek/monitoring dan evaluasi mutu pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.07',
                'name' => 'Penyaluran Block Grant Pascabencana',
                'description' => 'Arsip yang berkaitan dengan penyaluran block grant pascabencana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 92,
                'code' => 'DK.08.08',
                'name' => 'Penyelenggaraan Lomba Pendidikan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan/keikutsertaan sayembara/festival/olimpiade pendidikan nasional dan internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.09
            [
                'secondary_classification_id' => 93,
                'code' => 'DK.09.01',
                'name' => 'Pengembangan Teknologi Pembelajaran',
                'description' => 'Arsip yang berkaitan dengan pengembangan teknologi pembelajaran berbasis radio, televisi, dan film serta berbasis multimedia dan web meliputi perancangan dan produksi serta penyiaran dan pengendalian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 93,
                'code' => 'DK.09.02',
                'name' => 'Pengembangan Jejaring',
                'description' => 'Arsip yang berkaitan dengan pengembangan jejaring pembelajaran meliputi pengkajian dan perancangan serta pemeliharaan dan pengendalian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // DK.10
            [
                'secondary_classification_id' => 94,
                'code' => 'DK.10.01',
                'name' => 'Pengelolaan Data Pendidik dan Tenaga Kependidikan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data pendidik dan tenaga kependidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 94,
                'code' => 'DK.10.02',
                'name' => 'Pengelolaan Data Peserta Didik',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data peserta didik meliputi validasi dan integrasi data.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 94,
                'code' => 'DK.10.03',
                'name' => 'Pengelolaan Data Satuan Pendidikan dan Proses Pembelajaran',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data satuan pendidikan dan proses pembelajaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 94,
                'code' => 'DK.10.04',
                'name' => 'Pendayagunaan dan Pelayanan Data',
                'description' => 'Arsip yang berkaitan dengan pendayagunaan dan pelayanan data pendidikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.01
            [
                'secondary_classification_id' => 96,
                'code' => 'BD.01.01',
                'name' => 'Registrasi Nasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan registrasi nasional pelestarian cagar budaya dan permuseuman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 96,
                'code' => 'BD.01.02',
                'name' => 'Pelindungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelindungan cagar budaya dan permuseuman meliputi perizinan dan pengamanan serta pemeliharaan dan pemugaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 96,
                'code' => 'BD.01.03',
                'name' => 'Pengembangan dan Pemanfaatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan dan pemanfaatan cagar budaya dan permuseuman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 96,
                'code' => 'BD.01.04',
                'name' => 'Eksplorasi dan Dokumentasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan eksplorasi dan dokumentasi cagar budaya dan permuseuman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.02
            [
                'secondary_classification_id' => 97,
                'code' => 'BD.02.01',
                'name' => 'Pembinaan Seni Pertunjukan',
                'description' => 'Arsip yang berkaitan dengan pembinaan seni pertunjukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 97,
                'code' => 'BD.02.02',
                'name' => 'Pembinaan Seni Rupa',
                'description' => 'Arsip yang berkaitan dengan pembinaan seni rupa murni dan terapan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 97,
                'code' => 'BD.02.03',
                'name' => 'Pembinaan Literasi dan Apresiasi Film',
                'description' => 'Arsip yang berkaitan dengan pembinaan literasi dan apresiasi film.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 97,
                'code' => 'BD.02.04',
                'name' => 'Dokumentasi dan Publikasi',
                'description' => 'Arsip yang berkaitan dengan dokumentasi dan publikasi seni dan film.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.03
            [
                'secondary_classification_id' => 98,
                'code' => 'BD.03.01',
                'name' => 'Kelembagaan dan Kepercayaan',
                'description' => 'Arsip yang berkaitan dengan pembinaan kelembagaan kepercayaan terhadap Tuhan Yang Maha Esa dan tradisi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 98,
                'code' => 'BD.03.02',
                'name' => 'Pembinaan Komunitas Kepercayaan',
                'description' => 'Arsip yang berkaitan dengan pembinaan komunitas kepercayaan terhadap Tuhan Yang Maha Esa dan tradisi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 98,
                'code' => 'BD.03.03',
                'name' => 'Ekspresi Pengetahuan dan Budaya Tradisional',
                'description' => 'Arsip yang berkaitan dengan pembinaan ekspresi pengetahuan dan ekspresi budaya tradisional dalam kepercayaan terhadap Tuhan Yang Maha Esa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 98,
                'code' => 'BD.03.04',
                'name' => 'Pembinaan Lingkungan Budaya dan Pranata Sosial',
                'description' => 'Arsip yang berkaitan dengan pembinaan lingkungan budaya dan pranata sosial kepercayaan terhadap Tuhan Yang Maha Esa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.04
            [
                'secondary_classification_id' => 99,
                'code' => 'BD.04.01',
                'name' => 'Penggalian dan Penulisan Sejarah',
                'description' => 'Arsip yang berkaitan dengan Pembinaan sejarah dan nilai budaya melaui penggalian dan penulisan sejarah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 99,
                'code' => 'BD.04.02',
                'name' => 'Pemetaan dan Klasifikasi Nilai',
                'description' => 'Arsip yang berkaitan dengan pemetaan dan klasifikasi nilai sejarah dan nilai budaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 99,
                'code' => 'BD.04.03',
                'name' => 'Verfikasi dan Perumusan Nilai',
                'description' => 'Arsip yang berkaitan dengan verifikasi dan perumusan nilai sejarah dan nilai budaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 99,
                'code' => 'BD.04.04',
                'name' => 'Dokumentasi dan publikasi Sejarah',
                'description' => 'Arsip yang berkaitan dengan dokumentasi dan publikasi nilai sejarah dan nilai budaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.05
            [
                'secondary_classification_id' => 100,
                'code' => 'BD.05.01',
                'name' => 'Internalisasi Nilai Budaya',
                'description' => 'Arsip yang berkaitan dengan internalisasi nilai budaya meliputi pengemasan dan penamaan nilai budaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 100,
                'code' => 'BD.05.02',
                'name' => 'Internalisasi Kekayaan Budaya',
                'description' => 'Arsip yang berkaitan dengan internalisasi kekayaan budaya meliputi pencatatan dan penetapan budaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 100,
                'code' => 'BD.05.03',
                'name' => 'Internalisasi Warisan Budaya Nasional dan Dunia',
                'description' => 'Arsip yang berkaitan dengan internalisasi warisan budaya nasional dan dunia baik benda mapun non benda.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 100,
                'code' => 'BD.05.04',
                'name' => 'Internalisasi Diplomasi Budaya',
                'description' => 'Arsip yang berkaitan dengan internalisasi diplomasi budaya baik dalam maupun luar negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.06
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.01',
                'name' => 'Pengembangan SDM Kebudayaan',
                'description' => 'Arsip yang berkaitan dengan pengembangan SDM kebudayaan meliputi peningkatan kompetensi dan sertifikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.02',
                'name' => 'Penjaminan Mutu Kebudayaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penjaminan mutu kebudayaan mulai dari pemetaan mutu sampai dengan pengelolaan sistem informasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.03',
                'name' => 'Penyusunan Panduan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan penyusunan panduan pengembangan meliputi materi/SOP/instrumen/panduan/pedoman dan proposal/TOR/KAK.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.04',
                'name' => 'Penyelenggaraan Pelatihan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pelatihan pelatihan/diseminasi/sosialisasi mutu kebudayaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.05',
                'name' => 'Penyelenggaraan Bimtek/Monitoring dan Evaluasi',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan bimtek/monitoring dan evaluasi mutu kebudayaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.06',
                'name' => 'Penyaluran Block Grant Pascabencana',
                'description' => 'Arsip yang berkaitan dengan penyaluran block grant pascabencana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 101,
                'code' => 'BD.06.07',
                'name' => 'Penyelenggaraan Lomba',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan /keikutsertaan lomba/sayembara/festival/olimpiade kebudayaan nasional dan internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BD.07
            [
                'secondary_classification_id' => 102,
                'code' => 'BD.07.01',
                'name' => 'Program dan Kerja Sama Penelitian',
                'description' => 'Arsip yang berkaitan dengan program dan kerja sama penelitian di bidang arkeologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 102,
                'code' => 'BD.07.02',
                'name' => 'Data dan Informasi Penelitian',
                'description' => 'Arsip yang berkaitan dengan pengelolan data dan informasi penelitian arkeologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PO.01
            [
                'secondary_classification_id' => 104,
                'code' => 'PO.01.01',
                'name' => 'Peningkatan Tenaga dan Sumber Daya Pemuda',
                'description' => 'Arsip yang berkaitan dengan peningkatan tenaga dan sumber daya pemuda mulai dari kegiatan penelusuran duta kepemudaan, pengkajian atau penyusunan rekomendasi kepemudaan sampai dengan pengembangan potensi kepemudaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 104,
                'code' => 'PO.01.02',
                'name' => 'Peningkatan Wawasan Pemuda',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan wawasan pemuda meliputi penyusunan program dan evaluasi wawasan kebangsaan, wawasan lingkungan,wawasan sosial dan hukum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 104,
                'code' => 'PO.01.03',
                'name' => 'Peningkatan Kapasitas Pemuda',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan wawasan pemuda meliputi penyusunan program dan evaluasi peningkatan kapasitas iman dan taqwa, kapasitas IPTEK, serta kapasitas pemanfaatan IPTEK.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 104,
                'code' => 'PO.01.04',
                'name' => 'Peningkatan Kreativitas Pemuda (Pemetaan Kreativitas/Seni kepemudaan)',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan kreativitas pemuda mulai dari kegiatan pengkajian, pengembangan, sampai dengan pendayagunaan fasilitas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PO.02
            [
                'secondary_classification_id' => 105,
                'code' => 'PO.02.01',
                'name' => 'Pengembangan Kepemimpinan dan Kepeloporan Pemuda',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan kepemimpinan dan kepeloporan mulai dari penyusunan program sampai dengan evaluasi kegiatan pengembangan kepemimpinan dan kepeloporan pemuda.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 105,
                'code' => 'PO.02.02',
                'name' => 'Pengembangan Kewirausahaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan kewirausahaan mulai dari penyusunan program sampai dengan evaluasi kegiatan pengembangan kewirausahaan meliputi pengembangan kelembagaan, pengaderan, dan perintisan kewirausahaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 105,
                'code' => 'PO.02.03',
                'name' => 'Pengembangan Organisasi Kepemudaan dan Pengawasan Kepramukaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan organisasi kepemudaan mulai dari penyusunan program sampai dengan evaluasi kegiatan pengembangan organisasi kepemudaan, dan organisasi kepramukaan meliputi pengembangan kelembagaan dan sumber daya program.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 105,
                'code' => 'PO.02.04',
                'name' => 'Pengembangan Standardisasi dan Infrastruktur Kepemudaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan standarisasi dan infrastruktur kepemudaan meliputi pengembangan standarisasi organisasi, serta prasarana dan saarana kepemudaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 105,
                'code' => 'PO.02.05',
                'name' => 'Pengembangan Kemitraaan dan Penghargaan Pemuda',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan kemitraan dan pemberian penghargaan pemuda meliputi pengembangan kemitraan lintas sektoral serta pengembangan penghargaan dan promosi kepemudaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PO.03
            [
                'secondary_classification_id' => 106,
                'code' => 'PO.03.01',
                'name' => 'Pengelolaan Olahraga Pendidikan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan olahraga pendidikan mulai dari pengembangan samapi dengan evaluasi pengelolaan olahraga pendidikan dasar dan menegah, pendidikan tinggi serta pendidikan formal dan non formal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 106,
                'code' => 'PO.03.02',
                'name' => 'Pengelolaan Olahraga Rekreasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan olahraga rekreasi mulai dari pengembangan sampai dengan evaluasi pengelolaan olahraga massal, olahraga tradisional serta olahraga petualangan, tantangan dan wisata.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 106,
                'code' => 'PO.03.03',
                'name' => 'Pengelolaan Pembinaan Sentra dan sekolah Khusus Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan sentra dan sekolah khusus olahraga mulai dari pengembangan sampai dengan evaluasi pengelolaan sentra olahraga dan sekolah khusus olahraga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 106,
                'code' => 'PO.03.04',
                'name' => 'Pengembangan Olahraga Tradisional dan Layanan Khusus',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan olahraga tradisional dan layanan khusus meliputi pengembangan olahraga tradisional lokal dan nasional serta layanan olahraga usia dini, lansia dan penyandang cacat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 106,
                'code' => 'PO.03.05',
                'name' => 'Pengembangan Kemitraan dan Penghargaan Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan kemitraan dan penghargaan olahraga meliputi kemitraan keolahragaan lintas sektoral, daerah dan luar negeri serta pemberian penghargaan olahraga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PO.04
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.01',
                'name' => 'Pembibitan Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan prestasi olahraga melalui pembibitan olahraga meliputi kegiatan pemanduan bakat, pengembangan olahragawan berbakat, pengembangan olahragawan berbakat dan kompetisi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.02',
                'name' => 'Pengembangan IPTEK Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan IPTEK olahraga melalui pembibitan olahraga meliputi penerapan dan pengembangan IPTEK olahraga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.03',
                'name' => 'Peningkatan Tenaga dan Organisasi Keolahragaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan tenaga dan organisasi keolahragaan meliputi pengembangan pelatih dan instruktur, wasit, juri, tenaga pendidik dan pendukung serta pengembangan organisasi keolahragaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.04',
                'name' => 'Pengembangan Industri dan Promosi Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan industri dan promosi olahraga meliputi pengembangan industri jasa olahraga, produk olahraga, manajemen industri olahraga serta penelusuran dan penyelenggaraan promosi olahraga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.05',
                'name' => 'Pengembangan Olahraga Prestasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan olahraga prestasi tingkat daerah, nasional dan internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 107,
                'code' => 'PO.04.06',
                'name' => 'Pengembangan Standardisasi dan Infrastruktur Olahraga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan standarisasi dan infrastruktur olahraga meliputi standarisasi, akreditas dan sertifikasi, serta pengembangan infrastruktur olahraga prestasi, olahraga pendidikan dan rekreasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE.01
            [
                'secondary_classification_id' => 108,
                'code' => 'PE.01.01',
                'name' => 'Perancangan Destinasi dan Investasi Pariwisata',
                'description' => 'Arsip terkait dengan pengembangan perancangan destinasi dan investasi pariwisata meliputi pengembangan destinasi dan investasi pariwisata, pengembangan destinasi pariwisata (perancangan destinasi pariwisata), pengembangan zona kreatif serta investasi pariwisata.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 108,
                'code' => 'PE.01.02',
                'name' => 'Pengembangan Daya Tarik Wisata',
                'description' => 'Arsip yang berkaitan dengan pengembangan daya tarik wisata meliputi kegiatan bimtek, fasilitasi pengembangan daya tarik wisata, pengembangan daya tarik wisata kota pusaka,penilaian kelayakan tugas pembantuan, serta penghargaan pengelolaan (cipta award).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 108,
                'code' => 'PE.01.03',
                'name' => 'Pengembangan Industri Pariwisata',
                'description' => 'Arsip terkait dengan pengembangan industri pariwisata meliputi sarana pariwisata, jasa pariwisata, pengembangan wisata kuliner dan belanja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 108,
                'code' => 'PE.01.04',
                'name' => 'Pemberdayaan Masyarakat Destinasi Pariwisata',
                'description' => 'Arsip terkait dengan pemberdayaan masyarakat destinasi pariwisata meliputi perancangan dan pemantauan pemberdayaan pariwisata, peningkatan kapasitas masyarakat desa, kemitraan dan kelembagaan masyarakat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 108,
                'code' => 'PE.01.05',
                'name' => 'Pengembangan Wisata Minat Khusus',
                'description' => 'Arsip terkait dengan pengembangan wisata kuliner dan belanja, rekreasi dan hiburan, wisata alam dan budaya serta wisata konvensi, insentif dan event.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE.02
            [
                'secondary_classification_id' => 109,
                'code' => 'PE.02.01',
                'name' => 'Pengembangan Pasar dan Informasi Pariwisata',
                'description' => 'Arsip terkait dengan pengembangan pasar dan informasi pariwisata meliputi pasar dalam negeri, pasar luar negeri, hubungan lembaga pariwisata dan widya wisata serta perencangan pemasaran pariwisata.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 109,
                'code' => 'PE.02.02',
                'name' => 'Promosi Pariwisata Luar Negeri',
                'description' => 'Arsip terkait dengan promosi pariwisata luar negeri meliputi wilayah ASEAN, ASIA, Timur Tengah dan Afrika, Ameika dan Pasifik, Eropa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 109,
                'code' => 'PE.02.03',
                'name' => 'Promosi Pariwisata Dalam Negeri',
                'description' => 'Arsip terkait dengan promosi wisata dalam negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 109,
                'code' => 'PE.02.04',
                'name' => 'Pencitraan Indonesia',
                'description' => 'Arsip yang berkaitan dengan pencitraan Indonesia meliputi strategi pencitraan Indonesia melalui media cetak, media elektronik, digital, media ruang, kerja sama dan kemitraan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 109,
                'code' => 'PE.02.05',
                'name' => 'Promosi Wisata Minat Khusus',
                'description' => 'Arsip yang berkaitan dengan promosi wisata konvensi, insentif, event dan minat khusus meliputi Promosi KIE korporasi, promosi KIE pemerintah dan non pemerintah, promosi minat khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE.03
            [
                'secondary_classification_id' => 110,
                'code' => 'PE.03.01',
                'name' => 'Pengembangan Industri Perfilman',
                'description' => 'Arsip yang berkaitan dengan pengembangan ekonomi kreatif meliputi pengembangan industri perfilman meliputi fasilitasi industri perfilman, festival dan eksibisi film, produksi dan pemasaran film.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 110,
                'code' => 'PE.03.02',
                'name' => 'Pengembangan Seni Pertunjukan dan Industri Musik',
                'description' => 'Arsip yang berkaitan dengan pengembangan seni, pengembangan industri musik, pemasaran seni dan industri musik, infrastruktur dan dokumentasi seni dan industri musik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 110,
                'code' => 'PE.03.03',
                'name' => 'Pengembangan Seni Rupa',
                'description' => 'Arsip yang berkaitan dengan pengembangan seni rupa murni, seni rupa terapan fotografi serta pemasaran dan pengembangan apresiasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE.04
            [
                'secondary_classification_id' => 111,
                'code' => 'PE.04.01',
                'name' => 'Pengembangan Ekonomi Kreatif Berbasis Media',
                'description' => 'Arsip yang berkaitan dengan pengembangan ekonomi kreatif berbasis media meliputi pengembangan film animasi dan komik, pengembangan tulisan fiksi dan non fiksi, pengembangan karya kreatif audio dan video,pengembangan karya kreatif iklan cetak dan elektronik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 111,
                'code' => 'PE.04.02',
                'name' => 'Desain dan Arsitektur',
                'description' => 'Arsip yang berkaitan dengan desain dan arsitektur meliputi arsitektur dan desain interior, komunikasi visual,desain produk dan kemasan serta mode.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 111,
                'code' => 'PE.04.03',
                'name' => 'Kerja Sama dan Fasilitasi',
                'description' => 'Arsip yang berkaitan dengan kerjasama dan fasilitasi meliputi lisensi teknologi, sentra inovasi dan inkubator bisnis, sentra kreatif, akses pembiayaan pengembangan sentra inovasi, inkubator bisnis serta sentra kreatif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PE.05
            [
                'secondary_classification_id' => 112,
                'code' => 'PE.05.01',
                'name' => 'Penelitian dan Pengembangan Kebijakan Kepariwisataan',
                'description' => 'Arsip yang berkaitan dengan penelitian dan pengembangan kebijakan kepariwisataan meliputi program dan evaluasi kepariwisataan, data dan publikasi kepariwisataan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 112,
                'code' => 'PE.05.02',
                'name' => 'Penelitian dan Pengembangan Kebijakan Ekonomi Kreatif',
                'description' => 'Arsip yang berkaitan dengan penelitian dan pengembangan kebijakan ekonomi kreatif meliputi program dan evaluasi ekonomi kreatif, data dan publikasi ekonomi kreatif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 112,
                'code' => 'PE.05.03',
                'name' => 'Pengembangan SDM Kepariwisataan dan Ekonomi kreatif',
                'description' => 'Arsip yang berkaitan dengan pengembangan SDM kepariwisataan dan ekonomi kreatif meliputi program dan evaluasi SDM, penyelenggaraan dan kerja sama.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 112,
                'code' => 'PE.05.04',
                'name' => 'Kompetensi Kepariwisataan dan Ekonomi Kreatif',
                'description' => 'Arsip yang berkaitan dengan kompetensi kepariwisataan dan ekonomi kreatif meliputi program dan evaluasi, penyelenggaraan dan kerja sama.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PN.01
            [
                'secondary_classification_id' => 114,
                'code' => 'PN.01.01',
                'name' => 'Perencanaan Industri Agribisnis dan Sumber Daya Alam Lainnya',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan rencana penanaman modal bidang industri agribisnis, energi, dan sumber daya mineral.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 114,
                'code' => 'PN.01.02',
                'name' => 'Perencanaan Industri Manufaktur',
                'description' => 'Arsip yang berkaita dengan kegiatan penyusunan rencana penanamn modal bidang industri manufaktur meliputi industri logam, mesin, tekstil, industri kinia serta industri alat transportasi dan telematika.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 114,
                'code' => 'PN.01.03',
                'name' => 'Perencanaan Jasa dan Kawasan',
                'description' => 'Arsip yang berkaita dengan kegiatan penyusunan rencana penanaman modal bidang jasa dan kawasan meliputi jasa perdagangan, jasa kesehatan, pendidikan, ketenagakerjaan, jasa lainnya serta kawasan ekonomi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 114,
                'code' => 'PN.01.04',
                'name' => 'PerencanaanInfrastruktur',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan rencana penanaman modal bidang infrastruktur.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PN.02
            [
                'secondary_classification_id' => 115,
                'code' => 'PN.02.01',
                'name' => 'Deregulasi Penanaman Modal',
                'description' => 'Arsip yang berkaitan dengan kegiatan deregulasi penanaman modal dalam rangka pengembangan iklim penanaman modal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 115,
                'code' => 'PN.02.02',
                'name' => 'Pengembangan Potensi Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan potensi daerah meliputi sektor primer dan tersier serta sekunder.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 115,
                'code' => 'PN.02.03',
                'name' => 'Pemberdayaan Usaha',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan usaha meliputi pembinaan dan penyuluhan, kemitraan usaha, dan pelayanan usaha.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PN.03
            [
                'secondary_classification_id' => 116,
                'code' => 'PN.03.01',
                'name' => 'Pengembangan Promosi',
                'description' => 'Arsip yang berkaitan dengan pengembangan promosi penanaman modal meliputi analisis target promosi dan daya saing promosi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 116,
                'code' => 'PN.03.02',
                'name' => 'Promosi Sektoral',
                'description' => 'Arsip yang berkaitan dengan kegiatan promosi penanaman modal meliputi sektor industri sumber daya alam, jasa dan kawasan, industi manufaktur serta industri infrastruktur.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 116,
                'code' => 'PN.03.03',
                'name' => 'Pameran dan Sarana Promosi',
                'description' => 'Arsip yang berkaitan dengan kegiatan promosi penanaman modal melalui pameran dan sarana promosi baik cetak maupun elektronik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PN.04
            [
                'secondary_classification_id' => 117,
                'code' => 'PN.04.01',
                'name' => 'Pelayanan Aplikasi',
                'description' => 'Arsip yang berkaitan dengan pelayanan aplikasi penanaman modal melaui aplikasi untuk sekor primer dan tersier serta sekunder.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 117,
                'code' => 'PN.04.02',
                'name' => 'Pelayanan Perizinan Sektor Primer, Sekunder dan Tersier',
                'description' => 'Arsip yang berkaitan dengan pelayanan perizinan penanaman modal meliputi perizinan sektor primer dan tersier serta sektor sekunder.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 117,
                'code' => 'PN.04.03',
                'name' => 'Pelayanan Perizinan Bidang Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pemberian layanan perizinan bidang kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 117,
                'code' => 'PN.04.04',
                'name' => 'Pelayanan Perizinan Bidang Industri Makanan/Minimarket',
                'description' => 'Arsip yang berkaitan dengan pemberian layanan perizinan bidang industri makanan/minimarket.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 117,
                'code' => 'PN.04.05',
                'name' => 'Pelayanan Fasilitas',
                'description' => 'Arsip yang berkaitan dengan pelayanan fasilitas penanaman modal meliputi perizinan sektor primer dan tersier serta sektor sekunder.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD.01
            [
                'secondary_classification_id' => 120,
                'code' => 'PD.01.01',
                'name' => 'Bina Usaha',
                'description' => 'Arsip yang bekaitan dengan pembinaan usaha perdagangan dalam negeri meliputi pembinaan kelembagaan dan penguatan usaha, jasa perdagangan, usaha dagang asing dan keagenan, informasi perusahaan, serta pelaku pasar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 120,
                'code' => 'PD.01.02',
                'name' => 'Pembinaan Perdagangan Kecil Menengah dan Produk Dalam Negeri',
                'description' => 'Arsip yang berkaitan dengan pembinaan usaha perdagangan kecil menengah dan produk dalam negeri meliputi bimbingan teknis tentang iklim usaha, fasilitasi usaha dan pemasaran, pengembangan produk lokal, serta pencitraan produk dalam negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 120,
                'code' => 'PD.01.03',
                'name' => 'Pengembangan Logistik dan Sarana Distribusi',
                'description' => 'Arsip yang berkaitan dengan pengembangan logistik dan sarana distribusi meliputi pengembangan sarana distribusi, pengelolaan sarana distribusi, kerja sama pengembangan sistem logistik dan informasi serta bimbingan teknis penyedia jasa logistik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 120,
                'code' => 'PD.01.04',
                'name' => 'Pengelolaan Bahan Pokok dan Barang Strategis',
                'description' => 'Arsip yang berkaitan dengan pengelolaan bahan pokok dan barang strategis meliputi informasi pasar, hasil industri, barang strategis serta bahan pokok agro.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD.02
            [
                'secondary_classification_id' => 121,
                'code' => 'PD.02.01',
                'name' => 'Standardisasi Perdagangan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan standarisasi perdagangan meliputi kelembagaan dan informasi standar, kerja sama standarisasi, serta perumusan dan penerapan standar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 121,
                'code' => 'PD.02.02',
                'name' => 'Pemberdayaan Konsumen',
                'description' => 'Arsip yang berkaitan dengan pemberdayaan konsumen meliputi kerja sama, informasi dan publikasi, analisa penyelenggara pelindungan konsumen, bimbingan konsumen dan pelaku usaha, fasilitasi pemberdayaan lembaga perlindungan konsumen swadaya masyarakat, serta pemberdayaan badan penyelesaian sengketa konsumen.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 121,
                'code' => 'PD.02.03',
                'name' => 'Pengawasan Barang Beredar dan Jasa',
                'description' => 'Arsip yang berkaitan dengan pengawasan barang beredar dan jasa meliputi produk pertambangan dan aneka industri, produk pertanian, kimia dan kehutanan, serta jasa dan kerja sama lembaga pemerintah dan non pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 121,
                'code' => 'PD.02.04',
                'name' => 'Metrologi',
                'description' => 'Arsip yang bekaitan dengan pengelolaan standarisasi perdagangan metrologi meliputi sarana dan kerja sama, kelembagaan dan penilaian, UTTP dan standar ukuran, pengawasan alat ukur, takar, timbang dan perlengkapannya, serta pengelolaan oleh balai pengelolaan standar nasional satuan ukuran (SNSU).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD.03
            [
                'secondary_classification_id' => 122,
                'code' => 'PD.03.01',
                'name' => 'Ekspor Produk Prtanian dan Kehutanan',
                'description' => 'Arsip yang berkaitan dengan pembinaan ekspor produk pertanian dan kehutanan meliputi ekspor produk tanaman pangan, perikanan dan peternakan, perkebunan, hortikulasi, rempah dan tanaman obat, serta hasil hutan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 122,
                'code' => 'PD.03.02',
                'name' => 'Ekspor Produk Industri dan Pertambangan',
                'description' => 'Arsip yang berkaitan dengan pembinaan ekspor produk industri dan pertambangan meliputi produk TPT, aneka dan jasa, produk logam, mesin, alat transportasi, dan elektronika, produk industri agro dan kimia, serta produk migas dan pertambangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 122,
                'code' => 'PD.03.03',
                'name' => 'Impor',
                'description' => 'Arsip yang berkaitan dengan pembinaan impor meliputi impor barang modal, barang pertanian, kehutanan, kelautan dan perikanan, barang aneka industri dan bahan baku industri, serta barang konsumsi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 122,
                'code' => 'PD.03.04',
                'name' => 'Fasilitasi Ekspor dan Impor',
                'description' => 'Arsip yang berkaitan dengan fasilitasi ekspor dan impor meliputi kerja sama internasional, sumber pembiayaan dan sistem pembiayaan ekspor dan impor, penunjang perdagangan internasional, serta pelayanan perdagangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 122,
                'code' => 'PD.03.05',
                'name' => 'Pengamanan Perdagangan',
                'description' => 'Arsip yang berkaitan dengan pembinaan pengamanan perdagangan meliputi monitoring hambatan perdagangan, penanganan hambatan teknis dan perdagangan, serta penanganan tuduhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD.04
            [
                'secondary_classification_id' => 123,
                'code' => 'PD.04.01',
                'name' => 'Multilateral',
                'description' => 'Arsip yang berkaitan dengan pembinaan perdagangan multilateral meliputi akses pasar barang pertanian dan non pertanian, fasilitas dan aturan perdagangan, hak kekayaan intelektual, investasi lingkungan serta ketentuan perdagangan dan notifikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 123,
                'code' => 'PD.04.02',
                'name' => 'ASEAN',
                'description' => 'Arsip yang berkaitan dengan pembinaan kerja sama perdagangan di wilayah ASEAN meliputi kerja sama perdagangan Masyarakat Ekonomi ASEAN I berupa perdagangan barang, fasilitasi perdagangan barang, Masyarakat Ekonomi Asean II berupa investasi dan daya saing serta isu Lainnya serta ASEAN Mitra Dialog dan kerja sama antar dan sub regional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 123,
                'code' => 'PD.04.03',
                'name' => 'APEC dan Organisasi Internasional Lainnya',
                'description' => 'Arsip yang berkaitan dengan pembinaan kerja sama perdagangan APEC dan organisasi lainnya meliputi akses perdagangan dan investasi APEC, fasilitasi perdagangan dan investasi APEC, badan-badan PBB dan non PBB, serta organisasi komiditi internasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 123,
                'code' => 'PD.04.04',
                'name' => 'Bilateral',
                'description' => 'Arsip yang berkaitan dengan pembinaan kerja sama perdagangan bilateral dengan berbagai negara.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 123,
                'code' => 'PD.04.05',
                'name' => 'Perundingan Perdagangan Jasa',
                'description' => 'Arsip yang berkaitan dengan perundingan perdagangan jasa meliputi jasa bisnis, distribusi, keuangan, jasa konstruksi, pariwisata, rekreasi budaya, olahraga, transportasi, jasa pendidikan, kesehatan serta peraturan domestik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PD.05
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.01',
                'name' => 'Pasar dan Informasi Ekspor',
                'description' => 'Arsip yang berkaitan dengan pembinaan pasar dan informasi ekspor meliputi pengembangan pasar, pengembangan sistem informasi ekspor, sistem informasi ekspor, dan pelayanan informasi ekspor.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.02',
                'name' => 'Pengembangan Produk Ekspor dan Ekonomi Kreatif',
                'description' => 'Arsip yang berkaitan dengan pengembangan produk ekspor dan ekonomi kreatif meliputi kegiatan industri manufaktur, produk Agro, Jasa, serta ekonomi kreatif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.03',
                'name' => 'Kerja Sama Pengembangan Ekspor',
                'description' => 'Arsip yang bekaitan dengan pembinaan kerja sama pengembangan ekspor baik luar negeri maupun dalam negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.04',
                'name' => 'Promosi dan Citra',
                'description' => 'Arsip yang berkaitan dengan pembinaan promosi dan citra perdagangan meliputi promosi, perencanaan dan pemantauan citra, dan penerapan citra.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.05',
                'name' => 'Pengembangan Perdagangan Berjangka Komoditi',
                'description' => 'Arsip yang berkaitan dengan pengembangan perdagangan berjangka komoditi meliputi kegiatan bina usaha, pengawasan transaksi, serta pengawasan keuangan dan audit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.06',
                'name' => 'Analisis Pasar',
                'description' => 'Arsip yang berkaitan dengan pembinaan analisis pasar meliputi pengkajian pasar, pengembangan pasar, dan sistem informasi pasar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.07',
                'name' => 'Pembinaan Pasar Fisik dan Jasa',
                'description' => 'Arsip yang berkaitan dengan pembinaan pasar fisik dan jasa meliputi pembinaan pasar lelang dan sistem resi gudang, pengawasan pasar lelang, dan pengawasan sistem resi gudang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.08',
                'name' => 'Bimbingan Teknis Ekspor',
                'description' => 'Arsip yang berkaitan dengan bimbingan teknis perdagangan ekspor.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 124,
                'code' => 'PD.05.09',
                'name' => 'Evaluasi Perdagangan Ekspor Nasional',
                'description' => 'Arsip yang berkaitan dengan evaluasi perdagangan ekspor nasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.01
            [
                'secondary_classification_id' => 125,
                'code' => 'PI.01.01',
                'name' => 'Pengembangan Industri Manufaktur',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri manufaktur yang terdiri dari industri material logam, kimia dasar, kimia hilir dan tekstil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 125,
                'code' => 'PI.01.02',
                'name' => 'Pengembangan Industri Agro',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri agro yang terdiri dari industri hasil hutan dan perkebunan, industri makanan, hasil laut dan perikanan, serta industri minuman tembakau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 125,
                'code' => 'PI.01.03',
                'name' => 'Pengembangan Industri Unggulan Berbasis Teknologi Tinggi',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri unggulan berbasis tekonologi tinggi meliputi alat transportasi darat, laut dan udara, industri pertahanan, elektronika dan telematikan, serta alat pertanian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 125,
                'code' => 'PI.01.04',
                'name' => 'Pengembangan Industri Kecil dan Menengah',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri kecil dan menengah terdiri dari industri pangan, kimia, dan bahan bangun, serta industri kerajinan dan sandang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.02
            [
                'secondary_classification_id' => 126,
                'code' => 'PI.02.01',
                'name' => 'Promosi Industri Manufaktur',
                'description' => 'Arsip yang berkaitan dengan promosi industri manufaktur yang terdiri dari industri material logam, kimia dasar, kimia hilir dan tekstil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 126,
                'code' => 'PI.02.02',
                'name' => 'Promosi Industri Agro',
                'description' => 'Arsip yang berkaitan dengan promosi industri agro yang terdiri dari industri hasil hutan dan perkebunan, industri makanan, hasil laut dan perikanan, serta industri minuman tembakau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 126,
                'code' => 'PI.02.03',
                'name' => 'Promosi Industri Unggulan Berbasis Teknologi Tinggi',
                'description' => 'Arsip yang berkaitan dengan promosi industri unggulan berbasis teknologi yang meliputi alat transportasi darat, industri maritim, kedirgantaraan dan alat pertahanan, elektronika dan telematika, serta permesinan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 126,
                'code' => 'PI.02.04',
                'name' => 'Promosi Industri Kecil dan Menengah',
                'description' => 'Arsip yang berkaitan dengan promosi insutri kecil dan menengah yang terdiri dari industri pangan, kimia dan bahan bangunan, serta industri kerajinan dan sandang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.03
            [
                'secondary_classification_id' => 127,
                'code' => 'PI.03.01',
                'name' => 'Pengembangan Standariasi dan Teknologi Industri Manufaktur',
                'description' => 'Arsip yang berkaitan dengan pengembangan standarisasi dan teknologi pada industri manufaktur yang terdiri dari industri material, industri kimia dasar, industri kimia hilir, dan industri tekstil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 127,
                'code' => 'PI.03.02',
                'name' => 'Pengembangan Standariasi dan Teknologi Industri Agro',
                'description' => 'Arsip yang berkaitan dengan standarisasi dan teknologi pada industri agro yang terdiri dari industri hasil hutan dan perkebunan, industri makanan, hasil laut dan perikanan, serta industri minuman dan tembakau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 127,
                'code' => 'PI.03.03',
                'name' => 'Pengembangan Standariasi dan Teknologi Industri Unggulan Berbasis Teknologi Tinggi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan standarisasi dan teknologi ndustri unggulan berbasis teknologi tinggi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 127,
                'code' => 'PI.03.04',
                'name' => 'Pengembangan Standariasi dan Teknologi Industri Kecil dan Menengah',
                'description' => 'Arsip yang berkaitan dengan kegiatah pengembangan standarisasi dan teknologi pada industri kecil dan menengah yang meliputi industri pangan, kimia dan bahan bangunan, serta industri kerjinan dan sandang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.04
            [
                'secondary_classification_id' => 128,
                'code' => 'PI.04.01',
                'name' => 'Industri Manufaktur',
                'description' => 'Arsip yang berkaitan dengan pengusulan hak dan kekayaan intelektual pada industri manufaktur yang meliputi industri material logam, industri kimia dasar, industri kimia hilir dan industri tekstil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 128,
                'code' => 'PI.04.02',
                'name' => 'Industri Agro',
                'description' => 'Arsip yang berkaitan dengan pengusulan hak dan kekayaan intelektual pada industri agro yang meliputi Industri hasil hutan dan perkebunan, industri makanan, hasil laut dan perikanan, serta idustri minuman dan tembakau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 128,
                'code' => 'PI.04.03',
                'name' => 'Industri Unggulan Berbasis Teknologi Tinggi',
                'description' => 'Arsip yang berkaitan dengan pengusulan hak dan kekayaan intelektual pada industri unggulan berbasis teknologi tinggi yang meliputi industri transportasi darat, industri maritim, kedirgantaraan dan alat pertahanan, elektronika dan telematika, serta permesinan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 128,
                'code' => 'PI.04.04',
                'name' => 'Industri Kecil dan Menengah',
                'description' => 'Arsip yang berkaitan dengan pengusulan hak dan kekayaan intelektual pada industri kecil dan menengah yang meliputi meliputi industri pangan, kimia dan bahan bangunan, serta industri kerjinan dan sandang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.05
            [
                'secondary_classification_id' => 129,
                'code' => 'PI.05.01',
                'name' => 'Industri Manufaktur',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri hijau pada industri manufaktur yang terdiri dari industri material, industri kimia dasar, industri kimia hilir, dan industri tekstil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 129,
                'code' => 'PI.05.02',
                'name' => 'Industri Agro',
                'description' => 'Arsip yang berkaitan dengan industri hijau pada industri agro yang meliputi industri hasil hutan dan perkebunan, industri makanan, hasil laut dan perikanan, serta idustri minuman dan tembakau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 129,
                'code' => 'PI.05.03',
                'name' => 'Industri Unggulan Berbasis Teknologi Tinggi',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri hijau pada industri unggulan berbasis teknologi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 129,
                'code' => 'PI.05.04',
                'name' => 'Industri Kecil dan Menengah',
                'description' => 'Arsip yang berkaitan dengan pengembangan industri hijau pada industri kecil dan menengah yang meliputi meliputi industri pangan, kimia dan bahan bangunan, serta industri kerjinan dan sandang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.10
            [
                'secondary_classification_id' => 134,
                'code' => 'PI.10.01',
                'name' => 'Kerja sama Industri Internasional Wilayah I',
                'description' => 'Arsip yang berkaitan dengan kerja sama industri internasional wilayah Amerika, Eropa dan Timur Tengah dan Fora meliputi kerja sama akses industri, kerja sama teknik dan promosi industri serta kerja sama industri multilateral lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 134,
                'code' => 'PI.10.02',
                'name' => 'Kerja Sama Industri Internasional Wilayah Asia Timur, Asia Barat, Asia Selatan, Pasifik, Australia, Afrika, dan Flora Regional',
                'description' => 'Arsip yang berkaitan dengan kerja sama industri internasional meliputi akses industri, kerja sama teknik dan promosi industri serta kerja sama regional di wilayah Asia Timur, Asia Barat, Asia Selatan, Pasifik, Australia, Afrika, dan flora regional meliputi kerja sama akses industri, kerja sama teknik dan promosi industri, serta kerja sama industri regional lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 134,
                'code' => 'PI.10.03',
                'name' => 'Ketahanan Industri',
                'description' => 'Arsip yang berkaitan dengan pengelolaan ketahanan industri meliputi penanganan hambatan dan penanganan industri pada wilayah I (Amerika, Eropa, Timur Tengah, dan fora multilateral), dan Wilayah II (Asia Timur, Asia Barat, Asia Selatan, Pasifik, Australia, dan fora multilateral).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.11
            [
                'secondary_classification_id' => 135,
                'code' => 'PI.11.01',
                'name' => 'Standar',
                'description' => 'Arsip yang berkaitan dengan penyusunan standar industri manufaktur, industri agro dan teknologi tinggi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 135,
                'code' => 'PI.11.02',
                'name' => 'Penyiapan Penerapan',
                'description' => 'Arsip yang berkaitan dengan penyiapan penerapan standarisasi dan kerja sama standarisasi industri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 135,
                'code' => 'PI.11.03',
                'name' => 'Infrastruktur Standar',
                'description' => 'Arsip yang berkaitan dengan pengembangan infrastruktur standar dan pengawasan lembaga penilaian kesuaian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.12
            [
                'secondary_classification_id' => 136,
                'code' => 'PI.12.01',
                'name' => 'Pengkajian Kebijakan Industri',
                'description' => 'Arsip yang berkaitan dengan pengkajian kebijakan industri sektoral dan kewilayahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 136,
                'code' => 'PI.12.02',
                'name' => 'Perpajakan dan Tarif',
                'description' => 'Arsip yang berkaitan dengan pengkajian kebijakan perpajakan dan tarif maupun tarif non tarif.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 136,
                'code' => 'PI.12.03',
                'name' => 'Pengembangan Model Industrial',
                'description' => 'Arsip yang berkaitan dengan pengembangan model industrial mulai dari pemrograman model sampai dengan aplikasi model.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.13
            [
                'secondary_classification_id' => 137,
                'code' => 'PI.13.01',
                'name' => 'Industri Hijau',
                'description' => 'Arsip yang berkaitan dengan pengkajian pengembangan industri hijau dan kerja sama industri hijau.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 137,
                'code' => 'PI.13.02',
                'name' => 'Lingkungan Hidup',
                'description' => 'Arsip yang berkaitan dengan pengkajian lingkungan hidup terdiri dari lingkungan global dan pengendalian lingkungan hidup.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 137,
                'code' => 'PI.13.03',
                'name' => 'Energi',
                'description' => 'Arsip yang berkaitan dengan pengkajian energi termasuk konservasi energi dan diversifikasi energi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PI.14
            [
                'secondary_classification_id' => 138,
                'code' => 'PI.14.01',
                'name' => 'Pengkajian dan Penerapan Kebijakan Teknologi Industri',
                'description' => 'Arsip yang berkaitan dengan pengkajian dan penerapan kebijakan teknologi industri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 138,
                'code' => 'PI.14.02',
                'name' => 'Pengkajian dan Penerapan Inovasi Teknologi Industri',
                'description' => 'Arsip yang berkaitan dengan pengkajian dan penerapan inovasi teknologi industri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 138,
                'code' => 'PI.14.03',
                'name' => 'Pengembangan Hak Kekayaan Intelektual',
                'description' => 'Arsip yang berkaitan dengan Fasilitasi Hak Kekayaan Intelektual dan Komersialisasi Hak Kekayaan Intelektual.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.01
            [
                'secondary_classification_id' => 139,
                'code' => 'UK.01.01',
                'name' => 'Pengembangan Organisasi dan Badan Hukum Koperasi',
                'description' => 'Arsip yang berkaitan dengan pengembangan organisasi dan badan hukum koperasi meliputi organisasi koperasi dan UKM, badan hukum koperasi dan UKM, serta penelaahan kasus hukum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 139,
                'code' => 'UK.01.02',
                'name' => 'Penyusunan Peraturan Perundang-Undangan',
                'description' => 'Arsip yang berkaitan dengan penyusunan perundang- undangan bidang koperasi dan UMKM mulai dari penyusunan sampai dengan evaluasi perundang- undangan Koperasi dan UMKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 139,
                'code' => 'UK.01.03',
                'name' => 'Penatalaksanaan Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan tata laksana koperasi baik primer maupun sekunder, serta klasifikasi koperasi dan UKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 139,
                'code' => 'UK.01.04',
                'name' => 'Pengelolaan Keanggotaan Koperasi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan keanggotaan koperasi terdiri dari partisipasi usaha dan permodalan, partisipasi pengawasan dan pengembangan anggota.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 139,
                'code' => 'UK.01.05',
                'name' => 'Pengendalian dan Akuntabilitas',
                'description' => 'Arsip yang berkaitan dengan pengendalian dan akuntabilitas mulai dari pengendalian intern serta tindak lanjutnya, akuntabilitas, akuntansi dan audit, sampai dengan monitoring dan evaluasi kelembagaan koperasi dan UKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.02
            [
                'secondary_classification_id' => 140,
                'code' => 'UK.02.01',
                'name' => 'Pertanian Tanaman Pangan dan Hortikultura',
                'description' => 'Arsip yang berkaitan dengan pengelolaan produksi pertanian tanaman pangan dan hortikultura meliputi segala hal yang berkaitan dengan tanaman pangan, hortikultura dan sarana produksi maupun pengolahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 140,
                'code' => 'UK.02.02',
                'name' => 'Perikanan dan Peternakan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan produksi perikanan dan peternakan termasuk sarana produksi dan sarana pengolahannya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 140,
                'code' => 'UK.02.03',
                'name' => 'Ketenagalistrikan dan Aneka Usaha',
                'description' => 'Arsip yang berkaitan dengan pengelolaan ketenagalistrikan dan konstruksi, aneka usaha, serta pariwisata, pos dan telekomunikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.03
            [
                'secondary_classification_id' => 141,
                'code' => 'UK.03.01',
                'name' => 'Penyusunan Program Pendanaan Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan penyusunan program pendanaan koperasi dan UKM baik jangka pendek, menengah maupun jangka panjang, serta program pendanaan usaha mikro dan dana bergulir.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 141,
                'code' => 'UK.03.02',
                'name' => 'Pengembangan dan Pengendalian Simpan Pinjam',
                'description' => 'Arsip yang berkaitan dengan pengembangan dan pengendalian simpan pinjam pada KSP, USP Koperasi dan USP-LKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 141,
                'code' => 'UK.03.03',
                'name' => 'Pengelolaan Permodalan',
                'description' => 'Arsip yang berakaitan dengan pengeloaan permodalan yang meliputi pengembangan permodalan sendiri, pengembangan permodalan luar dan pengembangan kredit program.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 141,
                'code' => 'UK.03.04',
                'name' => 'Pengelolaan Asuransi dan Jasa Keuangan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan asuransi koperasi dan UKM, Perpajakan koperasi dan UKM, dan jasa keuangan dan kredit komersial.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 141,
                'code' => 'UK.03.05',
                'name' => 'Pembiayaan dan Penjaminan Kredit',
                'description' => 'Arsip yang berkaitan dengan pembiayaan dan penjaminan kredit dari lembaga pembiayaan, penjamin kredit dan pasar modal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.04
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.01',
                'name' => 'Perdagangan Dalam Negeri',
                'description' => 'Arsip yang berkaitan dengan pemasaran dan jaringan usaha perdagangan dalam negeri mulai dari pengadaan, distribusi, sampai dengan pengembangan sektor formal dan informal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.02',
                'name' => 'Ekspor dan Impor',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemasaran dan jaringan usaha ekspor dan impor serta hubungan perdagangan inernasional dan hubungan perdagangan multilateral, regional dan bilateral.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.03',
                'name' => 'Pengembangan Sarana dan Prasarana Pemasaran',
                'description' => 'Arsip yang berkaitan dengan pengembnagan sarana dan prasarana pemasaran serta pengembangan potensi pemasaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.04',
                'name' => 'Pembinaan Kemitraan dan Jaringan Usaha Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan kemitraan dan jaringan usaha koperasi dan UKM, serta pengembangan kerja sama kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.05',
                'name' => 'Informasi dan Publikasi Bisnis Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan pengelolaan informasi dan publikasi bisnis koperasi dan UKM mulai dari pengumpulan informasi, pengolahan informasi, sampai dengan publikasi dan promosi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 142,
                'code' => 'UK.04.06',
                'name' => 'Pengembangan Lembaga Layanan Pemasaran LLP Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan pengambangan lembaga layanan pemasaran LLP Koperasi dan UKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.05
            [
                'secondary_classification_id' => 143,
                'code' => 'UK.05.01',
                'name' => 'Pengembangan Kewirausahaan',
                'description' => 'Arsip yang berkaitan dengan pengembangan kewirausahaan meliputi lembaga kewirausahaan, penumbuhan kewirausahaan, dan sosialisasi kewirausahaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 143,
                'code' => 'UK.05.02',
                'name' => 'Implementasi Kebijakan Pendidikan Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan implementasi kebijakan pendidikan koperasi dan UKM dapat berupa diklat formal, informal, ataupun diklat non formal, serta kerja sama lembaga diklat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 143,
                'code' => 'UK.05.03',
                'name' => 'Pengelolaan Peran Serta Masyarakat',
                'description' => 'Arsip yang berkaitan dengan pengelolaan peran serta masyarakat dalam peningkatan dukungan media masa, LSM dan organisasi profesi terhadap Koperasi dan UKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 143,
                'code' => 'UK.05.04',
                'name' => 'Monitoring dan Evaluasi Diklat Koperasi dan UKM',
                'description' => 'Arsip yang berkaitan dengan monitoring dan evaluasi diklat koperasi dan UKM baik diklat formal maupun informal serta yang diadakan oleh lembaga diklat pemerintah maunpun non pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 143,
                'code' => 'UK.05.05',
                'name' => 'Advokasi',
                'description' => 'Arsip yang berkaitan dengan advokasi organisasi dan manajemen, kemitraan dan teknologi, serta peraturan perundang-undangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.06
            [
                'secondary_classification_id' => 144,
                'code' => 'UK.06.01',
                'name' => 'Pengembangan Produktivitas dan Mutu',
                'description' => 'Arsip yang berkaitan dengan pengembangan produktivitas dan peningkatan mutu serta sertifikasi, label dan merek produk.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 144,
                'code' => 'UK.06.02',
                'name' => 'Restrukturisasi Usaha',
                'description' => 'Arsip yang berkaitan dengan restrukturisasi usaha meliputi restrukturisasi manajemen, pendanaan, kelembagaan koperasi dan UKM.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 144,
                'code' => 'UK.06.03',
                'name' => 'Pemberdayaan Lembaga Pengembangan Bisnis (LPB)',
                'description' => 'Arsip yang berkaitan dengan pemberdayaan lembaga pengembangan bisnis (LPS) meliputi kelembagaan Lembaga pengembangan Bisnis (LPB), pengembangan bisnis LPB, dan pengembangan jaringan LPB.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 144,
                'code' => 'UK.06.04',
                'name' => 'Fasilitasi Investasi UKMK',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi UKMK meliputi kegiatan investasi klaster UKMK, pengembangan kerja sama investasi usaha, dan fasilitasi investasi aneka usaha UKMK.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 144,
                'code' => 'UK.06.05',
                'name' => 'Pengembangan Sistem Bisnis',
                'description' => 'Arsip yang berkatan dengan pengembangan sistem bisnis dari segi fasilitasi transaksi, kerjasama usaha dan jaringan komunikasi bisnis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // UK.07
            [
                'secondary_classification_id' => 145,
                'code' => 'UK.07.01',
                'name' => 'Penelitian Koperasi',
                'description' => 'Arsip yang berkaitan dengan penelitian koperasi mulai dari perencanaan dan pengendalian, penyelenggaraan sampai dengan tata laksana penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 145,
                'code' => 'UK.07.02',
                'name' => 'Penelitian UKM',
                'description' => 'Arsip yang berkaitan dengan penelitian UKM mulai dari perencanaan dan pengendalian, penyelenggaraan, sampai dengan tata laksana penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 145,
                'code' => 'UK.07.03',
                'name' => 'Penelitian Sumber Daya',
                'description' => 'Arsip yang berkaitan dengan penelitian sumber daya mulai dari perencanaan, penyelenggaraan sampai dengan tata laksana penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 145,
                'code' => 'UK.07.04',
                'name' => 'Pengembangan Perkaderan UMK',
                'description' => 'Arsip yang berkaitan dengan pengembangan perkaderan UMK berupa penyuluhan, penilaian perkaderan, serta kerja sama dan jaringan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK.02
            [
                'secondary_classification_id' => 148,
                'code' => 'TK.02.01',
                'name' => 'Pengembangan Standarisasi Kompetensi',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan standarisasi kompetensi meliputi penerapan dan bimbingan penerapan standar kompetensi, pengembangan program pelatihan ketenagakerjaan, pengembangan program pelatihan produktivitas dan kewirausahaan, serta pengembangan program pelatihan ketransmigrasian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 148,
                'code' => 'TK.02.02',
                'name' => 'Bina Lembaga dan Sarana Pelatihan Kerja',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan lembaga dan sarana pelatihan kerja meliputi pembinaan akreditasi dan pengembangan sistem informasi kelembagaan, pengembangan sarana dan fasilitas lembaga pelatihan, pengembangan standar mutu (PSM) lembaga pelatihan, serta sistem pendanaan dan kerja sama pelatihan kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 148,
                'code' => 'TK.02.03',
                'name' => 'Bina Instruktur dan Tenaga Pelatihan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan instruktur dan PSM lembaga pelatihan pemerintah, lembaga pelatihan swasta, dan tenaga pelatihan meliputi peningkatan kompetensi, pengembangan karir, serta pengelolaan sistem informasi instruktur, PSM, dan tenaga pelatihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 148,
                'code' => 'TK.02.04',
                'name' => 'Bina Pemagangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan pemagangan tenaga kerja baik di dalam maupun luar negeri, perizinan dan advokasi pemagangan, serta promosi dan jenjang pemagangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 148,
                'code' => 'TK.02.05',
                'name' => 'Produktivitas dan Kewirausahaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan produktivitas dan kewirausahaan meliputi pengembangan promosi dan kerja sama produktivitas dan kewirausahaan, pengembangan sistem dan peningkatan produktivitas, pengembangan pengukuran dan kajian produktivitas, serta pengembangan kewirausahaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK.03
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.01',
                'name' => 'Pengembangan Pasar Kerja',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan pasar kerja meliputi pemberian informasi pasar kerja, analisis pasar kerja, serta bursa kerja baik dalam maupun luar negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.02',
                'name' => 'Penempatan Tenaga Kerja dalam Negeri',
                'description' => 'Arsip yang berkaitan dengan kegiatan penempatan tenaga kerja dalam negeri meliputi penempatan antar kerja, penempatan tenaga kerja khusus, penyuluhan dan bimbingan jabatan, serta pemberdayaan pengantar kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.03',
                'name' => 'Penempatan Tenaga Kerja Luar Negeri',
                'description' => 'Arsip yang berkaitan dengan kegiatan penempatan tenaga kerja di luar negeri meliputi pembinaan kelembagaan penempatan, perlindungan tenaga kerja Indonesia, serta kerja sama internasional penempatan tenaga kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.04',
                'name' => 'Perluasan Kesempatan Kerja dan Pengembangan Tenaga Kerja Sektor Informal',
                'description' => 'Arsip yang berkaitan dengan kegiatan perluasan kesempatan kerja dan pengembangan tenaga kerja sektor informal, termasuk kegiatan pengembangan padat karya pedesaan dan perkotaan, penerapan teknologi tepa guna, serta pemberdayaan pendampingan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.05',
                'name' => 'Pengendalian Penggunaan Tenaga Kerja Asing',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian penggunaan tenaga kerja asing mulai dari analisa dan perizinan sektor industri dan sektor jasa sampai dengan pengendalian kerja sama kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 149,
                'code' => 'TK.03.06',
                'name' => 'Pengelolaan Standardisasi Profesi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan standarisasi profesi tenaga kerja meliputi pengelolaan sistem informasi dan registrasi serta pembakuan akreditasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK.04
            [
                'secondary_classification_id' => 150,
                'code' => 'TK.04.01',
                'name' => 'Persyaratan Kerja, Kesejahteraan, dan Analisis Diskriminasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan pemenuhan persyaratan kerja, kesejahteraan, dan analisis diskriminasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 150,
                'code' => 'TK.04.02',
                'name' => 'Pembinaan Kelembagaan dan Pemasayarakatan Hubungan Industrial',
                'description' => 'Arsip yang berkaitan dengan pembinaan kelembagaan dan pemasyarakatan hubungan industrial meliputi pembinaan organisasi pekerja dan pengusaha, kelembagaan hubungan industrial, dan pemasyarakatan hubungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 150,
                'code' => 'TK.04.03',
                'name' => 'Pengupahan dan Penyelesaian Perselisihan Hubungan Industrial',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan pengupahan berdasarkan penerapan standar pengupahan dan penyelesaian perselisihan hubungan industrial melalui jaminan sosial tenaga kerja dalam hubungan kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 150,
                'code' => 'TK.04.04',
                'name' => 'Pencegahan dan Penyelesaian Pelestarian Hubungan Industrial',
                'description' => 'Arsip yang berkaitan dengan kegiatan pencegahan dan penyelesaian pelestarian hubungan industrial meliputi pencegahan dini, pencegahan penanganan mogok dan penutupan perusahaan, pengurusan perselisihan dan evaluasi pelaporan, serta pemberdayaan kelembagaan melalui fungsionalisasi perantara, legitimasi mediator, konsiliator dan arbitor, serta penyelesaian perselisihan di luar pengadilan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK.05
            [
                'secondary_classification_id' => 151,
                'code' => 'TK.05.01',
                'name' => 'Pengawasan Norma Kerja dan Jaminan Sosial Tenaga Kerja',
                'description' => 'Arsip yang berkaitan dengan pengawsan norma kerja dan jaminan sosial tenaga kerja meliputi norma waktu, norma hubungan kerja dan perlindungan, serta pengawasan norma penempatan dan latihan kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 151,
                'code' => 'TK.05.02',
                'name' => 'Pengawasan Norma Kerja Perempuan dan Anak',
                'description' => 'Arsip yang berkaitan dengan pengawasan norma kerja, pembinaan kerja sama lintas sektoral tenaga kerja, dan advokasi tenaga perempuan dan anak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 151,
                'code' => 'TK.05.03',
                'name' => 'Pengawasan Norma Keselamatan dan Kesehatan Kerja',
                'description' => 'Arsip yang berkaitan dengan pengawasan norma keselamatan kerja meliputi pengawsan norma mekanik, norma konstruksi, norma kesehatan, norma lingkungan serta norma kelembagaan, dan keahlian sistem manajemen K3.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 151,
                'code' => 'TK.05.04',
                'name' => 'Pelaporan Hasil Pengawasan Ketenagakerjaan',
                'description' => 'Arsip yang berkaitan dengan pelaporan hasil pengawasan ketenagakerjaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 151,
                'code' => 'TK.05.05',
                'name' => 'Bina Penegakan Hukum',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan penegak hukum ketenagakerjaan meliputi pembinaan pemeriksa norma ketenagakerjaan, penyidik norma ketenagakerjaan, termasuk kegiatan pengembangan penyidik pegawai negeri sipil, serta kerja sama penegakan hukum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // TK.06
            [
                'secondary_classification_id' => 152,
                'code' => 'TK.06.01',
                'name' => 'Pengkajian dan Bimbingan Teknis Pelayanan Keselamatan dan Kesehatan Kerja (K3)',
                'description' => 'Arsip yang berkaitan dengan pengkajian dan bimbingan teknis pelayanan keselamatan dan kesehatan kerja.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 152,
                'code' => 'TK.06.02',
                'name' => 'Pengembangan SDM dan Kompetensi K3',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan SDM dan kompetensi keselamatan dan kesehatan kerja meliputi program, analisis, penyebarluasan informasi pengembangan SDM dan Kompetensi K3, serta kerja sama bidang pengembangan SDM dan Kompetensi K3 baik tingkat nasional, regional dan internasional, termasuk bimbingan teknis dan evaluasi pengembangan SDM dan Kompetensi K3.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.01
            [
                'secondary_classification_id' => 153,
                'code' => 'PM.01.01',
                'name' => 'Bina Ideologi dan Wawasan Kebangsaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan ideologi dan wawasan kebangsaan meliputi ketahanan ideologi negara, wawasan kebangsaan, bela negara, nilai-nilai sejrah kebangsaan, serta pembauran dan kewarganegaraan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 153,
                'code' => 'PM.01.02',
                'name' => 'Pembinaan Kewaspadaan Nasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan kewaspadaan nasional meliputi fasilitasi dan evaluasi kewaspadaan dini dan kerja sama intelijen keamanan, fasilitasi bina masyarakat perbatasan, fasilitasi penanganan konflik, serta fasilitasi pengawasan orang asing dan lembaga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 153,
                'code' => 'PM.01.03',
                'name' => 'Pembinaan Ketahanan Seni, Budaya, Adat, Agama, dan Kemasyarakatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan ketahanan seni, budaya, adat, agama, dan kemasyarakatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 153,
                'code' => 'PM.01.04',
                'name' => 'Pembinaan Politik Dalam Negeri',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan politik dalam negeri meliputi implementasi kebijakan publik, fasilitasi kelembagaan politik pemerintahan dan partai politik, penyelenggaraan pendidikan politik, dan pemilihan umum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 153,
                'code' => 'PM.01.05',
                'name' => 'Pembinaan Ketahanan Ekonomi',
                'description' => 'Berkas kegiatan kegiatan pembinaan ketahanan ekonomi meliputi ketahanan sumberdaya alam dan kesenjangan perekonomian, ketahanan perdagangan investasi, fiskal dan moneter, perilaku perekonomian masyarakat, serta ketahanan lembaga sosial ekonomi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.02
            [
                'secondary_classification_id' => 154,
                'code' => 'PM.02.01',
                'name' => 'Dekonsentrasi dan Kerja Sama',
                'description' => 'Arsip yang berkaitan dengan kegiatan dekonsentrasi dan kerja sama pemerintahan meliputi kegiatan fasilitasi, koordinasi, pebinaan dan pengawasan, serta monitoring Dekonsentrasi dan Tugas Pembantuan, tugas bupati dan wakil bupati, kerja sama daerah, serta fasilitasi kecamatan dan pelayanan umum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 154,
                'code' => 'PM.02.02',
                'name' => 'Fasilitasi Wilayah Administrasi dan Perbatasan',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi wilayah administrasi dan perbatasan meliputi kegiatan fasilitasi kegiatan topomini dan data wilayah serta batas antar daerah wilayah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 154,
                'code' => 'PM.02.03',
                'name' => 'Fasilitasi Polisi Pamong Praja Perlindungan Masyarakat',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi polisi pamong praja perlindungan masyarakat meliputi tata operasional dan sarana polisi, peningkatan kapasitas SDM polisi pamong praja, perlindungan masyarakat, penyidik pegawai negeri sipil, perlindungan hak-hak sipil dan hak asasi manusia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 154,
                'code' => 'PM.02.04',
                'name' => 'Fasilitasi Kawasan dan Pertanahan',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi kawasan dan pertanahan meliputi fasilitasi kawasan sumber daya alam, kawasan sumber daya buatan, kawasan ekonomi, Industri dan perdagangan bebas, serta pertanahan dan kawasan khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 154,
                'code' => 'PM.02.05',
                'name' => 'Pencegahan dan Penanggulangan Bencana',
                'description' => 'Arsip yang berkaitan dengan kegiatan pencegahan dan penanggulangan bencana meliputi identifikasi potensi bahaya, penyusunan organisasi sistem dan prosedur, standarisasi sarana dan prasarana, dan pencegahan dan penanggulangan kebakaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.03
            [
                'secondary_classification_id' => 155,
                'code' => 'PM.03.01',
                'name' => 'Penyelenggaraan Pemerintah Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi, bimbingan, pengawasan dan monitoring penyelenggaraan pemerintah daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 155,
                'code' => 'PM.03.02',
                'name' => 'Fasilitasi Dewan Pertimbangan Otonomi Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi, monitoring, dan evaluasi penataan daerah, pembinaan daerah pemekaran, otonomi khusus dan Dewan Pertimbangan Otonomi Daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 155,
                'code' => 'PM.03.03',
                'name' => 'Fasilitasi Kepala Daerah, DPRD, dan Hubungan Antar Lembaga',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi penyelenggaraan Pemilu kepala daerah, adninistrasi kepala daerah dan DPRD, penyiapan perumusan kebijakan pemberdayaan kapasitas kepala daerah dan DPRD di bidang pemerintahan, monitoring, dan evaluasi hubungan antar lembaga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 155,
                'code' => 'PM.03.04',
                'name' => 'Fasilitasi Peningkatan Kapasitas dan Evaluasi Kinerja Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi, monitoring, dan evaluasi peningkatan kapasitas dan evaluasi kinerja penyelenggaraan pemerintahan daerah, kemampuan penyelenggaraan daerah dan pengembangan kapasitas daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.04
            [
                'secondary_classification_id' => 156,
                'code' => 'PM.04.01',
                'name' => 'Perencanaan Pembangunan Daerah/Per Wilayah',
                'description' => 'Arsip yang berkaitan dengan Berkas kegiatan perencanaan pembangunan daerah/per wilayah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 156,
                'code' => 'PM.04.02',
                'name' => 'Pengembangan Wilayah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan wilayah mulai dari penyusunan pedoman penyerasian pengembangan wilayah, penyusunan dan pemutakhiran basis data dan informasi, penyusunan dan laporan evaluasi pelaksanaan kebijakan, pengembangan kawasan strategis dan andalan, sampai dengan pengembangan wilayah tertinggal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 156,
                'code' => 'PM.04.03',
                'name' => 'Fasilitasi Penataan Ruang dan Lingkungan Hidup',
                'description' => 'Arsip yang berkaitan dengan kegiatan fasilitasi penataan ruang dan lingkungan hidup meliputi penataan ruang wilayah dan ruang kawasan, konservasi dan rehabilitasi, perencanaan dan pemanfaatan sumber daya air, serta pengendalian lingkungan hidup.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 156,
                'code' => 'PM.04.04',
                'name' => 'Pengembangan Ekonomi Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan ekonomi daerah meliputi mulai dari pengembangan potensi ekonomi daerah, promosi dan investasi, pengembangan prasarana dan sarana, serta kemitraan usaha hingga kelembagaan ekonomi daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 156,
                'code' => 'PM.04.05',
                'name' => 'Penataan Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penataan perkotaan meliputi perencanaan pengendalian perkotaan, penataan kota besar, metropolitan, dan kota kecil, serta kerja sama perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.05
            [
                'secondary_classification_id' => 157,
                'code' => 'PM.05.01',
                'name' => 'Pemerintahan Desa dan Kelurahan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan pemerintahan desa dan kelurahan meliputi administrasi pemerintahan desa dan kelurahan, fasilitasi pengembangan dan permusyawaratan desa, fasilitasi pengelolaan keuangan dan aset desa, serta pengembangan kapasitas desa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 157,
                'code' => 'PM.05.02',
                'name' => 'Kelembagaan dan Pelatihan Masyarakat',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan kelembagaan dan pelatihan masyarakat meliputi pembinaan lembaga masyarakat, pembangunan partisipatif, pendataan potensi masyarakat, pengembangan kawasan perdesaan dan pelatihan masyarakat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 157,
                'code' => 'PM.05.03',
                'name' => 'Pemberdayaan Adat dan Sosial Budaya Masyarakat',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan adat dan sosial budaya masyarakat meliputi pemberdayaan budaya nusantara, perempuan, kesejahteraan keluarga, kesejahteraan sosial, dan tenaga kerja perdesaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 157,
                'code' => 'PM.05.04',
                'name' => 'Usaha Ekonomi Masyarakat',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan usaha ekonomi masyarakat meliputi usaha pertanian dan pangan, perkreditan dan simpan pinjam, usaha ekonomi dan keluarga, produksi dan pemasaran, serta pemberdayaan ekonomi pedesaan dan masyarakat tertinggal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 157,
                'code' => 'PM.05.05',
                'name' => 'Sumber daya Alam dan Teknologi Tepat Guna Perdesaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan sumber daya alam dan teknologi tepat guna perdesaan meliputi fasilitasi konservasi dan rehabilitasi lingkungan, fasilitasi pemanfatan lahan dan pesisir, fasilitasi prasarana dan sarana, fasilitasi pemetaan kebutuhan dan pengkajian, serta pemasyarakatan dan kerja sama teknologi perdesaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.06
            [
                'secondary_classification_id' => 158,
                'code' => 'PM.06.01',
                'name' => 'Pendaftaran Penduduk',
                'description' => 'Arsip yang berkaitan dengan kegiatan pendaftaran penduduk mulai dari pendaftaran identitas penduduk, pendaftaran pindah datang dalam wilayah NKRI dan antar negara, pendataan rentan bencana, hingga monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 158,
                'code' => 'PM.06.02',
                'name' => 'Pencatatan Sipil',
                'description' => 'Arsip yang berkaitan dengan kegiatan pencatatan sipil meliputi kegiatan pencatatan kelahiran dan kematian, perkawinan dan perceraian, adopsi anak, pencatatan kewarganegaaraan, serta monitoring dan evaluasi hasil pencatatan sipil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 158,
                'code' => 'PM.06.03',
                'name' => 'Pengelolaan Informasi Administrasi Kependudukan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan informasi dan administrasi kependudukan mulai dari sistem informasi, kelembagaan informasi, pengelolaan data, penyajian dan layanan informasi administrasi kependudukan, serta monitoring dan evaluasi pelayanan informasi kependudukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 158,
                'code' => 'PM.06.04',
                'name' => 'Pengembangan Kebijakan Kependudukan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan kebijakan kependudukan meliputi kebijakan kuantitas penduduk, kebijakan kualitas penduduk, kebijakan mobilitas penduduk, pengembangan sistem perlindungan dan pemberdayaan penduduk, serta pengembangan wawasan kependudukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 158,
                'code' => 'PM.06.05',
                'name' => 'Penyerasian Kependudukan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyerasian kependudukan meliputi analisis dan pengembangan indikator kependudukan, proyeksi penduduk, perencaan kependudukan, kebijakan kependudukan dengan lembaga non pemerintah, serta pelaksanaan penyerasian kebijakan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PM.07
            [
                'secondary_classification_id' => 159,
                'code' => 'PM.07.01',
                'name' => 'Pengelolaan Anggaran Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan anggaran daerah meliputi fasilitasi anggaran daerah dan penyusunan dukungan teknis anggaran daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 159,
                'code' => 'PM.07.02',
                'name' => 'Pengelolaan Pendapatan dan Investasi Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan pendapatan dan investasi daerah meliputi pendapatan pajak dan retribusi daerah, BUMD, BLUD, pengelolaan kekayaan daerah serta investasi obligasi dan pinjaman/hibah daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 159,
                'code' => 'PM.07.03',
                'name' => 'Fasilitasi Dana Perimbangan',
                'description' => 'Berkas kegiatan fasilitasi dana perimbangan meliputi pelaksanaan fasilitasi DAU, DAK, dana bagi hasil pajak dan sumber daya alam, dana otonomi khusus, serta penyusunan dukungan teknis fasilitasi dana perimbangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 159,
                'code' => 'PM.07.04',
                'name' => 'Pelaksanaan dan Pertanggungjawaban Keuangan Daerah',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelaksanaan dan pertanggungjawaban keuangan daerah meliputi fasilitasi bidang akuntansi dan pelaporan pertanggungjawaban keuangan, pembinaan kinerja dan kapasitas pengelolaan keuangan daerah, pembinaan dan evaluasi pengelolaan keuangan daerah, kajian kebijakan dan bantuan keterangan ahli, serta pengelolaan data informasi dan pengelolaan keuangan daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KD.01
            [
                'secondary_classification_id' => 160,
                'code' => 'KD.01.01',
                'name' => 'Pemaduan Kebijakan Pengendalian Penduduk',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemaduan kebijakan pengendalian penduduk meliputi pengumpulan dan pengolahan data dan penyiapan fasilitas pemaduan kebijakan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 160,
                'code' => 'KD.01.02',
                'name' => 'Penyusunan Rencana Pengendalian Penduduk',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana pengendalian penduduk meliputi penyusunan profil dan proyeksi, penetapan parameter pengendalian, serta pemanfaatan perencanaan pengendalian penduduk.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 160,
                'code' => 'KD.01.03',
                'name' => 'Penyelenggaraan Kerja Sama Pendidikan Kependudukan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan kerja sama pendidikan di bidang kependudukan mulai dari pengembangan sistem dan materi jalur pendidikan formal, nonformal, dan informal sampai dengan monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 160,
                'code' => 'KD.01.04',
                'name' => 'Analisis Dampak Kependudukan',
                'description' => 'Arsip yang berkaitan dengan analisis dampak kependudukan meliputi analisis dampak sosial, ekonomi, politik, pertahanan, dan keamanan, serta analisis daya dukung dan daya tampung lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KD.02
            [
                'secondary_classification_id' => 161,
                'code' => 'KD.02.01',
                'name' => 'Bina Kesertaan Keluarga Berencana Jalur Pemerintah',
                'description' => 'Arsip yang berkaitan dengan pembinaan keikutsertaan masyarakat dalam program keluarga berencana jalur pemerintah meliputi pembinaan keluarga berencana rumah sakit dan klinik pemerintah, jaminan pelayanan dan penyediaan sarana keluarga berencana pemerintah, serta pembinaan kualitas pelayanan keluarga berencana pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 161,
                'code' => 'KD.02.02',
                'name' => 'Bina Keikutsertaan Keluarga Berencana Jalur Swasta',
                'description' => 'Arsip yang berkaitan dengan pembinaan keikutsertaan masyarakat dalam program keluarga berencana jalur swasta meliputi pembinaan keluarga berencana rumah sakit dan klinik swasta, jaminan pelayanan dan penyediaan sarana keluarga berencana swasta, serta pembinaan kualitas pelayanan keluarga berencana swasta.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 161,
                'code' => 'KD.02.03',
                'name' => 'Bina Keikutsertaan Keluarga Berencana Jalur Wilayah dan Sasaran Khusus',
                'description' => 'Arsip yang berkaitan dengan pembinaan keikutsertaan masyarakat dalam program keluarga berencana jalur wilayah dan sasaran khusus meliputi peningkatan akses dan kualitas pelayanan keluarga berencana jalur wilayah tertinggal, terpencil, dan perbatasan, jalur wilayah miskin perkotaan, serta peningkataan akses dan partisipasi keluarga berencana pria.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 161,
                'code' => 'KD.02.04',
                'name' => 'Pembinaan Kesehatan Reproduksi',
                'description' => 'Arsip yang berkaitan dengan pembinaan kesehatan reproduksi meliputi pembinaan kesehatan reproduksi untuk kelangsungan hidup ibu, bayi, dan anak, pencegahan pra menstruasi syndrome dan HIV/AIDS, serta pencegahan kanker alat reproduksi dan penanggulangan infertilitas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KD.03
            [
                'secondary_classification_id' => 162,
                'code' => 'KD.03.01',
                'name' => 'Bina Keluarga Balita dan Anak',
                'description' => 'Arsip yang berkaitan dengan pembinaan keluarga balita dan anak meliputi kegiatan pembinaan kelembagaan keluarga balita dan anak serta monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 162,
                'code' => 'KD.03.02',
                'name' => 'Bina Ketahanan Remaja',
                'description' => 'Arsip yang berkaitan dengan pembinaan ketahanan remaja meliputi pembinaan kelembagaan bina ketahanan remaja serta monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 162,
                'code' => 'KD.03.03',
                'name' => 'Bina Ketahanan Keluarga Lansia dan Rentan',
                'description' => 'Arsip yang berkaitan dengan pembinaan ketahanan lansia dan usia rentan meliputi pengembangan program, pembinaan kelembagaan bina ketahanan keluarga lansia dam usia rentan, serta monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 162,
                'code' => 'KD.03.04',
                'name' => 'Pemberdayaan Ekonomi Keluarga',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan ekonomi keluarga meliputi pengembangan program usaha ekonomi keluarga, peningkatan teknologi dan permodalan usaha ekonomi keluarga, peningkatan manajemen usaha ekonomi keluarga, serta monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 162,
                'code' => 'KD.03.05',
                'name' => 'Pembinaan Keluarga Sejahtera',
                'description' => 'Arsip yang berkaitan dengan pembinaan keluarga sejahtera meliputi pengembangan program dan pembinaan kelembagaan pusat pelayanan keluarga sejahtera, serta monitoring dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KD.04
            [
                'secondary_classification_id' => 163,
                'code' => 'KD.04.01',
                'name' => 'Pelayanan Advokasi dan Komunikasi, Informasi, dan Edukasi',
                'description' => 'Arsip yang berkaitan dengan pelayanan advokasi serta komunikasi, informasi, dan edukasi tentang kependudukan mulai dari pengembangan sampai dengan pelaksanaan advokasi dan pencitraan, serta komunikasi, informasi dan edukasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 163,
                'code' => 'KD.04.02',
                'name' => 'Bina Lini Lapangan',
                'description' => 'Arsip yang berkaitan dengan pembinaan terhadap tenaga lini lapangan meliputi pengembangan tenaga lini lapangan, pengembangan institusi masyarakat perdesaan, serta pengembangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.01
            [
                'secondary_classification_id' => 170,
                'code' => 'PT.01.01',
                'name' => 'Perbibitan Ternak',
                'description' => 'Arsip yang berkaitan dengan kegiatan perbibitan ternak mulai dari produksi bibit ternak ruminansia dan non ruminansia, penilaian dan pelepasan bibit ternak, pengawasan mutu dan pengembangan bibit ternak, sampai dengan persetujuan pengeluaran/pemasukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 170,
                'code' => 'PT.01.02',
                'name' => 'Pembudidayaan Pakan Ternak',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembudidayaan pakan ternak mulai dari pembudidayaan bahan pakan, pakan hijauan, dan pakan olahan, pengawasan mutu pakan ternak, sampai dengan persetujuan pengeluaran/pemasukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 170,
                'code' => 'PT.01.03',
                'name' => 'Pembudidayaan Ternak',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembudidayaan ternak mulai dari pembudidayaan ternak potong, ternak perah, ternak unggas dan aneka ternak, hingga pengusahaan hasil pembudidayaan dan kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.02
            [
                'secondary_classification_id' => 171,
                'code' => 'PT.02.01',
                'name' => 'Penyelenggaraan Layanan Kesehatan Hewan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyelenggaraan layanan kesehatan hewan mulai dari pengamatan penyakit, pencegahan dan pemberantasan penyakit, perlindungan hewan, pengelolaan kelembagaan dan sumber daya kesehatan hewan hingga, pengawasan obat hewan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 171,
                'code' => 'PT.02.02',
                'name' => 'Kesehatan Masyarakat Veteriner dan Pascapanen',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyelenggaraan layanan kesehatan masyarakat veteriner dan pascapanen meliputi teknologi dan sarana pascapanen, higiene sanitasi, pengawasan sanitary dan keamanan produk hewan, zoonosis dan kesejahteraan hewan, pengujian dan sertifikasi produk hewan, serta persetujuan pengeluaran/pemasukan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.03
            [
                'secondary_classification_id' => 172,
                'code' => 'PT.03.01',
                'name' => 'Pengelolaan Tanaman Semusim',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan tanaman semusim mulai dari identifikasi dan pendayagunaan sumber daya, perbenihan, budi daya, hingga pemberdayaan dan pengelolaan kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 172,
                'code' => 'PT.03.02',
                'name' => 'Pengelolaan Tanaman Rempah & Penyegar',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan tanaman rempah dan penyegar mulai dari identifikasi dan pendayagunaan sumber daya, perbenihan, budidaya, hingga pemberdayaan dan pengelolaan kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 172,
                'code' => 'PT.03.03',
                'name' => 'Pengelolaan Tanaman Tahunan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan tanaman tahunan mulai dari identifikasi dan pendayagunaan sumber daya, perbenihan, budidaya, hingga pemberdayaan dan pengelolaan kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 172,
                'code' => 'PT.03.04',
                'name' => 'Perlindungan Perkebunan',
                'description' => 'Arsip yang berkaitan dengan kegiatan perlindungan perkebunan mulai dari identifikasi dan pengendalian organisme pengganggu tumbuhan tanaman semusim, organisme pengganggu tumbuhan tanaman rempah dan penyegar, organisme pengganggu tumbuhan tanaman tahunan serta perlindungan dampak perubahan iklim dan pencegahan kebakaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 172,
                'code' => 'PT.03.05',
                'name' => 'Pengelolaan Pascapanen dan Pembinaan Usaha',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan pascapanen dan pembinaan usaha meliputi pengelolaan pascapanen tanaman semusim, rempah, dan penyegar, pascapanen tanaman tahunan, bimbingan usaha dan perkebunan, serta pengelolaan gangguan usaha dan penanganan konflik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.04
            [
                'secondary_classification_id' => 173,
                'code' => 'PT.04.01',
                'name' => 'Perlindungan hortikultura',
                'description' => 'Arsip yang berkaitan dengan perlindungan hortikultura meliputi perlindungan tanaman buah, perlindungan tanaman sayuran dan tanaman obat, perlindungan tanaman florikultura, serta pengelolaan dampak iklim dan persyaratan teknis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 173,
                'code' => 'PT.04.02',
                'name' => 'Perbenihan Hortikultura',
                'description' => 'Arsip yang berkaitan dengan kegiatan perbenihan hortikultura mulai dari penilaian varietas, pengawasan mutu benih, hingga budidaya dan pascapanen florikultura.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.05
            [
                'secondary_classification_id' => 174,
                'code' => 'PT.05.01',
                'name' => 'Perluasan dan Pengelolaan Lahan',
                'description' => 'Arsip yang berkaitan dengan kegiatan perluasan dan pengelolaan lahan meliputi pengelolan basis data lahan, pengendalian lahan, optimasi, rehabilitasi dan konservasi, serta perluasan kawasan tanaman pangan termasuk kawasan hortikultura, perkebunan dan peternakan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 174,
                'code' => 'PT.05.02',
                'name' => 'Pengelolaan Air Irigasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan air irigasi meliputi pengembangan sumber air, pengembangan jaringan dan optimasi air, pengelolaan iklim, konservasi air dan lingkungan hidup, serta identifikasi dan pengembangan kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 174,
                'code' => 'PT.05.03',
                'name' => 'Pembiayaan Pertanian',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembiayaan pertanian meliputi pembiayaan program, pembiayaan syariah dan kerja sama, pembiayaan agribisnis, serta pengelolaan kelembagaan dan pemberdayaan agribisnis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 174,
                'code' => 'PT.05.04',
                'name' => 'Penggunaan Pupuk dan Pestisida',
                'description' => 'Arsip yang berkaitan dengan kegiatan penggunaan dan pengawasan pupuk dan pestisida.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 174,
                'code' => 'PT.05.05',
                'name' => 'Penggunaan Alat dan Mesin Pertanian',
                'description' => 'Arsip yang berkaitan dengan penggunaan alat dan mesin pertanian mulai dari pengembangan serta pengawasan dan peredaran alat dan mesin pertanian, hingga pengembangan kelembagaan dan pendayagunaan alat dan mesin pertanian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.06
            [
                'secondary_classification_id' => 175,
                'code' => 'PT.06.01',
                'name' => 'Perbenihan Tanaman Pangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan perbenihan tanaman pangan mulai dari penialian varietas dan pengawasan mutu benih, produksi benih serelia, produksi benih aneka kacang dan umbi, hingga pengembangan kelembagaan benih tanaman pangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 175,
                'code' => 'PT.06.02',
                'name' => 'Budidaya Serealia',
                'description' => 'Arsip yang berkaitan dengan kegiatan budidaya tanaman serelia meliputi padi irigasi dan rawa, padi tanah hujan dan lahan kering, serta serelia lain.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 175,
                'code' => 'PT.06.03',
                'name' => 'Budidaya Aneka Kacang dan Umbi',
                'description' => 'Arsip yang berkaitan dengan kegiatan budidaya tanaman aneka kacang dan umbi meliputi kedelai, ubi kayu, aneka kacang, dan aneka umbi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 175,
                'code' => 'PT.06.04',
                'name' => 'Perlindungan Tanaman Pangan',
                'description' => 'Arsip yang berkaitan dengan perlindungan tanaman pangan meliputi pengelolaan data organisme pengganggu, pengelolaan dampak perubahan iklim, penggunaan teknologi pengendalian, serta pengelolaan pengendalian hama terpadu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 175,
                'code' => 'PT.06.05',
                'name' => 'Pengelolaan Pascapanen Tanaman Pangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolan pascapanen tanaman pangan meliputi padi, jagung dan serelia lain, kedelai dan aneka kacang serta aneka umbi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.07
            [
                'secondary_classification_id' => 176,
                'code' => 'PT.07.01',
                'name' => 'Pengolahan Hasil Pertanian',
                'description' => 'Arsip yang berkaitan dengan pengolahan hasil pertanian tanaman pangan, hortikultura, perkebunan dan peternakan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 176,
                'code' => 'PT.07.02',
                'name' => 'Mutu dan Standariasi',
                'description' => 'Arsip yang berkaitan dengan pengelolaan mutu dan standarisasi hasil pertanian mulai dari penyusunan standarisasi, penerapan dan pengawasan jaminan mutu, akreditasi dan kelembagaan, hingga kerja sama dan harmonisasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 176,
                'code' => 'PT.07.03',
                'name' => 'Pengembangan Usaha dan Investasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengembangan usaha dan investasi hasil pertanian meliputi kemitraan dan kewirausahaan, investasi serta promosi hasil pertanian di dalam dan luar negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 176,
                'code' => 'PT.07.04',
                'name' => 'Pemasaran Domestik',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemasaran domestik hasil pertanian meliputi pengelolaan informasi pasar, pemantauan pasar dan stabilisasi harga, pengembangan sarana dan kelembagaan pasar serta pengembangan jaringan pemasaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.08
            [
                'secondary_classification_id' => 177,
                'code' => 'PT.08.01',
                'name' => 'Pengelolaan Ketersediaan dan Kerawanan Pangan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan ketersediaan dan kerawanan pangan meliputi analisis ketersediaan pangan, analisis dan pengembangan akses pangan, serta analisis dan penanggulangan kerawanan pangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 177,
                'code' => 'PT.08.02',
                'name' => 'Pengelolaan Distribusi dan Cadangan Pangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan distribus dan cadangan pangan meliputi analisis dan pengelolaan kelembagaan distribusi pangan, analisis harga pangan produsen dan konsumen.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 177,
                'code' => 'PT.08.03',
                'name' => 'Penganekaragaman Konsumsi dan Ketahanan Pangan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan penganekaragaman konsumsi dan ketahanan pangan meliputi pola dan kebutuhan konsumsi pangan, pengembangan pangan lokal dan promosi penganekaragaman pangan, serta pengawasan keamanan dan kelembagaan pangan segar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 177,
                'code' => 'PT.08.04',
                'name' => 'Penguatan Kelembagaan Ketahanan Pangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan penguatan kelembagaan ketahanan pangan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.09
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.01',
                'name' => 'Pengelolaan Data Karantina',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data karantina hewan dan tumbuhan mulai dari ;pendataan penyakit hewan, penyusunan teknik dan metode pendataan, pendataan kualitatif dan kuantitatif, pendataan sarana/laboratorium/lokasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.02',
                'name' => 'Inventarisasi Penyakit',
                'description' => 'Arsip yang berkaitan dengan inventarisasi penyakit hewan dan tumbuhan meliputi survei, determinasi penyakit/daerah pencar, dan pengamatan penyakit di laboratorium/kandang uji diagnosa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.03',
                'name' => 'Tindakan Karantina',
                'description' => 'Arsip yang berkaitan dengan kegiatan tindakan karantina hewan dan tumbuhan meliputi pemeriksaan, pengasingan, pengamatan, perlakuan, penahanan, penolakan, pemusnahan, serta pembebasan dari karantina.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.04',
                'name' => 'Sertifikasi Pelepasan Karantina',
                'description' => 'Arsip yang berkaitan dengan kegiatan sertifikasi pelepasan karantina hewan dan tumbuhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.05',
                'name' => 'Keamanan Pangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengawasan keamanan pangan segar asal hewan dan asal tumbuhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 178,
                'code' => 'PT.09.06',
                'name' => 'Pengawasan Tertib Operasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengawasan tertib operasional karantia hewan dan tumbuhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.10
            [
                'secondary_classification_id' => 179,
                'code' => 'PT.10.01',
                'name' => 'Pelayanan Perlindungan Varietas Tanaman',
                'description' => 'Arsip yang berkaitan dengan pelayanan perlindungan varietas tanaman mulai dari permohonan, pengujian, sampai dengan pendaftaran varietas Sumber Daya Genetik Tanaman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 179,
                'code' => 'PT.10.02',
                'name' => 'Pelayanan Perizinan Pertanian',
                'description' => 'Arsip yang berkaitan dengan pelayanan perizinan pertanian bidang pupuk, pestisida, alat dan mesin pertanian, bidang benih tanaman, bahan penelitian, teknis pangan segar asal tumbuhan, teknis pengalihan saham perkebunan, serta bidang bibit, karkas,daging, dan jeroan, pakan ternak, obat hewan, dan teknis sumber daya genetik ternak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 179,
                'code' => 'PT.10.03',
                'name' => 'Pelayanan Hukum Perlindungan Varietas Tanaman dan Perizinan Pertanian',
                'description' => 'Arsip yang berkaitan dengan pelayanan hukum perlindungan varietas tanaman dan perizinan pertanian meliputi sertifikasi dan penyusunan pertimbangan hukum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PT.12
            [
                'secondary_classification_id' => 181,
                'code' => 'PT.12.01',
                'name' => 'Penyelenggaraan Penyuluhan',
                'description' => 'Arsip yang berkaitan dengan penyelengaraan penyuluhan meliputi penyusunan rencana kebutuhan dan pelaksanaan penyuluhan melalui sekolah lapang dan demonstrasi plot.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 181,
                'code' => 'PT.12.02',
                'name' => 'Pengelolaan Sarana dan Prasana Penyuluhan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sarana dan prasarana penyuluhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 181,
                'code' => 'PT.12.03',
                'name' => 'Pengelolaan Kelembagaan Penyuluhan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan kelembagaan penyuluhan meliputi pengelolaan database kelompok tani dan nelayan Indonesia, penyusunan rekomendasi dan kerja sama penyuluhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PK.01
            [
                'secondary_classification_id' => 184,
                'code' => 'PK.01.01',
                'name' => 'Pengelolaan Prasarana dan Sarana Budidaya',
                'description' => 'Arsip yang berkaitan dengan pengelolaan prasarana dan sarana budidaya perikanan meliputi pengelolaan lahan dan air, prasana dan sarana budidaya air tawar, serta minapolitan budidaya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 184,
                'code' => 'PK.01.02',
                'name' => 'Perbenihan',
                'description' => 'Arsip yang berkaitan dengan kegiatan perbenihan ikan mulai dari perbenihan induk, perbenihan skala kecil dan skala besar, penyusunan standarisasi dan sertfikasi, hingga pengelolaan informasi dan distribusi perbenihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 184,
                'code' => 'PK.01.03',
                'name' => 'Produksi Perikanan',
                'description' => 'Arsip yang berkaitan dengan kegiatan produksi perikanan mulai dari budidaya ikan air tawar, ikan hias, sertifikasi, hingga pengelolaan data produksi perikanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 184,
                'code' => 'PK.01.04',
                'name' => 'Pengelolaan Kesehatan Ikan dan Lingkungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan kesehatan ikan dan lingkungan meliputi pengendalian hama dan penyakit ikan, perlindungan lingkungan budidaya, standarisasi kesehatan dan lingkungan, pengawasan obat ikan, serta pengendalian residu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 184,
                'code' => 'PK.01.05',
                'name' => 'Usaha Budidaya',
                'description' => 'Arsip yang berkaitan dengan kegiatan usaha budidaya perikanan mulai dari pengelolaan investasi dan permodalan, pembinaan kewirausahaan, pelayanan usaha, pengembangan kelembangaan hingga pengelolaan informasi dan promosi usaha budidaya perikanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PK.02
            [
                'secondary_classification_id' => 185,
                'code' => 'PK.02.01',
                'name' => 'Tindak Karantina Ikan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelaksanaan tindakan karantina ikan mulai dari pemeriksaan, penahanan, pengasingan, pengamatan, perlakukan, penolakan, pemusnahan hingga pelepasan/pembebasan ikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 185,
                'code' => 'PK.02.02',
                'name' => 'Tertib Operasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengawasan tertib operasional budidaya perikanan mulai dari pengajuan permohonan sampai dengan persetujuan/rekomendasi budidaya pemasukan/pengeluaran ikan, serta penyusunan persyaratan lalu lintas pemasukan dan pengeluaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 185,
                'code' => 'PK.02.03',
                'name' => 'Pencegahan Penyakit',
                'description' => 'Arsip yang berkaitan dengan kegiatan pencegahan penyakit meliputi penutupan area dan penentuan pelanggaran lalu-lintas ikan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 185,
                'code' => 'PK.02.04',
                'name' => 'Pengawasan Karantina Ikan',
                'description' => 'Arsip yang berkaitan dengan pengawasan karantina ikan meliputi pengawsan peraturan dan pelaksanaan operasional karantina.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 185,
                'code' => 'PK.02.05',
                'name' => 'Pengelolaan Instalasi Karantina',
                'description' => 'Arsip yang berkaitan dengan instalasi karantina ikan meliputi karantina di instalasi karantina sementara dan lokasi karantina.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PS.01
            [
                'secondary_classification_id' => 187,
                'code' => 'PS.01.01',
                'name' => 'Pembinaan dan Pengendalian Sumber Daya Manusia Persandian',
                'description' => 'Arsip yang berkaitan dengan pembinaan dan pengendalian SDM persandian mulai dari pendataan personel sandi, pembinaan personel sandi, sampai dengan pengawasan dan pengendalian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 187,
                'code' => 'PS.01.02',
                'name' => 'Pembinaan dan Pengendalian Materiil dan Jaring Komunikasi Persandian',
                'description' => 'Arsip yang berkaitan dengan pembinaan dan pengendalian materiil dan jaringan komunikasi persandian meliputi data materiil dan JKS, serta analisa kebutuhan materiil dan jaringan komunikasi sandi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 187,
                'code' => 'PS.01.03',
                'name' => 'Akreditasi dan Sertifikasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan akreditasi pendidikan dan pelatihan persandian, serta sertifikasi alat sandi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PS.02
            [
                'secondary_classification_id' => 188,
                'code' => 'PS.02.01',
                'name' => 'Pengamanan Sinyal',
                'description' => 'Arsip yang berkaitan dengan pengamanan sinyal pada teknik sandi dan kripto mulai dari perencanaan, administrasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 188,
                'code' => 'PS.02.02',
                'name' => 'Analisis Sinyal',
                'description' => 'Arsip yang berkaitan dengan analisis sinyal pada teknik sandi dan kripto mulai dari perencanaan, administrasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 188,
                'code' => 'PS.02.03',
                'name' => 'Materil Sandi',
                'description' => 'Arsip yang berkaitan dengan pengamanan materil sandi pada sistem dan peralatan sandi mulai dari perencanaan, administrasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // ST.01
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.01',
                'name' => 'Perencanaan',
                'description' => 'Arsip yang berkaitan dengan perencanaan sensus meliputi master plan dan network planning, perumusan dan penyusunan bahan, serta penyusunan studi pendahuluan (desk study).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.02',
                'name' => 'Persiapan',
                'description' => 'Arsip yang berkaitan dengan persiapan sensus mulai dari penyusunan rancangan organisasi kegiatan sensus, kuesioner, konsep dan definisi, metodologi, buku pedoman, serta peta dan muatan peta wilayah kerja, sampai dengan sosialisasi, koordinasi, pelatihan, penyusunan program pengolahan, perancangan, serta uji coba kuesioner.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.03',
                'name' => 'Pelaksanaan Lapangan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan lapangan sensus mulai dari pelaksanaan listing, pemilahan sampel, pengumpulan data, pemeriksaan, pengawasan lapangan, sampai dengan monitoring kualitas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.04',
                'name' => 'Pengolahan',
                'description' => 'Arsip yang berkaitan dengan pengolahan sensus mulai dari pengelolaan dokumen, pemeriksaan dokumen dan pengkodean, perekaman data, tabulasi data, pemeriksaan tabulasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.05',
                'name' => 'Analisis dan Penyajian Hasil Sensus',
                'description' => 'Arsip yang berkaitan dengan analisis dan penyajian hasil sensus mulai dari pembahasan angka hasil pengolahan, penyusunan angka sementara, penyusunan angka tetap, pembahasan draf publikasi, analisis data, sampai dengan penyusunan publikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 190,
                'code' => 'ST.01.06',
                'name' => 'Diseminasi hasil sensus',
                'description' => 'Arsip yang berkaitan dengan kegiatan diseminasi hasil sensus mulai dari penyusunan bahan untuk penyebaran informasi ke publik bentuk leaflet, booklet, website, CD dan sejenisnya, sampai dengan sosialisasi hasil survei melalui berbagai media serta layanan dan promosi statistik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // ST.02
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.01',
                'name' => 'Perencanaan',
                'description' => 'Arsip yang berkaitan dengan perencanaan survei meliputi master plan dan network planning, perumusan dan penyusunan bahan, serta penyusunan studi pendahuluan (desk study).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.02',
                'name' => 'Persiapan',
                'description' => 'Arsip yang berkaitan dengan persiapan survei mulai dari penyusunan rancangan organisasi kegiatan sensus, kuesioner, konsep dan definisi, metodologi, buku pedoman pencacahan, pengawasan dan pengolahan, serta peta dan muatan peta wilayah kerja, pedoman sosialisasi, sampai dengan sosialisasi, koordinasi, pelatihan instruktur dan petugas, penyusunan program pengolahan, perancangan tabel, serta pelaksanaan uji coba kuesioner.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.03',
                'name' => 'Pelaksanaan Lapangan',
                'description' => 'Arsip yang berkaitan dengan pelaksanaan lapangan survei mulai dari pelaksanaan listing, pemilahan sampel, pengumpulan data, pemeriksaan, pengawasan lapangan, sampai dengan monitoring kualitas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.04',
                'name' => 'Pengolahan',
                'description' => 'Arsip yang berkaitan dengan pengolahan survei mulai dari pengelolaan dokumen, pemeriksaan dokumen dan pengkodean, perekaman data, tabulasi data, pemeriksaan tabulasi, sampai dengan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.05',
                'name' => 'Analisis dan Penyajian Hasil Survei',
                'description' => 'Arsip yang berkaitan dengan analisis dan penyajian hasil survei mulai dari pembahasan angka hasil pengolahan, penyusunan angka sementara, penyusunan angka tetap, pembahasan draf publikasi, analisis data, sampai dengan penyusunan publikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 191,
                'code' => 'ST.02.06',
                'name' => 'Diseminasi hasil Survei',
                'description' => 'Arsip yang berkaitan dengan kegiatan diseminasi hasil survei mulai dari penyusunan bahan untuk penyebaran informasi ke publik bentuk leaflet, booklet, website, CD dan sejenisnya, sampai dengan sosialisasi hasil survei melalui berbagai media.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BC.01
            [
                'secondary_classification_id' => 194,
                'code' => 'BC.01.01',
                'name' => 'Pengelolaan Sarana dan Prasarana',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sarana dan prasarana pencarian dan pertolongan terhadap kondisi bencana, kecelakaan, dan kondisi bahaya mulai dari penyusunan rencana dan standarisasi, pemeliharaan sarana dan prasarana darat, laut, udara, serta peralatan pencarian dan pertolongan, hingga pengawakan dan perbekalan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 194,
                'code' => 'BC.01.02',
                'name' => 'Bina Ketenagaan dan Pemasyarakatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan bina ketenagaan dan pemasyarakatan korban bencana, kecelakaan dan pertolongan mulai dari penyusunan rencana pendidikan dan pelatihan, penyiapan tenaga dan potensi pencarian dan pertolongan, sampai dengan pemasyarakatan dan sertifikasi pencarian dan pertolongan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BC.02
            [
                'secondary_classification_id' => 195,
                'code' => 'BC.02.01',
                'name' => 'Operasi dan Latihan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan operasi dan latihan pencarian dan pertolongan mulai dari perencanaan standardisasi, penyelenggaraan operasi SAR, sampai dengan siaga dan latihan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 195,
                'code' => 'BC.02.02',
                'name' => 'Komunikasi Pencarian dan Pertolongan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraa komunikasi pencarian dan pertolongan mulai dari penyusunan rencana, pelaksanaan operasi komunikasi, sampai dengan inventarisasi dan pemeliharaan perangkat komunikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // BC.03
            [
                'secondary_classification_id' => 196,
                'code' => 'BC.03.01',
                'name' => 'Pencegahan dan Kesiapsiagaan',
                'description' => 'Arsip yang berkaitan dengan pencegahan dan kesiapsiagaan terhadap bencana meliputi kajian dan mitigasi resiko bencana, pemberdayaan masyarakat untuk persiapan bencana, sampai dengan kesiapsiagaan berupa peringatan dini, perencanaan siaga, dan penyiapan sumber daya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 196,
                'code' => 'BC.03.02',
                'name' => 'Penanganan Darurat',
                'description' => 'Arsip yang berkaitan dengan penanganan kondisi darurat bencana meliputi tanggap darurat, pengurusan bantuan darurat, serta perbaikan darurat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 196,
                'code' => 'BC.03.03',
                'name' => 'Rehabilitasi dan Rekontruksi',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan rehabilitasi dan rekonstruksi kondisi akibat bencana meliputi penilaian kerusakan, pemulihan dan peningkatan fisik dan sosial ekonomi, serta penanganan pengungsi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 196,
                'code' => 'BC.03.04',
                'name' => 'Logistik dan Peralatan',
                'description' => 'Arsip yang berkaitan dengan penanganan logistik dan peralatan dalam penanggulangan bencana meliputi inventarisasi kebutuhan dan pengadaan logistik, penyimpanan dan distribusi logistik, inventarisasi kebutuhan dan pengadaan peralatan, penyimpanan dan pemeliharaan peralatan, serta pengerahan dan distribusi peralatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // SO.01
            [
                'secondary_classification_id' => 198,
                'code' => 'SO.01.01',
                'name' => 'Kesejahteraan Sosial Anak',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pelayanan kesejahteraan sosial anak meliputi kesejahteraan sosial anak balita, anak terlantar, anak yang berhadapan dengan hukum, anak dengan kecacatan, serta anak yang membutuhkan perlindungan khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 198,
                'code' => 'SO.01.02',
                'name' => 'Rehabilitasi Sosial Penyandang Disabilitas',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan rehabilitasi sosial bagi penyandang disabilitas dengan kecacatan tubuh dan bekas penderita penyakit kronis, tuna netra dan tuna rungu wicara, serta tuna mental meliputi rehabilitasi di dalam dan di luar panti, pengelolaan kelembagaan dan advokasi sosial, serta asistensi dan pemeliharaan sosial.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 198,
                'code' => 'SO.01.03',
                'name' => 'Rehabilitasi Sosial Tuna Sosial',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan rehabilitasi sosial bagi tuna sosial meliputi Gelandangan, pengemis dan pemulung, tuna susila dan korban traffiking perempuan, bekas warga binaan lembaga pemasyarakatan, orang dengan human immunodeficiency virus dan acquired immune deficiency syndrome (HIV/AIDS) dan kelompok minoritas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 198,
                'code' => 'SO.01.04',
                'name' => 'Rehabilitasi Sosial Korban Penyalahgunaan Obat-obatan Terlarang',
                'description' => 'Arsip yang berkaitan dengan pelayanan rehabilitasi sosial bagi korban penyalahgunaan obat-obatan terlarang meliputi kegiatan pencegahan penyalahgunaan dan rehabiliatsi korban penyalahgunaan Narkotika, Psikotropika, dan Zat Adiktif (NAPZA).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 198,
                'code' => 'SO.01.05',
                'name' => 'Pelayanan sosial lanjut usia',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelayanan sosial bagi orang lanjut usia meliputi pelayanan di dalam dan di luar panti, pengembangan kelembagaan, serta advokasi dan pelayanan kedaruratan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // SO.02
            [
                'secondary_classification_id' => 199,
                'code' => 'SO.02.01',
                'name' => 'Pengumpulan dan pengelolaan sumber dana bantuan sosial',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengumpulan dan pengelolaan sumber dana bantuan sosial meliputi kegiatan bimbingan dan standarisasi serta perizinan dan pengumpulan dana sosial.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 199,
                'code' => 'SO.02.02',
                'name' => 'Perlindungan Sosial Korban Tindak Kekerasan dan pekerja migran',
                'description' => 'Arsip yang berkaitan dengan pelayanan perlindungan sosial bagi korban tindak kekerasan dan pekerja migran meliputi pemulihan sosial, pemulangan dan registrasi, serta evaluasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 199,
                'code' => 'SO.02.03',
                'name' => 'Perlindungan sosial korban bencana sosial',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelayanan perlindungan sosial bagi korban bencana sosial meliputi pembinaan ketahanan sosial masyarakat, tanggap darurat sosial, pemulihan sosial, serta kerja sama sosial baik dengan pemerintah maupun non pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 199,
                'code' => 'SO.02.04',
                'name' => 'Perlindungan sosial korban bencana alam',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelayanan perlindungan sosial bagi korban bencana alam meliputi pembinaan kesiapsiagaan dan mitigasi, tanggap darurat sosial, pemulihan dan penguatan sosial serta kerja sama sosial penanganan korban bencana alam baik dengan pemerintah maupun non pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 199,
                'code' => 'SO.02.05',
                'name' => 'Pelayanan Jaminan sosial',
                'description' => 'Arsip yang berkaitan dengan pelayanan jaminan sosial meliputi seleksi dan verifikasi, pengembangan kelembagaan asuransi kesejahteraan sosial, pemberian bantuan langsung dan tunjangan berkelanjutan serta kerja sama jaminan sosial baik dengan pemerintah maupun non pemerintah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // SO.03
            [
                'secondary_classification_id' => 200,
                'code' => 'SO.03.01',
                'name' => 'Pemberdayaan keluarga dan kelembagaan sosial',
                'description' => 'Arsip yang berkaitan dengan pemberdayaan keluarga dan kelembagaan sosial meliputi pembinaan ketahanan keluarga, asistensi keluarga dan pemberdayaan perempuan, pembinaan tenaga kesejahteraan sosial masyarakat dan organisasi sosial, pembinaan kemitraan dunia usaha, serta pembinaan karang taruna.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 200,
                'code' => 'SO.03.02',
                'name' => 'Pemberdayaan komunitas adat terpencil',
                'description' => 'Arsip yang berkaitan dengan pemberdayaan komunitas adat terpencil meliputi persiapan pemberdayaan, pemberdayaan sumber daya manusia, penggalian dan pengembangan potensi, pembinaan keserasian dan penguatan komunitas adat terpencil, serta kerja sama kelembagaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 200,
                'code' => 'SO.03.03',
                'name' => 'Penanggulangan kemiskinan perkotaan dan Perdesaan',
                'description' => 'Arsip yang berkaitan dengan penanggulangan kemiskinan perkotaan dan perdesaan meliputi identifikasi dan analisis, pengembangan kapasitas sumber daya manusia dan usaha, penataan sosial lingkungan rumah, serta advokasi dan pengembangan aksesibiltas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 200,
                'code' => 'SO.03.04',
                'name' => 'Pelayanan Pemberian Gelar Kepahlawanan, keperintisan, dan kesetiakawanan sosial',
                'description' => 'Arsip yang berkaitan dengan pelayanan pemberian gelar kepahlawanan, keperintisan, dan kesetiakawanan sosial meliputi pemberian pengharagaan dan kesejahteraan keluarga pahlawan, pelestarian nilai-nilai kepahlawanan dan keperintisan, pengembangan kesetiakawanan sosial serta, pengelolaan taman makam pahlawan di daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.01
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.01',
                'name' => 'Upaya Kesehatan Dasar',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyelengaraan upaya kesehatan dasar meliputi pelayanan kesehatan antara lain kedokteran keluarga, praktik klinis dokter fasyankes primer, kesehatan gigi dan mulut, pencegahan infrksi menular dan penyakit mulut, pembiayaan dan penggunaan darah, unit dan jejaring pelayanan darah, upaya kesehatan di daerah terpencil, sangat terpencil, dan kepulauan, serta pemilihan puskesmas berprestasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.02',
                'name' => 'Upaya Kesehatan Rujukan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyelenggaraan upaya kesehatan rujukan meliputi pelayanan kesehatan rujukan di rumah sakit dan fasilitas pelayanan kesehatan lain, serta perdagangan jasa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.03',
                'name' => 'Pengurusan Organisasi Kedoteran',
                'description' => 'Arsip yang berkaitan dengan pengurusan organisasi kedokteran meliputi pelayanan kedokteran, organisasi profesi dan konsorsium upaya kesehatan (KUK), serta badan pengawas di rumah sakit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.04',
                'name' => 'Pelayanan Pasien Jaminan Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pelayanan pasien dengan jaminan kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.05',
                'name' => 'Keperawatan dan Keteknisian Medik',
                'description' => 'Arsip yang berkaitan dengan pelayanan keperawatan dan keteknisan medis meliputi pelayanan keperawatan dasar, profesional di rumah sakit, pembinaan pelayanan kebidanan, serta pembinaan pelayanan keteknisian medik dan keterapian fisik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.06',
                'name' => 'Penunjang Medik dan Sarana Kesehatan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pelayanan penunjang medik dan sarana kesehatan meliputi pelayanan laboratorium mikrobiologi dan imunologi, pelayanan patologi dan toksikologi, pelayanan radiologi, perijinan dan sertifikasi pelayanan radiologi, serta penyelenggaraan sarana dan prasaranan kesehatan, peralatan medis di fasilitas pelayanan kesehatan, dan aplikasi sarana dan prasarana alat kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 202,
                'code' => 'KS.01.07',
                'name' => 'Kesehatan Jiwa',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan jiwa meliputi layanan kesehatan jiwa dan non fasilitas, bina kesehatan jiwa di fasilitas pelayanan kesehatan, penanggulanngan penelantaran penderita ganguan jiwa, pencegahan dan penanggulangan masalah kecanduan narkotika, obat terlarang, alkohol, dan zat adiktif lainnya, serta pelayanan kesehatan jiwa kelompok berisiko.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.02
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.01',
                'name' => 'Surveilans dan Respon Kejadian Luar Biasa (KLB)',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian penyakit melalui kegiatan surveillans dan respon terhadap kejadian luar biasa di bidang kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.02',
                'name' => 'Imunisasi',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian penyakit melalui kegiatan imunisasi meliputi penyelenggaraan imunisasi bagi bayi, balita, masyarakat umum, petugas kesehatan, wanita usia subur, dan masyarakat daerah sulit, coldchain bagi petugas imunisasi, Pekan Imunisasi Nasional, serta penyelenggaraan vaksin dan serum program imunisasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.03',
                'name' => 'Karantina Kesehatan dan Kesehatan Pelabuhan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian penyakit melalui kegiatan karantina kesehatan dan kesehatan pelabuhan meliputi pemberian ICV, penghapusan serangga dan tikus, pengendalian resiko kesehatan lingkungan, kaksinasi meningitis, pengendalian kesehatan nahkoda/pilot dan ABK/Pesawat, pengendalian air bersi dan fumigasi kapal.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.04',
                'name' => 'Pelayananan Kesehatan Matra',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian penyakit dan penyehatan lingkungan melalui kegiatan pelayanan kesehatan matra antara lain program mudik sehat, pelayanan kesehatan penumpang, migran, penyelaman dan hyperbarik, penanggulangan kesehatan akibat gangguan kamtibmas, serta pelayanan kesehatan transmigrasi bagi tenaga kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.05',
                'name' => 'Pengendalian Penyakit Menular Langsung',
                'description' => 'Arsip yang berkaitan dengan pengendalian penyakit menular secara langsung meliputi pengendalian tubekulosis, penyakit seksual, pernafasan akut, pencernaan, serta pengendalian kusta dan frambusia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.06',
                'name' => 'Pengendalian Penyakit Bersumber Binatang',
                'description' => 'Arsip yang berkaitan dengan pengendalian penyakit yang bersumber dari binatang meliputi pengendalian malaria, arbovirosisi, zoonosis, filariasis dan kecacingan, serta pengendalian vektor.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.07',
                'name' => 'Pengendalian Penyakit Tidak Menular',
                'description' => 'Arsip yang berkaitan dengan pengendalian penyakit tidak menular meliputi pengendalian penyakit darah, penyakit metabolik, penyakit kanker, penyakit kronis dan generatif, serta pengendalian penyakit akibat tindak kekerasan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.08',
                'name' => 'Penyehatan Lingkungan',
                'description' => 'Arsip yang berkaitan dengan upaya penyehatan lingkungan meliputi penyehatan air dan sanitasi dasar, penyehatan umum, penyehatan kawasan dan sanitasi darurat, higiene sanitasi pangan, serta pengamanan limbah dan radiasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 203,
                'code' => 'KS.02.09',
                'name' => 'Pengembangan dan Penapisan Teknologi Pengendalian Penyakit dan Penyehatan Lingkungan',
                'description' => 'Arsip yang berkaitan dengan pengembangan dan penapisan teknologi pengendalian penyakit dan penyehatan lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.03
            [
                'secondary_classification_id' => 204,
                'code' => 'KS.03.01',
                'name' => 'Pengembangan Teknologi Laboratorium',
                'description' => 'Arsip yang berkaitan dengan pengembangan teknologi laboratorium melalui pengembangan model dan teknologi yang tepat guna, uji kendali mutu, dan kalibrasi serta pengawasan penggunaan fasilitas pelayanan instalasi laboratorium.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 204,
                'code' => 'KS.03.02',
                'name' => 'Layanan Sertifikasi Sanitasi Kesehatan dan Pengujian Kesehatan',
                'description' => 'Arsip yang berkaitan dengan layanan sertifikasi sanitasi kesehatan dan pengujian kesehatan meliputi sertifikasi ship sanitation dan sertifikasi kesehatan kesehatan, sertifikasi vaksinasi internasional, sertifikasi air bersih, sertifikasi laik higiene sanitasi jasa boga dan rumah makan, surat keterangan pengujian kesehatan nahkoda/pilot dan anak buah kapal/pesawat, serta rekomendasi hasil uji laboratorium.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.04
            [
                'secondary_classification_id' => 205,
                'code' => 'KS.04.01',
                'name' => 'Penanggulanagan Masalah Gizi',
                'description' => 'Arsip yang berkaitan dengan penanggulangan masalah gizi meliputi gizi mikro, gizi makro, gizi klinik dan dietetik, konsumsi makan dan jasa makanan, serta kewaspadaan gizi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 205,
                'code' => 'KS.04.02',
                'name' => 'Pelayanan Kesehatan Ibu',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan ibu meliputi kesehatan kehamilan, kesehatan persalinan, keluarga berencana, kesehatan maternal dengan pencegahan komplikasi, serta perlindungan kesehatan reproduksi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 205,
                'code' => 'KS.04.03',
                'name' => 'Pelayanan Kesehatan Anak',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan anak meliputi kelangsungan hidup bayi, balita dan anak usia sekolah, kewaspadaan penanganan balita beresiko, kualitas hidup anak usia sekolah dan remaja, serta perlindungan kesehatan anak.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.05
            [
                'secondary_classification_id' => 206,
                'code' => 'KS.05.01',
                'name' => 'Kesehatan Tradisional Keterampilan',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan tradisonal dengan keterampilan meliputi akupresure, asuhan mandiri kesehatan tradisional, pelayanan kesehatan tradisional di fasyankes, dan pelayanan kesehatan tradisional keterampilan lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 206,
                'code' => 'KS.05.02',
                'name' => 'Kesehatan Tradisional Ramuan',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan dengan ramuan tradisional meliputi health tourism, peningkatan pemanfaatan taman obat keluarga (TOGA), pelayanan sehat pakai air (SPA), asuhan mandiri kesehatan tradisional, serta pelayanan kesehatan tradisional ramuan di fasyankes.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 206,
                'code' => 'KS.05.03',
                'name' => 'Kesehatan Alternatif dan Komplementer',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan alternatif dan komplementer meliputi akupuntur, obat herbal/obat tradisional, integrasi yankestrad, serta pelayanan alternatif komplementer lainnya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 206,
                'code' => 'KS.05.04',
                'name' => 'Penapisan dan Kemitraan',
                'description' => 'Arsip yang berkaitan dengan penapisan dan kemitraan pengobatan tradisional meliputi sentra penerapan dan pengembangan tradisional (SP3T), kelompok kerja nasional dan penapisan pengobatan tradisional, alternatif, dan komplementer, serta pengobatan tradisional dan asosioasi pengobatan tradisional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.06
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.01',
                'name' => 'Pelayanan Kesehatan Kerja',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan kerja meliputi pelayanan kesehatan penyakit akibat kerja, pemeriksaan kesehatan pekerjaan dan pemeriksaan calon tenaga kerja Indonesia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.02',
                'name' => 'Peningkatan Kapasitas Kesehatan Kerja',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan kapasitas kesehatan kerja meliputi penyelenggaraan gerakan pekerjaan perempuan sehat produktif, peningkatan kesehatan kerja, serta TP ASI.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.03',
                'name' => 'Peningkatan Kesehatan di Lingkungan kerja',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan kesehatan di lingkungan kerja meliputi pelayanan kesehatan kerja di KKP, peningkatan K3 perkantoran, rumah sakit dan puskesma, serta biomonitoring efek kesehatan dan revieu pedoman pengendalian resiko kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.04',
                'name' => 'Penyelenggaraan Kemitraan kesehatan kerja',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan kemitraan kesehatan kerja meliputi pengembangan jabfung pembimbing kesehatan kerja, kesehatan nelayan, integrasi pos UKK, penguatan profesi kesehatan, serta penyelenggaraan kemitraan kesehatan tingkat provinsi/kabupaten/kota percontohan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.05',
                'name' => 'Peningkatan Kesehatan Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan kesehatan perkotaan meliputi peningkatan kesehatan kawasan kumuh dan miskin kabupaten dan kota, serta penyelenggaraan forum kota dalam rangka peningkatan kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 207,
                'code' => 'KS.06.06',
                'name' => 'Layanan Kesehatan Olahraga',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan olahraga meliputi kegiatan kebugaran jasmani bagi karyawan/pekerja, bagi calon jemaah haji, dan bagi usia sekolah, olahraga bagi ibu hamil/masa nifas dan bagi usia lanjut, serta pelayanan kesehatan olahraga masyarakat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.07
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.01',
                'name' => 'Pengawasan Obat Publik dan Perbekalan Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pengawasan obat publik dan perbekalan kesehatan meliputi pengawasan harga obat publik, pengadaan obat, serta perbekalan kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.02',
                'name' => 'Pengawasan Produksi dan Distribusi Alat Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pengawasan produksi dan distribusi alat kesehatan, obat, dan produk kesehatan rumah tangga.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.03',
                'name' => 'Pengawasan Standarisasi, Klinis, Komunitas Farmasi, dan Obat Rasional',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengawasan standarisasi layanan farmasi klinis, komunitas farmasi dan penggunaan obat rasional.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.04',
                'name' => 'Pengawasan Produksi dan Distribusi Kefarmasian',
                'description' => 'Arsip yang berlaitan dengan pengawasan produksi dan distribusi kefarmasian terhadap obat tradisional serta kosmetik dan bahan makanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.05',
                'name' => 'Pengawasan Narkotika, Psikotropika, Prekursor Farmasi dan Sediaan Farmasi Khusus',
                'description' => 'Arsip yang berkaitan dengan pengawasan penggunaan narkotika, psikotropika, prekusor framasi dan sediaan farmasi khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 208,
                'code' => 'KS.07.06',
                'name' => 'Pengawasan Kemandirian Obat dan Bahan Baku Obat',
                'description' => 'Arsip yang berkaitan dengan pengawasan kemandirian obat dan bahan baku obat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.08
            [
                'secondary_classification_id' => 209,
                'code' => 'KS.08.01',
                'name' => 'Perizinan dan Penetapan Kelas Rumah Sakit Kelas C dan Penanam Modal Asing (PMA)',
                'description' => 'Arsip yang berkaitan dengan kegiatan proses perizinan dan penetapan kelas rumah sakit kelas C dan penanaman modal asing mulai dari usulan penetapan atau peningkatan kelas dari pemilik RS atau pimpinan badan hukum rumah sakit, rekomendasi dinas kesehatan, profil dan data rumah sakit, self instrument assessment, keputusan penetapan kelas, serta pemberian sertifikat lulus akreditasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 209,
                'code' => 'KS.08.02',
                'name' => 'Akreditasi Rumah Sakit dan Fasilitas Kesehatan Lain',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemenuhan akreditasi rumah sakit dan fasilitas kesehatan lain.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 209,
                'code' => 'KS.08.03',
                'name' => 'Sertifikasi dan Perizinan Alat Kesehatan',
                'description' => 'Arsip yang berkaitan dengan sertifikasi dan perizinan alat kesehatan meliputi sertifikasi produksi alat kesehatan, sertifikasi sarana distribusi alat kesehatan, sertifikasi produksi PKRT, surat keterangan PKRT, surat keterangan alat kesehatan, surat kesehatan special access scheme (SAS), perijinan dan pengawasan alat kesehatan, serta perijinan penyalur alat kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.09
            [
                'secondary_classification_id' => 210,
                'code' => 'KS.09.01',
                'name' => 'Pencegahan, Mitigasi, dan Kesiapsiagaan Krisis Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pencegahan, mitigasi dan kesiapsiagaan dalam menanggulangi krisis kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 210,
                'code' => 'KS.09.02',
                'name' => 'Tanggap Darurat dan Pemulihan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan tanggap darurat dan pemulihan krisis kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 210,
                'code' => 'KS.09.03',
                'name' => 'Pemantauan dan Informasi',
                'description' => 'Arsip yang berkaitan dengan pemantauan dan layanan informasi penanggulangan krisis kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 210,
                'code' => 'KS.09.04',
                'name' => 'Penanggulangan Krisis Kesehatan dalam Bidang Pengendalian Penyakit dan Penyehatan',
                'description' => 'Arsip yang berkaitan dengan penanggulangan krisis kesehatan dalam bidang pengendalian penyakit dan penyehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 210,
                'code' => 'KS.09.05',
                'name' => 'Pelayanan Kesehatan Reproduksi Situasi Bencana',
                'description' => 'Arsip yang berkaitan dengan pelayanan kesehatan reproduksi pada situasi bencana.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.12
            [
                'secondary_classification_id' => 213,
                'code' => 'KS.12.01',
                'name' => 'Pelayanan dan Pendayagunaan Sumber Daya Kesehatan Haji',
                'description' => 'Arsip yang berkaitan dengan pelayanan dan pendayagunaan sumber daya kesehatan haji meliputi pemeriksaan, pelayanan kesehatan, klai pelayanan kesehatan, serta rekruitmen panitia penyelenggara ibadah haji dan tenaga musiman.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 213,
                'code' => 'KS.12.02',
                'name' => 'Peningkatan Kesehatan dan Pengendalian Faktor Risiko Kesehatan Haji',
                'description' => 'Arsip yang berkaitan dengan kegiatan peningkatan kesehatan dan pengendalian faktor risiko kesehatan haji meliputi advokasi dan kemitraan pembinaan kesehatan, kesehatan haji di kabupaten/kota, kesehatan haji terpadu, pemeriksaan jasa boga catering jemaah haji, sanitasi asrama haji, serta penyelenggaraan kesehatan haji di Indonesia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KS.13
            [
                'secondary_classification_id' => 214,
                'code' => 'KS.13.01',
                'name' => 'Pengembangan Sarana Promosi Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pengembangan sarana promosi kesehatan melalui media publikasi, pelrlombaan, dan seminar.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 214,
                'code' => 'KS.13.02',
                'name' => 'Pengembangan Pesan Promosi Kesehatan',
                'description' => 'Arsip yang berkaitan dengan pengembangan pesan promosi kesehatan untuk masyarakat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 214,
                'code' => 'KS.13.03',
                'name' => 'Pembinaan Advokasi dan Kemitraan serta Pemberdayaan Peran',
                'description' => 'Arsip yang berkaitan dengan pembinaan advokasi dan kemitraan serta pemberdayaan peran di bidang kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 214,
                'code' => 'KS.13.04',
                'name' => 'Penyelenggaraan Peringatan Hari kesehatan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan peringatan hari kesehatan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI.03
            [
                'secondary_classification_id' => 217,
                'code' => 'KI.03.01',
                'name' => 'Rencana Penataan Sumber Daya',
                'description' => 'Arsip yang berkaitan dengan rencana penataan sumber daya meliputi peta alokasi spektrum dinas, peta alokasi spektrum non dinas tetap dan bergerak darat, serta hasil analisa ekonomi sumber daya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 217,
                'code' => 'KI.03.02',
                'name' => 'Operasi Sumber Daya',
                'description' => 'Arsip yang berkaitan dengan operasi sumber daya meliputi pelayanan spektrum dinas, pelayanan spektrum non dinas, sertifikasi operator radio, penanganan biaya, serta konsultansi dan data operator sumber daya.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 217,
                'code' => 'KI.03.03',
                'name' => 'Pengendalian Sumber Daya dan Perangkat Informatika',
                'description' => 'Arsip yang berkaitan dengan pengendalian sumber daya dan perangkat pos dan informatika yang meliputi pengelolaan sistem monitoring spektrum, pengelolaan sistem informasi manajemen spektrum, monitoring dan penertiban spektrum, serta monitoring dan penertiban.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI.04
            [
                'secondary_classification_id' => 218,
                'code' => 'KI.04.01',
                'name' => 'Layanan Telekomunikasi',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan layanan telekomunikasi meliputi layanan jaringan telekomunikasi, layanan jasa telekomunikasi, penomoran telekomunikasi dan informatika, tarif dan interkoneksi, serta kelayakan sistem telekomunikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 218,
                'code' => 'KI.04.02',
                'name' => 'Penyiaran',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan penyiaran meliputi pemetaan dan database, verifikasi dan uji coba siaran, radio, televisi dan iklim usaha penyiaran.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 218,
                'code' => 'KI.04.03',
                'name' => 'Telekomunikasi Khusus, Penyiaran Publik, dan Kewajiban Universal',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan telekomunikasi khusus, penyiaran publik dan kewajiban universal meliputi telekomunikasi khusus pemerintah, telekomunikasi khusus non pemerintah, layanan khusus penyiaran, pelayanan kewajiban universal, serta pengembangan infrastruktur.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 218,
                'code' => 'KI.04.04',
                'name' => 'Pengendalian Informatika',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian informatika meliputi monitoring dan evaluasi jaringan dan jasa telekomunikasi, monitoring dan evaluasi penyiaran, serta pencegahan dan penertiban.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI.05
            [
                'secondary_classification_id' => 219,
                'code' => 'KI.05.01',
                'name' => 'Pengembangan e-Government',
                'description' => 'Arsip yang berkaitan dengan pengelolaan e-government mencakup program dan evaluasi tata kelola e-government, pengembangan teknologi dan infrastruktur e-government, interoperabilitas dan Interkonektivitas e-government, aplikasi layanan kepemerintahan daerah, serta pengembangan aplikasi layanan publik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 219,
                'code' => 'KI.05.02',
                'name' => 'Pengembangan e-Busniess',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan e-business yang mencakup kegiatan tata kelola e-business, teknologi dan infrastruktur e-business, interoperabilitas dan interkonektivitas e-business serta aplikasi layanan e- business.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 219,
                'code' => 'KI.05.03',
                'name' => 'Pemberdayaan Informatika',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemberdayaan informatika yang meliputi kegiatan pemberdayaan informatika masyarakat perkotaan, pedesaan, perbatasan dan pulau terluar, serta pemberdayaan informatika masyarakat khusus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 219,
                'code' => 'KI.05.04',
                'name' => 'Pemberdayaan Industri Informatika',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan pemberdayaan industri informatika meliputi industri infrastruktur dan layanan aplikasi informatika, industri perangkat informatika pengguna, industri perangkat lunak, serta industri konten multimedia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI.07
            [
                'secondary_classification_id' => 221,
                'code' => 'KI.07.01',
                'name' => 'Komunikasi Publik',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan informasi dan komunikasi publik meliputi kegiatan tata kelola komunikasi publik, pengolahan opini publik, dan layanan komunikasi publik.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 221,
                'code' => 'KI.07.02',
                'name' => 'Pengolahan dan Penyediaan Informasi',
                'description' => 'Arsip yang berkaitan dengan pengolahan dan penyediaan informasi meliputi informasi politik, hukum dan keamanan, informasi perekonomian, serta informasi kesejahteraan rakyat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 221,
                'code' => 'KI.07.03',
                'name' => 'Pengelolaan Media Publik',
                'description' => 'Arsip yang berkaitan dengan pengelolaan media publik meliputi media cetak, media online, serta media luar ruang dan audio visual.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 221,
                'code' => 'KI.07.04',
                'name' => 'Kemitraan Komunikasi',
                'description' => 'Arsip yang berkaitan dengan kemitraan komunikasi meliputi program serta monitoring dan evaluasi kemitraan pemerintah dan lembaga negara, kemitraan media dan dunia usaha, serta kemitraan organisasi kemasyarakatan dan profesi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 221,
                'code' => 'KI.07.05',
                'name' => 'Layanan Informasi Internasional',
                'description' => 'Arsip yang berkaitan dengan layanan informasi internasional, mencakup program serta monitoring dan evaluasi layanan informasi media asing, perwakilan negara asing dan lembaga internasional, serta layanan informasi masyarakat luar negeri.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KI.08
            [
                'secondary_classification_id' => 222,
                'code' => 'KI.08.01',
                'name' => 'Pengelolaan Infrastuktur Informatika',
                'description' => 'Arsip yang berkaitan dengan pengelolalan infrastruktur informatika melipui jaringan, piranti teknologi informatika, dan keamanan informatika.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 222,
                'code' => 'KI.08.02',
                'name' => 'Pengelolaan Sistem dan Data',
                'description' => 'Arsip yang berkaitan dengan sistem dan data mencakup portal dan konten, pengumpulan dan pengolahan data, serta pengembangan aplikasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 222,
                'code' => 'KI.08.03',
                'name' => 'Pengelolaan Informasi dan Hubungan Masyarakat',
                'description' => 'Arsip yang berkaitan dengan pusat informasi dan hubungan masyarakat yang meliputi kegiatan pelayanan informasi, hubungan masyarakat, serta bimbingan teknis dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PH.01
            [
                'secondary_classification_id' => 224,
                'code' => 'PH.01.01',
                'name' => 'Pengelolaan Jaringan Transportasi Jalan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan dan pengembangan jaringan transportasi jalan meliputi pengelolaan jaringan prasarana dan pelayanan dan pengembangan transportasi jalan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 224,
                'code' => 'PH.01.02',
                'name' => 'Pengelolaan Sarana Angkutan Jalan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sarana angkutan jalan meliputi pengujian kendaraan bermotor dan teknologi kendaraan bermotor.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 224,
                'code' => 'PH.01.03',
                'name' => 'Pengelolaan Lalu-lintas jalan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan lalu-lintas jalan meliputi analisa dampak, manajemen dan rekayasa lalu- lintas, serta pengelolaan perlengkapan jalan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 224,
                'code' => 'PH.01.04',
                'name' => 'Pengelolaan Angkutan Jalan',
                'description' => 'Arsip yang berkaitan dengan pengelolan angkutan jalan meliputi pengelolaan angkutan penumpang dan angkutan barang.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 224,
                'code' => 'PH.01.05',
                'name' => 'Pengendalian Operasional Lalu-Lintas dan Angkutan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian operasional lalu-lintas dan angkutan meliputi monitoring operasional lalu-lintas dan bimbingan teknis Penyidik Pegawai Negeri Sipil (PPNS).',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PH.02
            [
                'secondary_classification_id' => 225,
                'code' => 'PH.02.01',
                'name' => 'Bina Jaringan Transportasi Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan jaringan transportasi perkotaan meliputi transportasi perkotaan berbasis jalan, jalan rel, dan perairan daratan, transportasi perkotaan untuk kawasan lebih dari satu wilayah administrasi kota/kabupaten/provinsi, serta sistem informasi manajemen jaringan transportasi perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 225,
                'code' => 'PH.02.02',
                'name' => 'Bina Lalu-Lintas Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan lalu- lintas meliputi manajemen dan rekayasa lalu-lintas perkotaan dan lalu-lintas perkotaan di jalan nasional dalam kawasan perkotaan, serta penanganan lalu-lintas perkotaan berbasis teknologi di wilayah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 225,
                'code' => 'PH.02.03',
                'name' => 'Bina Angkutan Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan angkutan perkotaan meliputi angkutan perkotaan dalam trayek, jaringan trayek, serta penentuan dan pemenuhan alokasi kebutuhan angkutan perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 225,
                'code' => 'PH.02.04',
                'name' => 'Pemaduan Moda Transportasi Perkotaan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pemaduan moda transportasi perkotaan meliputi angkutan perkotaan tidak dalam trayek, transportasi antar simpul, serta penentuan dan pemenuhan alokasi angkutan perkotaan yang wilayah pelayanannya tidak dalam trayek.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 225,
                'code' => 'PH.02.05',
                'name' => 'Pengelolaan Dampak Transportasi Perkotaan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan dampak transportasi perkotaan meliputi penyelenggaraan dan penanganan transportasi perkotaan berwawasan lingkungan, masterplan pengembangan teknologi transportasi ramah lingkungan, analisis dampak lalu-lintas, serta masterplan transportasi perkotaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PH.03
            [
                'secondary_classification_id' => 226,
                'code' => 'PH.03.01',
                'name' => 'Manajemen Keselamatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan manajemen kesalamatan transportasi darat meliputi monitoring dan evaluasi data kecelakaan, kualifikasi unit pengkajian, pengembangan sistem manajemen keselamatan lalu-lintas dan angkutan, serta pengembangan keselamatan trasnportasi darat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 226,
                'code' => 'PH.03.02',
                'name' => 'Promosi dan Kemitraan Keselamatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan promosi keselamatan lalu-lintas dan angkutan, serta kemitraan keselamatan antar lembaga dan masyarakat di bidang keselamatan lalu-lintas dan angkutan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 226,
                'code' => 'PH.03.03',
                'name' => 'Bina Keselamatan Angkutan Umum',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan keselamatan pengusahaan dan awak angkutan umum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 226,
                'code' => 'PH.03.04',
                'name' => 'Audit dan Inpeksi Keselamatan',
                'description' => 'Arsip yang berkaitan dengan kegiatan audit dan inspeksi keselamatan transportasi darat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.01
            [
                'secondary_classification_id' => 230,
                'code' => 'LH.01.01',
                'name' => 'Penyusunan Perencanaan Pemanfaatan Sumber Daya Alam dan Lingkungan Hidup',
                'description' => 'Arsip yang berkaitan dengan penyusunan rencana pemanfaatan sumber daya alam dan lingkungan hidup mulai dari Inventarisasi, penerapan ekoregion, serta rencana perlindungan dan pengelolaan lingkungan hidup, sampai dengan evaluasi pemnafaatan sumber daya alam.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 230,
                'code' => 'LH.01.02',
                'name' => 'Penerapan Kebijakan',
                'description' => 'Arsip yang berkaitan dengan implementasi terhadap rencana pemanfaatan sumber daya alam dan lingkungan hidup meliputi evaluasi penerapan kebijakan dan perencaan lingkungan hidup.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 230,
                'code' => 'LH.01.03',
                'name' => 'Pengelolaan Ekonomi Lingkungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengelolaan ekonomi lingkungan meliputi valuasi ekonomi dan internalisasi lingkungan serta penyusunan insentif dan pendanaan lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 230,
                'code' => 'LH.01.04',
                'name' => 'Analisa Dampak Lingkungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan analisa dampak lingkungan meliputi kegiatan bimtek, penerapan sistem kajian, serta evaluasi dan tindak lanjut atas hasil analisa dampak lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.02
            [
                'secondary_classification_id' => 231,
                'code' => 'LH.02.01',
                'name' => 'Pemantauan dan Pengawasan',
                'description' => 'Arsip yang berkaitan dengan pemantauan dan pengawasan pencemaran lingkungan oleh industri manufaktur, pertambangan, energi, minyak dan gas, pencemaran lingkungan oleh agro industri dan usaha skala kecil, serta pencemaran udara oleh transportasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 231,
                'code' => 'LH.02.02',
                'name' => 'Evaluasi dan Pengembangan',
                'description' => 'Arsip yang berkaitan dengan kegiatan evaluasi dan pengembangan pengendalian pencemaran lingkungan oleh industri manufaktur, pertambangan, energi, minyak dan gas, pencemaran lingkungan oleh agro industri dan usaha skala kecil, serta pencemaran udara oleh transportasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 231,
                'code' => 'LH.02.03',
                'name' => 'Penyusunan laporan Implementasi Kajian Dampak Lingkungan',
                'description' => 'Arsip yang berkaitan dengan penyusunan laporan implementasi kajian dampak lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.03
            [
                'secondary_classification_id' => 232,
                'code' => 'LH.03.01',
                'name' => 'Pengendalian Keanekaragaman Hayati dan Pengendalian Kerusakan Lahan',
                'description' => 'Arsip yang berkaitan dengan pengendalian keanekaragaman hayati dan kerusakan hutan meliputi pengembangan, pemanfaatan, pengelolaan sumber daya genetik, serta pengendalian keamanan hayati dan pengendalian kerusakan lahan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 232,
                'code' => 'LH.03.02',
                'name' => 'Pengendalian Kerusakan Ekosistem Perairan Darat',
                'description' => 'Arsip yang berkaitan dengan kegiatan pengendalian kerusakan ekosistem perairan darat meliputi pengendalian ekosistem, pengendalian danau, dan pengendalian rawa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 232,
                'code' => 'LH.03.03',
                'name' => 'Mitigasi dan Pelestarian Fungsi Atmosfer',
                'description' => 'Arsip yang berkaitan dengan kegiatan mitigasi dan pelesatrian fungsi atmosfer meliputi pengelolaan perangkat mitigasi, inventarisasi emisi gas rumah kaca, pengendalian bahan perusak ozon, serta pengendalian kerusakan iklim.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 232,
                'code' => 'LH.03.04',
                'name' => 'Pengelolaan Adaptasi Perubahan Iklim',
                'description' => 'Arsip yang berkaitan dengan pengelolaan adaptasi perubahan iklim meliputi pengelolaan perangkat adaptasi perubahan iklim dan pengelolaan kerentanan perubahan iklim.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.04
            [
                'secondary_classification_id' => 233,
                'code' => 'LH.04.01',
                'name' => 'Pengelolaan Bahan Berbahaya dan Beracun',
                'description' => 'Arsip yang berkaitan dengan pengelolaan bahan berbahaya dan beracun mulai dari registrasi dan notifikasi, pemantuan, sampai dengan evaluasi dan tindak lanjut.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 233,
                'code' => 'LH.04.02',
                'name' => 'Verifikasi Pengelolaan Limbah Bahan Berbahaya dan Beracun',
                'description' => 'Arsip yang berkaitan dengan verifikasi pengelolaan limbah bahan berbahaya dan beracun mulai dari pengumpulan dan pemanfaatan, pengangkutan dan pengolahan, penimbunan dan dumping, serta notifikasi dan rekomendasi limbah lintas batas.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 233,
                'code' => 'LH.04.03',
                'name' => 'Pengelolaan Limbah B3 dan Pemulihan Kontaminasi Limbah B3',
                'description' => 'Arsip yang berkaitan dengan pengelolaan limbah bahan berbahaya dan beracun serta pemulihan kontaminasi limbah bahan berbahaya dan beracun mulai dari pemantauan hingga pelaksanaan tanggap darurat dan pemulihan kontaminasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 233,
                'code' => 'LH.04.04',
                'name' => 'Pengelolaan Sampah',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sampah mulai dari pembatasan sampah, daur ulang dan pemanfataan sampah, pembentukan dewan adipura hingga penetapan pemenang adipura.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.05
            [
                'secondary_classification_id' => 234,
                'code' => 'LH.05.01',
                'name' => 'Hukum Administrasi Lingkungan',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan hukum administrasi lingkungan meliputi pengelolaan dan pengembangan pengaduan serta penataan hukum admnistrasi lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 234,
                'code' => 'LH.05.02',
                'name' => 'Penyelesaian Sengketa Lingkungan',
                'description' => 'Arsip yang berkaitan dengan penyelesaian sengketa lingkungan baik melalui pengadilan maupun di luar pengadilan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 234,
                'code' => 'LH.05.03',
                'name' => 'Penegakan Hukum Pidana Lingkungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penegakan hukum pidana lingkungan meliputi penyidikan, koordinasi penuntutan, evaluasi dan tindak lanjut, serta koordinasi pembinaan penyidik pegawaai negeri sipil.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.06
            [
                'secondary_classification_id' => 235,
                'code' => 'LH.06.01',
                'name' => 'Komunikasi Lingkungan',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyelenggaraan komunikasi dan publikasi tentang lingkungan meliputi pengembangan komunikasi serta penerbitan publikasi dan kampanye.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 235,
                'code' => 'LH.06.02',
                'name' => 'Penguatan Inisiatif Masyarakat',
                'description' => 'Arsip yang berkaitan dengan kegiatan penguatan inisiatif masyarakat tentang lingkungan hidup meliputi pengembangan dan bimbingan komunitas pendidikan lingkungan, serta inventarosas dan revitalisasi kearifan lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 235,
                'code' => 'LH.06.03',
                'name' => 'Peningkatan Peran Masyarakat',
                'description' => 'Arsip yang berkaitan dengan peningkatan peran serta masyarakat terhadap penyelamatan lingkungan hidup melipui peran masyarakat perkotaan dan pedesaan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 235,
                'code' => 'LH.06.04',
                'name' => 'Peningkatan Peran Organisasi Kemasyarakatan',
                'description' => 'Arsip yang berkaitan dengan peningkatan peran serta organisasi kemasyarakatan terhadap penyelamatan lingkungan hidup meliputi organisasi sosial dan masyarakat, serta organisasi profesi dan dunia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LH.07
            [
                'secondary_classification_id' => 236,
                'code' => 'LH.07.01',
                'name' => 'Pengelolaan Data dan Informasi Lingkungan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan data dan informasi lingkungan meliputi pengelolaan data dan informasi, pengembangan perangkat lunak, pengembangan sistem dan jaringan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 236,
                'code' => 'LH.07.02',
                'name' => 'Pengelolaan Kelembagaan Lingkungan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan kelembagaan lingkungan meiputi pengembangan kelembagaan dan tata laksana lingkungan serta fasilitasi standar pelayanan minimal daerah kabupaten/kota.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 236,
                'code' => 'LH.07.03',
                'name' => 'Penyusunan Standarisasi dan Teknologi',
                'description' => 'Arsip yang berkaitan dengan penyusunan standarisasi dan teknologi lingkungan meliputi standarisasi manajemen dan pengujian, kompetensi keahlian dan lembaga penyedia jasa lingkungan, serta teknologi ramah lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 236,
                'code' => 'LH.07.04',
                'name' => 'Pengelolaan Pusat Sarana Pengendalian Dampak Lingkungan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan pusat sarana pengendalian dampak lingkungan meliputi pemantauan dan kajian kualitas lingkungan serta pengelolaan laboratorium rujukan dan pengujian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PU.01
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.01',
                'name' => 'Bina Penatagunaan Sumber Daya Air',
                'description' => 'Arsip yang berkaitan dengan kegiatan pembinaan Penatagunaan sumber daya air meliputi perencanaan wilayah sungai, pengaturan dan pemantauan penggunaan sumber daya air, Pemantauan, evaluasi dan koordinasi pengelolaan sumber daya air, pemanfaatan sumber daya air, serta pengelolaan hidrologi dan lingkungan sumber daya air.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.02',
                'name' => 'Pengembangan Jaringan Sumber Daya Air',
                'description' => 'Arsip yang berkaitan dengan pengembangan jaringan sumber daya air meliputi perencanaan, pemgelolaan keterpaduan pemrograman, evaluasi dan manajemen mutu, serta pengembangan dan pengelolaan informasi dan daya sumber daya air.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.03',
                'name' => 'Pengelolaan Sungai dan Pantai',
                'description' => 'Arsip yang berkaitan dengan pengelolaan sungai dan pantai meliputi pembinaan pengendalian konstruksi, pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana, perencanaan sungai dan pantai, pengelolaan drainase utama perkotaan, serta pemantauan, evaluasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.04',
                'name' => 'Pengelolaan Irigasi dan Rawa',
                'description' => 'Arsip yang berkaitan dengan pengelolaan irigasi dan rawa meliputi pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana, pembinaan pengelolaan irigasi dan rawa, serta pemantauan, evaluasi, dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.05',
                'name' => 'Pengelolaan Bendungan, Danau, Situ dan Embung',
                'description' => 'Arsip yang berkaitan dengan pengelolaan bendungan, danau, situ, dan embung meliputi pembinaan pengelolaan bendungan dan konservasi fisik sumber daya air, penilaian kesiapan pelaksanaan bendungan, danau, situ dan embung dan konservasi fisik sumber daya air, kerja sama dengan instansi terkait dan pihak pemilik bendungan, inventarisasi, registrasi, dan klasifikasi bahaya, serta pemantauan, evaluasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.06',
                'name' => 'Pengelolaan Air Tanah dan Air Baku',
                'description' => 'Arsip yang berkaitan dengan pengelolaan air tanah dan air baku meliputi pembinaan pengelolaan air tanah dan air baku meliputi pembinaan pengelolaan bendungan dan konservasi fisik sumber daya air, penilaian kesiapan pelaksanaan air tanah dan air baku dan konservasi fisik sumber daya air, serta pemantauan, evaluasi dan pelaporan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 238,
                'code' => 'PU.01.07',
                'name' => 'Bina Operasi dan Pemeliharaan Sungai dan Pantai',
                'description' => 'Arsip yang berkaitan dengan pembinaan operasi dan pemeliharaan sungai dan pantai meliputi pembinaan pengelolaan operasi dan pemeliharaan sungai dan pantai, operasi dan pemeliharaan irigasi dan rawa, operasi dan pemeliharaan bendungan dan danau serta fasilitasi, bimbingan dan bantuan teknik jaringan sumber daya air.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PU.02
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.01',
                'name' => 'Pengembangan Jaringan Jalan',
                'description' => 'Arsip yang berkaitan dengan pengembangan jaringan jalan meliputi perencanaan dan sistem jaringan, penyusunan program dan anggaran penyelenggaraan jalan, pengembangan aplikasi manajemen jalan, pengelolaan lingkungan dan keselamatan jalan serta pemantauan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.02',
                'name' => 'Pembangunan Jalan',
                'description' => 'Arsip yang berkaitan dengan pembangunan jalan meliputi manajemen konstruksi, pembinaan geometrik, perkerasan dan drainase, pembinaan geoteknik dan manajemen lereng, serta pemantauan dan evaluasi pembangunan jalan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.03',
                'name' => 'Preservasi Jalan',
                'description' => 'Arsip yang berkaitan dengan preservasi jalan meliputi perencanaan dan penyusunan program, pembinaan teknik rekonstruksi dan berkala jalan, pembinaan teknik pemeliharaan rutin jalan, serta pemantauan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.04',
                'name' => 'Pengelolaan Jembatan',
                'description' => 'Arsip yang berkaitan dengan pengelolaan jembatan meliputi perencanaan dan penyusunan program, pembinaan teknik jembatan, pembinaan teknik terowongan dan jembatan khusus, serta pemantauan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.05',
                'name' => 'Jalan Bebas Hambatan, Perkotaan, dan Fasilitasi Jalan Daerah',
                'description' => 'Arsip yang berkaitan dengan pengelolaan jalan bebas hambatan, perkotaan, dan fasilitasi jalan daerah meliputi manajemen dan evaluasi jalan daerah, bimbingan teknik jalan daerah, pengendalian pelaksanaan jalan daerah, pengembangan jalan metropolitan dan kota besar, pengelolaan jalan bebas hambatan, serta pengadaan tanah untuk jalan bebas hambatan, perkotaan, dan fasilitasi jalan daerah.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 239,
                'code' => 'PU.02.06',
                'name' => 'Pengaturan Jalan Tol',
                'description' => 'Arsip yang berkaitan dengan pengaturan jalan tol meliputi persiapan pengusahaan jalan tol, pengadaan investasi jalan tol, pengambilalihan hak pengusahaan jalan tol, serta pemantauan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // PU.03
            [
                'secondary_classification_id' => 240,
                'code' => 'PU.03.01',
                'name' => 'Keterpaduan Infrastruktur Permukiman',
                'description' => 'Arsip yang berkaitan dengan pengelolaan keterpaduan infrastruktur permukiman meliputi keterpaduan perencanaan dan kemitraan, keterpaduan pembiayaan, keterpaduan pelaksanaan, pengelolaan data dan sistem informasi infrastruktur permukiman serta pemantauan dan evaluasi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 240,
                'code' => 'PU.03.02',
                'name' => 'Pengembangan Kawasan Permukiman',
                'description' => 'Arsip yang berkaitan dengan pengembangan kawasan permukiman meliputi perencanaan teknis, pelaksanaan pengembangan kawasan permukiman, standardisasi pengembangan kawasan, serta pemantauan dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 240,
                'code' => 'PU.03.03',
                'name' => 'Bina Penataan Bangunan',
                'description' => 'Arsip yang berkaitan dengan pembinaan penataan bangunan meliputi perencanaan teknis, penataan bangunan gedung umum dan gedung negara, pengelolaan rumah negara, penataan bangunan dan lingkungan khusus, serta standarisasi dan kelembagaan penataan bangunan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 240,
                'code' => 'PU.03.04',
                'name' => 'Pengembangan Sistem Penyediaan Air Minum',
                'description' => 'Arsip yang berkaitan dengan pengembangan sistem penyediaan air minum meliputi perencanaan teknis, pembangunan sistem penyediaan air minum, pembinaan standardisasi dan kelembagaan sistem penyediaan air, fasilitasi dan penyebarluasan penerapan teknologi rancang bangun, serta pengolahan sistem penyediaan air minum dan pengelolaan laboratorium dan bengkel kerja bidang air minum.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KK.01
            [
                'secondary_classification_id' => 241,
                'code' => 'KK.01.01',
                'name' => 'Pengamanan Internal',
                'description' => 'Arsip yang berkaitan dengan pembinaan pengamanan internal meliputi pembinaan pengamanan, penelitian personil, dan dokumentasi pengamanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 241,
                'code' => 'KK.01.02',
                'name' => 'Pembinaan Profesi',
                'description' => 'Arsip yang berkaitan dengan pembinaan profesi pengamanan meliputi standarisasi, pembinaan etika, dan penegakan etika.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KK.02
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.01',
                'name' => 'Pembinaan Penertiban Masyarakat',
                'description' => 'Arsip yang berkaitan dengan pembinaan penertiban masyarakat meliputi pembinaan pemuda, anak dan wanita, penertiban sosial, serta koordinasi dan rehabilitasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.02',
                'name' => 'Pembinaan Keamanan Swakarsa',
                'description' => 'Arsip yang berkaitan dengan pembinaan kemanan swakarsa meliputi pembinaan satuan pengamanan, pengawasan jasa pengamanan, serta manajemen pengamanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.03',
                'name' => 'Pembinaan Perpolisian Masyarakat',
                'description' => 'Arsip yang berkaitan dengan pembinaan perpolisian masyarakat meliputi pembinaan kemampuan, pembinaan potensi masyarakat, serta pembinaan sistem keamanan lingkungan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.04',
                'name' => 'Pembinaan Polisi Khusus',
                'description' => 'Arsip yang berkaitan dengan pembinaan polisi khusus meliputi pembinaan dan pelatihan, koordinasi dan pengawsan, serta analisi dan evaluasi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.05',
                'name' => 'Pemeliharaan ketertiban umum',
                'description' => 'Arsip yang berkaitan dengan pemeliharaan ketertiban umum meliputi tindak pidana ringan, tindak pidana tempat pertama kejadian perkara, serta pengamanan tenaga kerja Indonesia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.06',
                'name' => 'Pengendalian masyarakat',
                'description' => 'Arsip yang berkaitan dengan pengendalian masyarakat meliputi negosiasi dan pembinaan pengendalian masyarakat.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.07',
                'name' => 'Patroli dan pengawalan',
                'description' => 'Arsip yang berkaitan dengan kegiatan patroli dan pengawalan keamanan meliputi patroli, pengawalan, call centre 110, dan police backbone.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 242,
                'code' => 'KK.02.08',
                'name' => 'Pengamanan Obyek Vital',
                'description' => 'Arsip yang berkaitan dengan pengamanan obyek vital meliputi pengamanan VVIP/VIP, pengamanan pariwisata, pengamanan obyek vital nasional, serta uadit sistem pengamanan obyek.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // KK.03
            [
                'secondary_classification_id' => 243,
                'code' => 'KK.03.01',
                'name' => 'Intelijen',
                'description' => 'Arsip yang berkaitan dengan penyelenggaraan intelijen penanggulangan kejahatan terorisme meliputi analisa terhadap lapangan dan penilaian informasi serta pendeteksian kejahatan terorisme.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 243,
                'code' => 'KK.03.02',
                'name' => 'Pencegahan',
                'description' => 'Arsip yang berkaitan dengan pencegahan kejahatan terorisme melalui pembinaan dan penyuluhan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            // LB.01
            [
                'secondary_classification_id' => 246,
                'code' => 'LB.01.01',
                'name' => 'Penyusunan Rencana Kerja',
                'description' => 'Arsip yang berkaitan dengan kegiatan penyusunan rencana kerja penelitian dan pengkajian, meliputi master plan/rencana strategis, rencana kerja tahunan, berkas kerja sama, serta berkas perijinan penelitian.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 246,
                'code' => 'LB.01.02',
                'name' => 'Administrasi Penelitian',
                'description' => 'Arsip yang berkaitan dengan kegiatan administrasi penelitian, meliputi surat tugas/surat perintah, pembentukan tim kerja, dokumen/formulir pendukung/instruksi, persiapan survei, penggunaan peralatan (alat dan bahan ), dan lain-lain.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'secondary_classification_id' => 246,
                'code' => 'LB.01.03',
                'name' => 'Pelaksanaan Penelitian/Pengkajian',
                'description' => 'Arsip yang berkaitan dengan kegiatan pelaksanaan penelitian/pengkajian meliputi prosedur, data primer, log book, hasil studi kelayakan, instrumen penelitian, hasil pelaksanaan survei, laporan hasil pendataan/pengolahan data/hasil penelitian/pengkajian/rekomendasi, laporan hasil penelitian dan hasil luaran, serta hasil penelitian dan pengkajian hasil jasa layanan.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
