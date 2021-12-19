<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'Mobile Learning And Education',
            'description' => '<p>Molidu merupakan sebuah platform pembelajaran online yang menyediakan solusi untuk guru dan murid dalam proses kegiatan belajar mengajar secara efektif, efisien, dan terstruktur.</p>
            <p>melalui platform Molidu, kegiatan pembelajaran secara daring seperti absensi, pengerjaan tugas oleh siswa, pemberian materi oleh guru dapat lebih mudah dilakukan. </p>'
        ]);
    }
}
