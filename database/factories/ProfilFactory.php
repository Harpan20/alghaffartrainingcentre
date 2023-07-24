<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profil>
 */
class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_perusahaan' => fake()->company(),
            'deskripsi' => fake()->sentence(50),
            'gambar' => 'https://images.unsplash.com/photo-1536152470836-b943b246224c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8dmlld3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'alamat' => fake()->name(),
            'link_alamat' => 'https://goo.gl/maps/xaEtrATmphw62yTh6',
            'no_hp' => fake()->phoneNumber(),
            'email' => fake()->companyEmail(),
            'instagram' => 'https://www.instagram.com/unsap_smd/',
            'facebook' => 'https://web.facebook.com/groups/258758185250916',
            'tiktok' => 'https://www.tiktok.com/@slametnovendraa',
            'linkedin' => 'https://www.linkedin.com/company/elonmusk1232',
            'no_whatsapp' => '62895365840159',
        ];
    }
}
