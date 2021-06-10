<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //追記
use Illuminate\Support\Facades\DB; //追記

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //210610 「教師」用
        # リセット
        DB::table('teachers')->delete();

        # 日本語設定
        $faker = Faker::create('ja_JP');

        # サンプルデータの挿入
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Teacher::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'tel' => $faker->phoneNumber(),
                'message' => $faker->text()
            ]);
        }
    }
}
