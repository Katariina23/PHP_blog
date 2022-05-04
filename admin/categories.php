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
                  
                        <?php insert_categories();?> 

                   
            <form actions="" method="post">
               <div class="form-group">

                 <label for="cat-title">Lisa kategooria</label>
                <input type="text" class="form-control" name="cat_title">

               </div>
               <div class="form-group">

              <input class="btn btn-primary" type="submit" name="submit" value="Lisa kategooria">
               
               </div>


            </form>


<?php //UPDATE AND INCLUDE QUERY

if(isset($_GET['edit'])) {
$cat_id = $_GET['edit']; 
include "includes/update_categories.php";

}


?>

                        </div>
                            
                        <div class="col-xs-6">
                                                       
                                           <table class="table table-bordered table-hover">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Kategooria nimetus</th>
                           </tr>
                       </thead>
                       <tbody>
                       
                       
<?php findAllCategories();?>
 
<?php deletecategories();?>
                       
                       </tbody>
                   </table>
                       
                   
                    </div>
                   
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
                       
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php" ?>