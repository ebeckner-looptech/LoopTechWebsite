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
    <link rel="icon" type="image/x-icon" href="assets/img/0Logo/FavW.png" />
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
          <i class="bi bi-envelope me-2"></i
          ><a
            href="mailto:AIExplorer@cookmedical.com"
            class="text-white text-decoration-none"
            >AIExplorer@cookmedical.com</a
          >
         <!--  <i class="bi bi-phone ms-4"></i
          ><span class="ms-2">+1 5589 55488 55</span> -->
        </div>
        <div class="d-flex">
          <!-- <a href="#" class="text-white me-4"><i class="bi bi-facebook"></i></a> -->
          <a href="#" class="text-white me-4"
            ><i class="bi bi-twitter-x"></i
          ></a>
          <a href="#" class="text-white me-4"><i class="bi bi-linkedin"></i></a>
       <!--    <a href="#" class="text-white"><i class="bi bi-google"></i></a> -->
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
              <a class="nav-link text-dark fw-bold " href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold current-page" href="About.html">ABOUT</a>
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
      <a class="nav-link text-dark fw-bold " href="index.html">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-bold current-page" href="About.html">ABOUT</a>
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
       <!--<img
        src="assets/img/ai-gen/particle 169 00.png"
        alt="Background Hero Image"
        class="hero-bg"
      /> -->
      <video class="hero-bg1" autoplay loop muted playsinline>
        <source src="assets/img/ai-gen/darkWaveLoop.mp4" type="video/mp4" />
        <!--particle01 is the rebounce vid but with white rims-->
        Your browser does not support the video tag.
      </video>
      <h1 class="display-4 fw-bold spaced-letters">ABOUT</h1>
      <p class="lead glossy-background">
        Discover what drives our approach.
      </p>
    </section>

    

   
<!-- Introduction and Mission Section -->
<section class="py-5 introA bg-light" id="intro&Mission">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img
          src="assets/img/blog/blog-inside-post.jpg"
          alt="Introduction Image"
          class="img-fluid rounded"
        />
      </div>
      <div class="col-md-6 ">
        <h2 class="custom-margin-top">Where it started</h2>
        <p >
          LoopTech began in 2024 as an applied-research initiative incubated within Cook Medical. Energized by a growing curiosity for generative AI, we assembled a team of AI superusers and officially entered the incubator in July 2024, exploring how to build a fully AI-driven business in the stationary industry—from concept to manufacturing.
<br><br>
          During this sandbox phase, we developed AI-powered tools for research, quickly adapting them to the rapid pace of AI advancement by making them modular enough to adopt the latest models. Recognizing the gap in availability for such solutions, we consolidated our discoveries into a single platform—named Theseus after the ever-evolving Ship of Theseus.
          <br><br>
          Now, we’re building a future focused on delivering our AI tools to teams, businesses, and enterprises, empowering them to harness the full potential of generative AI.
        </p>
      </div>
    </div>
  </div>
</section>

 <!-- Vision & Values Section -->
 <section class="py-5 bg-white" id="vision&Values">
  <div class="container text-center">
    <h2>Vision & Values</h2>
    <div class="row g-4 mt-4">
      <div class="col-lg-4 ">
        <div class="values-card rounded border border-warning">
          <h5>Lead the AI Revolution</h5>
          <p>Deliver cutting-edge generative AI solutions for teams and businesses of all sizes.</p>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class="values-card rounded border border-warning">
          <h5>Unbounded Innovation</h5>
          <p>Bring the latest AI research directly to every user, challenging the status quo.</p>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class="values-card rounded border border-warning">
          <h5>Offer Diverse Solutions</h5>
          <p>
            Provide users with the best model for their specific needs.
          </p>
        </div>
      </div>
    </div>
      <div class="row g-4 mt-4 justify-content-center">
        <div class="col-lg-4">
          <div class="values-card rounded border border-warning">
            <h5>Intent into Action</h5>
            <p>
              Empower users with experiences that turn intent into action effortlessly.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="values-card rounded border border-warning">
            <h5>Educate and Inform</h5>
            <p>
              Make AI easy to use and understand with resources to learn best practices.
            </p>
          </div>
        </div>
      </div>
    
  </div>
</section>
     <!-- Why LoopTech Section -->
     <section class="py-5 bg-light" id="whyLooptech">
      <div class="container text-center">
          
          <div class="row align-items-center">
              <div class="col-md-6">
                <h2>Why LoopTech?</h2>
                  <p class="align-left">We believe that genAI democratizes technical expertise so that anyone can transform their aims into actions. Unlike other AI services that limit you to a single model family, our platform places the full power of generative AI at your fingertips.</p>
              </div>
              <div class="col-md-6">
                  <img src="assets/img/images/why.png" alt="Why LoopTech" class="img-fluid rounded">
              </div>
          </div>
      </div>
  </section>

      <!-- FAQ Section -->
      <section class="py-5 bg-dark text-white" id="faq">
        <div class="container">
            <h2 class="text-center">LoopTech FAQ</h2>
            <div class="accordion mt-4" id="faqAccordion">
              <!-- first item -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                            What is LoopTech?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body ab-margin">
                          LoopTech is a generative AI technology startup incubated by Cook Medical.

                        </div>
                    </div>
                </div>
                <!-- second item -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="faq2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        What makes LoopTech assistants unique?                      </button>
                  </h2>
                  <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                      <div class="accordion-body  ab-margin">
                        Inspired by the conjecture of <b>Marvin Minsky</b>, our assistants are powered by <i>cognitive manifolds</i> of specialized agents. We believe this <i>society of mind</i> approach allows our assistants to reason more deeply, grasp nuances, empathize with users, and leverage tools more effectively than standalone Large Language Models.

                      </div>
                  </div>
                </div>
                <!-- third item -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                          What is a virtual workspace?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body ab-margin">
                          Our platform allows users to interact with assistants in connected virtual workspaces—digital “desks” where your assistants can create, edit, and interact with files and the internet on your behalf.

                        </div>
                    </div>
                </div>
                        <!-- Fourth item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                  How are LoopTech assistants personalized for users?
                </button>
              </h2>
              <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                <div class="accordion-body ab-margin">
                  At the user-assistant interface, our ecosystem updates a digital profile with notes on the user’s communication style, workflow, and personality preferences. By using these notes, memory, and a cognitive system called <i>Active Dynamic-Memory Reflection</i>, our assistants self-align to user preferences.

                </div>
              </div>
            </div>

                <!-- Fifth item -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="faq5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                      What are projects?
                                          </button>
                  </h2>
                  <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body ab-margin">
                      Projects are folders where users group chats. Assistants within a project have access to all files, workspaces, and conversations in that project, eliminating the need to re-prompt, re-upload, or re-explain a complex project from scratch.                    </div>
                  </div>
                </div>
                   <!-- Sixth item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                  What is conversational edit?                </button>
              </h2>
              <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                <div class="accordion-body ab-margin">
                  Similar to <i>artifacts</i> or <i>canvas</i>, conversational edit is an agent-powered editing engine for any text-based document. Our assistants are natively integrated with conversational edit, letting you refactor, tweak, augment, or condense text in virtually any document.


                </div>
              </div>
            </div>


            </div>
   
        </div>
    </section>

    <!-- Key Team Members Section -->
    <section class="py-5" id="keyTeamMembers">
      <div class="container text-center">
          <h2>Key Team Members</h2>
          <div class="row g-4 mt-4 justify-content-center">
              <div class="col-md-4">
                  <div class="team-card">
                    <div class="team-card-text">
                      <h6 >Elliott Beckner</h6>
                      <p >CEO of LoopTech</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="team-card ">
                    <div class="team-card-text">
                      <h6>Hugo Li</h6>
                      <p>UX Designer/Engineer</p>
                    </div>
                  </div>
              </div>
            </div>
              <!-- Row 2-5 -->

              <div class="row g-4 mt-4 justify-content-center">
                <h4>Project Replicator Team Leads</h4>
                <div class="col-md-4">
                    <div class="team-card">
                      <div class="team-card-text">
                        <h6 >Jithendra Nair</h6>
                        <p >Director, Global Information Technology,<br> Cook Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card ">
                      <div class="team-card-text">
                        <h6>James Collins</h6>
                        <p>Senior Research and Development Engineer, <br>Cook Australia</p>
                      </div>
                    </div>
                </div>

                <div class="row g-4 mt-4 justify-content-center">
                  <h4>Project Manager</h4>
                  <div class="col-md-4">
                      <div class="team-card">
                        <div class="team-card-text">
                          <h6 >Payton Beckner</h6>
                          <p >Learning and Talent Development Specialist 2, <br>Cook Group</p>
                          </div>
                      </div>
                  </div>
                  </div>


                  <div class="row g-4 mt-4 justify-content-center">
                    <h4>Founding Advisory Board</h4>
                    <div class="col-md-4">
                        <div class="team-card">
                          <div class="team-card-text">
                            <h6 >Pete Yonkman</h6>
                            <p >President, Cook Group</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-card ">
                          <div class="team-card-text">
                            <h6>Kyle Caird</h6>
                            <p>Art Director, Cook Group</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="team-card ">
                        <div class="team-card-text">
                          <h6>Ranjith Erusa</h6>
                          <p>Senior IT Manager, Cook Group</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="team-card ">
                      <div class="team-card-text">
                        <h6>Stefan Larsen</h6>
                        <p>Manager, Global Functions & Internal Operations, Business Insights, Cook Denmark</p>
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

