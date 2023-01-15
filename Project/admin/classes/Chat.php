<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//
    if(isset($_POST)){
        extract($_POST);


        


        $admin = $_SESSION['admin'][0];
        $query  = "SELECT * FROM chatting WHERE `admin_id`='$admin' AND `agent_id`='$id'";
      
        $result = $db->executeQuery($query);
        if($result){
            ?>
             <div class="card shadow-sm bg-white p-2" style="overflow:scroll">
                <?php  
                
                    if($result->num_rows > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['message_by'] == "Admin"){
                                ?>
                                <div class="row m-2">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"></div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 bg-primary text-light p-2"><?php echo $row['message']  . "<br/>" . "<span style='font-size:10px'>Admin</span>" ?></div>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="row m-2">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 bg-light text-primary p-2"><?php echo $row['message'] . "<br/>" . "<span style='font-size:10px'>Agent</span>" ?></div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"></div>
                                  
                                </div>
                                <?php
                            }
                            ?>
                           
                            <?php
                        }
                    }else{
                        ?>
                          <div class="row m-2">
                                    <div class="col-md-12 col-lg-12 alert alert-warning col-xs-12 col-sm-12">No Messages Found!</div>
                                </div>
                        <?php
                    }
                
                ?>
             </div>
             <div class="row mt-2">
                <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
                    <input  id="message" name="message" placeholder="Enter Message here..." class="form-control"/>
                </div>
                <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
                    <button agentId="<?php echo $id ?>" id="sendButton" class="btn btn-primary ">Send</button>
                </div>
            </div> 
            <script>
                $("#sendButton").click(function(){
                    var id = $(this).attr("agentId");
                var message  = $("#message").val();
                if(message == ""){
                    Swal.fire(
                        'Message',
                        'Empty message cannot be send!',
                        'error'
                        )
                        return 0;
                }else{
                    $.ajax({
                        url: "classes/send.php",
                        type:"POST",
                        data:{id:id,message:message,type:"sendMessage"},
                        success: function(html){
                            Swal.fire(
                                'Successfull',
                                'Message sent successfull',
                                'success'
                                )
                            
                                $.ajax({
                            url: "classes/chat.php",
                                type:"POST",
                                data:{id:html},
                                success: function(data){
                                    $("#messageBody").empty();
                                    $("#messageBody").html(data);
                                }
                            });

                        }
                       
                    });
                }


            })
            </script>  
            <?php
        }
    }

?>
