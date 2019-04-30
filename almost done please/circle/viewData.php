<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>View data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h2>View data</h2>
</div>
<div class="content">
    
    

    <!-- create page field -->
    <form method="post" action="viewData.php">
    <?php include('errors.php'); ?>
  

    <div class="input-group">
      <button type="submit" class="btn" name="viewProfiles">Profiles</button>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="viewComments">Comments</button>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="viewPages">Pages</button>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="viewPosts">Posts</button>
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