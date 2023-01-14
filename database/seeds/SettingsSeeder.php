<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'address' => '????/???',
            'phone'   => '+01200000000',
            'email'   => 'contactme@tagheer.com',
            'site_name'  => 'Tageer Blog',
            'logo_path'  => '/img/logo.jpg',
            'about_content' => 'about this site',
            'is_open' => true
        ]);
    }
}
