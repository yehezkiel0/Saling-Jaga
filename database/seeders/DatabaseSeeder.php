<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Faq;
use App\Models\User;
use App\Models\Layanan;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();

        User::create([
            'name' => 'Susss Banget',
            'email' => 'susbanget@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Faq::create([
            'question' => 'Apakah layanan ini ditujukan untuk mahasiswa Fakultas Ilmu Komputer saja?',
            'answer' => 'Iya, karena layanan Saling jaga ini beroperasi di lingkungan Fakultas Ilmu Komputer'
        ]);

        Faq::create([
            'question' => 'Apakah laporan yang dikirim akan dijaga privasinya?',
            'answer' => 'Iya, pihak SalingJaga akan menjaga privasi data pelapor dan korban'
        ]);

        Faq::create([
            'question' => 'Apakah bisa melakukan konseling secara offline?',
            'answer' => 'Bisa, anda dapat menghubungi call center kami yang selanjutnya akan diteruskan kepada pihak yang berwenang'
        ]);

        Layanan::create([
            'name' => 'Pelaporan'
        ]);

        Layanan::create([
            'name' => 'Konsultasi'
        ]);
    }
}
