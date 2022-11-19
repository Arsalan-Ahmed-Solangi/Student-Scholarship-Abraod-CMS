<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" style="font-size:14px">
                            <div class="sb-sidenav-menu-heading">SYSTEM</div>
                            <a class="nav-link" href="index">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>
                               
                            
                            <div class="sb-sidenav-menu-heading">Modules</div>

                            <!-- Agents  -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#agentLayout" aria-expanded="false" aria-controls="agentLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>
                                Assigned Scholarships
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="agentLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_scholarships"> View Scholarships</a>
                                </nav>
                            </div>

                             <!-- Students  -->
                             <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#studentsLayout" aria-expanded="false" aria-controls="studentsLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                               Registered Students
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="studentsLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view_students"> View Students</a>
                          
                                </nav>
                            </div> -->

                            <!-- Students  -->
                            <a class="nav-link" href="search_student">
                                <div class="sb-nav-link-icon"><i class="fa fa-search"></i></div>
                                Search Student <span class="badge m-1 badge-sm bg-info"> <i class="fa fa-search"></i></span>
                            </a>
                         

                            <div class="sb-sidenav-menu-heading">Settings</div>

                            <a class="nav-link" href="edit_profile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Edit Profile
                            </a>

                            <a class="nav-link" href="change_password">
                                <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
                                Change Password <span class="badge m-1 badge-sm bg-warning"> <i class="fa fa-key"></i></span>
                            </a>

                            <a class="nav-link" href="classes/logout.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                                Logout <span class="badge m-1 badge-sm bg-danger"> <i class="fa fa-power-off"></i></span>
                            </a>
                               
                          


                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['agent']['name'] ?>
                    </div>
                </nav>
            </div>