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
    margin-top: 80px;
}
.href{
    margin-left: 19px;
}
    a{
        color: white;
        text-decoration: none;

    }
    .float-right{
    float: right 30px;
    }
</style>
</head>
<?php
 session_start();
 if( $_SESSION['user_session']){

     if($_SESSION['user_session']['role']!="user"){
          header('location:admindashboard.php');
     }
     
 }
 else{
 header('location:login.php');
 }
 
 
 ?>
<body>
  <div class="container-fluid">
    
      <div class="card">
        <div class="card-header">
            <div class="row">
              
                <div class="col-md-2">
                  
                </div>
            </div>
            <div class="card-body">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-titile">
                                 
                            </div>
                            <div class="card-body"> <h4> User Dashboard</h4>
                                Name : <?php  echo $_SESSION['user_session']['name'];?><br>
                                Email : <?php  echo $_SESSION['user_session']['email'];?><br>
                                Address : <?php  echo $_SESSION['user_session']['address'];?><br>
                                Password : <?php  echo $_SESSION['user_session']['password'];?><br>
                                <div class="card-footer"><div class="row">
                                    <div class="col-md-8">
                                        <form action="logout.php" method="GET">
                                    <button type="submit"  name="logout" class="btn btn-danger float-right mt-auto btn-sm" onclick="return confirm('Are you sure to logut?')">Logout</button>
                                 </form></div>
                                    <div class="col-md-4"> <button class="btn btn-primary btn-sm">update</button></div>
                                </div></div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <div class="col-md-8">
                   
              
             </div>
                




                        
                       
               
            
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>