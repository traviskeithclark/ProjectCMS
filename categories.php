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
                       
                        <div class="col-xs-6">
<?php
                        if(isset($_POST['submit']))
{
 $cat_title = $_POST['cat_title'];
 if($cat_title == "" || empty($cat_title)) {
    echo "This field cannot be empty";

 } else {
     $sql = "INSERT INTO catagories(cat_title)";
     $sql .= "VALUE ('{$cat_title}')"; 
     $create_catagory_sql = mysqli_query($conn, $sql);
    if($create_catagory_sql) {
        die("Query Failed" . mysqli_error($conn)); 
    }
}
}

?>

                            <form action="" method="post">
                            <div class="form-group">  
                                <label for="cat-title"> Add Catagory </label> <br>
                                <input type="text" class="form control" name="cat_title">
                            </div>     
                            <div class="form-group">  
                                <input class= "btn btn-primary" type="submit" name="submit" value="Add Catagory">
                            </div>     
                            </form>
                    </div>
                </div>
                <!-- Add Category Form -->
                <div class="col-xs-6">
<


                <table class="table-hover">   
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
<?php 

$sql = "SELECT * FROM catagories";
$select_catagories = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($select_catagories)){
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo "<td><a href='catagories.php?delete={$cat_id}'>Delete</a></td>";
echo "</tr>"; 
}
?>


<?php

if(isset($_GET['delete'])) {

    $get_cat_id = $_GET['delete'];
    $sql = "DELETE FROM catagories WHERE cat_id = {$get_cat_id} ";
        $delete_query = mysqli_query($conn, $sql); 
}
                           
      ?>                      
       </tr>
                        </tbody>

                                
                    </table>
                </div>
                
                
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
        <?php include "includes/admin_footer.php" ?>
