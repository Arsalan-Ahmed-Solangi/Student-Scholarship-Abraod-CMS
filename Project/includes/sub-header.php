<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is University Finder <em>Study Abroad Opportunity Finder</em> is a simplest to find liesure scholarships</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a  target="_blank" href="<?php echo $rowAbout['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a  target="_blank" href="<?php echo $rowAbout['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
              <li><a  target="_blank" href="<?php echo $rowAbout['website'] ?>"><i class="fa fa-globe"></i></a></li>
              <li><a  target="_blank" href="<?php echo $rowAbout['linkedIn'] ?>"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                         University Finder
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li ><a href="index.php#top" class="active">Home</a></li>
                          <li><a href="about.php">About</a></li>
                         <?php 
                            session_start();
                            if(isset($_SESSION['student'])){
                                ?> <li><a href="student/">Dashboard</a></li>
                                <li><a href="logout.php">Logout</a></li>

                                <?php
                            }else{
                              ?>
                               <li><a href="register.php">Register</a></li>
                          <li><a href="login.php">Login</a></li>
                              <?php
                            }
                         
                         ?>
                          <li><a href="index.php#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->