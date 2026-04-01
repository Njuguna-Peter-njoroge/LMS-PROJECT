
<?php
include("php/config.php");

// SIGN UP
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $verify_query = mysqli_query($con, "SELECT Email FROM Users WHERE Email='$email'");

    if(mysqli_num_rows($verify_query) != 0 ) {
        $error = "This email is used by another user!";
    } else {
        mysqli_query($con, "INSERT INTO Users (name, Email, Password) 
        VALUES ('$name','$email','$password')");

        $success = "Registration successful!";
    }
}

// LOGIN
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM Users WHERE Email='$email'");
    $user = mysqli_fetch_assoc($query);

    if($user && password_verify($password, $user['Password'])) {
        header("Location: courses.php");
        exit();
    } else {
        $error = "Invalid login details";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auth Switch</title>
<link rel="stylesheet" href="/lms_backup/styling.css">


</head>

<body>


  <?php if(isset($error)): ?>
    <div class="message">
        <p><?php echo $error; ?></p>
                <a href="javascript:self.history.back()" class="btn">Go Back</a>

        
    </div>
<?php endif; ?>

<?php if(isset($success)): ?>
    <div class="message">
        <p><?php echo $success; ?></p>
        <a href="register.php" class="btn">Login Now</a>
    </div>
<?php endif; ?>





<?php if(!isset($success) && !isset($error)): ?>
<div class="container" id="container">
    <!-- your forms -->





        
    <!-- IMAGE -->
    <div class="image-panel"></div>

 

    <!-- FORM SIDE -->
    <div class="form-container">

  


        
        <!-- LOGIN -->
        <form action="" method="POST" class="form login">
            <h2>Login </h2>


            <div class="field input">
                <label for="email">Email</label>
                            <input type="email" placeholder="Email" id="email" name="email" required>


            </div>


                 <div class="field input">
                             <label for="password">Password</label>
                            <input type="password" placeholder="password" name="password" id="password" required>

            </div>         
            
            
<button type="submit" name="login">Login</button>
            <p>Don't have an account?</p>
            <button onclick="toggle()" type="button" class="toggle-btn">Sign Up</button>
        </form>


        <!-- SIGN UP -->
        <form  action="" method="POST" class="form sign-up">
            <h2>Sign Up</h2>
         
            <div class="field input">
                <label for="name">Name</label>
                            <input type="text" placeholder="Enter Your Name" id="name" name="name" required>


            </div>


                 <div class="field input">
                             <label for="email">email</label>
                            <input type="email" placeholder="email" id="email" name="email" required>

            </div>         
            




            <div class="field input">
                <label for="password">Passsword</label>
                            <input type="password" placeholder="password" id="password" name="password" required>


            </div>


                 <div class="field input">
                             <label for="confirm_password">Confirm Password</label>
                            <input type="password" placeholder="confirm_password" id="confirm_password" name="confirm_password" required>

            </div>         
            

<input type="submit" class="btn" name="submit" value="Sign Up">                     
            <p>Already have an account?</p>
            <button onclick="toggle()" type="button">Login</button>
        </form>

    </div>

</div>
<?php endif; ?>
<script>
function toggle() {
    document.getElementById("container").classList.toggle("active");
}
</script>

</body>
</html>