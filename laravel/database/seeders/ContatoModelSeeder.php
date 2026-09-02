<?php

namespace Database\Seeders;

use App\Models\ContatoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContatoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new ContatoModel();
        $contato -> nome = 'Ryuzaki Hanma';
        $contato -> email = 'Ryuzakireidelas@gmail.com';
        $contato -> save();

    }
}
