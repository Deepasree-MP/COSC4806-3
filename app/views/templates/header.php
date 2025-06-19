    <?php
    if (!isset($_SESSION['auth'])) {
        header('Location: /login');
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Bootstrap CDN -->
        <!--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
        -->

        <!-- Skeleton CDN -->
        <!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
        -->

        <!-- Pearl CSS CDN (Active) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pearlcss@1.0.2/dist/pearl.min.css">

        <!-- Viewport & Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
      </head>
      <body>

        <!-- Navbar for Skeleton CSS -->
        <!--
        <nav>
          <div class="container">
            <div class="row">
              <div class="twelve columns">
                <h4 style="margin-bottom: 0;"><a href="/">COSC 4806</a></h4>
                <ul style="list-style: none; padding: 0; margin-top: 10px;">
                  <li style="display: inline-block; margin-right: 15px;"><a href="/home">Home</a></li>
                  <li style="display: inline-block; margin-right: 15px;"><a href="/about">About Me</a></li>
                  <li style="display: inline-block; margin-right: 15px;"><a href="#">Dropdown</a></li>
                  <li style="display: inline-block; margin-right: 15px;"><a href="#" class="disabled">Disabled</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        -->

        <!-- Navbar for Pearl CSS (Active) -->
        <nav class="bg-light border-bottom py-2">
          <div class="container flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-dark">COSC 4806</a>

            <ul class="flex gap-4 m-0 list-none">
              <li><a href="/home" class="text-dark text-semibold hover-underline">Home</a></li>
              <li><a href="/about" class="text-dark text-semibold hover-underline">About Me</a></li>
              <li class="relative group">
                <a href="#" class="text-dark text-semibold hover-underline">Dropdown</a>
                <ul class="absolute hidden group-hover:block bg-white shadow-md mt-1 rounded p-2">
                  <li><a class="block px-3 py-1 hover-bg-light" href="#">Action</a></li>
                  <li><a class="block px-3 py-1 hover-bg-light" href="#">Another action</a></li>
                  <li class="border-t my-1"></li>
                  <li><a class="block px-3 py-1 hover-bg-light" href="#">Something else here</a></li>
                </ul>
              </li>
              <li><span class="text-muted">Disabled</span></li>
            </ul>
          </div>
        </nav>


        <!-- Navbar for Bootstrap -->
        <!--
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">COSC 4806</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About Me</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        -->
