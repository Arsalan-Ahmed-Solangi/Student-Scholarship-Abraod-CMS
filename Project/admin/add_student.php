
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
                        <h2 class="mt-1">Add Student Account</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add Student Account</li>
                            <!-- <li class="breadcrumb-item active"><a href="view_admins" class="text-dark"> View Site Admins </a></li> -->
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/student.php" method="POST" enctype="multipart/form-data">
                                    <p class="text-dark bg-light p-3">Please provide valid information about Agent </p>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input  type="text" name="name" placeholder="Enter name" class="form-control" required/>
                                               
                                             </div>

                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Surname <span class="text-danger">*</span></label>
                                                <input  type="text" name="surname" placeholder="Enter Surname" class="form-control" required/>
                                               
                                             </div>

                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>CNIC <span class="text-danger">*</span></label>
                                                <input type="text" name="cnic" placeholder="E.g 41500-0523234-9" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid cnic no with dashes</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Phone No <span class="text-danger">*</span></label>
                                                <input type="text" name="phone_no" placeholder="E.g 03000000000" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid phone no</span>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Gender <span class="text-danger">*</span></label>
                                                <select name="gender" required class="form-select">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Date of Birth <span class="text-danger">*</span></label>
                                                <input type="date" name="date" class="form-control" required/>
                                            
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Address <span class="text-danger">*</span></label>
                                                <textarea name="address" class="form-control" required placeholder="Enter address"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>ILETS Score <span class="text-warning">(Optional)</span></label>
                                                <input type="number" name="ilets" class="form-control" placeholder="Enter Ilets score"/>
                                            
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>CGPA or Grade <span class="text-danger">*</span></label>
                                                <input type="text" name="cgpa" class="form-control" placeholder="Enter cgpa or grade" required/>
                                            
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input  type="email" name="email" placeholder="Enter Email" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid email address</span>
                                            </div>


                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                             <div class="form-group mb-2 mt-2">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" minlength="6" name="password" placeholder="Enter password" class="form-control" required/>
                                            </div>

                                        </div>
                                    </div>
                                    

                                  


                                   <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12">
                                            
                                        <div class="form-group mb-2 mt-2">
                                                <label>Profile Picture <span class="text-danger">*</span></label>
                                                <input accept="image/*" type="file" name="profile"  class="form-control" required/>
                                            </div>

                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12">
                                            
                                        <div class="form-group mb-2 mt-2">
                                                <label>Account Status <span class="text-danger">*</span></label>
                                                <select name="status" required class="form-select">
                                                    <option value="">Select Account Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                            
                                                </select>
                                            </div>

                                        </div>
                                   </div>


                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger btn-sm" name="addStudent">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       ag