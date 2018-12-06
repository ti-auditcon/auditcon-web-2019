@extends('layouts.blog')

@section('content')
  @foreach (App\Post::where('featured',1)->take(1)->get() as $post)

      <section class="blogFeatured">
        <a class="linkHightlight" href="{{url('blog/post/'.$post->id)}}">
          <div class="featuredItemImage" style="background-image: url('{{asset('/blog-asset/img/back_feat.jpg')}}')">
          </div>
          <div class="featuredItem">
            <div class="itemContent">
              <span class="blogPostCategory">{{$post->category->category}}</span>
              <h1>{{$post->title}}</h1>
            </div>
          </div>
        </a>
      </section>

  @endforeach

  <section class="highlight-wrapper">
    <div class="highlight container">

      <a class="highlightItem" href="#">
        <div class="itemImage" style="background-image: url('{{asset('/blog-asset/img/1.jpg')}}')"></div>
        <div class="item">
          <span class="blogPostCategory">Categoría</span>
          <h2>Diam nisl varius lectus, a euismod eros felis nec erat</h2>
        </div>
      </a>

      <a class="highlightItem" href="#">
        <div class="itemImage" style="background-image: url('{{asset('/blog-asset/img/2.jpg')}}')"></div>
        <div class="item">
          <span class="blogPostCategory">Categoría</span>
          <h2>Nunc posuere libero pretium, pulvinar augue vitae, placerat massa</h2>
        </div>
      </a>

      <a class="highlightItem" href="#">
        <div class="itemImage" style="background-image: url('{{asset('/blog-asset/img/3.jpg')}}')"></div>
        <div class="item">
          <span class="blogPostCategory">Categoría</span>
          <h2>Cras et est at nisl posuere cursus duis pharetra turpis faucibus</h2>
        </div>
      </a>

      <a class="highlightItem" href="#">
        <div class="itemImage" style="background-image: url('{{asset('/blog-asset/img/4.jpg')}}')"></div>
        <div class="item">
          <span class="blogPostCategory">Categoría</span>
          <h2>Pellentesque tincidunt vehicula dui posuere varius.</h2>
        </div>
      </a>

    </div>
  </section>

  {{-- suscribeCTA --}}
  <section class="suscribeCTA-wrapper">
    <div class="suscribeCTAImage" style="background-image: url('{{asset('/blog-asset/img/mail_cta.jpg')}}')"></div>
    <div class="suscribeCTA">
      <span class="blogPostCategory">Suscripción</span>
      <h1 class="color-white">Reciba <span class="color-orangeYellow">los últimos artículos</span> <br>del blog <span class="color-orangeYellow">en su correo</span></h1>
      <form>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@correo.com">
          <button type="submit" class="btn btn-primary btn-sm">Suscribirse</button>
        </div>
      </form>
    </div>
  </section>

  {{-- Post Grid --}}
  <div class="postGrid-wrapper">
    <div class="postGrid container pt-md-4">
      <div class="row py-4 pt-md-4">
        {{-- Post List --}}
        <section class="postList-wrapper col-12 col-md-8">
          <div class="postList container">

            <div class="postListItem row">
              <a class="itemImg-wrapper col-md-5 p-0" href="">
                <div class="itemImg" style="background-image: url('{{asset('/blog-asset/img/5.jpg')}}')"></div>
              </a>
              <div class="itemData-wrapper col-md-7 p-0 pl-md-4">
                <div class="itemData">
                  <span class="blogPostCategory">Categoría</span>
                  <a href=""><h3>Ad id eros pulvinar metus egestas facilisi habitant urna</h3></a>
                  <p>Erat sed consequat sociosqu aptent ligula a tempor blandit convallis pulvinar, ac netus sollicitudin in augue diam habitant cursus. Magnis viverra accumsan erat euismod mauris aliquet vitae venenatis nostra purus.</p>
                </div>
              </div>
            </div>

            <div class="postListItem row">
              <a class="itemImg-wrapper col-md-5 p-0" href="">
                <div class="itemImg" style="background-image: url('{{asset('/blog-asset/img/6.jpg')}}')"></div>
              </a>
              <div class="itemData-wrapper col-md-7 p-0 pl-md-4">
                <div class="itemData">
                  <span class="blogPostCategory">Categoría</span>
                  <a href=""><h3>Per massa urna aliquam eros ultrices conubia aliquet tempus pellentesque</h3></a>
                  <p>Erat sed consequat sociosqu aptent ligula a tempor blandit convallis pulvinar, ac netus sollicitudin in augue diam habitant cursus. Magnis viverra accumsan erat euismod mauris aliquet vitae venenatis nostra purus.</p>
                </div>
              </div>
            </div>

            <div class="postListItem row">
              <a class="itemImg-wrapper col-md-5 p-0" href="">
                <div class="itemImg" style="background-image: url('{{asset('/blog-asset/img/2.jpg')}}')"></div>
              </a>
              <div class="itemData-wrapper col-md-7 p-0 pl-md-4">
                <div class="itemData">
                  <span class="blogPostCategory">Categoría</span>
                  <a href=""><h3>5 Velit dictumst sagittis tortor purus vivamus proin</h3></a>
                  <p>Erat sed consequat sociosqu aptent ligula a tempor blandit convallis pulvinar, ac netus sollicitudin in augue diam habitant cursus. Magnis viverra accumsan erat euismod mauris aliquet vitae venenatis nostra purus.</p>
                </div>
              </div>
            </div>

          </div>
        </section>
        {{-- Aside > Most Visited Post --}}
        <aside class="mainSidebar col-12 col-md-4">
          <section class="mostVisited-wrapper">
            <div class="mostVisited">
              <div class="title mb-4 mb-md-3">
                <h4>Artículos<br> más leídos.</h4>
              </div>

              <div class="mostVisitedItem container">
                <div class="row">
                  <div class="itemNumber col-2 p-0">
                    <p>1</p>
                  </div>
                  <div class="itemData col-10 p-0 pl-md-2 pl-xl-1">
                    <span class="blogPostCategory">Categoría</span>
                    <a href=""><h3>5 Velit dictumst sagittis tortor purus vivamus proin</h3></a>
                  </div>
                </div>
              </div>

              <div class="mostVisitedItem container">
                <div class="row">
                  <div class="itemNumber col-2 p-0">
                    <p>2</p>
                  </div>
                  <div class="itemData col-10 p-0 pl-md-2 pl-xl-1">
                    <span class="blogPostCategory">Categoría</span>
                    <a href=""><h3>Ac netus sollicitudin in augue diam habitant cursus purus agmus</h3></a>
                  </div>
                </div>
              </div>

              <div class="mostVisitedItem container">
                <div class="row">
                  <div class="itemNumber col-2 p-0">
                    <p>3</p>
                  </div>
                  <div class="itemData col-10 p-0 pl-md-2 pl-xl-1">
                    <span class="blogPostCategory">Categoría</span>
                    <a href=""><h3>Duis aute irure dolor in reprehenderit in cillum dolore</h3></a>
                  </div>
                </div>
              </div>

              <div class="mostVisitedItem container">
                <div class="row">
                  <div class="itemNumber col-2 p-0">
                    <p>4</p>
                  </div>
                  <div class="itemData col-10 p-0 pl-md-2 pl-xl-1">
                    <span class="blogPostCategory">Categoría</span>
                    <a href=""><h3>Velit dictumst sagittis tortor purus vivamus proin</h3></a>
                  </div>
                </div>
              </div>

              <div class="mostVisitedItem container">
                <div class="row">
                  <div class="itemNumber col-2 p-0">
                    <p>5</p>
                  </div>
                  <div class="itemData col-10 p-0 pl-md-2 pl-xl-1">
                    <span class="blogPostCategory">Categoría</span>
                    <a href=""><h3>Praesent in mauris eu tortor porttitor accumsan</h3></a>
                  </div>
                </div>
              </div>

            </div>
          </section>
        </aside>
      </div>
    </div>
  </div>
@endsection
