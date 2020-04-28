<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

	private $roles = [
		'Потребител' => 'user',
		'Контрибутор' => 'contributor',
		'Администратор' => 'admin',
		'Собственик' => 'owner',
		'Програмист' => 'developer'
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	foreach($this->roles as $title => $slug){

    		DB::table('roles')->insert([
    			'title' => ucfirst($title),
    			'slug' => strtolower($slug),
    			'description' => '',
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);

    	}
        // factory(App\Role::class, 5)->create();
    }
}
