<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Jhon Due',
                'phone_number'=>9994459877,
                'fk_department'=>1,
                'fk_designation'=>1,
                'email'=>'jhondue@gmail.com',
                'password'=>bcrypt('jhon123'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Reese Moure',
                'phone_number'=>9912389077,
                'fk_department'=>2,
                'fk_designation'=>2,
                'email'=>'reesmoure@gmail.com',
                'password'=>bcrypt('rees123'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Margerret Rio',
                'phone_number'=>9910081007,
                'fk_department'=>2,
                'fk_designation'=>2,
                'email'=>'margerret@gmail.com',
                'password'=>bcrypt('margerret123'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Samuel',
                'phone_number'=>9008889017,
                'fk_department'=>1,
                'fk_designation'=>1,
                'email'=>'samuel@gmail.com',
                'password'=>bcrypt('samuel123'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
            ]);
    }
}
