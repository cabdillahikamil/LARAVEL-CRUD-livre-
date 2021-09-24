<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livres', ['livres' => Livre::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("livreAdd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Livre::create([
            'titre'=>$request->titre,
            'auteur'=>$request->auteur,
            'resume'=>$request->resume,
            'isbn'=>$request->isbn,
            'prix'=>$request->prix,
            'editeur'=>$request->editeur
        ]);
        return redirect('livres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livre=Livre::find($id);
        return view('livreShow', ['livre' => $livre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livre=Livre::find($id);
        return view('livreEdit', ['livre' => $livre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livre=Livre::find($id);
        
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->resume = $request->resume;
        $livre->isbn = $request->isbn;
        $livre->prix = $request->prix;
        $livre->editeur = $request->editeur;

        $livre->save();

        return redirect('livres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livre = Livre::find($id);
        $livre->delete();

        return redirect('livres');
    }
}
