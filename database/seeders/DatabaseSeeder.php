<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


       User::create([
           'name' => 'Afifa Aulia',
           'username' => 'afifaaulia',
           'email' => 'afifaulia2004@gmail.com',
            'password' => bcrypt('password')
        ]);

        //User::create([
          //  'name' => 'Vinda Maysaroh',
            //'email' => 'vindmayyy@gmail.com',
            //'password' => bcrypt('12345')
        //]);

       User::factory(3)->create();

        Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
            ]);

        Category::create([
           'name' => 'Personal',
            'slug' => 'personal'
            ]);

            Post::factory(20)->create();
        }
}
