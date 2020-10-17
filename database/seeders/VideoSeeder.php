<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VideoSeeder extends Seeder
{
    /**
     *
     *director
    genre
    actors
    kaltura_id
    title
    kinopoisk_id
    title_en
    description
    duration
    thumbnail
    countries
    year
    translator
    embed_url
    category_id
     *
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++)
        DB::table('video')->insert([
            'title' => 'Сериал Их перепутали в роддоме '.$i,
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'director' => 'password',
            'genre' => 'Драма',
            'actors' => 'Кэти Леклерк',
            'kaltura_id' => '23432432432',
            'kp_id' => '111222',
            'title_en' => 'Switched at Birth',
            'duration' => '145',
            'countries' => 'Турция',
            'year' => '2020',
            'translator' => 'HD',
            'embed_url' => 'https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4',
            'category_id' => rand(1, 100),
            'poster' => 'http://videobum.local/img/covers/cover.jpg',
            'poster_big' => 'http://videobum.local/img/gallery/project-2.jpg',
            'sezon' => rand(1, 3),
            'seriya' => rand(1, 500),
            'quality' => 'HD',
            'status' => 1,
            'age' => '16',
            'perevod' => 'SesDizi'
        ]);
    }
}
