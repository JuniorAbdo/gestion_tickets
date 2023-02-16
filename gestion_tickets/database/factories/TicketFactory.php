<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number_ticket'=>'TST'.random_int(1,100),
            'title'=>$this->faker->text(30),
            'description'=>$this->faker->paragraph,
            'pice'=>'',
            'user_id'=>1,
            'csc_id'=>rand(1,13),
            'etat_id'=>rand(1,4),
            'categorie_id'=>rand(1,4),
            'sous_categorie_id'=>rand(1,18),
            'created_at'=>$this->faker->dateTimeThisDecade,
            'updated_at'=>$this->faker->dateTimeThisDecade,

        ];
    }
}
