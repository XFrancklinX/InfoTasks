<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Work;

class DatabaseSeeder extends Seeder
{
    public function run():void
    {
        $users = [
            ['name' => 'admin', 'email' => 'admin@infotasks.net', 'password' => 'admin123'],
        ];

        $works = [
            [
                'tittle' => 'Se requiere maestro albañil',
                'detail' => 'Se requiere maestro albañil para construcción de obra bruta contactos al 12345678',
                'price' => 0,
                'location' => 'POTOSI - BOLIVIA',
                'contact' => '12345678, 87654321',
                'links' => 'https://www.tiktok.com/@xxfrancklinxx?is_from_webapp=1&sender_device=pc, https://www.facebook.com/franklin.cahuanaarenas.7/',
                'user_id' => 1,
                'created_at' => date('d-m-Y H:i:s'),
            ],
        ];
    
        User::insert($users);
        Work::insert($works);
    }
}
