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
        <img src="{{ asset('/images/profile.jpg') }}" alt="Picture of Jake Wymer">
        <h2>Software Engineer</h2>
        <hr />
        <div class="tagline">
            <h3>I am a self motivated full stack software engineer who enjoys creating interesting and useful technology.</h3>
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
                        Hi, my name is Jake Wymer and I am a full-stack software engineer who specializes in building awesome web applications. I have been coding for over 6 years, turning what began as a hobby into a profession I love doing. I am a perpetual learner who enjoys solving  every day problems with software and tinkering with new technologies.
                    </p>
                </div>
                <div class="about-text">
                    <p>
                        I graduated with a Bachelor of Science in Information Technology Management in 2017, which I earned while gaining professional experience as both a contract web developer and as a full-time employee web developer. I later graduated from DevMountain Bootcamp in 2018. Check out some of my recent projects below and feel free to contact me with any questions!
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
            <div class="project">
                <img src="http://via.placeholder.com/400x350" alt="">
                <p>YelChat</p>
            </div>
            <div class="project">
                <img src="http://via.placeholder.com/400x350" alt="">
                <p>StubScraper</p>
            </div>
            <div class="project">
                <img src="http://via.placeholder.com/400x350" alt="">
                <p>Project Name</p>
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
  <script src="index.js"></script>
</body>
</html>
