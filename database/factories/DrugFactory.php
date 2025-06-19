<?php

namespace Database\Factories;

use App\Models\Drug;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Drug::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    // return [
    //   'icon' => $this->faker->imageUrl(),
    //   'kode' => $this->faker->unique()->word,
    //   'supplier_id' => function () {
    //     return Supplier::factory()->create()->id;
    //   },
    //   'nama_obat' => $this->faker->word,
    //   'produser' => $this->faker->company,
    //   'stok' => $this->faker->randomNumber(2),
    //   'harga' => $this->faker->randomNumber(5, true),
    // ];
  }
}