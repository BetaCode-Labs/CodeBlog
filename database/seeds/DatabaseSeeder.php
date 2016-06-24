<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call('PruebaTableSeeder');

    }

}

class PruebaTableSeeder extends Seeder
{
    public function run()
    {

        //   factory(App\User::class, 1)->create();
        //   factory(App\xcurso::class, 20)->create();
        //   factory(App\xarticuloscurso::class, 20)->create();
        //   factory(App\xinfeccion::class, 20)->create();
        //   factory(App\xlog::class, 20)->create();
        //   factory(App\xlte::class, 20)->create();
        //   factory(App\xproyecto::class, 20)->create();
    }
}


