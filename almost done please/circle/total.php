<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>H</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h2>Create Post</h2>
</div>
<div class="content">
    

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <!-- create page field -->
    <form method="post" action="updatePage.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Date</label>
      <input type="date" name="date_input" value="<?php echo $date_input; ?>">
    </div>

  

    <div class="input-group">
      <button type="submit" class="btn" name="total_button">total</button>
    </div>

   
  </form>


    <!-- buttons to another page --> 
     <div class= "linkButtons">
        <a href="index.php"> Back to Profile</a><br>
       </div> 

    <!-- end buttons to another page -->

</div>
    
</body>
</html>