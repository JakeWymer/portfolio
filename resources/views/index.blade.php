<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Jake Wymer | Software Engineer</title>
</head>
<body>
    <header>
        <h1>Jake Wymer</h1>
        <nav>
            <ul>
                <li><a id="about-nav"href="">About</a></li>
                <li><a id="projects-nav" href="">Projects</a></li>
                <li><a id="contact-nav" href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <img src="{{asset('images/'). '/' . $me->image}}" alt="Picture of Jake Wymer">
        <h2>Software Engineer</h2>
        <hr />
        <div class="tagline">
            <h3>{{$me->tagline}}</h3>
        </div>
    </section>
    <section id="about">
        <div class="section-title blue">
            <i class="far fa-user fa-5x" aria-hidden="true"></i>
            <h4>About Me</h4>
        </div>
        <div class="about-text-wrapper">
                <div class="about-text">
                    <p>
                        {{$me->par_one}}
                    </p>
                </div>
                <div class="about-text">
                    <p>
                        {{$me->par_two}}
                    </p>
                </div>
            </div>
    </section>
    <section id="projects">
        <div class="section-title">
            <i class="far fa-keyboard fa-5x" aria-hidden="true"></i>
            <h4>Projects</h4>
        </div>
        <div class="projects-wrapper">
        @foreach ($projects as $project)
            <div class="project">
                <img src="{{asset('images/'). '/' . $project->image}}" alt="">
                <div class="overlay">
                    <p>{{$project->name}}</p>
                </div>
            </div>
        @endforeach
            <div class="project">
                <img src="http://via.placeholder.com/400x400" alt="">
                <div class="overlay">
                    <p>YelChat</p>
                </div>
            </div>
            <div class="project">
                <img src="http://via.placeholder.com/400x400" alt="">
                <div class="overlay">
                    <p>StubScraper</p>
                </div>
            </div>
            <div class="project">
                <img src="http://via.placeholder.com/400x400" alt="">
                <div class="overlay">
                    <p>Project Name</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="section-title">
            <i class="far fa-envelope-open fa-5x" aria-hidden="true"></i>
            <h4>Contact</h4>
        </div>
        <form action="#">
            <label for="email-input">Email</label>
            <input id="email-input" type="email" name="email-input" hint="Email" />
            <label for="message">Message</label>
            <textarea rows="4" cols="50" id="message" name="message" hint="Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>
