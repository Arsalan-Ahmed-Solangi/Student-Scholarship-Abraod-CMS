
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
                        <h2 class="mt-1">Add New University</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-institution"></i> Add New University</li>
                            <!-- <li class="breadcrumb-item active"><a href="view_admins" class="text-dark"> View Site Admins </a></li> -->
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/university.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-2 mt-2">
                                        <label>University Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" placeholder="E.g " class="form-control" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>Country<span class="text-danger">*</span></label>
                                        <input type="text" name="country" placeholder="E.g Pakistan" class="form-control" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>City/Town<span class="text-danger">*</span></label>
                                        <input type="text" name="city" placeholder="E.g Karachi" class="form-control" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>Address<span class="text-danger">*</span></label>
                                        <textarea name="address" class="form-control" required placeholder="Enter university address"></textarea>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>University Detail Description<span class="text-danger">*</span></label>
                                        <textarea name="details" class="form-control" required placeholder="Enter university detail description"></textarea>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>University Image<span class="text-danger">*</span></label>
                                        <input type="file" name="image" accept="image/*" class="form-control" required />
                                            <span class="form-text text-success">please select institute image cover picture</span>
                                    </div>

                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger btn-sm" name="addUniversity">Add University</button>
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