
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
                        <h2 class="mt-1">Change Password</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-key"></i> Change Password</li>
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/change_password.php" method="POST">
                                    <div class="form-group mb-2 mt-2">
                                        <label>Old Password <span class="text-danger">*</span></label>
                                        <input type="password" name="old_password" class="form-control" placeholder="Enter old password here..." required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>New Password <span class="text-danger">*</span></label>
                                        <input minlength="6" name="new_password" type="password" class="form-control" placeholder="Enter new password here..." required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>Confirm your password <span class="text-danger">*</span></label>
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger" name="change_password">Update</button>
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