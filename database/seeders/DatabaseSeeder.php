<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Language;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Hein Htet San',
        //     'email' => 'heinhtetsan33455@gmail.com',
        // ]);
        $languages = [
            'HTML',
            'CSS',
            'Tailwindcss',
            'Bootstrap',
            'Python',
            'PHP',
            'Laravel',
            'Java',
            'Rust',
            'JavaScript',
            'JSP',
            'Electron',
            'SQL',
            'MySQL',
            'Django',
            'J2EE',
            'JSP',
            'JDBC',
            'GraphQL',
            'React JS',
            'Express',
            'MongoDB',
            'Spring',
            'Node JS',
            'Vue JS',
            'Angular JS',
            'C++',
            'C#',
            'C',
            'Go',
            'Kotlin',
            'Swift',
            'Ruby',
            'R',
            'MATLAB',
            'Perl',
            'Assembly',
            'Shell',
            'VBA',
            'JavaFx',
        ];
        for($i=0; $i < count($languages); $i++)
        {
            Language::create(['name' => $languages[$i]]);
        }

        

    }
}
