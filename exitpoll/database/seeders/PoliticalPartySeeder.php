<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PoliticalParty;

class PoliticalPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parties = [
            [
                'name' => 'Partij voor de Vrijheid',
                'abbreviation' => 'PVV',
                'color' => '#002D62',
                'logo' => 'https://logos-world.net/wp-content/uploads/2024/07/Partij-voor-de-Vrijheid-Logo.png'
            ],
            [
                'name' => 'GroenLinks–PvdA',
                'abbreviation' => 'GL-PvdA',
                'color' => '#2E8B57', 
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/GroenLinks%E2%80%93PvdA_logo.svg/564px-GroenLinks%E2%80%93PvdA_logo.svg.png' 
            ],
            [
                'name' => 'Volkspartij voor Vrijheid en Democratie',
                'abbreviation' => 'VVD',
                'color' => '#FF6400',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/VVD_logo_%282020%E2%80%93present%29.svg/480px-VVD_logo_%282020%E2%80%93present%29.svg.png'
            ],
            [
                'name' => 'Nieuw Sociaal Contract',
                'abbreviation' => 'NSC',
                'color' => '#0A3D62',
                'logo' => 'https://nsc-multisite.ams3.digitaloceanspaces.com/NSC_Social_Logo_Navy_Back_f3c3d0697c_6fbc1b691c.png'
            ],
            [
                'name' => 'Democraten 66',
                'abbreviation' => 'D66',
                'color' => '#0A5E2A',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/D66_logo_%282019%E2%80%93present%29.svg/1200px-D66_logo_%282019%E2%80%93present%29.svg.png'
            ],
            [
                'name' => 'BoerBurgerBeweging',
                'abbreviation' => 'BBB',
                'color' => '#4CAF50',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BoerBurgerBeweging_logo.svg/1200px-BoerBurgerBeweging_logo.svg.png'
            ],
            [
                'name' => 'Christen-Democratisch Appèl',
                'abbreviation' => 'CDA',
                'color' => '#2CC84D',
                'logo' => 'https://historiek.net/wp-content/uploads-phistor1/2009/01/Geschiedenis-van-het-CDA-e1454945589816.jpg'
            ],
            [
                'name' => 'Socialistische Partij',
                'abbreviation' => 'SP',
                'color' => '#E31B23',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Socialistische_Partij_%28nl_2006%29_Logo.svg/1200px-Socialistische_Partij_%28nl_2006%29_Logo.svg.png'
            ],
            [
                'name' => 'DENK',
                'abbreviation' => 'DENK',
                'color' => '#00AEEF',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Flag_of_the_DENK.svg/2560px-Flag_of_the_DENK.svg.png'
            ],
            [
                'name' => 'Partij voor de Dieren',
                'abbreviation' => 'PvdD',
                'color' => '#79C143',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Party_for_the_Animals_logo.svg/1200px-Party_for_the_Animals_logo.svg.png'
            ],
            [
                'name' => 'Forum voor Democratie',
                'abbreviation' => 'FvD',
                'color' => '#002E5D',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/FVD_logo.svg/2560px-FVD_logo.svg.png'
            ],
            [
                'name' => 'Staatkundig Gereformeerde Partij',
                'abbreviation' => 'SGP',
                'color' => '#003366',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSugtYMRfNII4VQG677X-vP4kcyobiHlguQ_A&s'
            ],
            [
                'name' => 'ChristenUnie',
                'abbreviation' => 'CU',
                'color' => '#1F5A87',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/8/8b/ChristenUnie.svg'
            ],
            [
                'name' => 'Volt Nederland',
                'abbreviation' => 'Volt',
                'color' => '#5e013fff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/6/68/Logo_of_Volt.svg'
            ],
            [
                'name' => 'JA21',
                'abbreviation' => 'JA21',
                'color' => '#002D72',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/JA21_logo.svg/1200px-JA21_logo.svg.png'
            ],
            [
                'name' => 'Vrede voor Dieren',
                'abbreviation' => 'VVDier',
                'color' => '#c1ebafff',
                'logo' => 'https://vredevoordieren.nl/wp-content/uploads/2025/10/vrede-voor-dieren-favicon.jpg'
            ],
            [
                'name' => 'Belang van Nederland',
                'abbreviation' => 'BVNL',
                'color' => '#0d2444ff',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ12kkSwVOWYMbPadAK_wzRi3o2o-xuwFKoag&s'
            ],
            [
                'name' => 'BIJ1',
                'abbreviation' => 'BIJ1',
                'color' => '#eefa4dff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/BIJ1_logo.svg/2560px-BIJ1_logo.svg.png'
            ],
            [
                'name' => 'Libertaire Partij',
                'abbreviation' => 'LP',
                'color' => '#ffd900ff',
                'logo' => 'https://ih1.redbubble.net/image.5280162941.0136/flat,750x,075,f-pad,750x1000,f8f8f8.jpg'
            ],
            [
                'name' => '50PLUS',
                'abbreviation' => '50PLUS',
                'color' => '#d583eeff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/50PLUS_%28nl%29_Logo.svg/1200px-50PLUS_%28nl%29_Logo.svg.png'
            ],
            [
                'name' => 'Piratenpartij',
                'abbreviation' => 'Piraten',
                'color' => '#000000',
                'logo' => 'https://piratenpartij.nl/wp-content/uploads/2019/01/Piratenpartij-logo-zw.png'
            ],
            [
                'name' => 'Vrij Verbond',
                'abbreviation' => 'VV',
                'color' => '#6C4F3D',
                'logo' => 'https://vrijverbond.nl/favicon.ico'
            ],
            [
                'name' => 'De Linie',
                'abbreviation' => 'De Linie',
                'color' => '#005A9C',
                'logo' => 'https://deliniepartij.nl/wp-content/uploads/2025/08/LOGO.png'
            ],
            [
                'name' => 'Nederland met een plan',
                'abbreviation' => 'NLPLAN',
                'color' => '#004B87',
                'logo' => 'https://lirp.cdn-website.com/e843fd98/dms3rep/multi/opt/nlplan_logo_2023-01-1920w.png'
            ],
        ];




        foreach ($parties as $party) {
            PoliticalParty::create($party);
        }
    }
}

