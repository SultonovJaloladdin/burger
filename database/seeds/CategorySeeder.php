<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' => 'Burgers', 
            'desc' => 'Lorem ipsum dolor site by me!', 
            'image' => 'path/to/image'
        ]);

        factory(Categories::class, 5)->create();
    }
}
