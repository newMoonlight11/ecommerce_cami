<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myCategory1 = new Category();
        $myCategory1->name = 'Electrodomésticos';
        $myCategory1->description ='Descripción 1';
        $myCategory1->save();

        $myCategory2 = new Category();
        $myCategory2->name = 'Juguetes';
        $myCategory2->description ='Descripción 2';
        $myCategory2->save();

        $myCategory3 = new Category();
        $myCategory3->name = 'Ropa';
        $myCategory3->description ='Descripción 3';
        $myCategory3->save();

        $myCategory4 = new Category();
        $myCategory4->name = 'Autos';
        $myCategory4->description ='Descripción 4';
        $myCategory4->save();

        $myCategory5 = new Category();
        $myCategory5->name = 'Skincare';
        $myCategory5->description ='Descripción 5';
        $myCategory5->save();
    }
}
