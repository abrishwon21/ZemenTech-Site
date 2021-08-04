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
            echo $msg.$e->getMessage();
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
class Customer extends Users{
    public function addContactForm(){
        GLOBAL $conn;
       
           $this->setUserEmail($_POST['email']);
            $username = $_POST['fullname'];
            $email = $this->getUserEmail();
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $insert_data = "INSERT INTO `feedback`(`fb_id`, `fb_uname`, `fb_email`, `fb_subject`, `fb_message`, `fb_status`) VALUES ('','$username','$email','$subject','$message','')";
            try{
                $result = $conn->query($insert_data);
                if(!$result){
                    throw new Exception("Please check your form again");
                }else{
                    echo "<script type='text/javascript'>alert('Thank you for contacting, we\'ll be back just in a minute ')</script>";
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        
    }
}
if(isset($_POST['submit_contact'])){
    $cust = new Customer();
    $cust->addContactForm();
}
class Services {
    public function fetchService(){
        GLOBAL $conn;
        $serviceMessage = "We are sorry " ;
        try{
            $result = $conn->query("SELECT `s_id`, `s_title`,LEFT(`s_description`, 80) as excerpt, `s_description`, `s_image` FROM `services` where 1");
            if(!$result){
                throw new Exception($serviceMessage."No Service Found!");
            }else{
                return $result;
            }          
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>