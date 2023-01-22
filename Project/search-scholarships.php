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
                        $priceRange = "";
                        if(isset($_POST['price'])){
                            
                            if($price ==1 ){
                               $priceRange = " OR `price` <= '500000' ";
                            }else if ($price == 2){
                              $priceRange = " OR `price` <= '1000000' ";
                            }else if($priceRange == 3){
                              $priceRange = " OR `price` >= '100000' ";
                            }
                        }
                       $query = "SELECT * FROM scholarships WHERE `country` LIKE '%$country%' ".$priceRange." OR institute_name= '$institute_name'
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
                        $iname ="";
                      if(isset($institute_name) && $institute_name != ""){
                        $iname = "OR university_name LIKE '%$institute_name%'";
                      }
                       $query = "SELECT * FROM universities WHERE `country` ='$country' $iname "; 
                        
                        $result = $db->executeQuery($query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                          ?>
                             <div class="col-lg-4 templatemo-item-col all soon">
                         <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                      
                          </div>
                          <a href="university-details.php?id=<?php echo $row['university_id'] ?>"><img height="300px" width="300px" onerror="https://cdn.britannica.com/85/13085-050-C2E88389/Corpus-Christi-College-University-of-Cambridge-England.jpg" src="<?php echo   $row['university_image'] ?? "s" ?>" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                          
                          <a href="university-details.php?id=<?php echo $row['university_id'] ?>"></a>
                        <h3 class="p-2 text-center"><b></b> <?php echo $row['university_name'] ?> </h3>
                        <p class="p-2"><b></b> <?php echo $row['country']. "-" . $row['city']?> </p>
                          <div class="row">
                          <?php 

                            if($row['link'] != ""){
                              ?>
                              <a href="<?php echo $row['link'] ?>" target="_blank" class="btn btn-sm btn-primary mb-2 ">Open Website</a>
                              <?php
                            }

                            ?>
                            <a href="university-details.php?id=<?php echo $row['university_id'] ?>" class="btn btn-sm btn-danger ">View University Details</a>
                                                      </div>
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