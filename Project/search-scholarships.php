<?php 
    ob_start();
    require_once("includes/header.php");
    require_once("includes/sub-header.php");
?>
 


  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are your searched Results</h6>
          <h2>University  & Scholarships</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container" style="margin-top:-100px">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
  
            <div class="col-lg-12">
              <div class="row grid">
                
                <?php 
                

                    if(isset($_POST['search'])){
                        extract($_POST);

                       $query = "SELECT * FROM scholarships WHERE `country` LIKE '%$country%'  OR institute_name= '$institute_name'
                        OR minimum_cgpa <= '$cgpa'"; 
                        $result = $db->executeQuery($query);
                        while($row = mysqli_fetch_assoc($result)){
                          ?>
                             <div class="col-lg-4 templatemo-item-col all soon">
                         <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                          <span class="bg-warning text-light">Deadline <?php echo $row['deadline'] ?></span>
                          </div>
                          <a href="scholarship-details.php?id=<?php echo $row['scholarship_id'] ?>"><img height="100px" src="admin/<?php echo substr($row['image'],3) ?>" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">  
                          
                          </div>
                          <a href="scholarship-details.php?id=<?php echo $row['scholarship_id'] ?>"><h4>Course - <?php echo $row['qualification'] ?></h4></a>
                        <p class="p-2"><b>Institute Name :  </b> <?php echo $row['institute_name'] ?> </p>
                        <a href="scholarship-details.php?id=<?php echo $row['scholarship_id'] ?>" class="btn btn-sm btn-danger offset-md-6">View Scholarship Details</a>
                        </div>
                      </div>
                    </div>

                    <hr/>
                    
                          <?php
                        }
             
                       
                       $query = "SELECT * FROM universities WHERE `country` LIKE '%$country%'  OR university_name LIKE '%$institute_name%'"; 
                        
                        $result = $db->executeQuery($query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                          ?>
                             <div class="col-lg-4 templatemo-item-col all soon">
                         <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                      
                          </div>
                          <a href="university-details.php?id=<?php echo $row['university_id'] ?>"><img height="300px" width="300px" src="admin/<?php echo substr($row['university_image'],3) ?>" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                          
                          <a href="university-details.php?id=<?php echo $row['university_id'] ?>"></a>
                        <h3 class="p-2 text-center"><b></b> <?php echo $row['university_name'] ?> </h3>
                        <p class="p-2"><b></b> <?php echo $row['country']. "-" . $row['city'] . "-".$row['address']?> </p>
                        <a href="university-details.php?id=<?php echo $row['university_id'] ?>" class="btn btn-sm btn-danger offset-md-6">View University Details</a>
                        </div>
                      </div>
                    </div>
                          <?php
                        }
                        ?>
                        
                        <?php
                    }else{
                      header("location:index.php");
                      die;
                    }
                
                
                ?>
               
          
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <?php 

require_once("includes/footer.php");

?>