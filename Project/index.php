<?php 

    require_once("includes/header.php");
    require_once("includes/sub-header.php");
    // require_once("includes/messages.php");
?>
 

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">

      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">

           
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hi Students</h6>
              <h2>Welcome to  University Finder</h2>
              <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="card" style="width:90%">
                        <div class="card-body p-3">
                            <form id="form" action="search-scholarships.php" method="POST">
                                <div class="row">
                                    <div class="col-md-3">
                                      <?php 
                                      
                                          $query = "SELECT DISTINCT country FROM universities";
                                          $result = $db->executeQuery($query);
                                          if($result->num_rows > 0){
                                            echo ' <select name="country" class="form-select" >';
                                            echo ' <option value="">--Select Country--</option>';
                                            while($row = mysqli_fetch_assoc($result)){
                                              ?>
                                               
                                               
                                                    <option value="<?php echo $row['country'] ?>"><?php echo $row['country'] ?></option>
                                               
                                              <?php
                                            }
                                            echo " </select>";
                                          }
                                      ?>
                                     
                                        <!-- <input type="text"  name="country" placeholder="Enter Country Name" class="form-control"/> -->
                                    </div>
                                    <div class="col-md-3">
                                    <?php 
                                      
                                      $query = "SELECT DISTINCT university_name FROM universities";
                                      $result = $db->executeQuery($query);
                                      if($result->num_rows > 0){
                                        echo ' <select name="institute_name" class="form-select" >';
                                        echo ' <option value="">--Select Institute Name--</option>';
                                        while($row = mysqli_fetch_assoc($result)){
                                          ?>
                                           
                                           
                                                <option value="<?php echo $row['university_name'] ?>"><?php echo $row['university_name'] ?></option>
                                           
                                          <?php
                                        }
                                        echo " </select>";
                                      }
                                  ?>
                                        <!-- <input type="text"  name="institute_name" placeholder="Enter University Name" class="form-control"/> -->
                                    </div>

                                    <div class="col-md-3">
                                        <select name="price" class="form-select" >
                                          <option value="">--Select Price Range--</option>
                                          <option value="1">Below 5 Lac</option>
                                          <option value="2">Upto to 10Lacs</option>
                                          <option value="3">Above 10Lacs</option>
                                        </select>
                                    </div>

                                  
                                    <div class="col-md-3">
                                        <input type="number"  max="4.0" min="1" step="0.1"  name="cgpa" placeholder="Enter CGPA" class="form-control"/>
                                    </div>
                                </div>
                               
                            
                        </div>
                    </div>
                    <div class="main-button-red">
                        <div ><button type="submit" name="search" class="btn btn-danger"><i class="fa fa-search"></i> Search Now</button></div>
                    </div>
                    </form>
                </div>
            </div>
             
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>


  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Search Plenty Scholarships</h4>
                
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Documents and Details</h4>
        
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Students</h4>

              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Meetings With Agents</h4>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>24/7 Online Support</h4>
        
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Latest University Scholarships </h2>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="row">

            <?php 
            
                $query = "SELECT * FROM scholarships ORDER BY scholarship_id DESC LIMIT 4";
                $result = $db->executeQuery($query);
               
                while( $scholarShipData = mysqli_fetch_assoc($result)){
                    ?>
                     <div class="col-lg-4">
                    <div class="meeting-item">
                        <div class="thumb">
                        <div class="price">
                            <span class="bg-warning text-light">Deadline <?php echo $scholarShipData['deadline'] ?></span>
                        </div>
                        <a href="scholarship-details.php?id=<?php echo $scholarShipData['scholarship_id'] ?>"><img height="200px" src="admin/<?php echo substr($scholarShipData['image'],3) ?>" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                        
                        <a href="scholarship-details?id=<?php echo $scholarShipData['scholarship_id'] ?>"><h4>Course - <?php echo $scholarShipData['qualification'] ?></h4></a>
                        <p class="p-2"><b>Institute Name :  </b> <?php echo $scholarShipData['institute_name'] ?> </p>
                        
                        <a href="scholarship-details.php?id=<?php echo $scholarShipData['scholarship_id'] ?>" class="btn btn-sm btn-danger offset-md-8">View More...</a>
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Leading World Top Universities</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="https://www.stanford.edu/wp-content/uploads/2022/04/About-1499x500.jpg" style="height:140px" alt="Course One">
              <div class="down-content">
                <h4>Stanford University</h4>
              </div>
            </div>

            <div class="item">
              <img src="https://cdn.britannica.com/03/117103-050-F4C2FC83/view-University-of-Oxford-England-Oxfordshire.jpg" alt="Course One" style="height:140px">
              <div class="down-content">
                <h4>Hardvard University</h4>
              </div>
            </div>

            <div class="item">
              <img src="https://lh5.googleusercontent.com/p/AF1QipN0_YtaeHZx9bOfjDa_aj9HD94-ncX-3tCFNmH8=w239-h160-k-no" alt="Course One" style="height:140px">
              <div class="down-content">
                <h4>University of Cambridge</h4>
              </div>
            </div>

            <div class="item">
              <img src="data:image/jpeg;base64,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" alt="Course One" style="height:140px">
              <div class="down-content">
                <h4>University of Texas</h4>
              </div>
            </div>

          
           
 
          

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Analytics About Scholarship Finder</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <?php 
                    
                        $query = "SELECT COUNT(student_id) AS students FROM students";
                        $result = $db->executeQuery($query);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="count-digit"><?php echo $row['students'] ?></div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                  <?php 
                    
                    $query = "SELECT COUNT(scholarship_id) AS scholarships FROM scholarships";
                    $result = $db->executeQuery($query);
                    $countScholarships = mysqli_fetch_assoc($result);
                ?>
                    <div class="count-digit"><?php echo $countScholarships['scholarships'] ?></div>
                    <div class="count-title">Current Scholarships Avail</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit"><?php echo $row['students'] ?></div>
                    <div class="count-title">Registered Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                  <?php 
                    
                    $query = "SELECT COUNT(agent_id) AS agents FROM agents";
                    $result = $db->executeQuery($query);
                    $countAgents = mysqli_fetch_assoc($result);
                ?>
                    <div class="count-digit"><?php echo $countAgents['agents'] ?></div>
                    <div class="count-title">Agents</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" class="form" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">

                    <h2>Let's get in touch</h2>
                    <?php 

                        if(isset($_POST['contactForm'])){
                            extract($_POST);
                            $query = "INSERT INTO enquires(`name`,`email`,`message`,`subject`) VALUES  ('$name','$email','$message','$subject')";
                            $result = $db->executeQuery($query);

                            if($result){
                                ?>
                                <div class="alert alert-success">
                                    You Query has been Filled Successfully!
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="alert alert-danger">
                                    Failed Try Again!
                                </div>
                                <?php
                            }
                        }
                    
                    
                    ?>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" name="name" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" name="subject" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" name="message" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="contactForm" id="form-submit"  class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span  style="font-size:14px"><?php echo $rowAbout  ['phone_no'] ?></span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span style="font-size:14px"><?php echo $rowAbout   ['email'] ?></span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span  style="font-size:14px"><?php echo $rowAbout  ['location'] ?></span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span  style="font-size:14px"><?php echo $rowAbout  ['website'] ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
    <?php 

        require_once("includes/footer.php");
    
    ?>