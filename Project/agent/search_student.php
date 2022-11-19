
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
                        <h2 class="mt-1">Search Student Profile Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item"><i class="fa fa-user-group"></i> Search Student Profile Details</li>
                         
                            <!-- <li class="breadcrumb-item active"><a href="add_admin"> Add Admin </a></li> -->
                        </ol>
                        <a href="view_students" class="btn btn-danger btn-sm offset-md-11 mb-2">Back</a>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3"> 

                                <form id="form" action="" method="POST">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label>Search Student With CNIC</label>
                                                <input required type="text" value="<?php  echo $_REQUEST['cnic'] ?? null ?>" class="form-control" name="cnic" placeholder="Enter CNIC"/>
                                                <p class="form-text">please provide valid and registered student cnic</p>
                                             </div>
                                        </div>

                                        <div class="col-2 mt-4">
                                            <button type="submit" name="search" class="btn btn-sm btn-primary offset-md-2"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </form>
                                <?php 

                                    if(isset($_REQUEST['search'])){
                                        
                                        extract($_REQUEST);
                                        $query = "SELECT * FROM students WHERE cnic='$cnic'";
                                        $result = $db->executeQuery($query);
                                        $row = mysqli_fetch_assoc($result);
                                     

                                        if($row > 0){
                                            $studentId = $row['student_id'];
                                            ?>
                                            <div class="row">
                                            <hr/>
                                          <h6>Student Profile Info</h6>
                                          <hr/>
                                      <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
  
                                          <img src="<?php echo substr($row['profile'],3) ?>" width="70%" class="img img-thumbnail img-responsive"/>
                                      </div>
                                      <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                                          <div class="row mb-3">
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> Full Name : </b>  <?php echo $row['name'] ?> </p>
                                              </div>
                                              <div class="col-md-6 col-lg-6 col-xs-12 cols-sm-12">
                                                  <p><b> Email : </b>  <?php echo $row['email'] ?> </p>
                                              </div>
  
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> CNIC : </b>  <?php echo $row['cnic'] ?> </p>
                                              </div>
                                          
  
                                      
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> Phone No : </b>  <?php echo $row['phone'] ?> </p>
                                              </div>
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> Gender : </b>  <?php echo $row['gender'] ?> </p>
                                              </div>
  
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> Ilets Score : </b>  <?php echo $row['ilets_score'] ?> </p>
                                              </div>
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> CGPA : </b>  <?php echo $row['cgpa'] ?> </p>
                                              </div>
  
                                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                  <p><b> Date of Birth : </b>  <?php echo $row['dob'] ?> </p>
                                              </div>
                                           
                                   
                                          </div>  
                                      </div>
                                  </div>
  
                                  <div class="row">
                                      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                          <hr/>
                                          <h6>Student Education Details</h6>
                                          <hr/>
                                          <table class="table table-bordered table-hover table-striped" id="datatablesSimple">
                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>Degree</th>
                                                      <th>Institute Name</th>
                                                      <th>Passing Year</th>
                                                      <th>City</th>
                                                      <th>Remarks</th>
                                                      <th>Created At</th>
                                                      <th>Action</th>
                                                      
                                                  </tr>
                                              </thead>
  
                                              <tbody>
                                                  <?php 
                                                  
                                                      $query  ="SELECT * FROM education INNER JOIN `degrees` AS D ON education.degree_id = D.degree_id WHERE student_id ='$studentId'";
                                                      $result = $db->executeQuery($query);
  
                                                      if($result->num_rows){
                                                          $a = 0;
                                                          while($row = mysqli_fetch_assoc($result)){
                                                              ?>
                                                              <tr>
                                                                  <td><?php echo ++$a ?></td>
                                                                  <td><?php echo $row['degree_name'] ?></td>
                                                                  <td><?php echo $row['institute_name'] ?></td>
                                                                  <td><?php echo $row['passing_year'] ?></td>
                                                                  <td><?php echo $row['city'] ?></td>
                                                                  <td><?php echo $row['remarks'] ?></td>
                                                                  <td><?php echo $row['created_at'] ?></td>
                                                                  <td>
                                                                      <a class="btn btn-danger btn-sm" href="classes/student?education_id=<?php echo $row['education_id'] ?>&student_id=<?php echo $studentId?>"><i class="fa fa-trash"></i></a>
                                                                  </td>
                                                              </tr>
                                                              <?php
                                                          } 
                                                      }
                                                  ?>
                                              </tbody>
                                          </table>
                                      </div> 
                                  </div>
                                          <?php

                                        }else{
                                            ?>
                                            <div class="alert alert-danger">
                                                No Student Record Found With This CNIC
                                            </div>
                                            <?php
                                        }
                                    
                                      
                                    }
                                    
                                ?>  
                              
                            </div>
                        </div>
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       