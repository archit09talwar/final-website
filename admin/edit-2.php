
    <body>
<?php
include("index.php");
 $conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"burger");
$edit_id=@$_GET['edit'];
         $query="select * from productnew where P_Id='$edit_id'";
         $run=mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($run)) {
    
                 $title=$row['P_Title1'];
                 $date=$row['P_Date'];
                 $price=$row['P_Price'];
                 $content=$row['P_Title2'];
                 $image=$row['P_Image'];
                 $edit_id1=$row['P_Id'];
             
    ?>

<div class="container-inputform p-4 ms-auto me-auto" style="border-radius:25px;width:450px;margin-top:10vh;">
        <div class="container main-box">
        <div class="row">
                <h1 class="text-center" style="color:#00203FFF">INSERT POST</h1>
                <!-- FORM STARTS HERE -->   
                <div class="col-md-12 col-lg-12">
                    <form class="needs-validation" method="post" enctype="multipart/form-data" action="edit.php?edit_form=<?php echo $edit_id1 ?>">
                      <div class="row g-3">
                        <div class="col-sm-12">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" name="title1" class="form-control" id="title" placeholder="Enter TITLE" value="<?php echo $title?>" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>    
    
                        <div class="col-12">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Enter PRICE" value="<?php echo $price ?>" required="">
                            <div class="invalid-feedback">
                              Please enter your date and time valid.
                            </div>
                        </div >
    
                        <div class="col-9">
                          <label for="Image" class="form-label">Image</label>
                          <input type="file" class="form-control" name="image" id="Image">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>
                        <div class="col-3">
                          <img src="../images/<?php echo $image?>" alt="image entered" width="60px" height="60px" srcset="">
                        </div>

                        <div class="col-12">
                          <label for="Content" class="form-label">Content</label>
                          <input type="text" class="form-control" name="title2" id="Content" placeholder="Select the content" value="<?php echo $content ?>" required="">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>
            
                        <input type="submit" name="update" value="Update Now" style="border:none;background-color:#ffd56b;padding:5px 16px;" />
                        </form>
                  </div>
                <!-- FORM ENDS HERE -->

        </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


// here is the old php page starts again
  <?php
     }
?>
</table>
            </form>
       
    </body>
<?php
if(isset($_POST['update']))
{
 
   $conn   =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"burger"); 
echo $update_id=$_GET['edit_form'];
    $title1=$_POST['title1'];
    $price=$_POST['price'];
    $title2=$_POST['title2'];
    $date = date('Y-m-d H:i:s');
   $image_name=$_FILES['image']['name'];
			 	 $image_type=$_FILES['image']['type'];
			 $image_size=$_FILES['image']['size'];
			 $image_tmp=$_FILES['image']['tmp_name'];
			 
			 if ($title1 =="" or $price=="" or $cont=""){
				 echo "<script>alert('any field is empty')</script>";
				 exit();
			 
}
if($image_type == "image/jpeg" or $image_type == "image/png" or $image_type == "image/gif"){

if($image_size<=200000) {
	move_uploaded_file($image_tmp,"../images/$image_name");
   
}
else
{
	echo "<script>alert('Image is Larger,only 50kb size is allowed')</script>";
exit();
}
}
else{
	echo"<script>alert('Image type is invalid')</script>";  
    exit();
}

 $update_query="update productnew set P_Title1='$title1', P_Price='$price',P_Title2='$title2',P_Date='$date',P_Image='$image_name' where P_Id='$update_id'";  
    if(mysqli_query($conn, $update_query))
    {
        echo "<script>
        alert('post has been updated');
        </script>";
        echo "<script>window.open('index.php?view','_self')</script>";
    }
    else{
        echo "<script>
        alert('srcipt not working');
        </script>";
    }
    
}
?>
