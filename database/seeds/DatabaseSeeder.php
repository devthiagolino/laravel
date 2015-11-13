<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        #factory(App\Entidades\Livro::class, 50)->create();
        #factory(App\Entidades\Autor::class, 100)->create();
        Model::reguard();
    }
}
