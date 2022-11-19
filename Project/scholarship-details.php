<?php 

    require_once("includes/header.php");
    require_once("includes/sub-header.php");

    $id = $_GET['id'] ?? null;
    $query = "SELECT * FROM scholarships AS S
    INNER JOIN `degrees` AS D ON S.`degree_id` = D.`degree_id`
    INNER JOIN languages AS L ON S.`language` = L.`lang_id` 
    INNER JOIN `agents` ON S.agent_id = agents.agent_id
     WHERE scholarship_id='$id'";
    $result = $db->executeQuery($query);
    $row = mysqli_fetch_assoc($result);
?>
 

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Scholarship Details</h6>
          <h2><?php echo $row['institute_name'] ?></h2>
          <h6><?php echo $row['qualification'] ?></h6>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="price">
                  <span class="bg-warning text-light">Deadline <?php echo $row['deadline'] ?></span>
                  </div>
                  
                 <img src="admin/<?php echo substr($row['image'],3) ?>" height="400px" alt="">
                </div>
                <div class="down-content">
                 <h4><?php echo $row['institute_name'] ?></h4>
                 <p><?php echo $row['degree_name'] ?></p>
                  <p><?php echo $row['qualification'] ?></p>
                  <p class="description">
                    <?php echo $row['details'] ?>
                  </p>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="hours">
                        <h5>Language</h5>
                       <p><?php echo $row['lang_name'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="location">
                        <h5>Duration</h5>
                        <p><?php echo $row['duration'] . "Months" ?></p>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="location">
                        <h5>MiniMum CGPA</h5>
                        <p><?php echo $row['minimum_cgpa'] ?></p>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="location">
                        <h5>Minimum Ilets Score</h5>
                        <p><?php echo $row['ilets_score'] ?></p>
                      </div>
                    </div>
                    <div class="col-lg-3 mt-5">
                      <div class="book now">
                        <h5>Agent Details</h5>
                        <p><?php echo $row['name'] ?></p>
                        <p><?php echo $row['email'] ?></p>
                        <p><?php echo $row['phone_no'] ?></p>
       
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="index.php">Back to Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php  
   
                        require_once("includes/footer.php");
   
   ?>