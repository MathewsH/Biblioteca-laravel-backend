<?php

namespace App\Http\Controllers;

use App\Models\livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LivroController extends Controller
{

    private $livro;
    public function __construct(livro $livro)
    {
        $this->livro = $livro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return livro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'editora' => 'required',
            'foto' => 'required',
            'autores' => 'required',
            
        ]);
        return $this->livro->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return livro::find($id);
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
        //
        $livro = livro::find($id);

        $livro->update($request->all());
        return $livro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return livro::destroy($id);
    }
}
