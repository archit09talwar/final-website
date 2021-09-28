
    <body>
<?php
include("index.php");
 $conn   =mysqli_connect("localhost","root","");
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

<form method="post" enctype="multipart/form-data" action="edit.php?edit_form=<?php echo $edit_id1 ?>" style="width:70%;position:absolute;top:200px;right:100">
<table class="table table-bordered table-responsive">
    <tr>
    <Td colspan=2><center>Edit Post</center></Td>
    </tr>            
    <tr>
                    <td><label>Title</label></td>
                    <td><input type="text" class="form-control" name="title1" placeholder="Enter Title" value="<?php echo $title ?>">
                    </td>
                </tr>

                <tr>
                    <td><label>Price</label></td>
                    <td><input type="text" class="form-control" name="price" placeholder="Enter Price" value="<?php echo $price ?>">
                    </td>
                </tr>
                <tr>
                    <td><label>Image</label></td>
                    <td><input type="file" class="form-control" name="image"><img src="../images/<?php echo $image ?>" width='50px'>
                    </td>
                </tr>
                <tr>
                    <td><label>Content</label></td>
                    <td>
                        <input type="text" class="form-control" name="title2" placeholder="Enter Title" value="<?php echo $content ?>">
                        
                </tr>
                <tr>
                <tr>
                    <td colspan=2 style="text-align:center;"><input type="submit" name="update" value="Update Now" style="border:none;background-color:#ffd56b;padding:5px 16px;" />

                    </td>
                </tr>
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
