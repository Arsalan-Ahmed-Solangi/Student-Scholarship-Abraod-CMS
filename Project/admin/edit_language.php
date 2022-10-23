
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
                        <?php 

                        $id = $_GET['id'];
                        $query = "SELECT * FROM `languages` WHERE lang_id='$id'";
                        $result = $db->executeQuery($query);
                        $row = mysqli_fetch_assoc($result);
                        
                        ?>
                        <h2 class="mt-1">Edit Language</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-user-cog"></i> Edit Language</li>
                            <!-- <li class="breadcrumb-item active"><a href="view_admins" class="text-dark"> View Site Admins </a></li> -->
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                                <form id="form" action="classes/language.php" method="POST">
                                    <div class="form-group mb-2 mt-2">
                                        <input type="hidden" value="<?php echo $id ?>" name="id"/>
                                        <label>Language Name <span class="text-danger">*</span></label>
                                        <input value="<?php echo $row['lang_name'] ?>" type="text" name="name" placeholder="E.g " class="form-control" required/>
                                    </div>

                                    <div class="form-group mb-2 mt-2 offset-md-9">
                                       <button type="submit" class="btn btn-danger btn-sm" name="editLanguage">Save & Update</button>
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