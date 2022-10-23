
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
                        <h2 class="mt-1">Edit Agent Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Edit Agent Details</li>
                           
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <?php  
                            
                                $id = $_GET['id'];
                                $query = "SELECT * FROM agents WHERE agent_id='$id'";
                                $result = $db->executeQuery($query);
                                $row = mysqli_fetch_assoc($result);
                            
                            ?>
                            <div class="card-body p-3">
                                <form id="form" action="classes/agent.php" method="POST" enctype="multipart/form-data">
                                    <p class="text-dark bg-light p-3">Please provide valid information about Agent </p>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <input type="hidden" name="id" value="<?php echo $row['agent_id'] ?>"/> 
                                            <div class="form-group mb-2 mt-2">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input value="<?php echo $row['name'] ?>"  type="text" name="name" placeholder="Enter name" class="form-control" required/>
                                               
                                             </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>CNIC <span class="text-danger">*</span></label>
                                                <input  value="<?php echo $row['cnic'] ?>" type="text" name="cnic" placeholder="E.g 41500-0523234-9" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid cnic no with dashes</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Phone No <span class="text-danger">*</span></label>
                                                <input value="<?php echo $row['phone_no'] ?>" type="text" name="phone_no" placeholder="E.g 03000000000" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid phone no</span>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Gender <span class="text-danger">*</span></label>
                                                <select name="gender" required class="form-select">
                                                    <option value="">Select Gender</option>
                                                    <option <?=$row['gender'] == 'Male' ? ' selected="selected"' : '';?>  value="Male">Male</option>
                                                    <option  <?=$row['gender'] == 'Female' ? ' selected="selected"' : '';?> value="Female">Female</option>
                                                    <option  <?=$row['gender'] == 'Other' ? ' selected="selected"' : '';?> value="Other">Other</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input value="<?php echo $row['email'] ?>"  type="email" name="email" placeholder="Enter Email" class="form-control" required/>
                                                <span class="form-text text-success">please provide valid email address</span>
                                            </div>


                                        </div>
                                       
                                    </div>
                                    


                                   <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12">
                                            
                                        <div class="form-group mb-2 mt-2">
                                                <label>Account Status <span class="text-danger">*</span></label>
                                                <select name="status" required class="form-select">
                                                    <option value="">Select Account Status</option>
                                                    <option  <?=$row['status'] == 1 ? ' selected="selected"' : '';?> value="1">Active</option>
                                                    <option  <?=$row['status'] == 0 ? ' selected="selected"' : '';?> value="0">Inactive</option>
                                            
                                                </select>
                                            </div>

                                        </div>
                                   </div>


                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger btn-sm" name="editAgent">Update</button>
                                    </div>
                                </form>

                                <p class="text-dark bg-light p-3">Update Agent Account Profile Picture </p>
                                <form  action="classes/agent.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <img class="img img-thumbnail"  id="blah" src="<?php echo substr($row['profile'],3); ?>" width="60%" height="60%"/>
                                        </div>

                                        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                                            <div class="form-group">
                                            <input type="hidden" name="id" value="<?php echo $row['agent_id'] ?>"/> 
                                                <label>Update Profile Picture <span class="text-danger">*</span></label>
                                                <input onchange="readURL(this);" accept="image/*" id="imgShow"  type="file" name="profile" required class="form-control"/> 
                                            </div>
                                            
                                            <div class="form-group mt-4">
                                               <button type="submit" name="updateProfile" class="btn btn-danger offset-md-9">Update Profile</button>
                                            </div>
                                        </div>
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