<!DOCTYPE html>
<?php 
	$link = mysqli_connect("localhost", "root", "", "phonebook");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql = "select * from add_contact";
	$results = mysqli_query($link, $sql);
?>
<html>
<head>
	<title>view contact</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="add_contact.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h3>RM-PHONEBOOK</h3>
		</div>
		<div class="feed">
			<div class="main">
				<div class="search">
					<input class="full-name" id="myInput" onkeyup="myFunction()" type="text" name="search" style="border: none; 
					outline: none;" autocomplete="off"><button class="search-icon"><i class="fas fa-search"></i></button>
				</div>
				<div class="display" id="myDisplay">
					
					<?php
						$uq=0;
						while ($row_users = mysqli_fetch_array($results)){
							$uq=$uq+1;
					?>
							<div class="contact-info" onclick="showInfo('hidden-info<?php echo $uq;?>','logo<?php echo $uq;?>')">
								<div class="name"><span id="myName" style="font-size: 18px; font-style: bold;"><?php echo $row_users['contact_name'];?></span>
									<span id="logo<?php echo $uq;?>" style="float: right;">&#x25BC;</span></div>
								
								<div id="hidden-info<?php echo $uq;?>" class='hide'>
									<p><?php echo $row_users['dateofbirth'];?></p>
									<div class="edit-remove">
										<button class="edit"><a href="update_contact.php?editid=<?php 
										echo $row_users['id'];?>">Edit</a></button>
										<button class="remove"><a href="delete_contact.php?deleteid=<?php 
										echo $row_users['id'];?>">Remove</a></button>

									</div>
									<div class="mobile-email">
										<i class="fa fa-phone" style="font-size:16px; transform: rotate(90deg);"></i>&nbsp;<?php echo $row_users['phone'];?>&nbsp;&nbsp;
										<i class="fa fa-envelope" style="font-size:16px"></i>&nbsp;<?php echo $row_users['address'];?><br/>
									</div>
								</div>
							</div>
						<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<script>
		function showInfo(x,y){
			var v=document.getElementById(x);
			var v1=document.getElementById(y);
			if(v.style.display=="block"){
				v.style.display="none";
				v1.innerHTML= "&#x25BC";
			}
			else{
				v.style.display="block";
				v1.innerHTML= "&#x25B2";
			}
	    }
	    function myFunction() {
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			display = document.getElementById("myDisplay");
			li = display.getElementsByClassName('contact-info');
			//alert(li.length);
			for(i=0; i<li.length; i++){
				a=li[i].getElementsByTagName('span')[0];
		        txtValue = a.textContent || a.innerText;
		        if (txtValue.toUpperCase().indexOf(filter) > -1) {
		            li[i].style.display = "";
		        } else {
		            li[i].style.display = "none";
		        }
		    }
		}
	</script>
</body>
</html>
