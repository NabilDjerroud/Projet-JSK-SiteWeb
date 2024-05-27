<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\ConditionPhysique;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     *  Affiche une liste des joueurs
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $tri = $request->query("tri", "nom");
        $direction = $request->query("direction", "asc");
        
        $numero = $request->query("numero");
        // $nouveauJoueur = new Joueur();
        $conditionPhysique = $request->query("conditionPhysique");

        $joueurQuery = Joueur::query();

        if($conditionPhysique){
            $joueurQuery = $joueurQuery->where("condition_physique_id", $conditionPhysique);

        }

        $joueurQuery->orderBy($tri,$direction);

        if($numero){
            //Ajouter d'autres étapes à la recherche dans la base de données
            $joueurQuery->where("numero", "<" , $numero);
        }



        $joueurs = $joueurQuery->Paginate(4)->withQueryString();
        // $conditionPhysique = $request->query("conditionPhysique");

        $conditionPhysique = ConditionPhysique::all();

        return view("joueur.index", ["joueurs" => $joueurs, "title" => "Liste des joueurs", "conditionPhysiques" =>$conditionPhysique]);
    }

    /**
     *  Affiche le formulaire pour créer un nouveau joueur 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conditionPhysiques = ConditionPhysique::all();
        return view('joueur.create', compact('conditionPhysiques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJoueurRequest $request)
    {

        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->date_de_naissance = $request->date_de_naissance;
        $joueur->poste = $request->poste;
        $joueur->numero = $request->numero;

        if ($request->image) {

            $path = $request->image->store("joueurs", "public");
            $joueur->image = $path;
        }
        $joueur->save();

        return redirect()->route("joueur.index")->with("success", "Le joueur à été ajouté avec succès");

    }

    /**
     * Display the specified resource.
     * affiche un joueur spécifique
     */
    public function show(Joueur $joueur)
    {
        return view('joueur.joueur', ['joueur' => $joueur, "title" => $joueur->nom]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joueur $joueur)
    {
        $conditionPhysiques = ConditionPhysique::all();
        return view('joueur.edit', compact('joueur', 'conditionPhysiques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJoueurRequest $request, Joueur $joueur)
    {
        $validate = $request->validated();
    
        
        $joueurAModifier = $joueur;


        if ($request->image) {
            // Vérifie si une image existe déjà
            if ($joueur->image && Storage::disk("public")->exists($joueur->image)) {
                // Supprime l'ancienne image stockée sur le serveur
                Storage::disk("public")->delete($joueur->image);
            }
        }
        
        // Met à jour les données du joueur avec les valeurs validées
        $joueurAModifier->fill($validate);
        
        if ($request->image) {
            // Enregistre la nouvelle image et met à jour le chemin de l'image du joueur
            $path = $request->image->store("joueurs", "public");
            $joueurAModifier->image = $path;
        }


       
        //Utilisation d'un bloc try/catch pour gérer les erreurs potentiellee lors de l'enregistremnt du joueur
        $joueurAModifier->update();
        
        // dd($request);

        return redirect()->route("joueur.index")->with("success", "Le joueur à été modifié");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->route("joueur.index")->with("success", "Le joueur à été supprimé");
    }
}
