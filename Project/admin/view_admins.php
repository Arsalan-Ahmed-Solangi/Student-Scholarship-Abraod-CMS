
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
                        <h2 class="mt-1">View Site Admins</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item"><i class="fa fa-user-cog"></i> View Site Admins</li>
                            <!-- <li class="breadcrumb-item active"><a href="add_admin"> Add Admin </a></li> -->
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                               <table class="table table-bordered table-hover " id="table">
                                    <thead>
                                        <tr>
                                            <th>SR#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                            $query = "SELECT * FROM admins";
                                            $result = $db->executeQuery($query);
                                            if($result->num_rows){
                                                $a = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo ++$a ?></td>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><?php echo $row['email'] ?></td>
                                                        <td>
                                                            <?php 
                                                            
                                                                if($row['admin_id'] == 1) echo "<span class='badge bg-dark'>Super Admin</span>";
                                                                else  echo "<span class='badge bg-success'>Admin</span>";
                                                            
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['created_at'] ?></td>
                                                        <td>
                                                           <?php 

                                                            if($row['admin_id'] ==1 ){
                                                                ?>
                                                                <a href="profile" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                               <?php
                                                            }else{
                                                                ?>
                                                                 <a href="edit_admin?id=<?php echo $row['admin_id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                                 <a href="classes/delete_admin?id=<?php echo $row['admin_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                                <?php
                                                            }
                                                           
                                                           ?>
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