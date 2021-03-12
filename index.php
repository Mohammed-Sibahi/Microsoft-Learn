<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Microsoft Learn</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/11.0.0/css/fabric.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles-1.css">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img id="logo" src="https://cdn.vox-cdn.com/thumbor/VSSwGPlTwiV0AY5zL9Afu7KGpno=/0x28:640x388/1600x900/cdn.vox-cdn.com/assets/1311169/mslogo.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="vl"></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link ms-fontWeight-bold ms-fontSize-18" id="docs" href="#">Docs <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" id="documentation" href="#">Documentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" id="learn" href="#">Learn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" id="q-a" href="#">Q&A</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" id="code-samples" href="#">Code Samples</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="right-inner-addon">
            <i class="fa fa-search icon search" aria-hidden="true"></i>
            <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search">
          </div>

          <?php

          if (isset($_SESSION["useruid"])) {

            echo '<button class="btn btn-outline my-2 my-sm-0" id="sign-in"  href="profile.php">Profile page</button>';
            echo '<button class="btn btn-outline my-2 my-sm-0" id="sign-in"  href="includes/logout.inc.php">Log out</button>';
          } else {

            echo '<button class="btn btn-outline my-2 my-sm-0" id="sign-in" type="sign" href="signup.php">Log in</button>';
            echo '<button class="btn btn-outline my-2 my-sm-0" id="sign-in" type="sign" href="signup.php">Sign up</button>';
          }

          ?>

        </form>
      </div>
    </nav>
  </div>
  <hr>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link ms-fontWeight-bold ms-fontSize-18" id="docs" href="#">Learn <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Azure</a>
              <a class="dropdown-item" href="#">Dynamics 365</a>
              <a class="dropdown-item" href="#">Microsoft 365</a>
              <a class="dropdown-item" href="#">Power Platform</a>
              <a class="dropdown-item" href="#">Browse all paths</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Roles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Administrator</a>
              <a class="dropdown-item" href="#">AI Engineer</a>
              <a class="dropdown-item" href="#">App Maker</a>
              <a class="dropdown-item" href="#">Business User</a>
              <a class="dropdown-item" href="#">Data Analyst</a>
              <a class="dropdown-item" href="#">Data Engineer</a>
              <a class="dropdown-item" href="#">Data Scientist</a>
              <a class="dropdown-item" href="#">Developer</a>
              <a class="dropdown-item" href="#">DevOps Engineer</a>
              <a class="dropdown-item" href="#">Functional Consultant</a>
              <a class="dropdown-item" href="#">Security Engineer</a>
              <a class="dropdown-item" href="#">Solutions Architect</a>
              <a class="dropdown-item" href="#">Student</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" href="#">Learn TV</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Certifications
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Overview</a>
              <a class="dropdown-item" href="#">Browse Certifications</a>
              <a class="dropdown-item" href="#">Browse Courses</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-reset" href="#">FAQ & Help</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <hr>

  <div class="main-image">
    <img id="main-image" src="https://docs.microsoft.com/en-us/media/learn/home/hero_background_light.svg?branch=master">
    <div class="container-1">

      <div class="intro-card">
        <div class="card-body">
          <h5 class="card-title">Welcome to Microsoft Learn</h5>
          <h1 class="card-subtitle mb-2 text-muted">Discover Your Path</h1>
          <p class="card-text">Whether you're just starting or an experienced professional, our hands-on approach helps you arrive at your goals faster, with more confidence and at your own pace.</p>
          <button type="button" class="btn btn-primary">Customize my path</button>
        </div>
      </div>
    </div>

    <div class="container-2">
      <div class="row">
        <div class="media-card col-sm-12 col-md-8 col-lg-3 ms-depth-8">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://docs.microsoft.com/en-us/media/learn/home/featured_learning-path_tablet.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">LEARNING PATHS</h6>
                <h5 class="card-subtitle mb-2 text-muted">Learn on your own schedule</h5>
                <p class="card-text">Explore a topic in-depth through guided paths or learn how to accomplish a specific task through individual modules.</p>
                <a href="#" class="card-link">Browse all learning options</a>
              </div>
            </div>
          </div>
        </div>

        <div class="media-card col-sm-12 col-md-8 col-lg-3 ms-depth-8">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://docs.microsoft.com/en-us/media/learn/home/featured_certifications_tablet.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">CERTIFICATIONS</h6>
                <h5 class="card-subtitle mb-2 text-muted">Become Microsoft certified</h5>
                <p class="card-text">Jump-start your career and demonstrate your achievements through industry-recognized Microsoft certifications.</p>
                <a href="#" class="card-link">Explore certifications</a>
              </div>
            </div>
          </div>
        </div>

        <div class="media-card col-sm-12 col-md-8 col-lg-3 ms-depth-8">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://docs.microsoft.com/en-us/learn/tv/media/learn-tv-tile.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">LEARN TV</h6>
                <h5 class="card-subtitle mb-2 text-muted">Watch live and recorded events</h5>
                <p class="card-text">View streaming technical content about Microsoft products from the experts that build and use it every day.</p>
                <a href="#" class="card-link">Start watching now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container main">

    <h1 class="title">Popular learning paths and modules</h1>
    <div class="row">

      <!-- card 1 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/azure-fundamentals.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title"> LEARNING PATH</h6>
          <a href="#">
            <h5 class="main-title">Azure fundamentals</h5>
          </a>
          <p class="time">9 hr 48 min</p>
          <ul class="items">
            <li class="tags">Azure</li>
            <li class="tags">Developer</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>

      <!-- card 2 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/get-started-power-bi.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Get started building with Power BI</h5>
          </a>
          <p class="time">47 min</p>
          <ul class="items">
            <li class="tags">Power Platform</li>
            <li class="tags">Business User</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>

      <!-- card 3 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/what-is-m365.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">What is Microsoft 365?</h5>
          </a>
          <p class="time">17 min</p>
          <ul class="items">
            <li class="tags">Microsoft 365</li>
            <li class="tags">Administrator</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>

      <!-- card 4 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/choose-storage-approach-in-azure.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Choose a data storage approach in Azure</h5>
          </a>
          <p class="time">30 min</p>
          <ul class="items">
            <li class="tags">Azure</li>
            <li class="tags">Developer</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!-- card 5 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/introduction-power-platform.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Introduction to Power Platform</h5>
          </a>
          <p class="time">18 min</p>
          <ul class="items">
            <li class="tags">Power Platform</li>
            <li class="tags">Business Analyst</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!-- card 6 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/intro-to-azure-virtual-machines.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Introduction to Azure virtual machines</h5>
          </a>
          <p class="time">1 hr 7 min</p>
          <ul class="items">
            <li class="tags">Azure</li>
            <li class="tags">Administrator</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!-- card 7 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/get-started-with-powerapps.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Get started with Power Apps</h5>
          </a>
          <p class="time">1 hr 3 min</p>
          <ul class="items">
            <li class="tags">Power Platform</li>
            <li class="tags">Business User</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!-- card 8 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/data-ai/secure-azure-storage-account-badge.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Secure your Azure Storage account</h5>
          </a>
          <p class="time">45 min</p>
          <ul class="items">
            <li class="tags">Azure</li>
            <li class="tags">Administrator</li>
            <li class="tags">Beginner</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!-- card 9 -->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">
        <div class="card-header">
          <img id="img-1" src="https://docs.microsoft.com/en-us/learn/achievements/data-analytics-and-microsoft.svg">
        </div>
        <div class="card-body">
          <h6 class="card-title">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Discover data analysis</h5>
          </a>
          <p class="time">23 min</p>
          <ul class="items">
            <li class="tags">Power Platform</li>
            <li class="tags">Data Analyst</li>
            <li class="tags">Intermediate</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>
      <!--end of cards-->

    </div>
  </div>
  <a href="#">
    <p class="learning">See what others are learning ></p>
  </a>
  <div class="container">
    <h1 class="last-title">Our current favorites</h1>
    <div class="row">

      <!--favorites-->
      <!--card 1-->

      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">

        <div id="card-body-favorite" class="card-body">
          <img id="img-2" src="https://docs.microsoft.com/en-us/learn/achievements/azure-well-architected-introduction.svg">
          <h6 class="card-title-favorite">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Introduction to the Microsoft Azure Well-Architected Framework</h5>
          </a>
          <p class="time">8 Units</p>
          <ul class="items">
            <li class="tags">Beginner</li>
            <li class="tags">Solutions Architect </li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>

      <!--card 2-->
      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">

        <div class="card-body">
          <img id="img-2" src="https://docs.microsoft.com/en-us/learn/achievements/static-apps-gatsby.svg">
          <h6 class="card-title-favorite">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Create and publish a static web app with Gatsby and Azure Static Web Apps</h5>
          </a>
          <p class="time">9 Units</p>
          <ul class="items">
            <li class="tags">Beginner</li>
            <li class="tags">Developer</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>


      <!--card 3-->

      <div class="cards col-sm-12 col-md-8 col-lg-3 ms-depth-8">

        <div class="card-body">
          <img id="img-2" src="https://docs.microsoft.com/en-us/learn/achievements/github/github-actions-automate-tasks.svg">
          <h6 class="card-title-favorite">MODULE</h6>
          <a href="#">
            <h5 class="main-title">Automate development tasks by using GitHub Actions</h5>
          </a>
          <p class="time">5 Units</p>
          <ul class="items">
            <li class="tags">Beginner</li>
            <li class="tags">DevOps Engineer</li>
          </ul>
          <div class="card-footer text-muted">

            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>

          </div>
        </div>
      </div>

      <!--end of cards-->
    </div>
  </div>
  <div class="background-image-1">
    <img src="https://docs.microsoft.com/en-us/media/learn/home/mascot-cloud.png?branch=master">
  </div>

  <div class="background-image-2">

    <img src="https://docs.microsoft.com/en-us/media/learn/home/mascot-doc.png?branch=master">
  </div>


  <!--footer-->





  <footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Content -->

        <a id="lang" href="#"><i class="fa fa-globe" aria-hidden="true"></i>English (United States</a>
        <a id="theme" href="#"><i class="fa fa-sun-o" aria-hidden="true"></i>Theme</a>
        <a id="previous-version" href="#">Previous Version</a>
        <a id="doc" href="#">Docs</a>
        <a id="blog" href="#">Blog</a>
        <a id="cont" href="#">Contribute</a>
        <a id="privacy" href="#">Privacy & Cookies</a>
        <a id="use" href="#">Terms of Use</a>
        <a id="feedback" href="#">Site Feedback</a>
        <a id="trademarks" href="#">Trademarks</a>


      </div>



      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© Microsoft 2020</div>
      <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</script>

</html>