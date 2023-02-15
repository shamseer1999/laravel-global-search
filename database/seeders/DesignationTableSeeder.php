<?php

namespace Database\Seeders;

use App\Models\Designation;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('designations')->insert([
            [
                'name'=>'Marketing Manager',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Mobile Application Dev',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
            ]);
    }
}
