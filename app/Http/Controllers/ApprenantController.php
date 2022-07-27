<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{

    /**
     * Affiche la liste des apprenants
     */
    public function index()
    {

        $apprenants = Apprenant::all();
        return view('apprenant.index', compact('apprenants'));
    }


    /**
     * return le formulaire de creation d'un apprenant
     */
    public function create()
    {

        return view('apprenant.create');
    }


    /**
     * Enregistre un nouveau apprenant dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'niveau' => 'required'
        ]);


        $apprenant = new Apprenant([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'age' => $request->get('age'),
            'telephone' => $request->get('telephone'),
            'niveau' => $request->get('niveau')
        ]);


        $apprenant->save();
        return redirect('/')->with('success', 'Apprenant Ajouté avec succès');
    }


    /**
     * Affiche les détails d'un apprenant spécifique
     */

    public function show($id)
    {

        $apprenant = Apprenant::findOrFail($id);
        return view('apprenant.show', compact('apprenant'));
    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $apprenant = Apprenant::findOrFail($id);

        return view('apprenant.edit', compact('apprenant'));
    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'niveau' => 'required'

        ]);




        $apprenant = Apprenant::findOrFail($id);
        $apprenant->nom = $request->get('nom');
        $apprenant->prenom = $request->get('prenom');
        $apprenant->age = $request->get('age');
        $apprenant->telephone = $request->get('telephone');
        $apprenant->niveau = $request->get('niveau');


        $apprenant->update();

        return redirect('/')->with('success', 'Apprenant Modifié avec succès');
    }




    /**
     * Supprime apprenant dans la base de données
     */
    public function destroy($id)
    {

        $apprenant = Apprenant::findOrFail($id);
        $apprenant->delete();

        return redirect('/')->with('success', 'Apprenant Modifié avec succès');
    }
}
