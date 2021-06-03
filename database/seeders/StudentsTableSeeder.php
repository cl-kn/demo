<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //追記
use Illuminate\Support\Facades\DB; //追記

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        # リセット
        DB::table('students')->delete();

        # 日本語設定
        // $faker = Faker\Factory::create('ja_JP');
        $faker = Faker::create('ja_JP'); //修正版

        # サンプルデータの挿入
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Student::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'tel' => $faker->phoneNumber(),
                'message' => $faker->text()
            ]);
        }
    }
}
