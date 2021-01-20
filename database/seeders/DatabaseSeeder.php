<?php

namespace Database\Seeders;

use App\Models\PrimeService;
use App\Models\ServiceCards;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(HomeVideoSeeder::class);
        $this->call(IntroSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ServiceCardSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(PrimeServiceSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(BoutonSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(BlogInstaSeeder::class);
        $this->call(NewsletterMailSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(ContactFormSeeder::class);
        $this->call(MapAdressSeeder::class);
    }
}
