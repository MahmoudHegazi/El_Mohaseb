<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php';?>
<!-- <?php include "search.php"; ?> -->

    <div class="wrap">

      
      <!-- END header -->

     
      <!-- END section -->

	  
      <section class="site-section py-sm">
<!-- 	  

<?php // if (isset($_GET['search'])) { myFunction();} else {echo "";};?> 
<script> 
const check_error = document.getElementById("myerror");
if (check_error !== null) {
	let hider = setTimeout(function() {check_error.style.display = "none";}, 3000 );

}
</script>
-->  
	   

        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <?php include 'includes/search_post.php'; ?>
              </div>



              

              

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form method="post" action="nsearch.php?path=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="search-form" name="searchs">
                  <div class="form-group">
                    <!-- <span class="icon fa fa-search"></span> -->
					<span id="searchButton" class="icon fa fa-search" style="cursor: pointer;" onclick="document.forms['searchs'].submit();"></span>
                    
                   <input type="text" name="search" class="form-control" id="s" placeholder="search and hit enter">

                  </div>
                   
                </form>
              </div>
              <!-- END sidebar-box -->
 
              <!-- END sidebar-box -->  
              <?php include 'includes/sidebar.php'; ?>
              <!-- END sidebar-box -->
            <?php include 'includes/category.php'; ?>
              
              <!-- END sidebar-box -->
            <?php include 'includes/tags.php'; ?>  
             
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    
      
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>