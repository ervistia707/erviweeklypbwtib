<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    private static $data_berita = [
    [
        "judul" => "Mahasiswa TI",
        "Slug" => "mahasiswa-ti",
        "Penulis" => "Feby",
        "Konten" => "Mahasiswa Teknologi Informasi (TI) merupakan individu yang mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang teknologi informasi. Mereka terlibat dalam berbagai proyek, penelitian, dan inovasi untuk menghadapi tantangan di era digital.",
    ],
    [
        "judul" => "Mahasiswa Informatika",
        "Slug" => "mahasiswa-informatika",
        "Penulis" => "Asya",
        "Konten" => "Mahasiswa Informatika merupakan individu yang mempelajari dan mengembangkan pengetahuan serta keterampilan dalam bidang informatika. Mereka terlibat dalam berbagai proyek, penelitian, dan inovasi untuk menghadapi tantangan di era digital.",
    ]
];

 
    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($Slug)
{
    foreach (self::$data_berita as $berita) {
        if ($berita['Slug'] === $Slug) {
            return $berita;
        }
    }

}

    public static function getTitle($Slug)
    {
        $berita = self::getBerita($Slug);

        return $berita["judul"];
    }
}