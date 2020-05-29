<?php

   // $getid = $_GET['editid'];
   // update
  $link = mysqli_connect("localhost", "root", "", "phonebook");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
    if(isset($_POST['submit'])){
      $getid=$_POST['id'];
      $fname = $_POST['name'];
      $date = $_POST['date'];
      $phone = $_POST['phone'];
      $address = $_POST['mail'];
      $qu = "UPDATE add_contact SET contact_name='$fname', dateofbirth='$date', phone='$phone',address='$address' 
     WHERE id = '$getid'";
      $run_query =mysqli_query($link, $qu);
    if($run_query){
      header("Location:index.php"); 
    }
  }
  else{
    $getid = $_GET['editid']; // GETTING ID FROM URL
    $query = "SELECT * FROM add_contact WHERE id ='$getid' ";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
  }
?>

<html>
<head>
  <title>Phonebook</title>
  <link rel="stylesheet" type="text/css" href="add_contact.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h3>RM-PHONEBOOK</h3>
    </div>

    <div class="feed">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
        <h3><label class="back" onclick="window.open('index.php','_SELF')">&#8592;</label>&nbsp;&nbsp;Edit contact</h3><br>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <label>Name</label><br>
        <input class="full-name" type="text" name="name" value= "<?php echo $row['contact_name'];?>" autocomplete="off"><br>
        <label>DOB</label><br>
        <input type="date" name="date" value= "<?php echo $row['dateofbirth'];?>"><br>
        <label>Mobile Number</label><br>
        <input type="text" name="phone" id="mobile" class="phone"> value= "<?php echo $row['phone'];?>" minlength=10 autocomplete="off"><span>&#8853;</span><br>
        <label>Email</label><br>
        <input type="mail" name="mail" id="mail" value= "<?php echo $row['address'];?>" autocomplete="off"><br><br>
        <button name="submit" class="submit">Update</button>
      </form>
    </div>
  </div>
</body>
</html>