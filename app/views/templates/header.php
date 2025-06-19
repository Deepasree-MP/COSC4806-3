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

          <!-- Responsive Navbar Style -->
          <style>
            .text-xl { font-size: 1.25rem; }
            .font-bold { font-weight: bold; }
            .text-muted { color: #888; }
            .hidden { display: none; }
            .block { display: block; }
            .flex { display: flex; }
            .gap-3 { gap: 0.75rem; }
            .gap-4 { gap: 1rem; }
            .flex-col { flex-direction: column; }
            .flex-row { flex-direction: row; }
            .justify-between { justify-content: space-between; }
            .items-center { align-items: center; }
            .mt-2 { margin-top: 0.5rem; }
            .mt-0 { margin-top: 0; }

            @media (min-width: 768px) {
              .md\:flex { display: flex; }
              .md\:hidden { display: none; }
              .md\:flex-row { flex-direction: row; }
              .md\:mt-0 { margin-top: 0; }
              .md\:gap-4 { gap: 1rem; }
            }

            nav a:hover {
              text-decoration: underline;
            }

            .nav-toggle {
              background: none;
              border: none;
              font-size: 1.5rem;
              cursor: pointer;
            }
          </style>
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
          <nav class="bg-light border-bottom p-2">
            <div class="container flex justify-between items-center">
              <a href="/" class="text-xl font-bold text-dark">COSC 4806</a>

              <!-- Hamburger for small screens -->
              <button class="nav-toggle md:hidden" onclick="document.getElementById('nav-menu').classList.toggle('hidden')">
                ☰
              </button>

              <!-- Navigation links -->
              <ul id="nav-menu" class="flex flex-col md:flex md:flex-row gap-3 md:gap-4 mt-2 md:mt-0 hidden md:flex">
                <li><a href="/home" class="link">Home</a></li>
                <li><a href="/about" class="link">About Me</a></li>
                <li><a href="#" class="link">Dropdown</a></li>
                <li><a href="#" class="link text-muted">Disabled</a></li>
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
