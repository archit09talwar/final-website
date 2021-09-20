<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- google fonts links starts here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@100&family=Oswald:wght@200&family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- google font links ends here -->
    <!-- favicon starts here -->
    <link rel="shortcut icon" href="./images/la-burger-logo.png" type="image/x-icon">
    <!-- favicons ends here -->
    <!-- animation file starts here -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- animation file ends here -->
<title>La Burger!</title>
  </head>
  <body>

    <!-- NAVBAR starts here -->
    <div class="php-navbar">
        <?php
        include("includes/navbar.php");         
        ?>
    </div>
      <!-- NAVBAR ends here -->
      

      <!-- jombotron starts here -->
      <div class="php-jumbotron">
      <?php include("includes/jumbotron.php"); ?>
      </div>
      <!-- jumbotron ends here -->

      <div class="blur-container">
        <!-- main website starts here --> 
        <div class="container full-container p-5 bg-light">


          <!-- SECTION 1 starts here -->
          <div class="php-section-1">
            <?php
              include("includes/section-1.php");
            ?>
          </div>
            <!-- SECTION 1 ends here -->


          <hr>


            <!-- SECTION 2 starts here -->
            <div class="php-section-1">
          <?php
          include("includes/section-2.php");
          ?>
          </div>
          <!-- SECTION 2 ends here -->

          <hr>


          <!-- SECTION 3 starts here -->
          <div class="php-section-3">
          <?php
          include("includes/section-3.php")
          ?>
          </div>
          <!-- SECTION 3 ends here -->
        

          <hr>


          <!-- CONTACTS section starts here -->
          <div class="php-contacts">
          <?php
          include("includes/contacts.php")
          ?>
          </div>
          <!-- CONTACTS section ends here -->


        <!-- main website ends here -->
        </div>
      </div>
      <!-- Website container ends here -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>