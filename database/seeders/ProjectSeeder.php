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
            'Student Management System',
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

        $project_source_code = [ // projects' github links
            'pizza-order-system',
            'book-haven-project',
            'cc-shop',
            // 'bloggy',
            'Ai_voice_Assistance',
            'student-management-mini-project',
            'travel-booking-j2ee',
            'little-lemon',
            'Notedly',
            'ConNET',
            'Movie',
            'learning-app-project',
            'audibook-ui-project',
            'todoList',
            'RealTime_chat',
            'DigitalHunderChanllenge2',
            'DigitalHunterB5Solution',
            'easybanklandingpage',
            'RatingSolution',
            'SpaceTourism',
            'beeMusic',
            'musicPlayer'
        ];

        $project_short_desc = [ // projects' short description
            'Pizza Order System in CodeLab Project',
            'Final Project of YHA Computer Training Center',
            '2nd Year, 2nd Sem Final Project with J2EE',
            // 'Blog System Project with Laravel',
            'AI Voice Assistance Project with Python',
            'Student Management System Enterprise Application with Java, ScenceBuilder',
            'Travel Booking System web application with J2EE',
            'Little Lemon - A simple e-commerce website with Django Python',
            'Notedly - A note taking app with React JS, Express, GraphQL',
            'ConNET - A simple to do list project with Laravel',
            'Movie - A simple movie UI with pure css. Just to show, I am professional in CSS',
            'Learning App - A simple learning site UI with HTML, CSS, JS',
            'AudiBook - UI Assignment from YHA Computer',
            'Todo List - A simple todo list project with PHP',
            'RealTime Chat - A simple chat app with PHP',
            'Digital Hunter Challenge 2 - UI Project Challenge from DigitalHunter Course',
            'Digital Hunter Challenge 5 - UI Project Challenge from DigitalHunter Course',
            'Easy Bank Landing Page - Frontend Mentor Project Challenge',
            'Rating Solution - UI Project Challenge from Frontend Mentor',
            'beeMusic - Just to practice the JavaScript, Second Project',
            'Music Player - Just to practice the JavaScript, First Project'
        ];

        $project_content = [// project content
            'Pizza Order System in CodeLab Project',
            'Final Project of YHA Computer Training Center',
            '2nd Year, 2nd Sem Final Project with J2EE',
            // 'Blog System Project with Laravel',
            'AI Voice Assistance Project with Python',
            'Student Management System Enterprise Application with Java, ScenceBuilder',
            'Travel Booking System web application with J2EE',
            'Little Lemon - A simple e-commerce website with Django Python',
            'Notedly - A note taking app with React JS, Express, GraphQL',
            'ConNET - A simple to do list project with Laravel',
            'Movie - A simple movie UI with pure css. Just to show, I am professional in CSS',
            'Learning App - A simple learning site UI with HTML, CSS, JS',
            'AudiBook - UI Assignment from YHA Computer',
            'Todo List - A simple todo list project with PHP',
            'RealTime Chat - A simple chat app with PHP',
            'Digital Hunter Challenge 2 - UI Project Challenge from DigitalHunter Course',
            'Digital Hunter Challenge 5 - UI Project Challenge from DigitalHunter Course',
            'Easy Bank Landing Page - Frontend Mentor Project Challenge',
            'Rating Solution - UI Project Challenge from Frontend Mentor',
            'beeMusic - Just to practice the JavaScript, Second Project',
            'Music Player - Just to practice the JavaScript, First Project'
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
