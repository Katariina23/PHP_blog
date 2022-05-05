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