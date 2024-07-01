<?php

namespace Database\Seeders;

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
            ['668179c804bb6409b706ab02', '668179c804bb6409b706ab03', '668179c904bb6409b706ab0a'],
            ['668179c804bb6409b706ab02', '668179c904bb6409b706ab0a'],
            ['668179c904bb6409b706ab0c', '668179ca04bb6409b706ab0d', '668179ca04bb6409b706ab0e', '668179c904bb6409b706ab0a'],
            // ['668179c804bb6409b706ab02', '668179c804bb6409b706ab03', '668179c904bb6409b706ab0a'],
            // ['668179c804bb6409b706ab01'],
            // ['JavaFx', 'MySQL'],
            ['668179c904bb6409b706ab0c', '668179c804bb6409b706ab00', '668179c904bb6409b706ab0a'],
            ['668179c804bb6409b706ab01', '668179c904bb6409b706ab0b', '668179c904bb6409b706ab0a'],
            ['668179ca04bb6409b706ab11', '668179ca04bb6409b706ab0f', '668179ca04bb6409b706ab10', '668179c904bb6409b706ab08'],
            ['668179c804bb6409b706ab02', '668179c804bb6409b706ab03', '668179c904bb6409b706ab0a'],
            ['668179c804bb6409b706aafe', '668179c904bb6409b706ab06'],
            ['668179c804bb6409b706ab00', '668179c904bb6409b706ab06'],
            ['668179c804bb6409b706ab00', '668179c904bb6409b706ab06'],
            ['668179c804bb6409b706ab02', '668179c904bb6409b706ab0a'],
            ['668179c804bb6409b706ab02'],
            ['668179c804bb6409b706aafe', '668179c904bb6409b706ab06'],
            ['668179c704bb6409b706aafd', '668179c804bb6409b706aafe', '668179c904bb6409b706ab06'],
            ['668179c804bb6409b706aaff'],
            ['668179c904bb6409b706ab06'],
            ['668179c804bb6409b706aafe', '668179c904bb6409b706ab06'],
            ['668179c904bb6409b706ab06'],
            ['668179c904bb6409b706ab06']
        ];

        $projects = [
            '66817a590d093ec663006742',
            '66817a5a0d093ec663006743',
            '66817a5a0d093ec663006744',
            // 'Bloggy',
            // 'AI Voice Assistance',
            // 'Student Management System',
            '66817a5b0d093ec663006745',
            '66817a5b0d093ec663006746',
            '66817a5b0d093ec663006747',
            '66817a5b0d093ec663006748',
            '66817a5b0d093ec663006749',
            '66817a5c0d093ec66300674a',
            '66817a5e0d093ec66300674b',
            '66817a5f0d093ec66300674c',
            '66817a5f0d093ec66300674d',
            '66817a5f0d093ec66300674e',
            '66817a5f0d093ec66300674f',
            '66817a5f0d093ec663006750',
            '66817a5f0d093ec663006751',
            '66817a5f0d093ec663006752',
            '66817a5f0d093ec663006753',
            '66817a600d093ec663006754'
        ];

        for($i=0; $i<count($langs); $i++){
            $lang = $langs[$i];
            for($j=0; $j<count($lang); $j++){
                ProjectLanguage::create(['project_id' => $projects[$i], 'language_id' => $lang[$j]]);
            }
        }
    }
}
