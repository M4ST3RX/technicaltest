<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'parent_id' => 0,
            'name' => 'Main Category 1',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'parent_id' => 0,
            'name' => 'Main Category 2',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'parent_id' => 0,
            'name' => 'Main Category 3',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'parent_id' => 1,
            'name' => 'Sub Category 1',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'parent_id' => 1,
            'name' => 'Sub Category 2',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'parent_id' => 4,
            'name' => 'Sub Sub Category 1',
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'parent_id' => 4,
            'name' => 'Sub Sub Category 2',
        ]);
        DB::table('categories')->insert([
            'id' => 8,
            'parent_id' => 5,
            'name' => 'Sub Sub Category 1',
        ]);
        DB::table('categories')->insert([
            'id' => 9,
            'parent_id' => 5,
            'name' => 'Sub Sub Category 2',
        ]);
        DB::table('categories')->insert([
            'id' => 10,
            'parent_id' => 2,
            'name' => 'Sub Category 1',
        ]);
        DB::table('categories')->insert([
            'id' => 11,
            'parent_id' => 2,
            'name' => 'Sub Category 2',
        ]);

    }
}
