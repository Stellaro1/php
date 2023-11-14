<?php
include"database.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
body{
    margin-top: 20px;
}
.href{
    margin-left: 19px;
}
    a{
        color: white;
        text-decoration: none;

    }
    .bg{
        background-color: #9FBB73;
    }
    
    .form-group{
        padding: 15px;
    }
</style>
</head>
<?php
$nameerror="";
$psderror="";
$emaerroe="";
$addresserror="";
$psderror="";
$cpserroe="";
$matcherror="";
if(isset($_POST['submit'])){
 $name = $_POST["uname"];
 $email = $_POST["email"];
$address = $_POST['address'];
$password = $_POST["pass"];
$comfirmpassword=$_POST["cpass"];
if(empty($name)){
$nameerror ="Required";
}
if(empty($email)){
    $emaerroe="Required";
    }
if(empty($address)){
        $addresserror ="Required";
        }
if(empty($password)){
            $psderror="Required";
            }
if(empty($comfirmpassword)){
                $cpserroe ="Required";
                }
                
if($password<>$comfirmpassword){
   $matcherror = "Password is does not  match";
}

 if(!empty($name) && !empty($email) && !empty($address) &&!empty($password)&& !empty($comfirmpassword) && $password==$comfirmpassword){
    
    
    $sql ="INSERT INTO `users`(`name`, `email`, `address`, `password`) VALUES ('$name','$email','$address','$password')";
    $result =mysqli_query($connection,$sql);
    if($result){
     echo "<script> alert('Successfully inserted');</script>";
     header('location:login.php');
    
    }
}
 }               

?>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg">
                <div class="card-header bg">
                   <div class="row">
                    <div class="col-6"><a href="">Registation</a></div>
                    <div class="col-3"></div>
                    <div class="col-3">
                       <i> <a href="home.php" class="href"> << BACK </a>
                        
                    </div>
                   </div>
            </div>
                <div class="card-body cd">
                   <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <div class="card cd">
                    <div class="card-header"> Register </div>
                    <div class="card-body"> 
                      <form action="reg.php" method="post">
                      <div class="form-group"><label>Enter  User Name :</label>
                        <input type="text" name="uname" class="form-control pd<?php if($nameerror != ""){ ?> is-invalid <?php }?>">
                        <span class="text-danger"> <?php  echo $nameerror;?></span>
                       </div>
                        <div class="form-group"><label>Enter EmailAddress :</label>
                        <input type="text" name="email" class="form-control pd<?php if($emaerroe != ""){ ?> is-invalid <?php }?>"> 
                        <span  class="text-danger"> <?php  echo $emaerroe;?></span>
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                         <input  name="address" class="form-control <?php if($addresserror != ""){ ?> is-invalid <?php }?>">
            
                         <span class="text-danger"> <?php  echo $addresserror;?></span>
                      </div>
                      <div class="form-group"><label>Password :</label>
                        <input type="text" name="pass" class="form-control pd <?php if($psderror != ""){ ?> is-invalid <?php }?>"> 
                        <span class="text-danger"> <?php  echo $psderror;?></span>
                     </div>
                     <div class="form-group"><label>Comfirmpassword :</label>
                        <input type="text"name="cpass" class="form-control pd<?php if($cpserroe != ""){ ?> is-invalid <?php }?>"> 
                        <span class="text-danger"> <?php  echo $cpserroe;?></span>
                        <span class="text-danger"> <?php  echo $matcherror;?></span>
                     </div>
                     
                      
                    <div class="col-md-3"></div>
                   </div>
                   <div class="card-footer">
                        <button type="submit" name ="submit" class="btn btn-secondary">Register </button>
                    </div>
                    </div>
                    </form>
                   </div>
                   
                </div>
            </div>
          </div>
        </div>
     </div>
  </body>
</html>
