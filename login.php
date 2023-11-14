
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
    margin-top: 59px;
    background-color: #9FBB73;
}
.href{
    margin-left: 19px;
}
    a{
        color:blue;
        text-decoration: none;

    }
    .bg{
        background-color: #9FBB73;
    }
    
    .form-group{
        padding: 15px;
    }
    .space{
        letter-spacing: 6px;
    }
.close{
    margin-left: 50px;
}
</style>

</head>
<?php
$error="";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM users WHERE email = '$email' AND password='$password'"; 
    $result=mysqli_query($connection,$query);
    $count = mysqli_num_rows($result);
    if($count===1){
       
        session_start();
        $user_array =mysqli_fetch_assoc($result);

        $_SESSION['user_session']=$user_array;
        if($user_array['role'] != 'admin'){
            header('location:us.php');
        }else{
            header('location:admindashboard.php');

        }
    
    } 

else{
     
   }


}
    mysqli_close($connection);

?>

<body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
           
               
           </div>
            </div>
                <div class="card-body cd">
                   <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <div class="card cd">
                    <div class="card-header"> Login</div>
                    <div class="card-body"> 
                       
                      <form action="login.php" method="post">
                      <?php if($error != ""):?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong class="space"><?php echo $error; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <?php endif ?>
                        <div class="form-group"><label>Enter EmailAddress :</label>
                        <input type="text" name="email" class="form-control pd"> 
                       
                     </div>
                     
                      <div class="form-group"><label>Password :</label>
                        <input type="text" name="pass" class="form-control pd "> 
                        
                     </div>
                  
                     
                      
                    <div class="col-md-3"></div>
                   </div>
                   <div class="card-footer">
                   <div class="row">
                        <div class="col-md-4">
                            <button type="submit" name ="submit" class="btn btn-secondary">LOGIN</button>
                        </div>
                        <div class="col-md-8">
                            <p>If you have no accountyet?<i><a href="reg.php">Register Here</a></i></p>
                        </div>
                     </div>  
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
