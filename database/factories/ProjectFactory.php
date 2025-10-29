<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $projects = [
            [
                'title' => 'Quickbook Website',
                'image_prefix' => 'Quickbook',
                'image_count' => 5,
                'code' => null,
            ],
            [
                'title' => 'Eaftrip Website',
                'image_prefix' => 'wisata',
                'image_count' => 5,
                'code' => null,
            ],
            [
                'title' => 'Upin Ipin UI',
                'image_prefix' => 'upinipin',
                'image_count' => 5,
                'code' => null,
            ],
            [
                'title' => 'Mini Calculator',
                'image_prefix' => null,
                'image_count' => 0,
                'code' => <<<PYTHON
def hitung_matrix(matriks):
    for baris in matriks:
        print(" ".join(map(str, baris)))

# ... (potongan kode lainnya)
if __name__ == "__main__":
    main()
PYTHON
            ],
        ];

        return $this->faker->randomElement($projects);
    }
}
