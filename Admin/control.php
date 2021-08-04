<?php
// include the database connection
include_once "includes/db.inc.php";
// handling the functionalty
function fetchAuthor(){
    GLOBAL $conn;
    $sql = "SELECT tm_id, tm_name FROM `team_members` WHERE 1";
    $result = $conn->query($sql);
    while($rows = $result->fetch_array()){
        echo "<option value='".$rows[0]."'>".$rows[1]."</option>"; 
    }
}
// add a service
function addService(){
    GLOBAL $conn;
    if(isset($_POST['addService'])){
        $serviceTitle = $conn->real_escape_string($_POST['serviceTitle']);
        $serviceDescription = $conn->real_escape_string($_POST['serviceDescription']);
        $serviceAuthor = $conn->real_escape_string($_POST['serviceAuthor']);
        $date = $_POST['date'];
        // handling the file or the image
        $img=$_FILES['img']['name'];
        $img_type=$_FILES['img']['type'];
        $img_tmp_name=$_FILES['img']['tmp_name'];
        $img_size=$_FILES['img']['size'];
        
        try{
            if($img_type=="image/jpeg" || $img_type=="image/jpg" || $img_type=="image/png" || $img_type=="image/gif"){
                if($img_size<=50000000){
                $pic_name=time()."_".$img_name;
                move_uploaded_file($img_tmp_name,"../Image/".$pic_name);
                $query = "INSERT INTO `services`(`s_title`, `s_description`, `s_image`, `s_author`,  `s_date`) VALUES ('$serviceTitle','$serviceDescription','$pic_name','$serviceAuthor','$date')";
               
                if(!$conn->query($query)){
                    throw new Exception("Query error".$conn->error);
                }
                else{
                    $message ="Updated Successfully";
                    Header("Location: service_view.php?message=$message");
                }
                }
                else{
                    throw new Exception("The image size should be less than 50Mb");
                }
            }
            else{
               throw new Exception("Image type should be JPEG, JPG ,PNG ,GIF.<br> TRY AGAIN");
            }
        }
        catch(Exception $e){
            $e=$e->getMessage();
            Header("Location: error_message.php?message=$e");
        }
    }
}
addService();
function fetchService(){
    GLOBAL $conn;
    $sql ="SELECT `s_id`, `s_title`, `s_description`, `s_image`, `s_author`, `s_status`, `s_date` FROM `services` WHERE 1";
    try{
        $result = $conn->query($sql);
        while($rows = $result->fetch_assoc()){
            $s_author = $rows['s_author'];
            $sql2 = "SELECT `tm_name` FROM `team_members` WHERE `tm_id`='$s_author'";
            $result2 = $conn->query($sql2);
            $rows2 = $result2->fetch_assoc();
        echo"
        <tr>
            <td>".$rows['s_title']."</td>
            <td>".$rows2['tm_name']."</td>
            <td><label class='badge badge-warning'>".$rows['s_status']."</label></td>
            <td><label class='badge badge-danger'><a href='service_view.php?Delete=".$rows['s_id']."'>Delete</label></td>
            <td><label class='badge badge-success'><a href='service_edit.php?Edit=".$rows['s_id']."'>Edit</a></label></td>
        </tr>
            
        ";
        }
    }catch(Exception $e){
        
        $e=$e->getMessage();
        Header("Location: error_message.php?message=$e");
    }
}

function deleteService(){
    Global $conn;
    if(isset($_GET['Delete'])){
        $s_id = $_GET['Delete'];
        $sql = "DELETE FROM `services` WHERE `s_id` = '$s_id'";
        try{
            ///statement
            $result = $conn->query("SELECT `s_image` FROM `services` WHERE `$s_id`='$s_id'");
            if(!$result){
                throw new Exception("Incorrect syntax");
            }else{
                
            }
        }catch(Exception $e){
            $e=$e->getMessage();
            Header("Location: error_message.php?message=$e");
        }
    }
}
deleteService();



function addPost(){
    GLOBAL $conn;
    if(isset($_POST['addpost'])){
        $postTitle = $conn->real_escape_string($_POST['postTitle']);
        $postDescription = $_POST['postDescript'];
        $postAuthor = $conn->real_escape_string($_POST['postAuthor']);
        $postdate = $_POST['postdate'];
        
        
        try{           

                $query1 = "INSERT INTO `posts`(`p_id`, `p_title`, `p_description`, `p_photo`, `p_date`, `p_author`) VALUES (null, '$postTitle','$postDescription','haa','$postdate', '$postAuthor')";
               
                if(!$conn->query($query1)){
                    throw new Exception("Query error".$conn->error);
                }
                else{
                    $message ="Updated Successfully";
                    Header("Location: post_view.php?message=$message");
                }
                
   
        }
        catch(Exception $e){
            $e=$e->getMessage();
            Header("Location: error_message.php?message=$e");
        }
    }
    
}
addPost();

?>