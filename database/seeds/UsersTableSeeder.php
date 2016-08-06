<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Administrator',
        'email' => 'admin@halo.setjen.pertanian.go.id',
        'password' => bcrypt('rahasia'),
        ]);

        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Lili',
        'email' => 'lili@halo.setjen.pertanian.go.id',
        'password' => bcrypt('rahasia'),
        ]);
    }
}
