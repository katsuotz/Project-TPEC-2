<?php

namespace App\Database\Seeds;

use App\Models\Category;
use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['category_name' => 'Komputer'],
            ['category_name' => 'Laptop'],
            ['category_name' => 'Macbook'],
            ['category_name' => 'Android'],
            ['category_name' => 'iPhone'],
        ];

        $category = new Category();
        foreach ($data as $key => $datum) {
            $category->save([
                'category_id' => $key + 1,
                'category_name' => $datum['category_name'],
                'category_slug' => url_title($datum['category_name'], '-', true),
            ]);
        }
    }
}
