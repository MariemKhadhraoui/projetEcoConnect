<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Posts;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Posts::create([
                'titre' => 'Titre de l\'article ' . ($i + 1), // Personnalisez le titre de l'article
                'description' => 'Description de l\'article ' . ($i + 1), // Personnalisez la description de l'article
                'date_de_publication' => now(), // Utilisez la date actuelle ou personnalisez-la
                'nbLike' => rand(1, 100), // Générez un nombre aléatoire de likes
                'nbPartage' => rand(1, 100), // Générez un nombre aléatoire de partages
                'images' => json_encode(['image1.jpg', 'image2.jpg']), // Exemple de données d'image
                'video' => 'video.mp4', // Exemple de nom de fichier vidéo
            ]);
        }
    }
}

