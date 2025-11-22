<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SettingModel;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingModel::create([
            'name' => 'Website',
            'desc' => 'Welcome to our website',
            'phone' => '0123456789',
            'email' => 'contact@website.com',
            'zalo' => '0123456789',
            'address' => 'Your Address Here',
            'fanpage' => 'https://facebook.com/yourpage',
            'website' => 'https://yourwebsite.com',
            'link_map' => 'https://maps.google.com',
            'iframe_map' => '',
            'logo_name' => 'logo.png',
            'logo_path' => '/storage/logo/logo.png',
            'favicon_name' => 'favicon.ico',
            'favicon_path' => '/storage/favicon/favicon.ico',
        ]);
    }
}
