<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h2>Home Page</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p><strong>Welcome<?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <!-- buttons to another page --> 

    <div class= "linkButtons">
        <a href="viewData.php"> view data</a><br>
     </div>


     <div class= "linkButtons">
        <a href="createPage.php"> create page</a><br>
     </div> 

      <div class= "linkButtons">
        <a href="createPost.php"> create post</a><br>
     </div> 

     <div class= "linkButtons">
        <a href="updatePage.php"> update page name</a><br>
     </div> 

     <div class= "linkButtons">
        <a href="total.php"> comment and post count by date</a><br>
     </div> 

     <div class= "linkButtons">
        <a href="deleteProfile.php">delete profile</a><br>
     </div> 

     <div class= "linkButtons">
        <a href="showPage.php">search pages</a><br>
     </div> 

      <div class= "linkButtons">
        <a href="profilePosts.php">find posts</a><br>
     </div> 

    <!-- end buttons to another page -->

</div>
    
</body>
</html>