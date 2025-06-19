    <?php
    if (isset($_SESSION['auth']) == 1) {
        header('Location: /home');
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

        <!-- Viewport (needed for all frameworks) -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta charset="UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
    </head>
    <body>
