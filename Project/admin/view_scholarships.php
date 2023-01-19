
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
                        <h2 class="mt-1">View Scholarships</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item"><i class="fa fa-eye"></i> View Scholarships</li>
                            <!-- <li class="breadcrumb-item active"><a href="add_admin"> Add Admin </a></li> -->
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                               <table class="table table-bordered table-hover " id="table">
                                    <thead>
                                        <tr>
                                            <th>SR#</th>
                                            <th>Institute Name</th>
                                            <th>Field</th>
                                            <th>Duration</th>
                                            <th>Deadline</th>
                                            <th>Website Site</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        
                                        $query = "SELECT * FROM scholarships";
                                        $result = $db->executeQuery($query);
                                        $a = 0;
                                        if($result->num_rows){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$a; ?></td>
                                                    <td><?php echo $row['institute_name'] ?></td>
                                                    <td><?php echo $row['qualification'] ?></td>
                                                    <td><?php echo $row['duration'] . " Months"  ?></td>
                                                    <td><a href="<?php echo $row['link'] ?>"><span class="badge bg-primary text-light">Open Link</span></a></td>
                                                    <td><?php echo $row['deadline'] ?></td>
                                                 
                                                    <td>
                                                        <a class="btn btn-success btn-sm" href="show_scholarship.php?id=<?php echo $row['scholarship_id'] ?>"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-primary btn-sm" href="edit_scholarship.php?id=<?php echo $row['scholarship_id'] ?>"><i class="fa fa-edit"></i></a>
                                                        <!-- <a class="btn btn-danger btn-sm" href="classes/delete_scholarship.php?id=<?php echo $row['scholarship_id'] ?>"><i class="fa fa-trash"></i></a> -->
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
                    </div>
                </main>
    <!-- End of Main Content -->
    <!-- Start of Footer -->
    <?php  include_once("includes/footer.php") ?>
    <!-- End of Footer -->       