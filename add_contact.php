<!DOCTYPE html>

<?php
	$link = mysqli_connect("localhost", "root", "", "phonebook");
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$date = $_POST['date'];
		$phone = $_POST['phone'];
		$address = $_POST['mail'];
		$sql = "INSERT INTO add_contact(contact_name, dateofbirth,phone,address) VALUES ('$name','$date','$phone','$address')";

		$result= mysqli_query($link,$sql);
		if(!$result){
	   		echo '<p class="aderrorMsg">There was error while adding record</p>'; 
   		}	
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
		<div class="feed feed1">
			<form action="add_contact.php" method="post">
				<h3><label class="back" onclick="window.open('index.php','_SELF')">&#8592;</label>&nbsp;&nbsp;Add new contact</h3><br>
				<label>Name</label><br>
				<input class="full-name" type="text" name="name" required autocomplete="off"><br>
				<label>DOB</label><br>
				<input type="date" name="date"><br>
				<div id="Add-number"><label>Mobile Number</label><br>
				<input type="text" name="phone[]" id="mobile" required minlength=10 autocomplete="off"><span onclick="addInput('Add-number')">&#8853;</span></div>
				<label>Email</label><br>
				<input type="mail" name="mail" id="mail" required autocomplete="off"><br><br>
				<button name="submit" class='submit'>Save</button>
			</form>
		</div>
	</div>
	<script>
		function addInput(divName){
    		var newdiv = document.createElement('div');
		    newdiv.innerHTML = "Mobile Number" + " <br><input type='text' name='phone[]'>";
		    document.getElementById(divName).appendChild(newdiv);
    	}
	</script>
</body>
</html>