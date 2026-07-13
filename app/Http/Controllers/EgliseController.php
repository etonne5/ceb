<?php

namespace App\Http\Controllers;

use App\Models\Eglise;
use Illuminate\Http\Request;

class EgliseController extends Controller
{
    /**
     * Afficher toutes les églises (pour la page nos-eglises)
     */
    public function index()
    {
        $eglises = Eglise::where('est_active', true)
            ->orderBy('pays')
            ->orderBy('ville')
            ->get();

        // Grouper par pays
        $eglisesParPays = $eglises->groupBy('pays');
        
        return view('eglises', compact('eglisesParPays', 'eglises'));
    }

    /**
     * Afficher une église spécifique
     */
    public function show($id)
    {
        $eglise = Eglise::findOrFail($id);
        return view('eglise-detail', compact('eglise'));
    }

    /**
     * Créer une nouvelle église (admin)
     */
    public function create()
    {
        return view('admin.eglises.create');
    }

    /**
     * Stocker une nouvelle église
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'code_postal' => 'nullable|string',
            'telephone' => 'nullable|string',
            'email' => 'nullable|email',
            'pays' => 'required|in:Congo,France,Belgique,Suisse,Canada,Autre',
            'pasteur' => 'nullable|string',
            'capacite' => 'nullable|integer',
        ]);

        Eglise::create($validated);
        return redirect()->route('eglises')->with('success', 'Église ajoutée !');
    }

    /**
     * Éditer une église
     */
    public function edit($id)
    {
        $eglise = Eglise::findOrFail($id);
        return view('admin.eglises.edit', compact('eglise'));
    }

    /**
     * Mettre à jour une église
     */
    public function update(Request $request, $id)
    {
        $eglise = Eglise::findOrFail($id);
        
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'code_postal' => 'nullable|string',
            'telephone' => 'nullable|string',
            'email' => 'nullable|email',
            'pays' => 'required|in:Congo,France,Belgique,Suisse,Canada,Autre',
            'pasteur' => 'nullable|string',
            'capacite' => 'nullable|integer',
        ]);

        $eglise->update($validated);
        return redirect()->route('eglises')->with('success', 'Église mise à jour !');
    }

    /**
     * Supprimer une église
     */
    public function destroy($id)
    {
        $eglise = Eglise::findOrFail($id);
        $eglise->delete();
        return redirect()->route('eglises')->with('success', 'Église supprimée !');
    }
}