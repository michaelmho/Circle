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
    <form method="post" action="createPost.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Post ID</label>
      <input type="text" name="post_id" value="<?php echo $post_id; ?>">
    </div>

    <div class="input-group">
      <label>Description</label>
      <input type="text" name="description" value="<?php echo $description; ?>">
    </div>

    <div class="input-group">
      <label>Profile ID</label>
      <input type="text" name="profile_id" value="<?php echo $profile_id; ?>">
    </div>

    <div class="input-group">
      <label>Page ID</label>
      <input type="text" name="page_id" value="<?php echo $page_id; ?>">
    </div>

     <div class="input-group">
      <label>Type</label>
      <input type="text" name="type" value="<?php echo $type; ?>">
    </div>


    <div class="input-group">
      <button type="submit" class="btn" name="create_post">Post</button>
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