<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>

   <?= $this->element('MyNav'); ?>
    
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">A simple Books Layout</h1>
        <p class="lead">This is a modified my default layout</p>
      </div>
    </div>
    
    <?= $this->fetch('content') ?>

    <footer class="bg-dark mt-3 text-light p-4 text-center">
        footer
    </footer>
  
  </body>
</html>