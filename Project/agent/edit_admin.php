

   <!-- Start of Header -->
   <?php ob_start();  include_once("includes/header.php"); ?>
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
                        <h2 class="mt-1">Edit Admin Details</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-user-cog"></i> Edit Admin  Details</li>
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <?php 
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM admins WHERE admin_id='$id'";
                                        $result = $db->executeQuery($query);
                                        $row = mysqli_fetch_assoc($result);
                                    } else{
                                        header("location:view_admins");
                                    } 
                                   
                                
                                ?>
                                <form id="form" action="classes/edit_admin" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                    <div class="form-group mb-2 mt-2">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $row['name'] ?>" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input name="email" type="email" class="form-control" placeholder="Enter email" value="<?php echo $row['email'] ?>" required/>
                                    </div>

        
                                    <div class="form-group mb-2 mt-2 offset-md-11">
                                       <button type="submit" class="btn btn-danger btn-sm" name="updateAdmin">Update</button>
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