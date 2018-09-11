<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123317643-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123317643-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <title>Jake Wymer | Software Engineer</title>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <p class="navbar-brand">Jake Wymer</p>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#skills">Skills</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/resume">Resume</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto profile-img" src="{{asset('images/'). '/' . $me->image}}" alt="Picture of Jake Wymer">
        <h1 class="text-uppercase mb-0">Jake Wymer</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">{{$me->tagline}}</h2>
      </div>
    </header>

    <!-- About Section -->
    <section class="text-secondary mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary">About</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-12">
            <p class="lead">{{$me->par_one}}</p>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="lead">{{$me->par_two}}</p>
            </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="bg-primary text-white mb-0" id="skills">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Skills</h2>
        <hr class="star-light mb-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-2" id="skill-item" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-javascript-plain"></i>
            JavaScript
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-react-original"></i>
            React.js
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-nodejs-plain"></i> 
            Node.js
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-python-plain"></i> 
            Python
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-html5-plain"></i> 
            HTML
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-css3-plain"></i> 
            CSS
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-git-plain"></i> 
            Git
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-php-plain"></i> 
            PHP
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-laravel-plain"></i> 
            Laravel
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-postgresql-plain"></i> 
            Postgres
          </div>
          <div class="col-lg-2" style="display: flex; flex-direction: column; align-items: center">
            <i style="font-size: 100px;" class="devicon-mongodb-plain"></i> 
            MongoDB
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="{{$project->github}}" target="blank">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <p>{{$project->name}}</p>
                            <hr style="color: white; border: 2px solid white"/>
                            <p class="project-description">{{$project->description}}</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('images/'). '/' . $project->image}}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Email</h4>
            <p class="lead mb-0">
                jakesnextjob@gmail.com
            </p>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Connect with me</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn-social" href="https://www.facebook.com/jakesnextjob">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social" href="https://github.com/JakeWymer">
                  <i class="fab fa-github-square fa-2x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social" href="https://www.linkedin.com/in/jake-wymer/">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Jake Wymer 2018</small>
      </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  
    <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>
