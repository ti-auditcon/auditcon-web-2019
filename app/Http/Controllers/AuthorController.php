<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Author;
use App\Social_network;
use App\Post_author;
use App\Author_network;
use Redirect;
use Session;

class AuthorController extends Controller
{
    //BUSCAR POST POR NOMBRE Y REDIRIGIR A INDEX
    public function indexFilter(Request $request)
    {
      Session::put('author_filter',$request->name);
      return Redirect('/blog/panel/authors');
    }

    //INDEX DE LOS POSTS
    public function index()
    {
      $name = '%'.Session::get('author_filter').'%';
        if(Session::has('author_filter')) //verifica si hay en sesión una busqueda de autores
        {
          $authors = Author::where('first_name','LIKE',$name)->orwhere('last_name','LIKE',$name)->paginate(10);
        }
        else
        {
          $authors = Author::paginate(10);
        }
      return view('panel.authors.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('panel.authors.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
      $author = new Author;
      $author->first_name  = $request->first_name;
      $author->last_name  = $request->last_name;
      $author->ocupation  = $request->ocupation;
      $author->description  = $request->description;
      $author->save();
      foreach (Social_network::all() as $social_nts)
      {

        switch ($social_nts->id)
        {
          case '1':
          if (!is_null($request->linkedin))
          {
            $au_net = new Author_network;
            $au_net->account = $request->linkedin;
            $au_net->author_id = $author->id;
            $au_net->social_network_id = 1;
            $au_net->save();
          }
            break;

          case '2':
          if (!is_null($request->twitter))
          {
            $au_net = new Author_network;
            $au_net->account = $request->twitter;
            $au_net->author_id = $author->id;
            $au_net->social_network_id = 2;
            $au_net->save();
          }
            break;

          case '3':
          if (!is_null($request->gmail))
          {
            $au_net = new Author_network;
            $au_net->account = $request->gmail;
            $au_net->author_id = $author->id;
            $au_net->social_network_id = 3;
            $au_net->save();
          }
            break;

          case '4':
          if (!is_null($request->facebook))
          {
            $au_net = new Author_network;
            $au_net->account = $request->facebook;
            $au_net->author_id = $author->id;
            $au_net->social_network_id = 4;
            $au_net->save();
          }
            break;
        }
      }
      Session::flash('success','El Autor ha sido creado exitosamente');
      return redirect('/blog/panel/authors');
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
      $author = Author::find($id);
      return view('panel.authors.edit')->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request)
    {
      $au = Author::find($request->author_id);
      $au->first_name = $request->first_name;
      $au->last_name = $request->last_name;
      $au->ocupation = $request->ocupation;
      $au->description = $request->description;
      if ($au->save())
      {
        foreach ($au->author_networks as $au_net)
        {
          $au_net->delete();
        }
        foreach (Social_network::all() as $social_nts)
        {
          switch ($social_nts->id)
          {
            case '1':
            if (!is_null($request->linkedin))
            {
              $au_net = new Author_network;
              $au_net->account = $request->linkedin;
              $au_net->author_id = $au->id;
              $au_net->social_network_id = 1;
              $au_net->save();
            }
              break;

            case '2':
            if (!is_null($request->twitter))
            {
              $au_net = new Author_network;
              $au_net->account = $request->twitter;
              $au_net->author_id = $au->id;
              $au_net->social_network_id = 2;
              $au_net->save();
            }
              break;

            case '3':
            if (!is_null($request->gmail))
            {
              $au_net = new Author_network;
              $au_net->account = $request->gmail;
              $au_net->author_id = $au->id;
              $au_net->social_network_id = 3;
              $au_net->save();
            }
              break;

            case '4':
            if (!is_null($request->facebook))
            {
              $au_net = new Author_network;
              $au_net->account = $request->facebook;
              $au_net->author_id = $au->id;
              $au_net->social_network_id = 4;
              $au_net->save();
            }
              break;
          }
        }
      }
      Session::flash('success','Los datos del autor han sido actualizados exitosamente');
      return redirect('/blog/panel/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $exist = Post_author::where('author_id', $id)->get();
      if (!count($exist))
      {
        $author = Author::find($id);
        if ($author->delete())
        {
          Session::flash('success','El autor ha sido eliminado exitosamente');
          return redirect('/blog/panel/authors');
        }
      }
      else
      {
        Session::flash('warning2', 'El autor tiene al menos 1 post, por lo que no puede ser eliminado');
        return redirect('/blog/panel/authors');
      }
    }
}
