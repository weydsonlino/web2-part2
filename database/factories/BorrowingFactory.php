<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Borrowing;
use App\Models\Book;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowing>
 */
class BorrowingFactory extends Factory
{
    protected $model = Borrowing::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::inRandomOrder()->first()->id,
            'borrowed_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'returned_at' => $this->faker->optional()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
