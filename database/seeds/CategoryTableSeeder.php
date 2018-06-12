<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('categories')->insert([
                             ['id' => '1', 'parent_id' => '21', 'name' => 'Mini', 'description' => 'Random Random Random', 'url' => 'Mini','status' => '1'],
                             ['id' => '2', 'parent_id' => '22', 'name' => 'Economy', 'description' =>'Random Random Random', 'url' => 'Economy','status' => '1'],
                             ['id' => '3', 'parent_id' => '23', 'name' => 'SUV', 'description' => 'Random Random Random', 'url' => 'SUV','status' => '1'],
                             ['id' => '4', 'parent_id' => '24', 'name' => 'Class', 'description' =>'Random Random Random', 'url' => 'Class','status' => '1'],
                             ['id' => '5', 'parent_id' => '25', 'name' => 'Van', 'description' => 'Random Random Random', 'url' => 'Van','status' => '1'],
                             ['id' => '6', 'parent_id' => '26', 'name' => 'Convertible', 'description' =>'Random Random Random', 'url' => 'Convertible','status' => '1'],
                             ['id' => '7', 'parent_id' => '27', 'name' => 'Mid-Range', 'description' => 'Random Random Random', 'url' => 'Mid-Range','status' => '1'],
                         ]);
    }
}
