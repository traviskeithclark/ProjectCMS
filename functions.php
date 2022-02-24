<?php

function confirm($result) {
    global $conn; 
    
    if(!$result) {

        die("query failed ." . mysqli_error($conn));

}
}
function insert_categories() {

    global $conn;

    if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];
        if($cat_title == "" || empty($cat_title)) {
           echo "This field cannot be empty";
       
        } else {
            $sql = "INSERT INTO catagories(cat_title)";
            $sql .= "VALUE ('{$cat_title}') "; 
            $create_catagory_sql = mysqli_query($conn, $sql);
           if(!$create_catagory_sql) {
               die("Query Failed" . mysqli_error($conn)); 
           }
       }
       }




}

function findAllCategories() {
global $conn; 

$sql = "SELECT * FROM catagories";
$select_catagories = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($select_catagories)){
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo "<td><a href='categories.php?delete= ".$cat_id."'>Delete</a></td>";
echo "<td><a href='categories.php?edit= ".$cat_id."'>Edit</a></td>";
echo "</tr>"; 
}

}


function deleteCategories() {
global $conn;
    if(isset($_GET['delete'])) {

        $get_cat_id = $_GET['delete'];
        $sql = "DELETE FROM catagories WHERE cat_id = {$get_cat_id} ";
        $delete_query = mysqli_query($conn, $sql); 
        header("Location: categories.php");
    }




}







?>