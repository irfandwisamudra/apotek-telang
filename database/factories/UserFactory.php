<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
  protected $model = User::class;

  public function definition()
  {
    // return [
    //   'username' => $this->faker->userName,
    //   'email' => $this->faker->unique()->safeEmail,
    //   'password' => md5('password'),
    // ];
  }
}
