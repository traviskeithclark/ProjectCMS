<?php "includes/admin_navigation.php" ?>
<?php include "includes/admin_header.php" ?>
    <div id="wrapper">

   <!-- Navigation -->
 
   <?php include "includes/admin_navigation.php" ?>
   
        <div id="page-wrapper">
            <div class="container-fluid">


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">
                            Welcome to the Admin page
                            <small>Travis Clark</small>
                        </h1>
<?php 

if(isset($_GET['source'])){

$source = $_GET['source'];

} else {


$source = ''; 

}

switch($source)  {

    
    case 'add_post'; 
        include "includes/add_post.php";
    break; 

    case '100'; 
    echo "NICE 100";
    break; 

    case '200'; 
    echo "NICE 200";
    break; 
    
    default:

    include "includes/view_all_posts.php";

    break;



}



?>
         
                 </div>
                
                
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
        <?php include "includes/admin_footer.php" ?>
