<?php

use Illuminate\Database\Seeder;

class WorkmeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Untuk Table Workmeeting
        DB::table('workmeeting')->insert([
        'uuid' => '241db408-d1d0-4685-b6f3-06cb51d3a007',
        'date' => '2016-06-08',
        'name' => 'Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri',
        'location' => 'Kementerian Pertanian',
        'description' => 'Pembahasan Mendetail&nbsp;RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri',
        ]);

        DB::table('workmeeting')->insert([
        'uuid' => '4bfb591e-75e7-469e-a680-2a3f4dfd03c5',
        'date' => '2016-06-13',
        'name' => 'Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017',
        'location' => 'Kementerian Pertanian',
        'description' => 'Pembahasan APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017',
        ]);

        DB::table('workmeeting')->insert([
        'uuid' => '39345818-edfb-468f-a154-cf6e72201edf',
        'date' => '2016-06-21',
        'name' => 'Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri',
        'location' => 'Kementerian Pertanian',
        'description' => 'Pembahasan Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri',
        ]);

        DB::table('workmeeting')->insert([
        'uuid' => 'c994628d-a354-4c15-ba56-b8bd03c06ed0',
        'date' => '2016-06-22',
        'name' => 'Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H',
        'location' => 'Kementerian Pertanian',
        'description' => 'Pembahasan Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H',
        ]);

        DB::table('workmeeting')->insert([
        'uuid' => '8511ecd2-9567-4212-a4b3-4939274e91a3',
        'date' => '2016-06-27',
        'name' => 'Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H',
        'location' => 'Kementerian Pertanian',
        'description' => 'Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H',
        ]);
    }
}
