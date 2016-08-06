<?php

use Illuminate\Database\Seeder;

class FractionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Untuk Table Fraction
        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Demokrasi Indonesia Perjuangan'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Golkar'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Gerindra'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Demokrat'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Amanat Nasional'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Kebangkitan Bangsa'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Keadilan Sejahtera'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Persatuan Pembangunan'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Nasional Demokrat'
        ]);

        DB::table('fraction')->insert([
        'name' => 'Fraksi Partai Hati Nurani Rakyat'
        ]);
    }
}
