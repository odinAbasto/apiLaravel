<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarModel;
use Illumintae\Support\Str;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $model = new CarModel();
          $model->name = 'qashqai';
          $model->brand = 'nissan';
          $model->year = 2015;    
          $model->save();

          $model2 = new CarModel();
          $model2->name = 'cabstar';
          $model2->brand = 'nissan';
          $model2->year = 2010;    
          $model2->save();
    }
}
