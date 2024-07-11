<?php

namespace Database\Seeders;
//DB::table('テーブル名')->insert(['カラム名'=>'データ']);
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'title'=>'命名の心得',
            'body'=>'命名はデータを基準に考える',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
    }
}
