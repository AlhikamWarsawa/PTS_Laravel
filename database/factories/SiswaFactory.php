<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        return [
            'Nama_Lengkap' => $this->faker->name,
            'Tempat_Lahir' => $this->faker->city,
            'Tanggal_Lahir' => $this->faker->date,
            'Alamat' => $this->faker->address,
            'Asal_Sekolah' => $this->faker->company,
            'Email' => $this->faker->unique()->safeEmail,
            'Foto' => $this->faker->imageUrl,
            'Scan_KK' => $this->faker->filePath,
        ];
    }
}
