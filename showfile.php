<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/database_connect.php';?>    
<?php
if (isset($_GET['id'])) {
  $id=$_GET['id'];
    $query="SELECT * FROM files WHERE files_id=".$id;
    
?>
<!--Start container-->
  <div class="container mb5- mt-5">
      <div class="row">
        <?php

        if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
            ?>
        <!--start image-->
           <div class="col-md-4">
              <div class="mt-3" >
                     <div class="product-1 algin-items-center p-2 text-center">
                       <img src="src/logo.png" width="160" height="160">
                     </div>
                     <!---botton for card-->
                        <div class="p-3 shoe text-center text-white mt-3 cursar1">
                          <span class="text-uppercase"><a class="btn" href="users/uploads/<?php echo $row['files_data'];?>" download="<?php echo $row['files_data'];?>">تحميل</a></span>
                        </div>
                     <!---botton for card   -->
              </div>
           </div>
           <!--End image-->
           <!--start informations-->
           <div class="col-lg-8">
              <div class="mt-3">
                     <div class="product-1 algin-items-right p-2 text-right">
                       <h5><?php echo $row['files_name'];?></h5>
                       <!--card Informations-->
                       <div class="mr-3 info">
                         <span class="text1 d-block"><?php echo $row['files_information'];?></span>
                       </div>
                     
              </div>
           </div>
           <!--End informations-->
<?php
          }
        }
        else{
          echo "No Record Found";
        }
        }

        ?>
      </div>
  </div>
<!--Start container-->

</br>
</br>
<?php include 'includes/footer.php';?>
<?php include 'includes/database_close.php';?> 