<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $authors = Author::all();

      return view("authors.index", compact("authors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("authors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      // validazione

      $request->validate([
          "name" => "required|max:20",
          "lastname" => "required|max:30",
          "date_of_birth" => "required|date_format:Y-m-d",
      ]);

      $newAuthor = new Author;
      $newAuthor->name = $data["name"];
      $newAuthor->lastname = $data["lastname"];
      $newAuthor->date_of_birth = $data["date_of_birth"];
      $newAuthor->save();

      return redirect()->route("authors.index");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $author = Author::find($id);

      $author->delete();

      session()->flash("deleted", "L'utente: $author->name è stato cancellato!");

      return redirect()->route("authors.index");
    }
}
