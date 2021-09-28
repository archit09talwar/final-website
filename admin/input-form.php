        <div class="container-inputform p-4 ms-auto me-auto" style="border-radius:25px;width:450px;margin-top:10vh;background-color:">
        <div class="container main-box">
        <div class="row">
                <h1 class="text-center" style="color:#00203FFF">INSERT POST</h1>
                <!-- FORM STARTS HERE -->   
                <div class="col-md-12 col-lg-12">
                    <form class="needs-validation" method="post" enctype="multipart/form-data">
                      <div class="row g-3">
                        <div class="col-sm-12">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" name="title1" class="form-control" id="title" placeholder="Enter TITLE" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>    
    
                        <div class="col-12">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Enter PRICE" required="">
                            <div class="invalid-feedback">
                              Please enter your date and time valid.
                            </div>
                        </div >
    
                        <div class="col-12">
                          <label for="Image" class="form-label">Image</label>
                          <input type="file" class="form-control" name="image" id="Image" required="">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="Content" class="form-label">Content</label>
                          <input type="text" class="form-control" name="title2" id="Content" placeholder="Select the content" required="">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>
            
                      <button class="btn btn-outline-dark btn-lg" name="submit" type="submit">Submit Enquiry</button>
                    </form>
                  </div>
                <!-- FORM ENDS HERE -->

        </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



<?php



  $connection = mysqli_connect("localhost","root","","burger");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    
    if(isset($_POST['submit']))
{
    $title1=$_POST['title1'];
$price=$_POST['price'];
    $title2=$_POST['title2'];
 $date = date('Y-m-d H:i:s');

   $image_name=$_FILES['image']['name'];
			 	 $image_type=$_FILES['image']['type'];
			 $image_size=$_FILES['image']['size'];
			 $image_tmp=$_FILES['image']['tmp_name'];
			
			 if ($title1 =="" or $price=="" or $title2==""){
				 echo "<script>alert('any field is empty')</script>";
				 exit();
			 
}
if($image_type == "image/jpeg" or $image_type == "image/png" or $image_type == "image/gif"){

if($image_size<=200000) {
	move_uploaded_file($image_tmp,"images/$image_name");
   
}
else
{
	echo "<script>alert('Image is Larger,only 50kb size is allowed')</script>";

}
}
else{
	echo"<script>alert('Image type is invalid')</script>";  
}
     echo "reached";   
        
 $query="insert into productnew(P_Title1,P_Price,P_Date,P_Image,P_Title2)
value ('$title1','$price','$date','$image_name','$title2')";
    if(mysqli_query($connection,$query)){
	echo"<center><h1>Post has been published</h1></center>";
  echo "New record created successfully";
      //
     }
    //  else{
    //   echo "<script>alert('not Working')</script>"
    //  }
     // $conn->exec($sql);
 
     /*  if(mysqli_query($connection,$query)){
	echo"<script>window.open('index.php?,'_self')</script>";*/



  
     }
?>