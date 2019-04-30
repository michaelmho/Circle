<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Circle Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Profile ID</label>
      <input type="text" name="profile_id" value="<?php echo $profile_id; ?>">
    </div>

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="Fname" value="<?php echo $Fname; ?>">
    </div>

    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="Lname" value="<?php echo $Lname; ?>">
    </div>

    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    
   <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" name="phone_num" value="<?php echo $phone_num; ?>">
    </div>

    <div class="input-group">
      <label>Country</label>
      <input type="text" name="country" value="<?php echo $country; ?>">
    </div>

    <div class="input-group">
      <label>City</label>
      <input type="text" name="city" value="<?php echo $city; ?>">
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>

    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>