<?php

use Illuminate\Database\Seeder;

class WorkmeetingDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workmeeting_document')->insert([
        'uuid' => 'de7428c5-ed61-40c5-b2fb-1c258428fd74',
        'workmeeting_id' => '1',
        'title' => '160125 RAKER EVALUASI 2015 & DIPA 2016revFINAL.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/12ed4a03-a723-44c2-84d5-15567ac8b508/160125 RAKER EVALUASI 2015 & DIPA 2016revFINAL.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '66b92573-b99a-46dd-be4d-a10dbe8f713d',
        'workmeeting_id' => '2',
        'title' => '160414 RAKER SERAPAN ANGGARAN & HASIL KUNKER-revfinal.ppt',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/fc640378-3544-4571-b9ea-d8a89199a9e6/160414 RAKER SERAPAN ANGGARAN & HASIL KUNKER-revfinal.ppt',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => 'ce82a9aa-b418-4c8b-ab24-b361c3bb3231',
        'workmeeting_id' => '3',
        'title' => '160526 RAKER LEGISLASI UU 18-REV.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/1e7cb03f-03a6-4aca-8b37-c60ab4d20d0d/160526 RAKER LEGISLASI UU 18-REV.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '259b8276-27dd-4165-990b-2695e7260416',
        'workmeeting_id' => '4',
        'title' => '160608 APBNP2016 DAN PERSIAPAN IDUL FITRI-2.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/259b8276-27dd-4165-990b-2695e7260416/160608 APBNP2016 DAN PERSIAPAN IDUL FITRI-2.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '77f64cec-9822-4226-a686-55a00f4ad48b',
        'workmeeting_id' => '5',
        'title' => '160613 RAKER APBN-P 2016 DAN RAPBN 2017 TGL 13 JUNI 2016-FINAL.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/4bfb591e-75e7-469e-a680-2a3f4dfd03c5/160613 RAKER APBN-P 2016 DAN RAPBN 2017 TGL 13 JUNI 2016-FINAL.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => 'fb6dceff-b246-4eb2-89e0-7350a1982a81',
        'workmeeting_id' => '6',
        'title' => '160621 RAKER BANGGAR.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/f8e5bb48-9e4c-4cdc-868f-42e623306e41/160621 RAKER BANGGAR.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '150abc30-5a30-448b-8d45-54b34ed95b1b',
        'workmeeting_id' => '7',
        'title' => '160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/39345818-edfb-468f-a154-cf6e72201edf/160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '8bb58faf-ca24-4817-a1f0-b1ece1002d8d',
        'workmeeting_id' => '8',
        'title' => '160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/c994628d-a354-4c15-ba56-b8bd03c06ed0/160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx',
        ]);

        DB::table('workmeeting_document')->insert([
        'uuid' => '7c96466f-1a85-4772-842f-33d69e8443ff',
        'workmeeting_id' => '9',
        'title' => '160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt',
        'url' => 'http://halo.setjen.pertanian.go.id/halo/document/8511ecd2-9567-4212-a4b3-4939274e91a3/160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt',
        ]);
    }
}
