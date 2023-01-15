<?php 

    require_once("includes/header.php");
    require_once("includes/sub-header.php");
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
                    <div class="card" style="width:140%">
                        <div class="card-body p-3">
                            <form id="form" action="search-scholarships.php" method="POST">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" required name="country" placeholder="Enter Country Name" class="form-control"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" required name="institute_name" placeholder="Enter University Name" class="form-control"/>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="number"  required max="10.0" min="0.1" step="0.1" name="ilets_score" placeholder="Enter Ilets Score" class="form-control"/>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="number" required max="4.0" min="1" step="0.1"  name="cgpa" placeholder="Enter CGPA" class="form-control"/>
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
                        <a href="meeting-details.html"><img height="200px" src="admin/<?php echo substr($scholarShipData['image'],3) ?>" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                        
                        <a href="scholarship-details?id=<?php echo $scholarShipData['scholarship_id'] ?>"><h4>Course - <?php echo $scholarShipData['qualification'] ?></h4></a>
                        <p class="p-2"><b>Institute Name :  </b> <?php echo $scholarShipData['institute_name'] ?> </p>
                        <a href="" class="btn btn-sm btn-danger offset-md-8">View More...</a>
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

            <div class="item">
              <img src="data:image/jpeg;base64,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" alt="Course One" style="height:140px">
              <div class="down-content">
                <h4>Mehran University of Jamshoro</h4>
              </div>
            </div>
           
            <div class="item">
              <img src="https://www.incpak.com/wp-content/uploads/2021/01/UOS.jpg" alt="Course One" style="height:140px">
              <div class="down-content">
                <h4>University of Sindh Jamshoro</h4>
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