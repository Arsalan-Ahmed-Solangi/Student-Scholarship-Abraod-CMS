
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
                        <h2 class="mt-1">Agent Profile Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item"><i class="fa fa-user-group"></i> Agent Profile Details</li>
                         
                            <!-- <li class="breadcrumb-item active"><a href="add_admin"> Add Admin </a></li> -->
                        </ol>
                        <a href="view_agents" class="btn btn-danger btn-sm offset-md-11 mb-2">Back</a>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3"> 
                                <?php 

                                    $id = $_GET['id'] ?? null;
                                    $query = "SELECT * FROM agents WHERE agent_id='$id'";
                                    $result = $db->executeQuery($query);
                                    $row = mysqli_fetch_assoc($result);

                                    
                                ?>  
                                <div class="row">
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
                                                <p><b> Phone No : </b>  <?php echo $row['phone_no'] ?> </p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <p><b> Gender : </b>  <?php echo $row['gender'] ?> </p>
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <p><b> Account Status : </b> 
                                                 <?php if($row['status'] == 1) echo "<span class='badge bg-success'>Active</span>"; else echo "<span class='badge bg-danger'>Inctive</span>" ?> </p>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <p><b> Created At :</b>  <?php echo $row['created_at'] ?> 
                                              
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       