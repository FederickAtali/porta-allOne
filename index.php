<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title class="REDTI">Tiku</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <!--Bootstrap link code-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <!--Bootstrap icon link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <!--font awesome link-->
    <script
      src="https://kit.fontawesome.com/ba97a1ec2a.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!--Nav Bar section-->
    <nav class="port navbar navbar-expand-md py-4 fixed-top">
      <div class="container d-flex" id="containerlog">
        <a class="haoao" href="index.php" class="navbar-brand logam2"> TIKU</a>
        <!--Hamburger button.-->

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="port2 navbar-nav ms-auto d-flex">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme1">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servicesid">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfoliosec">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portblog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactsec">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Introduction section-->
    <section class="firstsec py-5">
      <div class="container py-3" id="firstcontain">
        <h1 class="techwrite">Web developer, Designer & Blogger</h1>
        <p class="fundoing">
          I design and love building things that run on the web then  write about
          them
        </p>

        <div class="image">
          <img
            src="image/smilin-avatar.jpg"
            alt="fred-image"
            class="imageone img-fluid"
          />
        </div>
      </div>
    </section>

    <!--Little introduction about myself.
        -->
    <section class="peronaal py-5" id="aboutme1">
      <div class="container py-5" id="personal-">
        <h1 class="texth31">Hi, I'm Fredo,Nice to meet you</h1>
        <div>
          <p class="dereasin firstpy3">
            My curiosity into web development and design began in 2021, since
            then i have never stop building beautiful things that run on the
            web, if there is only a single thing i am very ok with doing with
            full dose of passion will certainly be web development and
            designing.I am ready to work with any individual, organization,
            startup and Tech giant companies so I can keep unleashing my passion
            for web development and designing with the aim of leaving my own
            little mark into the digital world. To me every new day is a
            learning day to learn how to build small new things that run on the
            web.
          </p>
        </div>

        <div class="anmam">
          <div class="tab-title d-flex">
            <h4 class="tab-links active-link" onclick="opentab('skills')">
              Skills
            </h4>
            <h4 class="tab-links" onclick="opentab('education')">Education</h4>
          </div>
          <!--Displaying the tab contents.
              skills-->
          <div class="tab-contents active-tab" id="skills">
            <ul class="allonw">
              <li><span>Web development & </span><br />Web designing</li>
            </ul>
          </div>
          <!--Displaying the tab contents.
              education-->
          <div class="tab-contents" id="education">
            <ul>
              <li>
                <span>Assocaite of science in, </span><br />Computer Science
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--Languages section.-->
    <section class="languages py-5">
      <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" id="languages">
          <div class="col">
            <div class="card h-100" id="languages">
              <div class="card-body text-center">
                <h4 class="card-title" id="title-designer">Designer</h4>
                <p class="card-text firstpy3" id="firstpy">
                  I love to design new websites or redesign an existing one,
                  came up with confortable interactions with the content.
                </p>

                <p class="card-text firstpy2" id="firstpy">I love designing:</p>
                <p class="card-text">Web, Apps, Logos, UI, UX</p>
                <p class="card-text firstpy2" id="firstpy">
                  The tools I used are:
                </p>
                <p class="card-text firstpy3">
                  Font Awesome <br />
                  Figma <br />
                  Dia-diagram <br />
                  Sketch <br />
                  WebFlow
                </p>
              </div>
              <div class="card-footer" id="footerlastup">
                <small class="lastup">Last updated 5 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" id="languages">
              <div class="card-body text-center">
                <h4 class="card-title" id="title-designer">Web developer</h4>
                <p class="card-text firstpy3" id="firstpy">
                  I love to create website from scratch, code it nicely well and
                  incorporate some backend services.
                </p>
                <p class="card-text firstpy2" id="firstpy">
                  The languages I communicate:
                </p>
                <p class="card-text">HP, HTML, CSS, SQL, Git,JavaScript</p>
                <p class="card-text firstpy2" id="firstpy">
                  Dev tools & Technlogies:
                </p>
                <p class="card-text firstpy3">
                  Boostrap <br />
                  MYSQL <br />
                  Github <br />
                  Reactjs <br />
                  XML <br />
                  AJAX <br />
                  GoogleSheet <br />
                  Microsoft 365
                </p>
              </div>
              <div class="card-footer" id="footerlastup">
                <small class="lastup">Last updated 5 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" id="languages">
              <div class="card-body text-center">
                <h4 class="card-title" id="title-designer">Blogger</h4>
                <p class="card-text firstpy3" id="firstpy">
                  I love to write and share my experiences with others
                </p>
                <p class="card-text firstpy2" id="firstpy">
                  Got inspired to blog from:
                </p>
                <p class="card-text firstpy3">
                  I draw my inspiration from the exeriences and ideas I have
                  gain while coding and developing the beautifull things that
                  run on the web.
                </p>
                <p class="card-text firstpy2" id="firstpy">
                  The various areas in tech I blog on:
                </p>
                <p class="card-text firstpy3">
                  Computer science <br />
                  Software engineering <br />
                  Web development <br />
                  UI/UX design <br />
                  programming
                </p>
                <p class="card-text" id="portrecentb">
                  You may love to read my recent blog
                  <a href="portblog.html" target="_blank">here</a>
                </p>
              </div>
              <div class="card-footer" id="footerlastup">
                <small class="lastup">Last updated 5 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Services section-->
    <section class="service1 py-5" id="servicesid">
      <div class="container" id="services3">
        <h2 class="sub-title">My services</h2>
        <p class="whattextme">
          I'm curious and passionate to build the website that you have in mind.
          Just a little <br />
          description, i design and coded it beautifully well for you
          <a href="https://wa.me/971582639255" target="_blank">whatsapp me </a>
        </p>

        <div class="row d-ms-flex py-3" id="rowgrid">
          <div class="col py-3" id="second-col">
            <i class="fa-solid fa-code"></i>
            <h4 class="webcolgrid">Web Design</h4>
            <p class="designreps">
              Making websites have a good look with easy user interactions is
              something I whollely buy into.
            </p>
          </div>
          <div class="col py-3" id="second-col">
            <i class="fa-solid fa-crop-simple"></i>
            <h4 class="webcolgrid">Web development</h4>
            <p class="designreps">
              From architecture to deployment, I am curious and passionat to
              create, redesign and maintain websites
            </p>
          </div>
          <div class="col py-3" id="second-col">
            <i class="fa-brands fa-app-store"></i>
            <h4 class="webcolgrid">Responsive Design</h4>
            <p class="designreps">
              I design and code mobile first website that will have thesame look
              and behavior on all screen sizes.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--- portfolio section-->
    <section class="porfoliome py-5" id="portfoliosec">
      <h2 class="myw">My Work</h2>
      <p class="whattextme">
        Snippets of some personal project I design and build.Maybe you
        <br />want to see more of this, let us talk on
        <a href="mailto:federicktiku163@gmail.com" target="_blank">email</a>
      </p>
      <div class="container text-center">
        <div class="card-group" id="cardgp">
          <div class="card" id="myserallcard">
            <img
              id="alimage"
              class="card-img-top img-fluid"
              src="image/our-clientE.png"
              alt="image showing my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">Rolling divs with next and prev button</h5>
              <p class="card-text">
                click on the link below to view the code on github.
                While on the repo in github run the index.php file you will see this Rolling
                divs in action
              </p>
              <a href="https://github.com/fredericktiku/Startup-site"
               target="_blank" >
               <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
          <div class="card" id="myserallcard">
            <img
              src="image/boot-become.png"
              class="card-img-top img-fluid"
              alt="image showing my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">Website billboard design</h5>
              <p class="card-text">See Code on github.</p>
              <a href="https://github.com/fredericktiku/Building-Responsive-web-app" 
                 target="_blank" >
                <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
          <div class="card" id="myserallcard">
            <img
              src="image/bootcam-hrbrid.png"
              class="card-img-top img-fluid"
              alt="image of my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">little cute design, coded with love</h5>
              <p class="card-text">See code on github.</p>
              <a href="https://github.com/fredericktiku/Building-Responsive-web-app"
               target="_blank">
               <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
        </div>

        <!-- The  second card group-->
        <div class="card-group" id="second-card-gp">
          <div class="card" id="myserallcard">
            <img
              src="image/bootcams-faq.png"
              class="card-img-top"
              alt="image showing my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">FAQ</h5>
              <p>view work on github</p>
              <a href="https://github.com/fredericktiku/Building-Responsive-web-app"
               target=" _blank" >
               <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
          <div class="card" id="myserallcard">
            <img
              src="image/bootcampls-ourinstr2.png"
              class="card-img-top img-fluid"
              alt="image showing my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">
                Grid holding beautifully nice coded personal information.
              </h5>
              <p class="card-text">View this code on github.</p>
              <a href="https://github.com/fredericktiku/Building-Responsive-web-app"
                target=" _blank"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
          <div class="card" id="myserallcard">
            <img
              src="image/bot-camp-footer.png"
              class="card-img-top img-fluid"
              alt="image of my work"
            />
            <div class="card-body" id="layer">
              <h5 class="card-title">Nice footer</h5>
              <p class="card-text">View the code on github.</p>
              <a href="https://github.com/fredericktiku/Startup-site"
                target="_blank">
                <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Whatasapp floating button-->
    <section class="float py-5">
      <div class="container">
        <a
          href="https://wa.me/971582639255
     "
          target="_blank"
          class="float"
        >
          <i class="bi bi-whatsapp float2"></i>
        </a>
      </div>
    </section>

    <!--Interested section-->
    <section class="letstalk py-5">
      <div class="container text-center">
        <h5 class="cardvio firstpy3">
          Do you want us to come together

          <br />
          and create something beautiful that will run on the web?
        </h5>
        <p class="text-rady firstpy3" id="anybody-collabo">
          I am always ready and happy to collaborate with <br />
          anybody so we both can leave another small mark in th degital world
        </p>
        <a class="van" href="form.html">
          <button id="largally" type="button" class="btn btn-lg">
            <i class="bi bi-chat-left-text-fill"></i>

            Start a Conversation
          </button>
        </a>
      </div>
    </section>

    <!--Contact section-->
    <section class="contact1 py-5" id="contactsec">
      <div class="container" id="contactport">
        <div class="row">
          <div class="contactme-left">
            <h1 class="hme">Contact me</h1>
            <p>
              <i class="fa-solid fa-paper-plane"></i>federicktiku163@gmail.com
            </p>
            <p><i class="fa-solid fa-phone"></i>+971582639255</p>
            <div class="social-links">
              <a href="https://facebook.com/"
                ><i class="fa-brands fa-facebook"></i
              ></a>
              <a href="https://wa.me/971582639255" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              <a href="mailto:federicktiku163@gmail.com" target="_blank">
                <i id="solifa" class="fa-solid fa-envelope"></i
              ></a>
            </div>
            <a
              href="image/HSE Cover2 letters.pdf"
              download
              id="btn2"
              class="btn"
              >Download Cv</a
            >
          </div>
          <div class="contact-right" id="popup">
            <form
              method="POST"
              action="processPort.php"
              class="formon11"
              id="portfolioForm portfolioForm2"
            >
              <div>
                <input
                  type="text"
                  name="Name"
                  placeholder="Your Name"
                  required
                />
              </div>
              <div>
                <input
                  type="email"
                  name="email"
                  placeholder="Your Email"
                  required
                />
              </div>
              <div>
                <textarea
                  name="Message"
                  id="write-here"
                  rows="6"
                  placeholder="Your Message"
                >
Please clear this text and write your message...
                </textarea>
              </div>
              <button name="powerBut" id="btn2" class="btn" type="submit">
                Submit
              </button>
            </form>
            <!--Setting sucess message in our form-->
            <span id="mesage-success"
              >Thank you for your message, I will get to you shortly!</span
            >
          </div>
        </div>
        <p id="compyry">
          Copyright&copy; All right reserved 2022-<?php echo date("Y"); ?>
          by Federick Tiku,<br />
          I developed and designed websites with
          <i class="fa-solid fa-heart"></i>
        </p>

      </div>
    </section>

    <!--Bootstrap  scripts code-->
    <!--Bootstrap scripts-->
    <script src="scripts/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <!--javascript file goes here-->
    <script src="scripts/index.js"></script>
  </body>
</html>
