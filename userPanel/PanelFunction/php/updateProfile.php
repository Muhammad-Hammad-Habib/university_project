<?php
require "oppDb.php";
session_start();
$userId=$_SESSION['user_id'];
$db = new oppDb();

if($_FILES['profileImage']['name'] != ''){
        $filename = $_FILES['profileImage']['name']; // Get the Uploaded file Name.
        $extension = pathinfo($filename,PATHINFO_EXTENSION); //Get the Extension of uploded file.
        $valid_extensions = array("jpg","jpeg","png");
    
        if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
            $new_name = rand() . '.jpeg';
            $check_name = $db->sql("SELECT COUNT(*) FROM user_account WHERE profile_image = '$new_name' " ) ;
            // print_r($check_name[0]['COUNT(*)']);
            if($check_name[0]['COUNT(*)'] == 0){
                // echo "DOne file condition";                
                $path = "../../../images/profile/" . $new_name;
                if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $path)){ // Upload the Image File on server path
                    $db->update("user_account",['profile_image' => $new_name]," Uid = {$userId} ");
                    echo "done";
                }
                else{
                    echo '0';
                }                
            }else{
                echo "Should be create the random number again";
            }
        }
    else{
        echo '0';
    }
}
else{
    echo "First condition";
}
?>