<?php

use Anuncia\Entidades;

class DatabaseSeeder extends Seeder {

	
	public function run()
	{
		Eloquent::unguard();
		// $this->call('UserTableSeeder');
		DB::table('roles')->insert(array('rol'=>'usuario'));
		DB::table('roles')->insert(array('rol'=>'administrador'));
		DB::table('roles')->insert(array('rol'=>'super'));
		$this->command->info('Roles sembrados en la tabla roles');
		
		DB::table('estados')->insert(array('estado'=>'activado'));
		DB::table('estados')->insert(array('estado'=>'desactivado'));
		DB::table('estados')->insert(array('estado'=>'bloqueado'));
		DB::table('estados')->insert(array('estado'=>'eliminado'));
		DB::table('estados')->insert(array('estado'=>'revision'));
		DB::table('estados')->insert(array('estado'=>'denunciado'));
		DB::table('estados')->insert(array('estado'=>'rechazado'));
		$this->command->info('Estados sembrados en la tabla estados');
		
		
	}

}


