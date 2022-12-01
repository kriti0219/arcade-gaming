<?php
session_start();

include('config/db_connect.php');

$succes=0;
$email_var=0;
$names = $email = $passwords = '';
$error = array('email'=>'','names'=>'', 'passwords'=>'');

if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['names']);
    // echo htmlspecialchars($_POST['passwords']);

    //check email
    if(empty($_POST['email'])){
        $error['email']= 'An email is required <br />';
    } 
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email']= 'Email must be a valid email address';
        }
    }

     //check names
     if(empty($_POST['names'])){
        $error['names']=  'A user name is required <br />';
    } 
    else{
        $names = $_POST['names'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $names)){
            $error['names']= 'names must be letters and spaces only';
        }
    }

     //check passwords
     if(empty($_POST['passwords'])){
        $error['passwords']='A password is required <br />';
    } 
    else{
        $passwords=$_POST['passwords'];

    }

        //checking if any error while submitting 
        if(array_filter($error)){
           // echo 'errors in the form';
        }
        else {
            
            // "mysqli_real_escape_string" this helps unwanted or harmful data to get into our database
            $email = mysqli_real_escape_string($conn, $_POST['email']); 
            $names = mysqli_real_escape_string($conn, $_POST['names']);
            $passwords = mysqli_real_escape_string($conn, $_POST['passwords']);
        

            $sql = "SELECT * FROM pizzas where email= '$email'";
            $result = mysqli_query($conn, $sql);
            if($result && mysqli_num_rows($result) > 0){
                $user_data=mysqli_fetch_assoc($result);
                if($user_data['email']==$email){
                    
                    $email_var=1;
                }
            }
            else{
                 //create sql
            
    
            //save to db and check
            if(mysqli_query($conn, $sql)){
                 $confirm_email=$_POST['email'];
                $confirm_name=$_POST['names'];
                $confirm_password=$_POST['passwords'];
                $sql = "INSERT INTO pizzas(names,passwords,email,scores) VALUES('$confirm_name','$confirm_password','$confirm_email',0)";
                mysqli_query($conn,$sql);
                
                $_SESSION['useremail']=$_POST['email'];
                $_SESSION['username']=$_POST['names'];
                $_SESSION['userpassword']=$_POST['passwords'];
                //success
                $succes=1;
            }
            else{
                //error
                echo 'query error' . mysqli_error($conn);
            }

            //echo 'form is valid';
            }

           


           
        }

} // end of POST check

?>