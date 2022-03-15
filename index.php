<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/database_connect.php';?>    
<?php
    $query="SELECT * FROM university";
    
?>
<!--Start container-->
  <div class="container mt-5">
      <div class="row">
        <?php

        if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
            ?>
        <!--start card-->
           <div class="col-md-4">
              <div class="card mt-3" style="background: #ced4da;">
                     <div class="product-1 algin-items-center p-2 text-center">
                      <a class="btn" href="classes.php?id=<?php echo $row['university_id'];?>">
                       <img src="users/uploads/<?php echo $row['image'];?>" width="160" height="200">
                     </a>
                       <h5><a class="btn" href="classes.php?id=<?php echo $row['university_id'];?>"><?php echo $row['university_name'];?>
                     </a>
                     </h5>
                     </div>
              </div>
           </div>
           <!--End card-->
<?php
          }
        }
        else{
          echo "No Record Found";
        }
        ?>
      </div>
  </div>
<!--Start container-->

</br>
</br>
<?php include 'includes/footer.php';?>
<?php include 'includes/database_close.php';?> 