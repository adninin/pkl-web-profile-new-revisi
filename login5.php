<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PT. Megah Megalon Industries</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{padding-top: 250px;}
    </style>
</head>
<body> 
    <div class="container">
       <?php
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($username=="admin" && $password=="mmimsds"){
                echo "<div class='alert alert-success' role='alert'>Username dan Password Benar</div>";     
                header("location:msds.html");            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Username dan Password Salah</div>";
            }
         

        }
        ?>
        <div class="col-md-4 col-md-push-4 ">
            <form method="post">
              <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" name="login" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>