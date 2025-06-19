<?php 
namespace Database\Factories;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'tanggal' => $this->faker->dateTime(),
        //     'user_id' => function () {
        //         return User::factory()->create()->id;
        //     },
        //     'nama_customer' => $this->faker->name,
        //     'kode_obat' => function () {
        //         return Drug::factory()->create()->kode;
        //     },
        //     'qty' => $this->faker->randomNumber(1),
        //     'total' => $this->faker->randomNumber(5, true),
        // ];
    }
}
