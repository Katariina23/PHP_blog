<?php 

if(isset($_POST['create_post'])) {

$post_title = $_POST['title'];
$post_author = $_POST['author'];
$post_category_id = $_POST['post_category_id'];
$post_status = $_POST['post_status'];

$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];

$post_tags = $_POST['post_tags'];
$post_content = $_POST['post_content'];
$post_date = date ('d-m-y');
$post_comment_count = 4;

move_uploaded_file($post_image_temp, "../images/$post_image");

$query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status)";

$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_comment_count}', '{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

confirm($create_post_query);





}


?>

<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Postituse pealkiri</label>
            <input type="text" class="form-control" name="title" />
          </div>
         
          <div class="form-group">
            <label for="post_category">Postituse kategooria ID</label>
            <input type="text" class="form-control" name="post_category_id" />
          </div>
         
          <div class="form-group">
            <label for="title">Postituse autor</label>
            <input type="text" class="form-control" name="author" />
          </div>
         
          <div class="form-group">
            <label for="post_status">Postituse staatus</label>
            <input type="text" class="form-control" name="post_status" />
          </div>
         
          <div class="form-group">
            <label for="post_image">Postituse pilt</label>
            <input type="file" name="image" />
          </div>
         
          <div class="form-group">
            <label for="post_tags">Postituse võtmesõnad</label>
            <input type="text" class="form-control" name="post_tags" />
          </div>
         
          <div class="form-group">
            <label for="post_content">Postituse sisu</label>
              <textarea class="form-control" name="post_content" id="" rows="10" cols="30"></textarea>
            </div>
         
            <div class="form-group">
              <input class="btn btn-primary" type="submit" name="create_post" value="Postita">
            </div>
        </form>