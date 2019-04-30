<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>find posts</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h2>find posts</h2>
</div>
<div class="content">
    
    

    <!-- create page field -->
     <form method="post" action="profilePosts.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Profile ID</label>
      <input type="text" name="profile_id" value="<?php echo $profile_id; ?>">
    </div>

  

    <div class="input-group">
      <button type="submit" class="btn" name="show_posts">search</button>
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