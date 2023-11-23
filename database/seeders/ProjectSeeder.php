<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $projects = [
            [
                "title" => "Office of Celeste Tabriz",
                "subtitle" => "Immigration visa services",
                "image_url" => "uploads/celestetabriz.com-min.png",
            ],
            [
                "title" => "Engineering Telecom Associates",
                "subtitle" => "Telecom Business",
                "image_url" => "uploads/Engineering-Telecom-Associates-min.png",
            ],
            [
                "title" => "Law Tax in Greece Consulting",
                "subtitle" => "Legal Consulting",
                "image_url" => "uploads/ltigr.com-min.png",
            ],
            [
                "title" => "LP Business Solutions",
                "subtitle" => "Business Solutions",
                "image_url" => "uploads/LP-Bus.-Solutions-min.png",
            ],
            [
                "title" => "Ucelo Homes Builders Inc",
                "subtitle" => "Construction Business",
                "image_url" => "uploads/ucelohomesbuilders.com-min.png",
            ],
            [
                "title" => "Spotless House Clean",
                "subtitle" => "House Cleaning Business",
                "image_url" => "uploads/spotlesshouseclean.com-min.png",
            ]
        ];
        Project::insert($projects);
    }
}
