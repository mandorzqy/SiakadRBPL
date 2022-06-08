<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Course::insert([
            // [
            //     'kode_mk'=>'IS184307',
            //     'nama_mata_kuliah'=>'Pemrograman Web',
            //     'kode_kelas'=>'SI1101',
            //     'sks'=>3,
            //     'tahunKurikulum' => 2018
            //     'semester'=>1
            // ],
            // [
            //     'kode_mk'=>'IS184308',
            //     'nama_mata_kuliah'=>'Algoritma Pemrograman',
            //     'kode_kelas'=>'SI1101',
            //     'sks'=>3,
            //     'tahunKurikulum' => 2018
            //     'semester'=>2
            // ],
            [
                'kode_mk' => 'IS184102',
                'kode_kelas' => 'SI1101',
                'nama_mata_kuliah' => 'Konsep Sistem Informasi',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 1
                
            ],
            [
                'kode_mk' => 'IS184101',
                'kode_kelas' => 'SI1101',
                'nama_mata_kuliah' => 'Logika & Struktur Diskrit',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 1
            ],
            [
                'kode_mk' => 'IS184203',
                'kode_kelas' => 'SI1102',
                'nama_mata_kuliah' => 'Algoritma & Pemrograman',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kode_mk' => 'IS184204',
                'kode_kelas' => 'SI1201',
                'nama_mata_kuliah' => 'Organisasi dan Fungsional Bisnis',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kode_mk' => 'IS184308',
                'kode_kelas' => 'SI1202',
                'nama_mata_kuliah' => 'Manajemen & Proses TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184310',
                'kode_kelas' => 'SI2101',
                'nama_mata_kuliah' => 'Manajemen Proses Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184307',
                'kode_kelas' => 'SI2102',
                'nama_mata_kuliah' => 'Pemrograman Web',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184309',
                'kode_kelas' => 'SI2201',
                'nama_mata_kuliah' => 'Rekayasa Kebutuhan Perangkat Lunak',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IW184301',
                'kode_kelas' => 'SI2202',
                'nama_mata_kuliah' => 'Sistem Basis Data',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184305',
                'kode_kelas' => 'SI2202',
                'nama_mata_kuliah' => 'Statistika',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184411',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Desain & Manajemen Jaringan',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184621',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Manajemen Basis Data',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kode_mk' => 'IS184412',
                'kode_kelas' => 'SI4101',
                'nama_mata_kuliah' => 'Rancang Bangun Perangkat Lunak',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kode_mk' => 'IS184414',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Sistem Enterprise',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kode_mk' => 'IS184413',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Manajemen Proyek TI',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kode_mk' => 'IS184518',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Implementasi Perangkat Lunak',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'IS184516',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Kecerdasan Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'IS184517',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Manajemen Layanan Teknologi Informasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'IS184519',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Perencanaan strategis TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'IS184515',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Riset Operasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'UG184915',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Teknopreneur',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kode_mk' => 'IS184620',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Analitika Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'IS184622',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Desain Pengalaman Pengguna',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'IS184624',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Manajemen Investasi TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'IS184623',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Proteksi Aset Informasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'IS184625',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Rintisan Bisnis Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'UG184916',
                'kode_kelas' => 'SI4102',
                'nama_mata_kuliah' => 'Wawasan dan Aplikasi Teknologi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kode_mk' => 'IS184948',
                'kode_kelas' => 'SI4107',
                'nama_mata_kuliah' => 'Bisnis Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184728',
                'kode_kelas' => 'SI4107',
                'nama_mata_kuliah' => 'Etika Profesi TI ',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184727',
                'kode_kelas' => 'SI4107',
                'nama_mata_kuliah' => 'Evaluasi dan Audit TI',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184935',
                'kode_kelas' => 'SI4107',
                'nama_mata_kuliah' => 'Forensika Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184934',
                'kode_kelas' => 'SI4107',
                'nama_mata_kuliah' => 'Internet untuk Segala',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184936',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Keamanan Siber',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184949',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Kreatif Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184946',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Hubungan Pelanggan ',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184940',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Keberlangsungan Bisnis',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184951',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Merek Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184939',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Perubahan Organisasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184945',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Rantai Pasok',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184937',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Manajemen Risiko & Kualitas TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184944',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Optimasi Kombinatorik & Heuristik',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184950',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Pemasaran Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184956',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Pengembangan dan Operasi Sistem',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184943',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Penggalian Data',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184931',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Pengolahan Bahasa Alami',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184938',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Tata Kelola TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184929',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Teknologi Basis Data',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kode_mk' => 'IS184930',
                'kode_kelas' => 'SI4108',
                'nama_mata_kuliah' => 'Teknologi Web',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],


            ]);
    }
}
