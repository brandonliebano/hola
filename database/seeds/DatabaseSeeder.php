<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsuarioTableSeeder');
		$this->call('ProductoTableSeeder');
	}

}
class UsuarioTableSeeder extends Seeder{

	public function run(){

		DB::table('usuarios')->delete();

		Usuario::create(['nombre'=>'aaaaa','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'bbbbbbb','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'cccccccc','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'dddddddd','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'eeeeeeeee','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'ffffffff','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'ggggggg','apellido'=>'cuartas']);
		Usuario::create(['nombre'=>'hhhhhhhhh','apellido'=>'cuartas']);
	}

}
class ProductoTableSeeder extends Seeder{

	public function run(){

		DB::table('productos')->delete();

		Producto::create(['nombre'=>'aaaaaaaa','serial'=>'sdg3sdf5']);
		Producto::create(['nombre'=>'bbbbbbb','serial'=>'sdg3sdf5']);
		Producto::create(['nombre'=>'cccccccccc','serial'=>'sdg3sdf5']);
		Producto::create(['nombre'=>'dddddddddd','serial'=>'sdg3sdf5']);
		Producto::create(['nombre'=>'eeeeeeeeeee','serial'=>'sdg3sdf5']);
		Producto::create(['nombre'=>'fffffffff','serial'=>'sdg3sdf5']);
	}
}