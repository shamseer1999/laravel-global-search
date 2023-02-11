<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('departments')->insert([
        //     [
        //         'name'=>'Sales and Marketing',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ],
        //     [
        //         'name'=>'Application Development',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ]
        // ]);

        // DB::table('designations')->insert([
        //     [
        //         'name'=>'Marketing Manager',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ],
        //     [
        //         'name'=>'Mobile Application Dev',
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ]
        //     ]);
        // DB::table('users')->insert([
        //     [
        //         'name'=>'Jhon Due',
        //         'phone_number'=>9994459877,
        //         'fk_department'=>1,
        //         'fk_designation'=>1,
        //         'email'=>'jhondue@gmail.com',
        //         'password'=>bcrypt('jhon123'),
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ],
        //     [
        //         'name'=>'Reese Moure',
        //         'phone_number'=>9912389077,
        //         'fk_department'=>2,
        //         'fk_designation'=>2,
        //         'email'=>'reesmoure@gmail.com',
        //         'password'=>bcrypt('rees123'),
        //         'created_at'=>date('Y-m-d H:i:s'),
        //         'updated_at'=>date('Y-m-d H:i:s')
        //     ]
        //     ]);
    }
}
