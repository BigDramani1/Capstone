<?php 
    require 'const.php';
    $uniqueUser=true;
    $uniquePassword = true;
    $sqlconnection = new mysqli($servername, $username, $password, $databasename);

    if ($sqlconnection->connect_error) {
        die("Connection failed: " . $sqlconnection->connect_error);
    }

    // Validating if email is empty or not unique with ajax post
    if(isset($_POST['email_'])){  
        $email = $_POST['email_'];
        $sqlcheck = "SELECT email FROM sign_up_buyer  WHERE email = '$email';";
        $result = $sqlconnection->query($sqlcheck);

        if (!$result) {
            trigger_error('Invalid query: ' . $sqlconnection->error);
        }
        //if sql result table has 0 rows, email is unique
        if($result->num_rows > 0){
            $uniqueEmail = true;//Not unique     
        }else{
            //if sql result table has 0 rows but email is empty
            if($email == ''){
                $uniqueEmail = 2;   
            }
            else{
                $uniqueEmail = false;
            }
        }
        
                
        //give back to Signup.js to validate
        if($uniqueEmail || $uniqueEmail == 2){
            echo $uniqueEmail;
        }
         
    }

    // Validating if password is empty or not unique with ajax post    
    if(isset($_POST['password_'])){  
        $password = $_POST['password_'];
        
        $sqlcheck = "SELECT pwd FROM sign_up_buyer WHERE pwd = '$password';";
        $result = $sqlconnection->query($sqlcheck);
        

        if (!$result) {
            trigger_error('Invalid query: ' . $sqlconnection->error);
        }
        //if sql result table has 0 rows, password is unique
        if($result->num_rows > 0){
            $uniquePassword = true;//Not unique     
            }
        else{
            //if sql result table has 0 rows but password is empty
            if($password == ''){
                $uniquePassword = 3;   
            }
            else{
                $uniquePassword = false;
            }
        }
                
        //give back to Signup.js to validate
        if($uniquePassword || $uniquePassword == 3){
            echo $uniquePassword;
        }
         
    }

    // Validating if firstname is empty with ajax post
    if(isset($_POST['firstname_'])){
        $firstname = $_POST['firstname_'];
        $emptyfirstName = false;
        //if first name is empty
        if($firstname == ''){
            $emptyfirstName = true;   
        }else{
            $emptyfirstName = false;
        }
        echo $emptyfirstName;
    }
    
    // Validating if lastname is empty with ajax post
    if(isset($_POST['lastname_'])){
        $lastname = $_POST['lastname_'];
        $emptylastName = false;
        //if last name is empty
        if($lastname == ''){
            $emptylastName = true;   
        }else{
            $emptylastName = false;
        }
        echo $emptylastName;
    }

    // Validating if phone is empty with ajax post
    if(isset($_POST['phone_'])){
        $phone = $_POST['phone_'];
        $emptyphone = false;
        //if phone is empty
        if($phone == ''){
            $emptyphone = true;   
        }else{
            $emptyphone = false;
        }
        echo $emptyphone;
    }

    // Validating if repeatpassword is empty with ajax post
    if(isset($_POST['password2_'])){
        $repeatpassword = $_POST['password2_'];
        $emptyrepeatpassword = false;
        //if repeated password is empty
        if($repeatpassword == ''){
            $emptyrepeatpassword = true;   
        }
        else{
            $emptyrepeatpassword = false;
        }
        echo $emptyrepeatpassword;
    }


    if(isset($_POST['submit_'])){

        $formEmpty = false;
        //Check that values are not Empty
        if(!isset($_POST['email_']) &&
        !isset($_POST['firstname_']) &&
        !isset($_POST['lastname_']) &&
        !isset($_POST['phone_']) &&
        !isset($_POST['password_']) &&
        !isset($_POST['password2_'])){
            $formEmpty = true;
            echo $formEmpty;
        }else{
            //check that username is unique
            if(isset($_POST['email_'])){  
                $email = $_POST['email_'];
                $sqlcheck = "SELECT email FROM sign_up_buyer WHERE email = '$email';";
                $result = $sqlconnection->query($sqlcheck);
                if (!$result) {
                    trigger_error('Invalid query: ' . $sqlconnection->error);
                }
                //if sql result table has 0 rows, username is unique
                if($result->num_rows > 0){
                    //Needed so form is not submited to db
                    //without this checker, $formEmpty will just become false and
                    //hence submit
                    $formEmpty = 5;//Not unique 
                    
                }     
            }
            //check that password is unique
            else if(isset($_POST['password_'])){  
                $password = $_POST['password_'];
                $sqlcheck = "SELECT pwd FROM sign_up_buyer WHERE pwd = '$password';";
                $result = $sqlconnection->query($sqlcheck);
                if (!$result) {
                    trigger_error('Invalid query: ' . $sqlconnection->error);
                }
                //if sql result table has 0 rows, password is unique
                if($result->num_rows > 0){
                    //Needed so form is not submited to db
                    //without this checker, $formEmpty will just become false and
                    //hence submit
                    $formEmpty = 6;//Not unique  
                    
                }
            }
            else{
                $formEmpty = false;
            }
        
        
        }

        if($formEmpty == false){
            $fname= $_POST['firstname_'];
            $email= $_POST['email_'];
            $lname= $_POST['lastname_'];
            $phone= $_POST['phone_'];
            $password= password_hash($_POST['password_'], PASSWORD_DEFAULT);
            $sqlcheck = "INSERT INTO sign_up_buyer (phone, fname, lname, phone, pwd) VALUES ('$phone','$fname', '$lname', '$phone', '$password');";
            $sqlconnection->query($sqlcheck);
            
        }

        echo $formEmpty; 
      
    }   
?>



