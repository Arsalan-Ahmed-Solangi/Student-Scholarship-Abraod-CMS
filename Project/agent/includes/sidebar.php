<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" style="font-size:14px">
                            <div class="sb-sidenav-menu-heading">SYSTEM</div>
                            <a class="nav-link" href="index">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                               
                            <?php 
                            
                                if($_SESSION['admin'][0] == 1){
                                    ?>
                                    <!-- users  -->
                                    <a    class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="users">
                                        <div class="sb-nav-link-icon"><i class="fa fa-user-cog"></i></div>
                                        Site Admins
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="users" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="view_admins"> View Site Admins</a>
                                            <a class="nav-link" href="add_admin">Add Site Admin</a>
                                        </nav>
                                    </div>
                                    <?php
                                }
                            
                            ?>

                            <div class="sb-sidenav-menu-heading">Modules</div>

                            <!-- Agents  -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#agentLayout" aria-expanded="false" aria-controls="agentLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-group"></i></div>
                                Agents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="agentLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_agents"> View Agents</a>
                                    <a class="nav-link" href="add_agent">Add Agent</a>
                                </nav>
                            </div>

                             <!-- Students  -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#studentsLayout" aria-expanded="false" aria-controls="studentsLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Students
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="studentsLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_students"> View Students</a>
                                    <a class="nav-link" href="add_student">Add Student</a>
                          
                                </nav>
                            </div>

                            <!-- Students  -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#educationLayout" aria-expanded="false" aria-controls="educationLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-address-card"></i></div>
                                Student Education
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="educationLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="add_education">Add Education</a>
                          
                                </nav>
                            </div>

                             <!-- Students  -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#degreeLayout" aria-expanded="false" aria-controls="degreeLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-tasks"></i></div>
                                Degree Titles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="degreeLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_degrees"> View Degrees</a>
                                    <a class="nav-link" href="add_degree"> Add New Degree</a>
                                </nav>
                            </div>

                        
                             <!-- Scholarships  -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#scholarshipLayouts" aria-expanded="false" aria-controls="scholarshipLayouts">
                                <div class="sb-nav-link-icon"><i class="fa fa-flower"></i></div>
                                 Scholarships  <span class="badge m-1 badge-sm bg-info"> search</span>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> 
                            <div class="collapse" id="scholarshipLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_scholarships">View Scholarships</a>
                                    <a class="nav-link" href="add_scholarship"> Add Scholarships</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Management</div>

                             <!-- Enquires /Visits  -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#enquiresLayout" aria-expanded="false" aria-controls="enquiresLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-question-circle"></i></div>
                                 Enquires <span class="badge m-1 badge-sm bg-warning"> ?</span>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> 
                            <div class="collapse" id="enquiresLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_enquires">View Enquires/Visits</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['admin'][1] ?>
                    </div>
                </nav>
            </div>