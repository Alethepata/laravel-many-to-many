<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Tecnology;

class ProjectTecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){

            $project= Project::inRandomOrder()->first();
            $tecnology_id= Tecnology::inRandomOrder()->first();

            $project->tecnologies()->attach($tecnology_id);

        }
    }
}