
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
                        <h2 class="mt-1">Chat With Registered Students</h2>
                        <ol class="breadcrumb mb-4 bg-light p-2">
                            <li class="breadcrumb-item active"><i class="fa fa-comment"></i> Chat With Registered Students</li>
                            <!-- <li class="breadcrumb-item active"><a href="view_admins" class="text-dark"> View Site Admins </a></li> -->
                        </ol>
                      
                        <div class="card shadow-sm bg-white p-2">
                           <div class="card-body p-2">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <div class="card shadow-sm bg-white p-2">
                                        <?php  
                                            $id = $_SESSION['student']['student_id'];
                                         $query = "SELECT * FROM `students` WHERE student_id <> '$id' ";
                    
                  
                                        $result = $db->executeQuery($query);
                                            echo "<ul class='list-group'>";
                                            if($result->num_rows){
                                                $a = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                     <li  class="pe-auto list-group-item disabled itemClick text-primary " id="<?php echo $row['student_id'] ?>">  <img src="https://cdn-icons-png.flaticon.com/512/9200/9200701.png" width="10%" class="img img-thumbnail img-responsive"/>  <?php echo $row['name'] ?></li>
                                                    <?php
                                                }
                                            }
                                            echo "</ul>";
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-lg-8 col-xs-12 col-sm12-">
                                        <div class="card shadow-sm bg-white p-2" id="messageBody" style="height:400px">
                                            <img style="margin:auto;" src="https://cdn-icons-png.flaticon.com/512/1041/1041916.png" width="100px" height="100px"/>
                                            <h4 class="form-text text-center">Select Agent to Open Chat</h4>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){
            $(".itemClick").click(function(){
                var id = $(this).attr("id");
                $.ajax({
                    url: "classes/studentchat.php",
                    type:"POST",
                    data:{id:id},
                    success: function(html){
                      $("#messageBody").empty();
                      $("#messageBody").html(html);
                    }
                });
            })

            

            function ajaxWork(){
                $.ajax({
                    url: "classes/studentchat.php",
                    type:"POST",
                    data:{id:id},
                    success: function(html){
                      
                    }
                });
            }
        })
    </script>
    <!-- End of Footer -->       