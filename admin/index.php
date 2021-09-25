<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- copied code starts here -->
    <div class="row">
        <!-- sidebar starts here -->
        <div class="col-3 sidebar">
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: auto;height: 98vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="ms-4 fs-4 sidebar-heading">Manage Content</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="" class="nav-link text-white" aria-current="page">
               
                Admin Logout
                </a>
            </li>
            <li>
                <a href="index.php?view=<?php echo "view" ?>" class="nav-link text-white">
                
                View Posts
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                
                Insert new posts
                </a>
            </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                
                <li><a class="dropdown-item" href="#">view-post</a></li>
                <li><a class="dropdown-item" href="#">Insert new posts</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            </div>
        </div>
        </div>
        <!-- sidebar ends here -->
        <!-- admin panel starts here -->
        <div class="col-9 main-content bg-light">
            <h1 class="m-3 bg-success heading">Admin panel</h1>


            <!-- here the copied content start -->
            <div class="right table-responsive">
              <?php
              if(isset($_GET['insert']))
              {
                  include("insert_product.php");
              }
              if(isset($_GET['view']))
                {?>
                  <table class="table .table-bordered">
    <thead>
      <tr>
        <th>Product Number</th>
        <th>Product Title</th>
        <th>Product Date</th>
        <th>Product Price</th>
        <th>Product Content</th>
        <th>Product Image</th>
          <th>Edit</th>
          <th>Delete</th>
          
      </tr>
    </thead>
                 <?php
                 $conn   =mysqli_connect("localhost","root","");
                mysqli_select_db($conn,"burger");
                $query="select * from productnew order by 1 DESC";
         $run=mysqli_query($conn, $query);
                      $i=0;
                    while($row = mysqli_fetch_assoc($run))
                    {
                        $i++;
                 $title=$row['P_Title1'];
                        $id=$row['P_Id'];
                 $date=$row['P_Date'];
                 $price=$row['P_Price'];
                 $content=substr($row['P_Title2'],0,100);
                 $image=$row['P_Image'];
                ?>
             
    <tbody>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $title ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $price ?></td>
        <td><?php echo $content ?></td>
        <td><img src= "../images/<?php echo $image ?>" width='50px'></td>
          <td><a href="edit.php?edit=<?php  echo $id ?>   ">Edit</a></td>
          <td><a href="delete.php?del=<?php echo $id ?>">Delete</a></td>
    
        </tr>
    </tbody>
 
                    
                <?php
                    }}
                ?>
                       </table>
            </div>

            <!-- here the copied content ends -->


            
        </div>
        <!-- admin panel ends here -->
    </div>
    <!-- copied code ends here -->


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    
  </body>
</html>