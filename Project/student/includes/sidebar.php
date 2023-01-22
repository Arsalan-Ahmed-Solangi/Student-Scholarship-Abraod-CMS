<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" style="font-size:14px">
                            <div class="sb-sidenav-menu-heading">SYSTEM</div>
                            <a class="nav-link" href="index">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>

   
                            <a class="nav-link" href="chatStudents">
                                <div class="sb-nav-link-icon"><i class="fa fa-comment"></i></div>
                                Chat With Agents
                            </a>

                            <a class="nav-link" href="chatting">
                                <div class="sb-nav-link-icon"><i class="fa fa-comment"></i></div>
                                Chat With Students
                            </a>
                               
                            
                            <div class="sb-sidenav-menu-heading">Modules</div>

                            <!-- Agents  -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#agentLayout" aria-expanded="false" aria-controls="agentLayout">
                                <div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>
                                Education
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="agentLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_education"> Add Education Details</a>
                                </nav>
                            </div>

                            

                          

                            <div class="sb-sidenav-menu-heading">Settings</div>
                            <a class="nav-link" href="profile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Profile
                            </a>


                            <a class="nav-link" href="edit_profile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Edit Profile
                            </a>

                            <a class="nav-link" href="change_password">
                                <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
                                Change Password <span class="badge m-1 badge-sm bg-warning"> <i class="fa fa-key"></i></span>
                            </a>

                            <a class="nav-link" href="../logout.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                                Logout <span class="badge m-1 badge-sm bg-danger"> <i class="fa fa-power-off"></i></span>
                            </a>
                               
                          


                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['student']['name'] ?>
                    </div>
                </nav>
            </div>