<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;
use App\Post_tag;
use Redirect;
use Session;

class TagController extends Controller
{
    //BUSCAR POST POR TAG Y REDIRIGIR A INDEX
    public function indexFilter(Request $request)
    {
      Session::put('tag_filter',$request->name);
      return Redirect('/blog/panel/tags');
    }

    //INDEX DE LOS TAGS
    public function index()
    {
      $name = '%'.Session::get('tag_filter').'%';
        if(Session::has('tag_filter')) //verifica si hay en sesión una busqueda de autores
        {
          $tags = Tag::where('tag','LIKE',$name)->paginate(10);
        }
        else
        {
          $tags = Tag::paginate(10);
        }
      return view('panel.tags.index')->with('tags', $tags);
    }

    //INDEX DE LOS TAGS
    public function index2()
    {
      $name = '%'.Session::get('tag_filter').'%';
        if(Session::has('tag_filter')) //verifica si hay en sesión una busqueda de autores
        {
          $tags = Tag::where('tag','LIKE',$name)->paginate(10);
        }
        else
        {
          $tags = Tag::paginate(10);
        }
      //return view('panel.tags.index')->with('tags', $tags);
      return Response($tags);
    }

    public function create()
    {
      return view('panel.tags.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
      $exist = Tag::where('tag', $request->tag)->get();
      if (!count($exist))
      {
        $tag = new Tag;
        $tag->tag = $request->tag;
        if ($tag->save())
        {
          Session::flash('success','El Tag ha sido creado exitosamente');
          return redirect('/blog/panel/tags');
        }
      }
      Session::flash('warning','El tag ya existe en sistema');
      return redirect('/blog/panel/tags/new');
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

    public function destroy($id)
    {
      $exist = Post_tag::where('tag_id', $id)->get();
      if (!count($exist))
      {
        $tag = Tag::find($id);
        if ($tag->delete())
        {
          Session::flash('success','El Tag ha sido eliminado exitosamente');
          return redirect('/blog/panel/tags');
        }
      }
      else
      {
        Session::flash('warning2', 'El tag esta asignado a al menos 1 post, por lo que no puede ser eliminado');
        return redirect('/blog/panel/tags');
      }
    }
}





// end page
