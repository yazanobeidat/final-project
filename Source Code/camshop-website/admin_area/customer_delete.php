

<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


if(isset($_POST['id'])){


if(isset($_GET['customer_delete'])){

$delete_id = $_GET['customer_delete'];

$delete_cat = "delete from users where user_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_cat);

if($run_delete){

echo "<script> alert('One Category Has Been Deleted') </script>";

echo "<script>window.open('index.php?view_customers','_self')</script>";

}

}
    }}





?>

   <div class="wrapper">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <h2 class="mt-5 mb-3">Delete Record</h2>
                   <form action="" method="post">
                       <div class="alert alert-danger">
                           <input type="hidden" name="id" value="<?php echo trim($_GET["customer_delete"]); ?>"/>
                           <p>Are you sure you want to delete this record?</p>
                           <p>
                               <input type="submit" value="Yes" class="btn btn-danger">
                               <a href="index.php?view_customers" class="btn btn-secondary">No</a>
                           </p>
                       </div>
                   </form>
               </div>
           </div>        
       </div>
   </div>

