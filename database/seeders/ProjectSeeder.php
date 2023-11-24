<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('projects')->timestamps = true;

        $projects = [
            [
                "title" => "Office of Celeste Tabriz",
                "subtitle" => "Immigration visa services",
                "image_url" => "uploads/celestetabriz.com-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "title" => "Engineering Telecom Associates",
                "subtitle" => "Telecom Business",
                "image_url" => "uploads/Engineering-Telecom-Associates-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "title" => "Law Tax in Greece Consulting",
                "subtitle" => "Legal Consulting",
                "image_url" => "uploads/ltigr.com-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "title" => "LP Business Solutions",
                "subtitle" => "Business Solutions",
                "image_url" => "uploads/LP-Bus.-Solutions-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "title" => "Ucelo Homes Builders Inc",
                "subtitle" => "Construction Business",
                "image_url" => "uploads/ucelohomesbuilders.com-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "title" => "Spotless House Clean",
                "subtitle" => "House Cleaning Business",
                "image_url" => "uploads/spotlesshouseclean.com-min.png",
                "created_at"=> now(),
                "updated_at"=> now(),
            ]
        ];
        Project::insert($projects);
    }
}
