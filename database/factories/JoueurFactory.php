<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>$this->faker->lastName(),
            "prenom"=>$this->faker->firstName(),
            "date_de_naissance"=>$this->faker->date(),
            //randomElement est utilisé ici pour générer les postes selon les mots des postes mentionné https://laracasts.com/discuss/channels/laravel/faker-randomelements
            "poste"=>$this->faker->randomElement(['Attaquant', 'Milieu', 'Défenseur', 'Gardien']),
            "numero"=>$this->faker->numberBetween(1, 99)
        ];
    }
}
