<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                "name" => "Web Development",
                "color" => "#1E90FF", // DodgerBlue
            ],
            [
                "name" => "Operating Systems",
                "color" => "#32CD32", // LimeGreen
            ],
            [
                "name" => "DataBase",
                "color" => "#FFD700", // Gold
            ],
            [
                "name" => "Gaming",
                "color" => "#FF4500", // OrangeRed
            ],
            [
                "name" => "Network",
                "color" => "#8A2BE2", // BlueViolet
            ],
            [
                "name" => "Systems Security",
                "color" => "#FF69B4", // HotPink
            ],
            [
                "name" => "Front-End",
                "color" => "#00BFFF", // DeepSkyBlue
            ],
            [
                "name" => "Back-End",
                "color" => "#FF6347", // Tomato
            ],
            [
                "name" => "Full-Stack",
                "color" => "#2E8B57", // SeaGreen
            ]
    ];

    foreach ($types as $type) {
        $newType = new Type();
        $newType->name = $type["name"];
        $newType->color = $type["color"];
        $newType->save();
    }
    }
}
