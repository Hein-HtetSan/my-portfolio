<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $project_names = [  // project names
            'Pizza Order System',
            'Book Haven',
            'CC Shop',
            // 'Bloggy',
            'AI Voice Assistance',
            'Library Management System',
            'Digital Hunter Design',
            'Travel Booking System',
            'Little Lemon',
            'Notedly',
            'ConNET Note Taking',
            'Movie UI',
            'Learning App UI',
            'AudiBook UI',
            'To Do List',
            'Real Time Chat',
            'Digital Hunter 2nd Challenge',
            'Easy Bank Landing UI',
            'Rating Solution',
            'Space Tourism UI',
            'Digital Hunter B5 Solution',
            'Bee Music',
            'Music Player'
        ];

        $project_source_code = [ // projects' github links

        ];

        $project_short_desc = [ // projects' short description

        ];

        $project_content = [// project content

        ];

        $project_demo_link = [ // projects' demo links

        ];

        $imagePath = public_path('image/encapsulation.jpg'); // Adjust the image path
        $base64Data = file_get_contents($imagePath);

        Project::create([
            'title' => 'Test Project',
            'short_desc' => 'Just test to upload sample project',
            'cover' => new \MongoDB\BSON\Binary($base64Data, \MongoDB\BSON\Binary::TYPE_GENERIC),
            'github' => 'https://github.com/Hein-HtetSan/my-portfolio.git',
            'demo' => 'https://heinhtetsan.tech',
            'content' => 'this is testing',
        ]);
    }
}
