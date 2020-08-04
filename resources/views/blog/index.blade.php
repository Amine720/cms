<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS — Single blog post</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="/">
            <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
            <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>

        <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Login</a>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url(storage/{{$post->image}});" data-overlay="9">
      <div class="container text-center">

        <div class="row h-100">
          <div class="col-lg-8 mx-auto align-self-center">

            <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>
            <h1 class="display-4 mt-7 mb-8">{{ $post->title }}</h1>
            <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">Ahmed</a></p>
            <p><img class="avatar avatar-sm" src="../assets/img/avatar/2.jpg" alt="..."></p>
          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
          </div>

        </div>

      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        <div class="container">

          <div class="row">
            <div class="col-lg-8 mx-auto">
                {!! $post->content !!}
              
            </div>
          </div>



          <div class="text-center my-6">
            <img class="rounded-md" src="../assets/img/bg/11.jpg" alt="...">
          </div>



          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="gap-xy-2 mt-6">
                @foreach ($post->tags as $tag)
                    <a class="badge badge-pill badge-secondary" href="#">{{ $tag->name }}</a>
                @endforeach
              </div>

            </div>
          </div>


        </div>
      </div>



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Comments
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section bg-gray">
        <div class="container">

          <div class="row">
            <div class="col-lg-8 mx-auto">

              <div class="media-list">

                <div class="media">
                  <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/1.jpg" alt="...">

                  <div class="media-body">
                    <div class="small-1">
                      <strong>Maryam Amiri</strong>
                      <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">24 min ago</time>
                    </div>
                    <p class="small-2 mb-0">Thoughts his tend and both it fully to would the their reached drew project the be I hardly just tried constructing I his wonder, that his software and need out where didn't the counter productive.</p>
                  </div>
                </div>



                <div class="media">
                  <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/2.jpg" alt="...">

                  <div class="media-body">
                    <div class="small-1">
                      <strong>Hossein Shams</strong>
                      <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">6 hours ago</time>
                    </div>
                    <p class="small-2 mb-0">Was my suppliers, has concept how few everything task music.</p>
                  </div>
                </div>



                <div class="media">
                  <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/3.jpg" alt="...">

                  <div class="media-body">
                    <div class="small-1">
                      <strong>Sarah Hanks</strong>
                      <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">Yesterday</time>
                    </div>
                    <p class="small-2 mb-0">Been me have the no a themselves, agency, it that if conduct, posts, another who to assistant done rattling forth there the customary imitation.</p>
                  </div>
                </div>

              </div>


              <hr>


              <form action="#" method="POST">

                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="Name">
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                </div>

                <button class="btn btn-primary btn-block" type="submit">Submit your comment</button>
              </form>

            </div>
          </div>

        </div>
      </div>



    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="../index.html"><img src="../assets/img/logo-dark.png" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
              <a class="nav-link" href="../uikit/index.html">Elements</a>
              <a class="nav-link" href="../block/index.html">Blocks</a>
              <a class="nav-link" href="../page/about-1.html">About</a>
              <a class="nav-link" href="../blog/grid.html">Blog</a>
              <a class="nav-link" href="../page/contact-1.html">Contact</a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="../assets/js/page.min.js"></script>
    <script src="../assets/js/script.js"></script>

  </body>
</html>
