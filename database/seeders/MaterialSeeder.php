<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfMaterials = [
            'материал1',
            'материал2',
            'материал3',
            'материал4',
            'материал5',
            'материал6',
            'материал7',
            'материал8',
            'материал9',
            'материал10',
        ];

        foreach($ArrayOfMaterials as $item) {
            Material::create([
                'title' => $item
            ]);
        }
    }
}
