<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        # StudentsTableSeeder を呼び出すよう登録
        $this->call(StudentsTableSeeder::class);
    }
}
