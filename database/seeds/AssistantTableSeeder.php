<?php

use Illuminate\Database\Seeder;

class AssistantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assistant')->insert([
	        'speakers_id' => '1',
	        'name' => 'Amril M',
	        'email1' => 'amiril.mukminin678@gmail.com',
	        'email2' => NULL,
	        'phone' => '08225222161',
	        'roles' => 'sespri',
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '1',
	        'name' => 'Selvi',
	        'email1' => NULL,
	        'email2' => NULL,
	        'phone' => '081290024042',
	        'roles' => 'sespri',
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '1',
	        'name' => 'Putri Tjatur',
	        'email1' => 'putri.tjatur@gmail.com',
	        'email2' => NULL,
	        'phone' => '08129303730',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '2',
	        'name' => 'Dina',
	        'email1' => 'madina17.asmar@gmail.com',
	        'email2' => 'paskash@gmail.com',
	        'phone' => '081383089299',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '2',
	        'name' => 'Wulan',
	        'email1' => 'wulanda786@yahoo.com',
	        'email2' => NULL,
	        'phone' => '087788822448',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '2',
	        'name' => 'Rahmad',
	        'email1' => 'rachmadwidiyanto@gmail.com',
	        'email2' => NULL,
	        'phone' => '0816770565/081295240707',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '3',
	        'name' => 'Hana',
	        'email1' => NULL,
	        'email2' => NULL,
	        'phone' => '081806272542',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '3',
	        'name' => 'Putri',
	        'email1' => NULL,
	        'email2' => NULL,
	        'phone' => '087777575078',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '3',
	        'name' => 'Gilang',
	        'email1' => 'arin_gilang@yahoo.com',
	        'email2' => NULL,
	        'phone' => '085215425377',
	        'roles' => NULL,
        ]);

        DB::table('assistant')->insert([
	        'speakers_id' => '3',
	        'name' => 'Edy Effendy',
	        'email1' => NULL,
	        'email2' => NULL,
	        'phone' => '0811111060',
	        'roles' => NULL,
        ]);
    }
}
