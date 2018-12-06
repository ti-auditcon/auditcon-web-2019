<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function () {
//     return view('blog.index');
// });

Route::get('/logout', function () {
    return view('auth.login');
});

// Route::get('/blog/login', function () {
//     return view('auth.login');
// });

Route::post('/enviado', 'MailController@sendmail');

Route::get('/', function () {
    return view('index');
});
Route::get('/servicios', function () {
    return view('services.index');
});
Route::get('/servicios/tributaria', function () {
    return view('services.tributaria');
});
Route::get('/servicios/contable', function () {
    return view('services.contable');
});
Route::get('/servicios/legal', function () {
    return view('services.legal');
});
Route::get('/servicios/laboral', function () {
    return view('services.laboral');
});
Route::get('/servicios/auditorias', function () {
    return view('services.auditorias');
});
Route::get('/servicios/internacional', function () {
    return view('services.internacional');
});
Route::get('/servicios/tecnologia', function () {
    return view('services.tecnologia');
});
Route::get('/nosotros', function () {
    return view('us');
});
Route::get('/contacto', function () {
    return view('contact');
});

  Route::middleware(['auth'])->prefix('blog/panel')->group(function ()
  {
    Route::get('/', 'PostController@index_post');
    Route::get('/posts', 'PostController@posts');
    Route::get('/posts/ajax', 'PostController@index_ajax');
    Route::get('/posts/new', 'PostController@create');
    Route::get('/post/{id}/edit', 'PostController@edit');
    Route::get('/author/{id}/unlink/{author_id}', 'PostController@unlink');
    Route::get('/post/{id}/delete', 'PostController@destroy');

    Route::post('/posts/index-filter', 'PostController@indexFilter');
    Route::post('/posts/store', 'PostController@store');
    Route::put('/post/update', 'PostController@update');
    Route::post('/post/unlink', 'PostController@unlink');
    Route::post('/post/delete', 'PostController@destroy');

    //MEDIA
    Route::get('/assets', 'AssetController@index');

    //CATEGORÍAS
    Route::get('/categories/new', 'CategoryController@create');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/category/{id}/delete', 'CategoryController@destroy');

    Route::post('/category/store', 'CategoryController@store');
    Route::post('/category/delete', 'CategoryController@destroy');

    //TAGS
    Route::get('/tags/new', 'TagController@create');
    Route::get('/tags', 'TagController@index');
    Route::get('/tags2', 'TagController@index2');
    Route::get('/tag/{id}/delete', 'TagController@destroy');

    Route::post('/tags/index-filter', 'TagController@indexFilter');
    Route::post('/tag/store', 'TagController@store');
    Route::post('/tag/delete', 'TagController@destroy');


    //AUTHORS
    Route::get('/authors/new', 'AuthorController@create');
    Route::get('/authors', 'AuthorController@index');
    Route::get('/author/{id}/edit', 'AuthorController@edit');
    Route::get('/author/{id}/delete', 'AuthorController@destroy');

    Route::post('/authors/index-filter', 'AuthorController@indexFilter');
    Route::post('/author/store', 'AuthorController@store');
    Route::put('/author/update', 'AuthorController@update');
    Route::post('/author/delete', 'AuthorController@destroy');

  });


Route::get('/blog/assets', function () {
    return view('panel.assets.index');
});
Route::get('/blog/assets/new', function () {
    return view('panel.assets.new');
});

Route::get('/blog/categories/edit', function () {
    return view('panel.categories.edit');
});

Route::get('/blog/authors/edit', function () {
    return view('panel.authors.edit');
});


Route::get('/blog', 'PostController@index_blog');

Route::get('/blog/tag', function () {
    return view('blog.tag');
});
Route::get('/blog/search', function () {
    return view('blog.search');
});
Route::get('/blog/archive', function () {
    return view('blog.archive');
});
Route::get('/blog/author', function () {
    return view('blog.author');
});
Route::get('/blog/post', function () {
    return view('blog.post');
});
