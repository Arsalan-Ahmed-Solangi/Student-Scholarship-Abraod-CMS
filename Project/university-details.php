<?php 

    require_once("includes/header.php");
    require_once("includes/sub-header.php");

    $id = $_GET['id'] ?? null;
    $query = "SELECT * FROM universities
     WHERE university_id='$id'";
    $result = $db->executeQuery($query);
    $row = mysqli_fetch_assoc($result);
?>
 

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>University Details</h6>
          <h2><?php echo $row['university_name'] ?></h2>
          <h6><?php echo $row['country'] ?></h6>
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
              <img src="admin/<?php echo substr($row['university_image'],3) ?>" height="500px" width="500px" alt="">
                 <br/>
                <div class="thumb">
                  <div class="price">
                 
                 
                </div>
                <div class="down-content">
                 <h4><?php echo $row['university_name'] ?></h4>
                 <p><?php echo $row['country'] . "-" .$row['city'] . "-".$row['address']?></p>
                  
                  <p class="description">
                    <?php echo $row['university_details'];
                    
                    
                    if($row['link'] != ""){
                      ?>
                       <a href="<?php echo $row['link'] ?>" target="_blank" class="btn btn-sm btn-primary mb-2 offset-md-6">Open Website</a>
                      <?php
                    }
                    
                    ?>
                    
                  </p>
                    
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