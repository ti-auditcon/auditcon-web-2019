<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Post_tag;
use App\Post_author;
use Carbon\Carbon;
use Redirect;
use Session;
// use Datatables;
use Yajra\Datatables\Datatables;

class PostController extends Controller
{
    //INDEX DEL PANEL
    public function index_post()
    {
      return view('panel.index');
    }

    //INDEX DEL BLOG
    public function index_blog()
    {
      $posts = Post::all();
      // dd(Post::where('featured',1)->take(1)->get());
      return view('blog.index')->with('posts', $posts);
    }

    //BUSCAR POST POR NOMBRE Y REDIRIGIR A INDEX
    // public function indexFilter(Request $request)
    // {
    //   Session::put('post_filter',$request->name);
    //   return Redirect('/blog/panel/posts');
    // }

    //RESPUESTA AJAX A INDEX DE POSTS
    // public function index_ajax()
    // {
    //   return (datatables()->collection(Post::all())->toJson());
    //
    // }

    //INDEX DE LOS POSTS
    public function posts()
    {
      // $name = '%'.Session::get('post_filter').'%';
      //   if(Session::has('post_filter')) //verifica si hay en sesión una busqueda de empresa.
      //   {
      //     $posts = Post::where('title','LIKE',$name)->paginate(10);
      //   }
      //   else
      //   {
      //     $posts = Post::paginate(10);
      //   }
      $posts = Post::all();
      return view('panel.posts.index')->with('posts', $posts);

    }

    //VISTA DE CREACION DE UN NUEVO POST
    public function create()
    {
        return view('panel.posts.new');
    }


    public function store(PostRequest $request)
    {
      $post = new Post;
      $post->title = $request->title;
      $post->content = $request->editordata;
      $post->publication_date = Carbon::today();
      if ($request->featured == 'on')
      {
        $post->featured = 1;
      }
      $post->category_id = $request->category_id;

      // dd($request->featured);
      if ($post->save())
      {
        foreach ($request->tags as $tg)
        {
          $post_tg = new Post_tag;
          $post_tg->post_id = $post->id;
          $post_tg->tag_id = $tg;
          $post_tg->save();
        }
        foreach ($request->authors as $au)
        {
          $post_au = new Post_author;
          $post_au->post_id = $post->id;
          $post_au->author_id = $au;
          $post_au->save();
        }
        Session::flash('success','El post ha sido publicado exitosamente');
        return redirect('/blog/panel/posts');
      }
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
        $post = Post::find($id);
        return view('panel.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //ACTUALIZAR POST
    public function update(PostRequest $request)
    {
      $post = Post::find($request->post_id);
      $post->title = $request->title;
      $post->content = $request->editordata;
      if ($request->featured == 'on')
      {
        $post->featured = 1;
      }
      $post->category_id = $request->category_id;

      // dd($request->featured);
      if ($post->save())
      {
        foreach ($post->post_tags as $post_tag)
        {
          $post_tag->delete();
        }
        foreach ($post->post_authors as $post_author)
        {
          $post_author->delete();
        }
        foreach ($request->tags as $tg)
        {
          $post_tg = new Post_tag;
          $post_tg->post_id = $post->id;
          $post_tg->tag_id = $tg;
          $post_tg->save();
        }
        foreach ($request->authors as $au)
        {
          $post_au = new Post_author;
          $post_au->post_id = $post->id;
          $post_au->author_id = $au;
          $post_au->save();
        }
        Session::flash('success','El post ha sido actualizado exitosamente');
        return redirect('/blog/panel/posts');
      }
    }

    //DESVINCULAR POST DEL AUTOR
    public function unlink($id, $author_id)
    {
        $post = Post::find($id);
        foreach ($post->post_authors as $p_au)
        {
          if ($p_au->author_id == $author_id)
          {
            $p_au->delete();
          }
        }
        Session::flash('success','El autor ha sido desvinculado exitosamente del Post');
        return redirect('/blog/panel/author/'.$author_id.'/edit');
    }

    //ELIMINAR POST DEL SISTEMA
    public function destroy($id)
    {
        $post = Post::find($id);
        foreach ($post->post_authors as $p_au)
        {
          $p_au->delete();
        }
        foreach ($post->post_tags as $p_tags)
        {
          $p_tags->delete();
        }
        if ($post->delete())
        {
          Session::flash('success','El post ha sido eliminado exitosamente');
          return redirect('/blog/panel/posts');
        }
    }
}





// end page
