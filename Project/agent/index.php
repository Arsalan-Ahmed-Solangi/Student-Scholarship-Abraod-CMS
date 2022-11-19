
   <!-- Start of Header -->
   <?php  include_once("includes/header.php"); ?>
   <!-- End of Header -->
   
   
    <!-- Start of Nav -->
    <?php  include_once("includes/nav.php"); ?>
    <!-- End of Nav -->

    <!-- Start of Main Content -->
    <div id="layoutSidenav">
            
            <!-- Start of Sidebar -->
            <?php include_once("includes/sidebar.php") ?>
            <!-- End of Sidebar -->


            <!-- Start of Counts -->

            <!-- End of Counts -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="p-3"><?php require_once("includes/messages.php") ?></div>
                        <h3 class="mt-1">Dashboard</h3>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-user"></i> Profile Details</li>
                        </ol>
                        <div class="row">
                           <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <img  class="img img-thumbnail img-fluid" style="width:70%; height: 300px;object-fit:cover" src="<?php echo substr($_SESSION['agent']['profile'],3); ?>"/>
                            
                           </div>
                           <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">

                              <div class="card shadow-sm bg-white p-2">
                                <h6>Full Name : <?php echo $_SESSION['agent']['name'] ?> </h6>
                              </div>

                              <div class="card shadow-sm bg-white p-2">
                                <h6>Email : <?php echo $_SESSION['agent']['email'] ?> </h6>
                              </div>

                              <div class="card shadow-sm bg-white p-2">
                                <h6>Phone No : <?php echo $_SESSION['agent']['phone_no'] ?> </h6>
                              </div>

                              <div class="card shadow-sm bg-white p-2">
                                <h6>CNIC : <?php echo $_SESSION['agent']['cnic'] ?> </h6>
                              </div>

                              <a href="edit_profile" class="btn btn-sm btn-danger offset-md-10 mt-2"><i class="fa fa-edit"></i> Edit Profile</a>

                           </div>
                        </div>
                     

                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       