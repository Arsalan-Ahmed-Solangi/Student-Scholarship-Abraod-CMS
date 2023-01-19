
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
                        <h2 class="mt-1"><i class="fa fa-institution"></i> View Universities</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item"><i class="fa fa-list"></i> View Universities</li>
        
                        </ol>
                        <div class="card shadow-sm bg-white p-2">
                            <div class="card-body p-3">
                               <table class="table table-bordered table-hover " id="table">
                                    <thead>
                                        <tr>
                                            <th>SR#</th>
                                            <th>University Name</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Website Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                            $query = "SELECT * FROM universities";
                                            $result = $db->executeQuery($query);
                                            if($result->num_rows){
                                                $a = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo ++$a ?></td>
                                                        <td><?php echo $row['university_name'] ?></td>
                                                        <td><?php echo $row['country'] ?></td>
                                                        <td><?php echo $row['city'] ?></td>
                                                        <td><a href="<?php echo $row['link'] ?>" target="_blank"><span class="badge text-light  bg-primary">Open Link</span></a></td>
                                                        <td>
                                                        <a href="show_university?id=<?php echo $row['university_id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>

                                                        <a href="edit_university?id=<?php echo $row['university_id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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