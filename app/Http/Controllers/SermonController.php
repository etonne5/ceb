<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    /**
     * Afficher tous les sermons (pour la page prédications)
     */
    public function index()
    {
        $sermons = Sermon::where('est_publie', true)
            ->orderBy('date_sermon', 'desc')
            ->paginate(12);
        
        return view('predications', compact('sermons'));
    }

    /**
     * Afficher un sermon spécifique
     */
    public function show($id)
    {
        $sermon = Sermon::findOrFail($id);
        return view('sermon-detail', compact('sermon'));
    }

    /**
     * Créer un nouveau sermon (admin)
     */
    public function create()
    {
        return view('admin.sermons.create');
    }

    /**
     * Stocker un nouveau sermon
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'orateur' => 'nullable|string',
            'date_sermon' => 'nullable|datetime',
            'youtube_id' => 'nullable|string',
            'categorie' => 'nullable|in:Enseignement,Prédication,Étude Biblique,Témoignage,Autre',
            'est_publie' => 'boolean',
        ]);

        Sermon::create($validated);
        return redirect()->route('predications')->with('success', 'Sermon ajouté !');
    }

    /**
     * Éditer un sermon
     */
    public function edit($id)
    {
        $sermon = Sermon::findOrFail($id);
        return view('admin.sermons.edit', compact('sermon'));
    }

    /**
     * Mettre à jour un sermon
     */
    public function update(Request $request, $id)
    {
        $sermon = Sermon::findOrFail($id);
        
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'orateur' => 'nullable|string',
            'date_sermon' => 'nullable|datetime',
            'youtube_id' => 'nullable|string',
            'categorie' => 'nullable|in:Enseignement,Prédication,Étude Biblique,Témoignage,Autre',
            'est_publie' => 'boolean',
        ]);

        $sermon->update($validated);
        return redirect()->route('predications')->with('success', 'Sermon mis à jour !');
    }

    /**
     * Supprimer un sermon
     */
    public function destroy($id)
    {
        $sermon = Sermon::findOrFail($id);
        $sermon->delete();
        return redirect()->route('predications')->with('success', 'Sermon supprimé !');
    }
}