<?php

use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Untuk Table Fraction
        DB::table('speakers')->insert([
	        'uuid' => 'e56225b6-b1be-4e65-86c2-20543222b939',
	        'fraction_id' => '3',
	        'name' => 'Edhy Prabowo MM, MBA',
	        'email' => 'edhy115@yahoo.com',
	        'fraction_leader' => 'yes',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/e56225b6-b1be-4e65-86c2-20543222b939/edhy-prabowo.png',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'c5a5fe88-16c5-4149-8a13-3605bffa08bf',
	        'fraction_id' => '2',
	        'name' => 'Siti Hediati Soeharto, SE',
	        'email' => 'sitihediati@gmail.com',
	        'fraction_leader' => 'yes',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/c5a5fe88-16c5-4149-8a13-3605bffa08bf/siti-hediati.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'c8d3629d-96c8-4e38-9fee-53c5baf3485d',
	        'fraction_id' => '4',
	        'name' => 'Ir. E. Herman Khaeron, M.Si',
	        'email' => 'hermankh@yahoo.com',
	        'fraction_leader' => 'yes',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/c8d3629d-96c8-4e38-9fee-53c5baf3485d/herman-khaeron.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '969db2d3-a1c0-48b3-b86e-70602841746a',
	        'fraction_id' => '5',
	        'name' => 'Viva Yoga Mauladi, M.Si',
	        'email' => 'vivayoga2010@yahoo.com',
	        'fraction_leader' => 'yes',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/969db2d3-a1c0-48b3-b86e-70602841746a/viva-yoga.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '0fab6ace-94cc-41e0-b8d5-58b4c6db8301',
	        'fraction_id' => '6',
	        'name' => 'Daniel Johan',
	        'email' => 'danieljohandj@yahoo.com',
	        'fraction_leader' => 'yes',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/0fab6ace-94cc-41e0-b8d5-58b4c6db8301/daniel-johan.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '5450e455-adbb-4f83-8755-ed76ec0e41db',
	        'fraction_id' => '1',
	        'name' => 'Sudin',
	        'email' => 'sudin_pdip@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/5450e455-adbb-4f83-8755-ed76ec0e41db/sudin.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'd2aab4d3-a01f-4610-9279-723ef9830deb',
	        'fraction_id' => '1',
	        'name' => 'Drs. I Made Urip',
	        'email' => 'desak.kutha@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/d2aab4d3-a01f-4610-9279-723ef9830deb/i-made-urip.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '5d6d9f99-458c-42e9-bf14-5086512e8552',
	        'fraction_id' => '1',
	        'name' => 'Ir. Mindo Sianipar',
	        'email' => 'mindo.sianipar@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/5d6d9f99-458c-42e9-bf14-5086512e8552/mindo-sianipar.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'a24e7e49-29ab-44bf-ab24-635e9c138731',
	        'fraction_id' => '1',
	        'name' => 'Ono Surono, ST',
	        'email' => 'onosurono@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/a24e7e49-29ab-44bf-ab24-635e9c138731/ono-surono.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '49433414-5f98-4d7f-8760-c41dd0e428d3',
	        'fraction_id' => '1',
	        'name' => 'Ir. Effendi Sianipar',
	        'email' => 'effendy.sianipar@dpr.go.id',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/49433414-5f98-4d7f-8760-c41dd0e428d3/effendy-sianipar.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '06bbebfa-bf2a-4632-ac18-fd68a94e9982',
	        'fraction_id' => '1',
	        'name' => 'H. Yadi Srimulyadi',
	        'email' => 'yadisrimulyadi5@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/06bbebfa-bf2a-4632-ac18-fd68a94e9982/yadi-srimulyadi.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '237f048c-4d9d-4922-ae96-6b7d51e1dcff',
	        'fraction_id' => '1',
	        'name' => 'Drs.H.M Dardiansyah',
	        'email' => 'mdardiansyah2212yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/237f048c-4d9d-4922-ae96-6b7d51e1dcff/dardiansyah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '5edef4d1-4a2a-4410-b7cb-165fbd4949d4',
	        'fraction_id' => '1',
	        'name' => 'Henky Kurniadi',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/5edef4d1-4a2a-4410-b7cb-165fbd4949d4/henky-kurniadi.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'bc8e1862-bf78-45f7-b3ce-f12a09bebff6',
	        'fraction_id' => '1',
	        'name' => 'Agustina Wilujeng Pramestuti, SS',
	        'email' => 'ksatriaelangjawa@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/bc8e1862-bf78-45f7-b3ce-f12a09bebff6/agustina-wilujeng.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'b458a05b-22ad-48e5-a1c3-2a9e474f129a',
	        'fraction_id' => '1',
	        'name' => 'Rahmad Handoyo, S.Pi, MM',
	        'email' => 'rahmadhan1975@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/b458a05b-22ad-48e5-a1c3-2a9e474f129a/rahmad-handoyo.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'e155c7cf-6e20-4901-9594-1a025265253c',
	        'fraction_id' => '2',
	        'name' => 'Robert Joppy Kardinal',
	        'email' => 'robertkardinal@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/e155c7cf-6e20-4901-9594-1a025265253c/robert-joppy.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'bf74ca52-26a9-406e-85a3-f20ef6203ede',
	        'fraction_id' => '2',
	        'name' => 'Delia Pratiwi BR. Sitepu, SH ',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/bf74ca52-26a9-406e-85a3-f20ef6203ede/delia.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'e2275333-78d5-4217-8772-016546df8ea8',
	        'fraction_id' => '2',
	        'name' => 'Firman Soebagyo, SE,MH',
	        'email' => 'firmansubagyo@hotmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/e2275333-78d5-4217-8772-016546df8ea8/firman-soebagyo.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '9b4aa50c-0422-40a1-a33b-0b79495c79e9',
	        'fraction_id' => '2',
	        'name' => 'Ir.H.Azhar Romli, M.Si',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/9b4aa50c-0422-40a1-a33b-0b79495c79e9/azhar-romli.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'f7208521-d793-417c-a2fe-f2fa15950615',
	        'fraction_id' => '2',
	        'name' => 'Ichsan Firdaus',
	        'email' => 'ichanfirda@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/f7208521-d793-417c-a2fe-f2fa15950615/ichsan-firdaus.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '75c8c1c3-cb3c-42c9-90d7-30de1266e225',
	        'fraction_id' => '2',
	        'name' => 'Aa Bagus Adhi Mahendra Putra',
	        'email' => 'gusadhi88@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/75c8c1c3-cb3c-42c9-90d7-30de1266e225/aa-bagus-adhi.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'bbf558ab-bba7-4ec3-921a-77cac8ab5a08',
	        'fraction_id' => '2',
	        'name' => 'H. Mohammad Suryo Alam, AK,MBA',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/bbf558ab-bba7-4ec3-921a-77cac8ab5a08/suryo-alam.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '8368b0fa-e5f6-47c5-bee6-bf30c58c27ab',
	        'fraction_id' => '2',
	        'name' => 'HJ.Saniatul Lativa',
	        'email' => 'tsanie_vahre@yahoo.co.id',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/8368b0fa-e5f6-47c5-bee6-bf30c58c27ab/saniatul-lativa.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '4d871977-ae24-4e00-b620-13ae9873f9d4',
	        'fraction_id' => '3',
	        'name' => 'Ir.KRT.Darori Wonodipuro, MM',
	        'email' => 'darori555@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/4d871977-ae24-4e00-b620-13ae9873f9d4/darori.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '771ae8ad-46e2-4669-97ed-e5a31a02a501',
	        'fraction_id' => '3',
	        'name' => 'Luther Kombong',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/771ae8ad-46e2-4669-97ed-e5a31a02a501/luther-kombong.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '610f2152-2e2c-47b1-8aa6-679038c71a37',
	        'fraction_id' => '3',
	        'name' => 'H.O.O Sutisna, SH',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/610f2152-2e2c-47b1-8aa6-679038c71a37/oo-sutisna.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '9f482f9a-9935-4ef7-ad19-a96b9a446315',
	        'fraction_id' => '3',
	        'name' => 'Drs.H. Andi Nawir, MP',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/9f482f9a-9935-4ef7-ad19-a96b9a446315/andi-nawir.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '9917d782-8cc7-4acc-a5fe-fc5fcd4f8e8a',
	        'fraction_id' => '3',
	        'name' => 'Susi Syahdonna Marleny',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/9917d782-8cc7-4acc-a5fe-fc5fcd4f8e8a/susi-marleny.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '35d253af-4d08-40fb-b738-1cc8dd75fa5b',
	        'fraction_id' => '3',
	        'name' => 'Drs.H.Sjachrani Mataja, MM, MBA',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/35d253af-4d08-40fb-b738-1cc8dd75fa5b/sjahrani-mataja.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '4e22c326-89f6-459c-b3b2-3968392b22b1',
	        'fraction_id' => '4',
	        'name' => 'Drs. Guntur Sasono',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/4e22c326-89f6-459c-b3b2-3968392b22b1/guntur-sasono.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '89228bb7-ec8c-4545-a5fe-1fcf720b65e3',
	        'fraction_id' => '4',
	        'name' => 'Vivi Sumantri Jayabaya, S.SOS',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/89228bb7-ec8c-4545-a5fe-1fcf720b65e3/vivi-sumantri.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'd93efd10-dea3-4402-a1c4-4a93ed3a5261',
	        'fraction_id' => '4',
	        'name' => 'H. Syofwatillahmohzaib, S.SOS',
	        'email' => 'syofwatillahmohzaib@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/d93efd10-dea3-4402-a1c4-4a93ed3a5261/syofwatillah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '71545f88-70b0-4855-a524-62223c2c1e30',
	        'fraction_id' => '4',
	        'name' => 'Ir.H. Muhammad Masyit Umar, SP ',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/71545f88-70b0-4855-a524-62223c2c1e30/masyit-umar.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '629bfac1-3395-4334-9cf8-809b3d2abfbd',
	        'fraction_id' => '5',
	        'name' => 'Eko Hendro Purnomo, S.SOS',
	        'email' => 'ekohendropurnomo30@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/629bfac1-3395-4334-9cf8-809b3d2abfbd/eko-hendro.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'b8cf4b6d-18a4-4bf4-8897-79c638b6d87c',
	        'fraction_id' => '5',
	        'name' => 'Indira Chunda Tita Syahrul, SE',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/b8cf4b6d-18a4-4bf4-8897-79c638b6d87c/thita-chunda.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '2f955275-def3-4206-8eac-8a94c2b72562',
	        'fraction_id' => '5',
	        'name' => 'H.Jamaluddin, SH,MH',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/2f955275-def3-4206-8eac-8a94c2b72562/jamaluddin-jafar.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '43056561-f3d3-45bf-bcf5-9f2ec6061f44',
	        'fraction_id' => '6',
	        'name' => 'H. Cucun Ahmad Syamsurijal, S.Ag',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/43056561-f3d3-45bf-bcf5-9f2ec6061f44/cucun-ahmad.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '0dfef9ca-a5d5-48e9-ae2e-b827e1627840',
	        'fraction_id' => '6',
	        'name' => 'Drs.H.Ibnu Multazam',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/0dfef9ca-a5d5-48e9-ae2e-b827e1627840/ibnu-multazam.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'eb4b142f-cb2b-4305-80b0-75199e51cac3',
	        'fraction_id' => '6',
	        'name' => 'Drs.H.Taufiq R Abdulah',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/eb4b142f-cb2b-4305-80b0-75199e51cac3/taufiq-abdullah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '1506836d-a7ec-44b6-ba8e-fbaa07744785',
	        'fraction_id' => '6',
	        'name' => 'H. Acep Adang Ruhiat, Msi',
	        'email' => 'aar_cipsi@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/1506836d-a7ec-44b6-ba8e-fbaa07744785/acep-adang.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'c193f202-e2b1-4e17-a7d0-68caec6a8a07',
	        'fraction_id' => '7',
	        'name' => 'H. Andi Akmal Pasluddin, SP, MM',
	        'email' => 'aap_bpks@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/c193f202-e2b1-4e17-a7d0-68caec6a8a07/andi-akmal.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '2978f60e-a38c-4cee-9269-d67b52d840cf',
	        'fraction_id' => '7',
	        'name' => 'DR.Hermanto, SE,MM',
	        'email' => 'hermanto5333@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/2978f60e-a38c-4cee-9269-d67b52d840cf/hermanto.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '6ca4e5d6-9e61-4daa-9310-c0c10006270b',
	        'fraction_id' => '7',
	        'name' => 'DR.H.Sa`duddin, MM',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/6ca4e5d6-9e61-4daa-9310-c0c10006270b/saduddin.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'f82f9d7b-c363-4215-aea6-4ac0c3307f76',
	        'fraction_id' => '7',
	        'name' => 'Drs. Mahfuz Sidik, Msi',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/f82f9d7b-c363-4215-aea6-4ac0c3307f76/mahfuz-sidik.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '91ba9aa4-4a9d-43b5-8f1a-94339fbc3e04',
	        'fraction_id' => '8',
	        'name' => 'Drs.Zainut Tauhid Saadi, MSi ',
	        'email' => 'zainut_saadi@yahoo.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/91ba9aa4-4a9d-43b5-8f1a-94339fbc3e04/zainut-tauhid.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '6526ad0b-874d-43d4-9a3f-e6eeb346e6c2',
	        'fraction_id' => '8',
	        'name' => 'H. Fadly Nurzal, S.Ag',
	        'email' => 'oscarsiregar3@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/6526ad0b-874d-43d4-9a3f-e6eeb346e6c2/fadly-nurzal.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'c5bc6331-2d4b-4c78-92b1-c0b8fad51503',
	        'fraction_id' => '8',
	        'name' => 'H. Fanny Safriansyah, SE',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/c5bc6331-2d4b-4c78-92b1-c0b8fad51503/fanny-safriansyah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '4ad61705-fc22-47ed-adc2-0e901ab3ca5c',
	        'fraction_id' => '8',
	        'name' => 'Hj. Kasriah',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/4ad61705-fc22-47ed-adc2-0e901ab3ca5c/kasriyah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => 'd6b8bb43-bb6c-4941-b0da-118d8ce82224',
	        'fraction_id' => '9',
	        'name' => 'Drs.Fadholi',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/d6b8bb43-bb6c-4941-b0da-118d8ce82224/fadholi.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '6c659045-ee3c-482c-9d11-fa494c821040',
	        'fraction_id' => '9',
	        'name' => 'Sulaeman L Hamzah',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/6c659045-ee3c-482c-9d11-fa494c821040/sulaiman-l-hamzah.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '3d4e4fad-db10-4c9f-8aee-f3c0edad8693',
	        'fraction_id' => '9',
	        'name' => 'H. Hamdani, S.Ip, M.Sos',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/3d4e4fad-db10-4c9f-8aee-f3c0edad8693/samsudin-siregar.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '6907f223-c07a-44e5-bdaf-dfab8b0a8fb3',
	        'fraction_id' => '10',
	        'name' => 'Samsudin Siregar, SH',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/6907f223-c07a-44e5-bdaf-dfab8b0a8fb3/hamdani.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '7f223690-44e5-c07a-bdaf-dfab8b0a8fb3',
	        'fraction_id' => '11',
	        'name' => 'Test Anggota DPR',
	        'email' => 'riki.rokhman.azis@gmail.com',
	        'photo' => 'http://halo.setjen.pertanian.go.id/halo/speakers/7f223690-44e5-c07a-bdaf-dfab8b0a8fb3/tes.jpg',
        ]);

        DB::table('speakers')->insert([
	        'uuid' => '2237f690-44e5-c07a-bdaf-a8fb3dfab8b0',
	        'fraction_id' => '11',
	        'name' => 'Test Kosong',
        ]);

    }
}
