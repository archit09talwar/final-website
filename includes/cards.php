<div class="row section" id="section-3">
<h3 class="text-center">Items Available</h3> 
<div class="row row-cols-1 row-cols-md-3 g-4">     
<?php
    $conn   =mysqli_connect("localhost","root","","burger");

         $query="select * from productnew";
          $run=mysqli_query($conn, $query);
         if (mysqli_num_rows($run) > 0)
         {
  // output data of each row
             while($row = mysqli_fetch_assoc($run)) {
   
                 $title=$row['P_Title1'];
                 $date=$row['P_Date'];
                 $price=$row['P_Price'];
                 $content=substr($row['P_Title2'],0,100);
                 $image=$row['P_Image'];
                 $id=$row['P_Id'];
             
  ?>

<div class="col">
                <div class="card h-100">
                  <img src="./images/<?php echo $image ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $title ?> </h5>
                    <p class="card-text text-center"><?php echo $content ?></p>
                  </div>
                  <div class="card-footer pricing text-center">
                    <span class="pricing-text">$<?php echo $price ?></span>
                  </div>
                  <div class="card-footer order-btn-container">
                    <a href="new-page.php?id=<?php echo $id ?>"><button class="btn m-2 btn-lg btn-outline-danger">Order-now</button></a>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated <?php echo $date ?></small>
                  </div>
                </div>
              </div>



    <?php }
         }
        ?>
        </div>

          </div>