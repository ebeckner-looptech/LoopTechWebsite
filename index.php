<?php
session_start();
if (empty($_SESSION['logged_in'])) {
    // Not logged in, redirect to login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<a href="logout.php">Logout</a>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoopTech</title>
    <link rel="icon" type="image/x-icon" href="assets/img/0Logo/FavW.png">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body>
    <!-- Top Bar -->
    <section class="bg-orange text-white py-2">
      <div class="container d-flex justify-content-between align-items-center">
      <div>
        <i class="bi bi-envelope me-2"></i>
        <a
        href="mailto:AIExplorer@cookmedical.com"
        class="text-white text-decoration-none"
        >
        AIExplorer@cookmedical.com
        </a>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['user_email'] ?? ''); ?>!</p>
      </div>
      <div class="d-flex">
        <a href="#" class="text-white me-4">
        <i class="bi bi-twitter-x"></i>
        </a>
        <a href="#" class="text-white me-4">
        <i class="bi bi-linkedin"></i>
        </a>
      </div>
      </div>
    </section>

    <!-- Header -->
    <header id="header" class="py-3 bg-light sticked">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="index.html"><img
          src="assets/img/0Logo/RecText-C.png"
          alt="LoopTech Logo"
          class="logo"
        /></a>
        <nav id="navbar" class="navbar d-none d-lg-block">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link text-dark fw-bold current-page" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="About.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="Tech.html">TECH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="Contact.html">CONTACT</a>
            </li>
          </ul>
        </nav>
        <i class="mobile-nav-toggle bi bi-list d-lg-none"></i>
      </div>
    </header>

<!-- Slide-in Menu -->
<div id="mobile-nav" class="mobile-nav">
  <i class="mobile-nav-close bi bi-x"></i>
  <ul class="nav flex-column text-center">
    <li class="nav-item">
      <a class="nav-link text-dark fw-bold current-page" href="index.html">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-bold" href="About.html">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-bold" href="Tech.html">TECH</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-bold" href="Contact.html">CONTACT</a>
    </li>
  </ul>
</div>

    <!-- Hero Section -->
    <section class="hero">
      <img
        src="assets/img/ai-gen/abstractbg00.png"
        alt="Background Hero Image"
        class="hero-bg"
      />
      <video class="hero-bg" autoplay loop muted playsinline>
        <source src="assets/img/ai-gen/abstractbg00Vid.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <h1 class="display-4 fw-bold spaced-letters">LOOPTECH</h1>
      <p class="lead glossy-background">
        Bringing you unrivaled Assistants powered by the latest in AI Innovation.
      </p>
      <button class="btn btn-primary custom-margin-top " onclick="location.href='Contact.html#contactUs'">Get in Touch</button>
    </section>

    <!-- Intro & Mission Section -->
    <section class="py-5 intro">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="color-text">Intro & Mission</h2>
          </div>
          <div class="col-md-8">
            <p class="intro-text">
              At LoopTech, we empower individuals, businesses, and communities through innovative AI solutions that enhance lives and drive meaningful progress.
            </p>
          </div>
        </div>
      </div>
    </section>
   
    <!-- Stats Section
    <section class="py-5 bg-light" >
      <div class="container text-center">
        <h3 class="mb-4">Dashboard</h3>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="stats-card p-4">
              <h3>90%</h3>
              <p>Engagement Rate</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stats-card p-4">
              <h3>10+</h3>
              <p>Projects in Pipeline</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stats-card p-4">
              <h3> 12,000</h3>
              <p>First Adapters</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Why Looptech Section -->
    <section class="py-5 about">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8  order-2  order-md-1">
            <p class="align-left intro-text">
              We transform cutting-edge AI breakthroughs into concrete business solutions. Founded in 2024 as a bold initiative to challenge the boundaries of AI, we’ve grown into a dynamic startup developing innovative, customizable AI-driven solutions that streamline workflows and enable meaningful progress.
             
            </p>
          </div>
          <div class="col-md-4 order-1 order-md-2">
            <h2 class="color-text">Why LOOPTECH?</h2>
          </div>
        </div>
      </div>
    </section>
        <!-- Whats different Section -->
    <section class="py-5 intro">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="color-text">What Sets Us Apart</h2>
          </div>
          <div class="col-md-8">
            <p class="intro-text">
              Unlike other platforms, we don’t simply add AI on top of existing services; our entire platform is built from generative AI agents that reason, learn, and adapt to your business. We remain model-agnostic, so we can seamlessly integrate the best large language models for your team's unique needs. We also prioritize data privacy with prompt obfuscation, ensuring your information remains yours alone.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Vision Section -->
    <section class="py-5 vision-section">
      <div class="container text-center">
        <h2 class="py-5">Our Vision</h2>
        <div class="row align-items-center">
          <div class="col-md-6">
            <h4>Before</h4>
            <img
              src="assets/img/images/flowBefore.png"
              alt="Before Image"
              class="img-fluid rounded mb-3"
            />
          </div>
          <div class="col-md-6">
            <h4>After</h4>
            <img
              src="assets/img/images/flowAfter.png"
              alt="After Image"
              class="img-fluid rounded mb-3"
            />
          </div>
          <p class="py-5 align-left intro-text">
            We believe that generative AI models will progress from simple assistants into intelligent agents and eventually evolve into fully autonomous entities: groups of agents created, optimized, and managed by AI to accomplish the tasks human teams handle today.
            <br><br>
            While current agentic workflows require a developer to create tools and assign them to agents, we see our metaAgents—AI orchestrators that break down goals into tasks and assemble specialized teams of collaborating agents—as a pivotal step toward these entities.
            <br><br>
            Our vision is to develop ethical, AI-powered solutions that evolve autonomously, empowering humanity and fostering sustainable, positive progress for a better future for everyone.
          </p>
        </div>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 bg-light">
      <div class="container tech text-center">
        <h2 class="py-5">Our Technologies</h2>
        <div class="row py-3 g-4">
          <div class="col-lg-4 col-md-6">
            <div class="card p-3 shadow border-light h-100"  onclick="location.href='Tech.html#overview'">
              <img
                src="assets/img/images/odyssey.png"
                alt="Odyssey"
                class="img-fluid rounded mb-3"
              />
              <div class="card-text  py-2">
              <h5>Odyssey - App Launcher</h5>
              <p class="card-text  align-left">
                Our launcher grants your business immediate access to customizable, state-of-the-art AI assistants.
              </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card p-3 shadow border-light h-100" onclick="location.href='Tech.html#overview'">
              <img
                src="assets/img/images/theseus.png"
                alt="Theseus"
                class="img-fluid rounded mb-3"
              />
              <div  class="card-text py-2">
              <h5>Theseus Engine</h5>
              <p class="card-text align-left">
                Theseus Engine orchestrates specialized AI assistants as a coordinated society of mind, enabling faster task completion and streamlining business processes.
              </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card p-3 shadow border-light h-100" onclick="location.href='Tech.html#overview'">
              <img
                src="assets/img/images/data.png"
                alt="Data Moderation Compliance Engine"
                class="img-fluid rounded mb-3"
              />
              <div class="card-text  py-2">
              <h5>Data Moderation Compliance Privacy and Security Engine</h5>
              <p class="card-text  align-left">
                Our Data MCPS engine keeps sensitive data private, encrypted, and isolated from model endpoints, ensuring you maintain full control of your information.
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 " style="background-color: #1f2124">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center mb-3 mb-md-0" >
            <div class="contact-other text-white card h-100">
            <h2>Get in Touch</h2>
            <p>Have questions or want to learn more? Send us a message!</p>
            <a href="Contact.html#contactUs" class="btn btn-light">Contact Us</a>
        </div>
          </div>
          <div class="col-md-6 text-center ">
            <div class="contact-cook card h-100">
            <h2>Cook Employee</h2>
            <p>If you are a Cook Employee, click the link for more information.</p>
            <a href="Contact.html#getInvolved" class="btn btn-dark">More Info</a>
        </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
  <footer class="py-5 text-white">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-3 mb-4">
              <img src="assets/img/0Logo/Sqr-W.svg" alt="LoopTech Logo" class="img-fluid mb-1" style="max-width: 50px;">
                <h5 class="fw-bold">LOOPTECH</h5>
                <address>
                    750 Daniels Way<br>
                    Bloomington, IN<br>
                   
                </address>
            </div>

            <!-- About Links -->
            <div class="col-md-3 mb-4">
                <a href="About.html"> <h5 class="text-prime">ABOUT</h5></a>
                <ul class="list-unstyled">
                    <li><a href="About.html#intro&Mission" class="text-white text-decoration-none">Introduction and Mission</a></li>
                    <li><a href="About.html#vision&Values" class="text-white text-decoration-none">Vision & Values</a></li>
                    <li><a href="About.html#whyLooptech" class="text-white text-decoration-none">Why LoopTech?</a></li>
                    <li><a href="About.html#faq" class="text-white text-decoration-none">LoopTech FAQ</a></li>
                    <li><a href="About.html#keyTeamMembers" class="text-white text-decoration-none">Key Team Members</a></li>
                </ul>
            </div>

            <!-- Tech Links -->
            <div class="col-md-3 mb-4">
                <a href="Tech.html"><h5 class="text-prime">TECH</h5></a>
                <ul class="list-unstyled">
                    <li><a href="Tech.html#overview" class="text-white text-decoration-none">Overview</a></li>
                    <li><a href="Tech.html#featured" class="text-white text-decoration-none">Featured Innovation</a></li>
                    <li><a href="Tech.html#future" class="text-white text-decoration-none">Future Development</a></li>
                    
                </ul>
            </div>

            <!-- Contact Links -->
            <div class="col-md-3 mb-4">
                <a href="Contact.html"><h5 class="text-prime">CONTACT</h5></a>
                <ul class="list-unstyled">
                    <li><a href="Contact.html#getInvolved" class="text-white text-decoration-none">Get Involved</a></li>
                    <li><a href="Contact.html#contactUs" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="Contact.html#contactInfo" class="text-white text-decoration-none">Contact Information</a></li>
                    <li><a href="Contact.html#social" class="text-white text-decoration-none">Social Media</a></li>
                </ul>
            </div>
            <div class="col-md-12 mb-4 text-end">
              <a href="#top">
                <img src="assets/img/BackUp Button.png" alt="BackBotton" class="img-fluid" style="max-width: 75px;">
              </a>
            </div>
        </div>
        
        <!-- Social Media and Copyright -->
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <span class="me-3">Follow Us</span>
             <!--    <a href="#" class="text-white me-2"><i class="bi bi-google"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-telephone"></i></a> -->
                <a href="#" class="text-white me-2"><i class="bi bi-x"></i></a>
                <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="col-md-6 text-end">
                <small>&copy; 2025 LoopTech. All Rights Reserved.</small>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
