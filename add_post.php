<?php

if(isset($_POST['create_post'])){

   
    $post_author = $_POST['post_author'];
    $post_title = $_POST['post_title'];
    $post_catagory_id = $_POST['post_catagory_id'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_comment_count = 0;
    $post_date = date('d-m-y');
    $post_content = $_POST['post_content'];

  move_uploaded_file($post_image_temp, "../images/$post_image");

$sql = "INSERT INTO posts(post_catagory_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
$sql .= "VALUES ({$post_catagory_id}, '{$post_title}', '{$post_author}', now() '{$post_date}', '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}' ) ";


$create_post_query = mysqli_query($conn, $sql);

confirm($create_post_query);

}




?>


<form action="" method="post" enctype="multipart/form-data">

    
<div class="form-group"> 
      <label for="post_title">Post Title</label>
      <input type="text" class="form-control" name="post_title">
    </div> 

    <div class="form-group"> 
      <label for="post_catagory">Post Catagory Id</label>
      <input type="text" class="form-control" name="post_catagory_id">
    </div> 
    
    <div class="form-group"> 
      <label for="post_author">Post Author</label>
      <input type="text" class="form-control" name="post_author">
    </div> 

    <div class="form-group"> 
      <label for="post_status">Post Status</label>
      <input type="text" class="form-control" name="post_status">
    </div> 

    <div class="form-group"> 
      <label for="post_image">Post Image</label>
      <input type="file"  name="image">
    </div> 

    <div class="form-group"> 
      <label for="post_tags">Post Tags</label>
      <input type="text" class="form-control" name="post_tags">
    </div> 

    <div class="form-group"> 
      <label for="post_content">Post Content</label>
      <input type="text" class="form-control" name="post_content">
    </div> 

    <div class="form-group"> 
      <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
</div>
</form>