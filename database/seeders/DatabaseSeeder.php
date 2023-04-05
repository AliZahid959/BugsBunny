<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\User;
use App\Models\SiteContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $super_admin_user = User::create([
            'name' => 'Abdul Rauf',
            'slug' => 'abdul-rauf',
            'email' => 'abdulrauf735@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $admin_user = User::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        SiteContent::create([
            'site_heading' => 'BugsBunny',
            'site_description' => 'BugsBunny Description',
            
        ]);

        AboutPage::create([
            'about_our_agency_heading' => 'BugsBunny',
            'about_our_agency_description' => 'BugsBunny Description',
        ]);

        ContactPage::create([
            'heading' => 'BugsBunny',
            'description' => 'BugsBunny Description',
        ]);

    }
}
