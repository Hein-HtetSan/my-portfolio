<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Language;
use App\Models\ProjectLanguage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $langs = [
            ['PHP', 'Laravel', 'MySQL'],
            ['PHP', 'MySQL'],
            ['J2EE', 'JSP', 'JDBC', 'Bootstrap'],
            // ['668179c804bb6409b706ab02', '668179c804bb6409b706ab03', '668179c904bb6409b706ab0a'],
            // ['668179c804bb6409b706ab01'],
            // ['JavaFx', 'MySQL'],
            ['J2EE', 'Bootstrap', 'MySQL'],
            ['Django', 'Bootstrap', 'MySQL'],
            ['Electron', 'React JS', 'Express', 'GraphQL'],
            ['PHP', 'Laravel', 'MySQL'],
            ['CSS', 'JavaScript'],
            ['HTML', 'CSS', 'JavaScript'],
            ['CSS', 'Bootstrap'],
            ['PHP', 'SQL'],
            ['PHP'],
            ['JavaScript', 'CSS'],
            ['HTML', 'CSS', 'JavaScript'],
            ['Tailwindcss'],
            ['JavaScript'],
            ['Bootstrap', 'JavaScript'],
            ['JavaScript'],
            ['JavaScript']
        ];

        $project_names = [  // project names
            'Pizza Order System',
            'Book Haven',
            'CC Shop',
            // 'Bloggy',
            // 'AI Voice Assistance',
            // 'Student Management System',
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
            'Digital Hunter B5 Solution',
            'Easy Bank Landing UI',
            'Rating Solution',
            'Space Tourism UI',
            'Bee Music',
            'Music Player'
        ];

        for($i=0; $i<count($langs); $i++){
            $lang = $langs[$i];
            $project_id = Project::select('_id')->where('title', $project_names[$i])->first();
            for($j=0; $j<count($langs); $j++){
                $lang_id = Language::select('_id')->where('name', $langs[$j])->first();
                ProjectLanguage::create(['project_id' => $project_id, 'language_id' => $lang_id]);
            }
        }
    }
}
