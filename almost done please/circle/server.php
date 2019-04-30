<?php
session_start();

// initializing variables profile
$profile_id = "";
$Fname    = "";
$Lname    = "";
$username = "";
$password = "";
$email    = "";
$phone_num = "";
$country = "";
$city = "";

// initializing variables page
$page_id = "";
$pageName = "";
$description = "";
$category = "";

// initializing variables post
$post_id = "";
$postDescription = "";
$type = "";


//initializing update post name
$newName = "";

$queryDate = "";


$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', '10001');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $profile_id = mysqli_real_escape_string($db, $_POST['profile_id']);
  $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
  $Lname = mysqli_real_escape_string($db, $_POST['Lname']);
  $phone_num = mysqli_real_escape_string($db, $_POST['phone_num']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($profile_id)) { array_push($errors, "Profile ID is required"); }
  if (empty($Fname)) { array_push($errors, "First name is required"); }
  if (empty($Lname)) { array_push($errors, "Last name is required"); }  
  if (empty($phone_num)) { array_push($errors, "Phone Number is required"); }
  if (empty($country)) { array_push($errors, "Country name is required"); }
  if (empty($city)) { array_push($errors, "City name is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM profiles WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO profiles (profile_id, Fname, Lname, username, password, email, phone_num, country) 
  			  VALUES('$profile_id', '$Fname', '$Lname', '$username', '$password', '$email', '$phone_num', '$country')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM profiles WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

// create page
if (isset($_POST['create_page'])) {
  // receive all input values from the form
  $page_id = mysqli_real_escape_string($db, $_POST['page_id']);
  $pageName = mysqli_real_escape_string($db, $_POST['pageName']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  


    $query = "INSERT INTO pages (page_id, name, description, category) 
          VALUES('$page_id', '$pageName', '$description', '$category')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "You created page";
    header('location: index.php');
    }

  

// CREATE POST
if (isset($_POST['create_post'])) {
  // receive all input values from the form
  $post_id = mysqli_real_escape_string($db, $_POST['post_id']);
  $postDescription = mysqli_real_escape_string($db, $_POST['description']);
  $page_id = mysqli_real_escape_string($db, $_POST['page_id']);
  $profile_id = mysqli_real_escape_string($db, $_POST['profile_id']);
  $type = mysqli_real_escape_string($db, $_POST['type']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM profiles WHERE profile_id='$profile_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['profile_id'] != $profile_id) {
      array_push($errors, "Profile does not exist");
    }

  }

  $user_check_query = "SELECT * FROM pages WHERE page_id ='$page_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['page_id'] != $page_id) {
      array_push($errors, "Page does not exist");
    }

  }


  if (count($errors) == 0) {
    //$password = md5($password_1);//encrypt the password before saving in the database

    $_date = date("Y-m-d");
    //$timestamp = date("Y-m-d h:i:sa");
    //$original = TRUE;

    $query = "INSERT INTO posts (post_id, description, profile_id, type, page_id,_date) 
          VALUES('$post_id', '$description', '$profile_id', '$type', '$page_id','$_date')";


    if(mysqli_query($db, $query))
    {
     $_SESSION['success'] = "Successful Post";
     $_SESSION['username'] = $username;
    header('location: index.php');
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
    
  }
}


// update page
if (isset($_POST['update_page'])) {
  // receive all input values from the form
  $newName = mysqli_real_escape_string($db, $_POST['new_name']);
  $page_id = mysqli_real_escape_string($db, $_POST['page_id']);



  $query = "UPDATE pages SET name = '$newName' WHERE page_id = '$page_id'";
    if(mysqli_query($db, $query))
    {
     $_SESSION['success'] = "Name changed";
     $_SESSION['username'] = $username;
    header('location: index.php');
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }

  }

  // count posts and comments

  
  
if (isset($_POST['total_button'])) {

  $commentCount = "";
  $postCount = "";

  // receive all input values from the form
  $queryDate = mysqli_real_escape_string($db, $_POST['date_input']);



  $user_check_query = "SELECT COUNT(*) as total FROM posts WHERE _date='$queryDate'";
  $result = mysqli_query($db, $user_check_query); 
  $inter = mysqli_fetch_assoc($result);
  $pageCount = $inter['total'];

  $user_check_query = "SELECT COUNT(*) as total FROM comments WHERE _date='$queryDate'";
  $result = mysqli_query($db, $user_check_query); 
  $inter = mysqli_fetch_assoc($result);
  $commentCount = $inter['total'];

  
 $totalCount = $pageCount + $commentCount;

 $_SESSION['success'] = "Total Comments/ posts: ". (String)$totalCount;
 $_SESSION['username'] = $username;
 header('location: index.php');
  



  }


  // delete profile
if (isset($_POST['delete_profile'])) {
  // receive all input values from the form
  $profile_id= mysqli_real_escape_string($db, $_POST['profile_id']);



  $query = "DELETE FROM profiles WHERE profile_id = '$profile_id'";
  if(mysqli_query($db, $query))
    {
     $_SESSION['success'] = "Profile Deleted";
     $_SESSION['username'] = $username;
    header('location: index.php');
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }

  // show page
if (isset($_POST['show_page'])) {
  // receive all input values from the form
  $page_id= mysqli_real_escape_string($db, $_POST['page_id']);



  $query = "SELECT * from pages WHERE page_id = '$page_id'";
  if($result = mysqli_query($db, $query))
    {
     
      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          $_SESSION['success'] = "Name: " . $row['name'] ."<br>"."category: " . $row['category'] ."<br>"."Decscription: " . $row['description'];
          $_SESSION['username'] = $username;
          
        }
      }



    header('location: index.php');
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }


  // show list of posts
if (isset($_POST['show_posts'])) {
  // receive all input values from the form
  $profile_id= mysqli_real_escape_string($db, $_POST['profile_id']);



  $query = "SELECT * from posts WHERE profile_id = '$profile_id'";
  if($result = mysqli_query($db, $query))
    {
     
    if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo  $row['post_id']."<br>";
          
        }
      }

     
    //header('location: index.php');
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }


  //view profiles
if (isset($_POST['viewProfiles'])) {
  // receive all input values from the form

  $query = "SELECT * from profiles";
  if($result = mysqli_query($db, $query))
    {
     
      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "Profile ID: ".$row['profile_id']." Name: " . $row['Fname'] ." ".$row['Lname']." username: " . $row['username'] ."password: " . $row['password']." email: ".$row['email']. " phone number: ".$row['phone_num']. " country: ".$row['country']." city: ".$row['city']."<br>";
          
          
        }
      }
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }

  //view comments
if (isset($_POST['viewComments'])) {
  // receive all input values from the form

  $query = "SELECT * from COMMENTS";
  if($result = mysqli_query($db, $query))
    {
     
      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "comment ID: ".$row['comment_id']." comment: " . $row['comment'] ." Profile ID: ".$row['profile_id']." post ID: " . $row['post_id'] ." Date: " . $row['_date']."<br>";
        
          
        }
      }
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }

  //view pages
if (isset($_POST['viewPages'])) {
  // receive all input values from the form

  $query = "SELECT * from pages";
  if($result = mysqli_query($db, $query))
    {
     
      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "page ID: ".$row['page_id']." name: " . $row['name'] ." description: ".$row['description']." category: " . $row['category'] ."<br>";
        
          
        }
      }
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }

//view posts
if (isset($_POST['viewPosts'])) {
  // receive all input values from the form

  $query = "SELECT * from posts";
  if($result = mysqli_query($db, $query))
    {
     
      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "Post ID: ".$row['post_id']." description: " . $row['description'] ." Profile ID: ".$row['profile_id']." date: " . $row['_date'] ." type: " . $row['type']." page ID: ".$row['page_id']."<br>";
        
          
        }
      }
    }
    else {
      array_push($errors, "something is wrong");
      echo "error: ". mysqli_error($db);
    }
  }

  



?>