<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documents')->insert([
            'name' => 'tp_7_migrations',
            'path' => 'tp_7_migrations.pdf',
            'created_at' => Carbon::now(),
        ]);

        DB::table('documents')->insert([
            'name' => 'tp_5_injection_des_dependences',
            'path' => 'tp_5_injection_des_dependences.docx',
            'created_at' => Carbon::now(),
        ]);

        DB::table('documents')->insert([
            'name' => 'tp_4_upload',
            'path' => 'tp_4_upload.docx',
            'created_at' => Carbon::now(),
        ]);

        DB::table('documents')->insert([
            'name' => 'tp_validation',
            'path' => 'tp_validation.docx',
            'created_at' => Carbon::now(),
        ]);
    }
}
