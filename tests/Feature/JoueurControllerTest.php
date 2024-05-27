<?php

namespace Tests\Feature;

use App\Models\Joueur;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JoueurControllerTest extends TestCase
{
    /** @test */
    public function cela_peut_lister_tous_les_joueurs()
    {
        $response = $this->get(route('joueur.index'));
        $response->assertOk('Liste des joueurs récupérée avec succès');
    }

    /** @test */
    public function cela_peut_afficher_un_joueur()
    {
        $joueur = Joueur::factory()->create();

        $response = $this->get(route('joueur.show', $joueur->id));
        $response->assertOk('Détails du joueur affichés avec succès');
    }

    /** @test */
    public function cela_peut_creer_un_nouveau_joueur()
    {
        $joueurData = Joueur::factory()->raw();

        $response = $this->post(route('joueur.store'), $joueurData);
        $response->assertCreated('Nouveau joueur créé avec succès');
    }

    /** @test */
    public function cela_peut_mettre_a_jour_un_joueur()
    {
        $joueur = Joueur::factory()->create();
        $nouveauNom = 'Nouveau Nom';

        $response = $this->put(route('joueur.update', $joueur->id), ['nom' => $nouveauNom]);
        $response->assertOk('Joueur mis à jour avec succès');
    }

    /** @test */
    public function cela_peut_supprimer_un_joueur()
    {
        $joueur = Joueur::factory()->create();

        $response = $this->delete(route('joueur.destroy', $joueur->id));
        $response->assertNoContent('Joueur supprimé avec succès');
    }
}
