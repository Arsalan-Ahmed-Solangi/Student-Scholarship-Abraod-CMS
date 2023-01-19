
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
                        <h2 class="mt-1">Edit Scholarship Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-edit"></i> Edit Scholarship Details</li>
                        </ol>
                        <?php 
                                    
                            $id = $_GET['id'] ?? null;
                            $query = "SELECT * FROM scholarships 
                            INNER JOIN agents ON scholarships.agent_id = agents.agent_id 
                            INNER JOIN languages ON scholarships.language = languages.lang_id
                            INNER JOIN `degrees` ON scholarships.degree_id = `degrees`.`degree_id`
                            WHERE scholarship_id='$id'";
                            $result = $db->executeQuery($query);
                            $data = mysqli_fetch_assoc($result);
                            
                            
                        ?>  
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/scholarship.php" method="POST" enctype="multipart/form-data">
                                    <p class="text-dark bg-light p-3">Please provide valid information for scholarship</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                            <input type="hidden" name="id" value="<?php echo $data['scholarship_id']?>"/>
                                            <div class="form-group mb-2 mt-2">
                                            <label>Select Consultant/Agent You want to Assign for this scholarship<span class="text-danger">*</span></label>


                                                <select name="agent_id" required class="form-select">
                                                <option value="">--Select Agent--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM agents";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                if($data['agent_id'] == $row['agent_id'] ){
                                                                    ?>
                                                                    <option  selected value="<?php echo $row['agent_id'] ?>"><?php echo $row['name'] ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option   value="<?php echo $row['agent_id'] ?>"><?php echo $row['name'] ?></option>
                                                                    <?php
                                                                }
                                                               
                                                            }
                                                        }else {
                                                        ?>
                                                        <option value="">No Agents Found</option>
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
                                                <label>Insititute  / University Name<span class="text-danger">*</span></label>
                                                <input type="text" value="<?php echo $data['institute_name'] ?>" name="institute_name" class="form-control" required placeholder="E.g University of Sindh"/>
                                                
                                             </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Country Name <span class="text-danger">*</span></label>
                                                <input type="text" value="<?php echo $data['country'] ?>"  name="country" placeholder="E.g Pakistan" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                           <div class="form-group mb-2 mt-2">
                                                <label>City/AreaName<span class="text-danger">*</span></label>
                                                <input type="text" value="<?php echo $data['city'] ?>"  name="city" placeholder="E.g Karachi" class="form-control" required/>
                                        
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                            <label>Select Degree Title<span class="text-danger">*</span></label>


                                                <select name="degree_id" required class="form-select">
                                                <option value="">--Select Degree--</option>
                                                    <?php 
                                                    
                                                        $query = "SELECT * FROM degrees";
                                                        $result = $db->executeQuery($query);
                                                        
                                                        if($result->num_rows){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                if($data['degree_id'] == $row['degree_id']){
                                                                    ?>
                                                                    <option  selected value="<?php echo $row['degree_id'] ?>"><?php echo $row['degree_name'] ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $row['degree_id'] ?>"><?php echo $row['degree_name'] ?></option>
                                                                    <?php
                                                                }
                                                               
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
                                                <label>Qualification / Field / Expertise <span class="text-danger">*</span></label>
                                                <input value="<?php echo $data['qualification'] ?>" type="text" name="qualification" class="form-control" placeholder="E.g Software Enginnering" required="required"/>
                                        
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                        <div class="form-group mb-2 mt-2">
                                                <label>Minimum Ilets Score <span class="form-text text-warning">(Optional)</span></label>
                                                <input value="<?php echo $data['ilets_score'] ?>" type="number" min="0" max="10" step="0.1" name="ilets_score" class="form-control"  placeholder="E.g 8.5"/>
                                                <span class="form-text text-success">Ilets Score must be less or equal to 10</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                                <label>Minimum CGPA<span class="text-danger">*</span></label>
                                               <input  value="<?php echo $data['minimum_cgpa'] ?>" type="number" min=0 max="4" step="0.1" name="cgpa" class="form-control" required placeholder="E.g 3.4"/>
                                               <span class="form-text text-success">cpga must be less than or equal to 4.0</span>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">

                                        <div class="form-group mb-2 mt-2">
                                                <label>Course Duration<span class="text-danger">*</span></label>
                                               <input  value="<?php echo $data['duration'] ?>" type="number" min="1" step="1"  name="duration" class="form-control" required placeholder="Course Duration"/>
                                               <span class="form-text text-success">please enter duration in months. E.g 12 = 1year</span>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group mb-2 mt-2">
                                            <label>In which language course is?<span class="text-danger">*</span></label>
                                              <select name="language" required class="form-select">
                                                <option value="">--Select Language---</option>
                                                <?php 
                                                    
                                                    $query = "SELECT * FROM languages";
                                                    $result = $db->executeQuery($query);
                                                    
                                                    if($result->num_rows){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            if($data['lang_id'] == $row['lang_id']){
                                                                ?>
                                                                <option selected value="<?php echo $row['lang_id'] ?>"><?php echo $row['lang_name'] ?></option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                            <option value="<?php echo $row['lang_id'] ?>"><?php echo $row['lang_name'] ?></option>
                                                            <?php
                                                            }
                                                        }
                                                    }else {
                                                    ?>
                                                    <option value="">No Langauges Found</option>
                                                    <?php
                                                    }
                                                ?>
                                              </select>
                                            </div>

                                        </div>
                                       

                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

                                            <div class="form-group">
                                                <label class="">Scholarship Details <span class="text-danger">*</span></label>
                                                <textarea id="textarea" name="details" class="form-control" required placeholder="Enter Scholarship Details"><?php echo $data['details']?></textarea>
                                            </div>

                                        </div>
                                      
                                    </div>

                                    <div class="row mb-2 mt-2">
                                      
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                            <label>Deadline Date <span class="text-danger">*</span></label>
                                            <input value="<?php echo $data['deadline'] ?>" type="date" name="deadline" class="form-control" required/>
                                           </div>
                                        </div>
                                      
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>University Offical Website LInk<span class="text-danger">*</span></label>
                                        <input value="<?php echo $data['link'] ?? null ?>" type="url" name="link" required placeholder="Please enter valid url"/>
                                        <span class="form-text">please provide valid official website link</span>
                                    </div>
                                    
                                    <div class="form-group mb-2 mt-2">
                                        <label>Scholarship Course Price<span class="text-danger">*</span></label>
                                        <input type="number" value="<?php echo $data['price'] ?? null ?>" name="price" required placeholder="Please enter price"/>
                                        <span class="form-text">please enter price in numbers only</span>
                                    </div>
                                
                   
                                    <div class="form-group mb-2 mt-2 offset-md-10">
                                       <button type="submit" class="btn btn-danger btn-sm" name="updateScholarship">Save & Update</button>
                                    </div>
                                </form>

                                <hr/>
                                <h6>Edit Scholarship Images  </h6>
                                <hr/>
                                <form action="classes/scholarship.php" method="POST" enctype="multipart/form-data">
                                   <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                        <img src="<?php echo substr($data['image'],3)  ?>" width="200px"  class="img img-thumbnail img-fluid"/>
                                        <br/><br/><br/>
                                        <img src="<?php echo substr($data['logo'],3)  ?>" width="200px"  class="img img-thumbnail img-fluid"/>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
                                       
                                    <input type="hidden" name="id" value="<?php echo $data['scholarship_id']?>"/>
                                        <div class="form-group mb-5">
                                            <label>Update Image Cover</label>
                                            <input type="file" name="image" class="form-control" accept="image/*"/> 
                                        </div>

                                        <div class="form-group mt-5">
                                            <label>Update Logo</label>
                                            <input type="file" name="logo" class="form-control" accept="image/*"/> 
                                        </div>
                                        <button type="submit" name="updateImages" class="btn btn-sm  mt-5  offset-md-8 btn-danger">Save & Update</button>
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
    <!-- End of Footer -->       