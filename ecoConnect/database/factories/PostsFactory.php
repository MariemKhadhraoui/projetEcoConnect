<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
use App\Models\Posts;


class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(3), // Génère une phrase aléatoire comme titre
            'description' => $this->faker->paragraph, // Génère un paragraphe aléatoire comme description
            'date_de_publication' => $this->faker->date, // Génère une date aléatoire
            'nbLike' => $this->faker->randomNumber(), // Génère un nombre aléatoire pour les likes
            'nbPartage' => $this->faker->randomNumber(), // Génère un nombre aléatoire pour les partages
            'images' => json_encode(['image1.jpg', 'image2.jpg']), // Exemple de données d'image
            'video' => 'video.mp4', // Exemple de nom de fichier vidéo
        ];
    }
}

