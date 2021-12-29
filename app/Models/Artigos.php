<?php

namespace LaraDev\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigos extends Model
{
    use HasFactory;

    public static function getPosts()
    {
        $artigos = [
            [
                'titulo' => 'Título Artigo 1',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
            [
                'titulo' => 'Título Artigo 2',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
            [
                'titulo' => 'Título Artigo 3',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
            [
                'titulo' => 'Título Artigo 4',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
            [
                'titulo' => 'Título Artigo 5',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
            [
                'titulo' => 'Título Artigo 6',
                'conteudo' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'date' => date('Y/m/d')
            ],
        ];

        return $artigos;
    }

}
