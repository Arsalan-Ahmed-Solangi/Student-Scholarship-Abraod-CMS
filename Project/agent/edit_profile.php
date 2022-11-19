
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

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="p-3"><?php require_once("includes/messages.php") ?></div>
                        <h2 class="mt-1">Edit Profile</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-key"></i> Edit Profile</li>
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                              
                                <form id="form" action="classes/edit_profile.php" method="POST">
                                    <div class="form-group mb-2 mt-2">
                                        <input type="hidden" name="id" value="<?php echo $_SESSION['agent']['agent_id'] ?>"/>
                                        <label>Full Name<span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['agent']['name'] ?>" placeholder="Enter Your Name.." required/>
                                    </div>

                                
                                    <div class="form-group mb-2 mt-2">
                                        <label>Phone No  <span class="text-danger">*</span></label>
                                        <input type="number" name="phone_no" class="form-control" placeholder="Enter your phone no" value="<?php echo $_SESSION['agent']['phone_no'] ?>" required/>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Gender <span class="text-danger">*</span></label>
                                                <select name="gender" required class="form-select">
                                                    <option value="">Select Gender</option>
                                                    <option <?=$_SESSION['agent']['gender'] == 'Male' ? ' selected="selected"' : '';?>  value="Male">Male</option>
                                                    <option  <?=$_SESSION['agent']['gender'] == 'Female' ? ' selected="selected"' : '';?> value="Female">Female</option>
                                                    <option  <?=$_SESSION['agent']['gender'] == 'Other' ? ' selected="selected"' : '';?> value="Other">Other</option>
                                                </select>
                                            </div>

                                        </div>

                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger" name="edit_profile">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       