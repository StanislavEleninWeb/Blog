<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Stanislav Elenin',
            'email' => 'stanislaveleninweb@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'active' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
                
        factory(App\User::class, 10)->create();
        
    }
}
