<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listFitur = [
            [
                'fitur' => 'Gemar Membaca',
                'description' => 'Melalui Fitur Gemar Membaca siswa akan mendapatkan reward berupa dana digital setelah siswa membaca buku kemudian menulis rangkuman yang ditugaskan Guru.',
            ],
            [
                'fitur' => 'Fitur Chatting',
                'description' => 'Dengan fitur chatting, akan memudahkan para siswa untuk berkomunikasi ke sesama siswa maupun guru dalam grup yang sama.',
            ],
            [
                'fitur' => 'Terintegrasi Video Conference',
                'description' => 'Tidak perlu buka zoom lagi, karena Molidu telah menyediakan fitur video conference yang bisa langsung digunakan pada aplikasi ini.',
            ],
            [
                'fitur' => 'Harga Bersahabat',
                'description' => '1 kali bayar untuk semua layanan. Molidu merupakan layanan B2B, kami memanfaatkan fitur premium untuk Sekolah dengan biaya yang lebih murah dan terjangkau.'
            ],
        ];
        DB::table('fiturs')->insert($listFitur);
    }
}
