
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
                        <h2 class="mt-1">Add Scholarship Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add Scholarship Details</li>
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/student.php" method="POST" enctype="multipart/form-data">
                                    <p class="text-dark bg-light p-3">Please provide valid information for scholarship</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Select Student<span class="text-danger">*</span></label>

                                                <select name="student_id" required class="form-control">
                                                <option value="">--Select Student--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM students";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                ?>
                                                                <option value="<?php echo $row['student_id'] ?>"><?php echo $row['name'] ?></option>
                                                                <?php
                                                            }
                                                        }else {
                                                        ?>
                                                        <option value="">No Students Found</option>
                                                        <?php
                                                        }
                                                    ?>
                                                </select>
                                               
                                             </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Select Degree<span class="text-danger">*</span></label>

                                                <select name="degree_id" required class="form-control">
                                                <option value="">--Select Degree--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM degrees";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                ?>
                                                                <option value="<?php echo $row['degree_id'] ?>"><?php echo $row['degree_name'] ?></option>
                                                                <?php
                                                            }
                                                        }else {
                                                        ?>
                                                        <option value="">No Degrees Found</option>
                                                        <?php
                                                        }
                                                    ?>
                                                </select>
                                               
                                             </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>City/Area Name <span class="text-danger">*</span></label>
                                                <input type="text" name="city" placeholder="E.g Karachi Korngi" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                           <div class="form-group mb-2 mt-2">
                                                <label>Institute Name / School / College / University <span class="text-danger">*</span></label>
                                                <input type="text" name="institute_name" placeholder="E.g University of Sindh" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Passing Year <span class="text-danger">*</span></label>
                                                <input type="number" required min="1900" name="passing_year" placeholder="2022" class="form-control" max="2099" step="1" />
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                           <div class="form-group mb-2 mt-2">
                                                <label>Remarks <span class="text-danger">*</span></label>
                                                <textarea name="remarks" name="remarks" placeholder="Add more details about this education like Result - Marks - Achievments and muchmore" class="form-control" required></textarea>
                                              
                                            </div>

                                        </div>
                                    </div>

                                
                                    <div class="form-group mb-2 mt-2 offset-md-10">
                                       <button type="submit" class="btn btn-danger btn-sm" name="addEducation">Save & Add</button>
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