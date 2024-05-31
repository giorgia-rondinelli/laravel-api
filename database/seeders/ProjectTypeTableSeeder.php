<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<40; $i++){
            $project=Project::inRandomOrder()->first();
            $type_id=Type::inRandomOrder()->first()->id;
            $project->types()->attach($type_id);
        }


    }
}
