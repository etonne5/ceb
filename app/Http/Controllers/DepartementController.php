<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Afficher tous les départements (pour la page départements)
     */
    public function index()
    {
        $departements = Departement::where('est_actif', true)
            ->orderBy('nom')
            ->get();

        // Grouper par type
        $departementsParType = $departements->groupBy('type');
        
        return view('departements', compact('departementsParType', 'departements'));
    }

    /**
     * Afficher un département spécifique
     */
    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        return view('departement-detail', compact('departement'));
    }

    /**
     * Créer un nouveau département (admin)
     */
    public function create()
    {
        return view('admin.departements.create');
    }

    /**
     * Stocker un nouveau département
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'responsable' => 'nullable|string',
            'email_responsable' => 'nullable|email',
            'telephone_responsable' => 'nullable|string',
            'missions' => 'nullable|string',
            'type' => 'nullable|in:Service,Ministère,Commission,Groupe,Autre',
            'icone' => 'nullable|string',
            'couleur_icone' => 'nullable|string',
            'nombre_membres' => 'nullable|integer',
        ]);

        Departement::create($validated);
        return redirect()->route('departements')->with('success', 'Département ajouté !');
    }

    /**
     * Éditer un département
     */
    public function edit($id)
    {
        $departement = Departement::findOrFail($id);
        return view('admin.departements.edit', compact('departement'));
    }

    /**
     * Mettre à jour un département
     */
    public function update(Request $request, $id)
    {
        $departement = Departement::findOrFail($id);
        
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'responsable' => 'nullable|string',
            'email_responsable' => 'nullable|email',
            'telephone_responsable' => 'nullable|string',
            'missions' => 'nullable|string',
            'type' => 'nullable|in:Service,Ministère,Commission,Groupe,Autre',
            'icone' => 'nullable|string',
            'couleur_icone' => 'nullable|string',
            'nombre_membres' => 'nullable|integer',
        ]);

        $departement->update($validated);
        return redirect()->route('departements')->with('success', 'Département mis à jour !');
    }

    /**
     * Supprimer un département
     */
    public function destroy($id)
    {
        $departement = Departement::findOrFail($id);
        $departement->delete();
        return redirect()->route('departements')->with('success', 'Département supprimé !');
    }
}