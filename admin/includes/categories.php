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
                            Tere tulemast!
                            <small>Autor</small>
                        </h1>
                    
                        <div class="col-xs-6">
            <form actions="">
               <div class="form-group">

                 <label for="cat-title">Lisa kategooria</label>
                <input type="text" class="form-control" name="cat_title">

               </div>
               <div class="form-group">

              <input class="btn btn-primary" type="submit" name="submit" value="Lisa kategooria">
               
               </div>

            </form>

                        </div>
                            
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
                
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php" ?>
        