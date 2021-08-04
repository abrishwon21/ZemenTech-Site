<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/ZemenTech/Home/includes/db.inc.php";

class Users{
   private $user_id;
   private $user_email;
   private $user_password;
   private $user_contact;
  
   public function setUserId($user_id){ $this->user_id = $user_id; }
   public function setUserEmail($email){ $this->user_email = $email; }
   
   public function setUserPassword($password){ $this->user_password =$password;}
   public function setUserContact($contact){ $this->user_contact = $contact;}
   
   


   
   public function getUserId(){ return $this->user_id; }
   
   public function getUserEmail(){ return $this->user_email; }
   
   public function getUserPassword(){ return $this->user_password; }
   public function getUserContact(){ return $this->user_contact; }



}

class TeamMembers extends Users{

public function FetchTeamMembers(){ 
        Global $conn;
        $tm_members = "SELECT * FROM `team_members`";
        $msg = "We are sorry ";
       try{
            $result =$conn->query($tm_members);
            
           if(!$result){
               throw new Exception("No Team Members exists!");
            }else{
            return $result;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
   }
  
   function getTeamAddress($tm_id){
       Global $conn;
       try{
           $result = $conn->query("SELECT * FROM `team_member_address` where `tm_id` = '$tm_id' ");
           if($result){
               throw new Exception("No Address Found!");

           }else{
               return $result->fetch_assoc();
           }
        }
               catch(Exception $e){
                   echo $e->getMessage();
               }
           
       
   }
}

class Services {
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
}
?>