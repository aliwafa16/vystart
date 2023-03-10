<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="img/images/favicon-32x32.png" />

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Frontend Mentor | Bookmark landing page</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <style>
      .attribution {
        font-size: 11px;
        text-align: center;
      }
      .attribution a {
        color: hsl(228, 45%, 44%);
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light position-absolute top-0 start-0 end-0 z-index">
        <div class="container text-uppercase">
          <a class="navbar-brand" href="#">
            <img src="img/images/logo-bookmark.svg" alt="bookmark_logo" />
          </a>
          <button
            class="navbar-toggler border-0 position-relative"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
            <img src="img/images/icon-close.svg" alt="close-btn" class="position-absolute top-50 start-50 translate-middle" style="opacity: 0" />
          </button>

          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
              <li class="nav-item">
                <a class="nav-link text-lg-dark" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-lg-dark" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-lg-dark" href="#contact">Contact</a>
              </li>
              <li class="nav-item nav_login">
                <button class="btn btn-danger text-white px-5 py-2 text-uppercase" type="submit">Login</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main id="hero" class="position-relative">
        <div class="container">
          <div class="row">
            <div class="col col-lg-4 order-2 order-lg-1 text-center text-lg-start">
              <h1>A Simple Bookmark Manager</h1>
              <p class="text-secondary">A clean and simple interface to organize your favourite websites. Open a new browser tab and see your sites load instantly. Try it for free.</p>

              <a class="btn btn-primary py-3 px-4" href="#" role="button"> Get it on Chrome </a>

              <a class="btn btn-gray py-3 px-4" href="#" role="button"> Get it on Firefox </a>
            </div>
            <div class="hero-image col col-lg-6 offset-lg-2 off order-1 order-lg-2 d-flex justify-content-center">
              <img src="img/images/illustration-hero.svg" alt="illustration hero" class="mx-auto" style="max-width: -webkit-fill-available" />
            </div>
          </div>
        </div>
      </main>
    </header>

    <article class="mt-5">
      <section id="features" class="text-center mx-auto">
        <h2 class="fw-bold mb-3">Features</h2>
        <p class="text-secondary mx-auto mb-5">Our aim is to make it quick and easy for you to access your favourite websites. Your bookmarks sync between your devices so you can access them on the go.</p>
        <div class="features_links row">
          <div class="collapse_feature m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative">
            <input type="radio" id="option01" name="collapse" value="Simple Bookmarking" class="radio-btn" checked />
            <label for="option01">Simple Bookmarking</label>
          </div>
          <div class="collapse_feature m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative">
            <input type="radio" id="option02" name="collapse" value="Speedy Searching" class="radio-btn" />
            <label for="option02">Speedy Searching</label>
          </div>
          <div class="collapse_feature m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative">
            <input type="radio" id="option03" name="collapse" value="Easy Sharing" class="radio-btn" />
            <label for="option03">Easy Sharing</label>
          </div>

          <!-- <p class="collapse_feature inactive m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative ">Simple Bookmarking</a>
        
      
        <p class="collapse_feature inactive m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative">Speedy Searching</p>
      
      
        <p class="collapse_feature inactive m-0 p-0 col-lg-4 col-12 py-3 text-secondary position-relative " >Easy Sharing</p> -->
        </div>
      </section>
      <section id="feature" class="mt-5 position-relative">
        <div class="container">
          <div class="tab_describe row">
            <div class="column_1 col ps-lg-5 pe-lg-0">
              <img src="img/images/illustration-features-tab-1.svg" alt="illustration-features-tab-1" style="max-width: -webkit-fill-available" />
            </div>
            <div class="column_2 col offset-lg-1 d-flex justify-content-center align-items-center">
              <div class="description text-center text-lg-start">
                <h2 class="fw-bold mb-3">Bookmark in one click</h2>
                <p class="text-secondary mb-5">Organize your bookmarks however you like. Our simple drag-and-drop interface gives you complete control over how you manage your favourite sites.</p>
                <a class="btn btn-primary py-3 px-4 d-none d-lg-inline" href="#" role="button"> More Info </a>
              </div>
            </div>
          </div>
        </div>

        <!-- More Info Intelligent search Our powerful search feature will help
      you find saved sites in no time at all. No need to trawl through all of your bookmarks. More Info Share your bookmarks Easily share your bookmarks and collections with others. Create a shareable link that you can send at the click of a
      button. More Info -->
      </section>

      <section id="pricing" class="text-center">
        <div class="container">
          <h2>Download the extension</h2>
          <p class="text-secondary">We’ve got more browsers in the pipeline. Please do let us know if you’ve got a favourite you’d like us to prioritize.</p>

          <div id="extension-list" class="d-lg-flex d-inline justify-content-center mt-5">
            <div class="box shadow rounded me-lg-5 mx-auto mx-lg-0 mb-5 mb-lg-0">
              <img src="img/images/logo-chrome.svg" alt="chrome" class="mt-5" />
              <h3 class="mt-3">Add to Chrome</h3>
              <p class="text-secondary mt-3 mb-4">Minimum version 62</p>

              <img src="img/images/bg-dots.svg" alt="bg-dots" />
              <a class="btn btn-primary mt-3 py-2 px-4" href="#" role="button"> Add & Install Extension </a>
            </div>
            <div class="box shadow rounded align-self-center me-lg-5 mx-auto mx-lg-0 mb-5 mb-lg-0">
              <img src="img/images/logo-firefox.svg" alt="firefox" class="mt-5" />
              <h3 class="mt-3">Add to Chrome</h3>
              <p class="text-secondary mt-3 mb-4">Minimum version 55</p>
              <img src="img/images/bg-dots.svg" alt="bg-dots" />
              <a class="btn btn-primary mt-3 py-2 px-4" href="#" role="button"> Add & Install Extension </a>
            </div>
            <div class="box shadow rounded align-self-end mx-auto mx-lg-0">
              <img src="img/images/logo-opera.svg" alt="opera" class="mt-5" />
              <h3 class="mt-3">Add to Chrome</h3>
              <p class="text-secondary mt-3 mb-4">Minimum version 42</p>
              <img src="img/images/bg-dots.svg" alt="bg-dots" />
              <a class="btn btn-primary mt-3 py-2 px-4" href="#" role="button"> Add & Install Extension </a>
            </div>
          </div>
        </div>
      </section>

      <section id="questions" class="mt-5">
        <div class="container w-50 d-flex flex-column align-items-center justify-content-center">
          <main>
            <h2 class="text-center">Frequently Asked Questions</h2>
            <p class="text-secondary text-center">Here are some of our FAQs. If you have any other questions you’d like answered please feel free to email us.</p>
          </main>

          <!-- accordion for the questions -->
          <div class="accordion mt-5 w-100" id="accordionExample">
            <div class="accordion-item border-start-0 border-end-0">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What is Bookmark?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget ultricies fringilla. Phasellus blandit ipsum quis quam ornare mattis.</div>
              </div>
            </div>
            <div class="accordion-item border-start-0 border-end-0">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I request a new browser?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula. Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula. Suspendisse
                  imperdie tVivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula. Suspendisse imperdiet.
                </div>
              </div>
            </div>
            <div class="accordion-item border-start-0 border-end-0">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Is there a mobile app?</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut condimentum urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra purus. Sed sollicitudin ex et ultricies
                  bibendum.
                </div>
              </div>
            </div>
            <div class="accordion-item border-start-0 border-end-0">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">What about other Chromium browsers?</button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui. Aliquam vitae neque eget nisl gravida pellentesque non ut velit.</div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary py-3 px-4 mt-4" href="#" role="button">More Info</a>
        </div>
      </section>
    </article>

    <footer class="mt-5 text-center text-white">
      <div class="container">
        <p class="user_joined text-uppercase mb-5">35,000+ already joined</p>
        <h2 class="mx-auto mb-5">Stay up-to-date with what we’re doing</h2>
        <form class="d-flex flex-lg-row flex-column justify-content-center needs-validation" novalidate>
          <!-- <div class="col-lg-6"> -->
          <!-- <label for="validationCustom01" class="form-label">City</label> -->
          <div class="input_email mb-2">
            <input type="email" placeholder="Enter your email address" class="rounded border-0 py-3 px-4 mb-lg-0 w-100" required />
            <div class="invalid-feedback fst-italic text-start py-1 px-2">Whoops, make sure it's an email</div>
          </div>
          <!-- <input type="email" placeholder="Enter your email address" class="rounded border-0 py-3 px-4 mb-2 mb-lg-0" required /> -->
          <!-- </div> -->
          <div class="btn_submit">
            <button type="submit" class="btn btn-danger ms-lg-3 py-3 px-4 w-100">Contact us</button>
            <!-- <input type="submit" class="btn btn-danger py-3 px-4" value="Contact us" /> -->
          </div>
        </form>
      </div>
      <nav class="navbar mt-5 py-4 position-relative">
        <div class="container d-flex justify-content-between">
          <div class="flex-1 d-flex flex-column flex-lg-row justify-content-around w-50 align-items-center">
            <a class="navbar-brand p-0" href="#">
              <img src="img/images/logo-bookmark.svg" alt="bookmark_logo" />
            </a>
            <a href="#" class="pb-4 mt-3 m-lg-0 p-lg-0">Features</a>
            <a href="#" class="pb-4 p-lg-0">Pricing</a>
            <a href="#" class="pb-4 p-lg-0">Contact</a>
          </div>

          <div class="flex-2 d-flex justify-content-around mx-auto mx-lg-0 align-items-center">
            <a href="#" class="mx-3">
              <img class="icon" src="img/images/icon-facebook.svg" alt="facebook" />
            </a>
            <a href="#" class="mx-3">
              <img class="icon" src="img/images/icon-twitter.svg" alt="facebook" />
            </a>
          </div>
        </div>
      </nav>
    </footer>

    <script src="js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
