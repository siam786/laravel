<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\NidCardSeeder;
use Database\Seeders\BookTypeSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\PublisherSeeder;
use Database\Seeders\SubCategorySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if($this->command->confirm('Do You want to Migrate Your db')){
            $this->command->call('migrate:refresh');
            $this->command->info('Database is Refreshed');
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'customers',
        //     'email' => 'customers@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12347878'),// password
        //     'remember_token' => Str::random(10),
        //     'phone' => '01742080498',
        // ]);

        // Book::factory(20)->create();
            $this->call([
                AuthorSeeder::class,
                BookTypeSeeder::class,
                NidCardSeeder::class,
                PostSeeder::class,
                PublisherSeeder::class,
                UserSeeder::class,
                BookSeeder::class,
                CategorySeeder::class,
                SubCategorySeeder::class,
                ProductsSeeder::class
            ]);

            $category= Category::factory(20)->create();
            $subcategories = SubCategory::factory(20)->make()->each(function($subcategory) use ($category){
                $subcategory->category_id = $category->random()->id;
                $subcategory->save();
            });




     }
}