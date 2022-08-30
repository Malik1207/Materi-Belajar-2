<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::truncate();

        Jurusan::create([
            'nama'=> 'Yasir',
            'nama_jurusan'=> 'Informatika',
            'nama_dekan'=> 'Dr. Hj Zubaedah Lc.Mmpd'
        ]);
    }
}
