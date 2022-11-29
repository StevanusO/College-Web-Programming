<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            "name" => "Elex Media Komputindo",
            "address" => "Gedung Kompas-Gramedia I Lantai 2, Jl Palmerah Barat 29 - 33, Jakarta Pusat - 10270",
            "phone" => "082153650111",
            "email" => "publishing@elex.media",
            "image" => "https://elexmedia.id/img/logo-elexmedia-komputindo.png"
        ]);

        DB::table('publishers')->insert([
            "name" => "Oxford University Press",
            "address" => "JL. Warung Buncit Raya No.98, 2nd floor, Unit E2, Jakarta Selatan, DKI Jakarta 12510, Indonesia",
            "phone" => "082179195282",
            "email" => "groupcommunications@oup.com ",
            "image" => "https://global.oup.com/system/images/oup-logo-blue.svg"
        ]);
    }
}


// php artisan db:seed
