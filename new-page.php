<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="new-page.css">
    <title>New Page</title>
  </head>
  <body>
    <?php
        include("includes/navbar.php");
    ?>

    <div class="container top-margin">
        <div class="main-box p-4 container-fluid">
            <div class="row">
                <div class="col-md-4 p-4">
                    <img src="./images/2.jpg" width="100%" height="auto" class="my-5" alt="div-img">
                </div>
                <div class="col-md-4">
                    <h3>Vegetables</h3>
                    <p class="Price-heading">Price : $38</p>
                    <p class="div-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, repudiandae nesciunt nihil culpa magnam voluptate.</p>
                    <p class="div-date">This was updated on : 09/10/2020</p>
                    <form action="new-page.php" method="post">
                        <input type="radio"  name="weight" id="1kg" value="1"><label for="1kg"><span class="radio-txt">1 KG</span></label>
                        <input type="radio"  name="weight" id="1.5kg" value="1.5"><label for="1.5kg"><span class="radio-txt">1.5 KG</span></label>
                        <input type="radio"  name="weight" id="2kg" value="2"><label for="2kg"><span class="radio-txt">2 KG</span></label>
                    </form>
                    <button class="btn btn-lg btn-success mt-3 me-4">Add to card</button>
                    <button class="btn btn-lg mt-3 btn-dark">Buy now</button>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-3">
                            <img src="./images/images.png" alt="" width="100%" height="auto" style="border-radius: 40px;">
                        </div>
                        <div class="col-9">
                            <p>100% assured products</p>
                            <p>100% assured products</p>
                        </div>
                    </div>
                    <div class="row my-4 small-divs">
                        <div class="col-6 s-box">
                            <div class="container-fluid bg-danger text-center k">Safe and hygenic</div>
                        </div>
                        <div class="col-6 s-box">
                            <div class="container-fluid bg-success text-center k">Delivery in 600 cities</div>
                        </div>
                    </div>
                    <div class="row my-4 small-divs">
                        <div class="col-6 s-box">
                            <div class="container-fluid bg-warning text-center k">Trusted by Millions</div>
                        </div>
                        <div class="col-6 s-box">
                            <div class="container-fluid bg-dark text-center k">Service at 6000 pincodes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer starts here -->
    <div class="footer text-center py-2 bg-danger fixed-bottom container-fluid">
        <p>This website is created by Archit Talwar</p>
    </div>
    <!-- footer ends here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>