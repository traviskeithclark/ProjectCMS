<table class= "table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>   
                                    <th>Category</th>   
                                    <th>Status</th>   
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>    
                                </tr>
                            </thead>
                          
                        <tbody>
                        

<?php 

$sql = "SELECT * FROM posts";
$select_posts = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($select_posts)){
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_catagory_id = $row['post_catagory_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_date = $row['post_date'];

    echo "<tr>";
    echo "<td>$post_id</td>";
     echo "<td>$post_author</td>";
        echo "<td>$post_title</td>";
        echo "<td>$post_catagory_id</td>";
        echo "<td>$post_status</td>";
        echo "<td><img width= '50'src='../images/$post_image'></td>";
        echo "<td>$post_tags</td>";
        echo "<td>$post_comment_count</td>";
        echo "<td> $post_date</td>";



    echo "</tr>";


}


?>


                            <td>3</td>
                            <td>Travis </td>    
                            <td>Bootstrap framework</td>
                            <td>Bootstrap</td>
                            <td>status</td>
                            <td>image</td>
                            <td>tags</td>
                            <td>comments</td>
                            <td>date</td>
                        
                        </tbody>   
                        </table>