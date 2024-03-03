<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect(
            [
                [
                    'title' => 'Nova unidade Simetra',
                    'image' => '/images/thumb_1.png',
                    'description' => 'Para sua comodidade nós inauguramos mais uma unidade...',
                    'created_at' => now()
                ],
                [
                    'title' => 'Cuidados com Animais Durante Construções Urbanas',
                    'image' => '/images/thumb_2.png',
                    'description' => 'Descubra dicas rápidas para garantir o conforto de seus animais durante obras na cidade.',
                    'created_at' => now()
                ],
                [
                    'title' => 'Novos exames de bioquímica básica',
                    'image' => '/images/thumb_3.png',
                    'description' => 'Para sua comodidade nós inauguramos mais uma unidade...',
                    'created_at' => now()
                ],
                [
                    'title' => 'Nova unidade Simetra',
                    'image' => '/images/thumb_1.png',
                    'description' => 'Para sua comodidade nós inauguramos mais uma unidade...',
                    'created_at' => now()
                ],
                [
                    'title' => 'Cuidados com Animais Durante Construções Urbanas',
                    'image' => '/images/thumb_2.png',
                    'description' => 'Descubra dicas rápidas para garantir o conforto de seus animais durante obras na cidade.',
                    'created_at' => now()
                ],
                [
                    'title' => 'Novos exames de bioquímica básica',
                    'image' => '/images/thumb_3.png',
                    'description' => 'Para sua comodidade nós inauguramos mais uma unidade...',
                    'created_at' => now()
                ],
            ]
        );
        $data->each(function ($info) {
            DB::table('post_list')->insert($info);
        });
    }
}
