<?php

namespace Database\Seeders;

use App\Models\ContatoModel;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContatoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      ContatoModel::Factory()->count(100)->create();

    }
}
