<?php

	include 'includes/db.php';
	include 'includes/arrays.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/form.css"/>

    <style type="text/css">
        .forms{
            text-align: center;
        }

        .forms input[type=text], .forms select, .forms input[type=email]{
            width: 250px;
            height: 30px;
            margin-top: 15px;
        }

        .body h3{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .forms input[type=submit]{
            width: 100px;
            height: 40px;
            background-color: #2b328b;
            color: #fff;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
        }
    </style>
<body>

	<!-- Header -->
	<div class="header">
		<a href="index.html"><div class="logo"></div></a>

		<div id="mySidenav" class="sidenav">
        <a class="js" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
        <a href="blog.html">Blog</a>
        <a href="contact.html">Contact</a>
        </div>

        <span onclick="openNav()">&#9776;</span>
    </div>

     <div class="body">
     	<h3>Customer Registration Form</h3>

     	
     	<?php

     		if(array_key_exists('add', $_POST))
     		{
     			   if(empty($_POST['plan']))
     			   {
     			   	$error['plan'] = "Choose Your Preferred Plan";
     			   }

     			   if(empty($_POST['bizOwner']))
     			   {
     			   	$error['bizOwner'] = "Enter Name of Business Owner";
     			   }

     			   if(empty($_POST['bizName']))
     			   {
     			   	$error['bizName'] = "Enter Name of Business";
     			   }

     			   if(empty($_POST['category']))
     			   {
     			   	$error['category'] = "Choose Business Category";
     			   }

     			   if(empty($_POST['bizAddress']))
     			   {
     			   	$error['bizAddress'] = "Enter Your Business Address";
     			   }

     			   if(empty($_POST['state']))
     			   {
     			   	$error['state'] = "Choose State Where Your Business Is";
     			   }

     			   if(empty($_POST['contact']))
     			   {
     			   	$error['contact'] = "Enter Your Contact Number";
     			   }


     			   if(empty($error))
     			   {
     			   	$clean = array_map('trim', $_POST);


     	$stmt = $conn->prepare("INSERT INTO customer 
     		VALUES (NULL,:cn, :bn, :bc, :ba, :s, :pp, :pn, :e, :w)");


							$stmt->bindParam(':cn', $clean['bizOwner']);
							$stmt->bindParam(':bn', $clean['bizName']);
							$stmt->bindParam(':bc', $clean['category']);
							$stmt->bindParam(':ba', $clean['bizAddress']);
							$stmt->bindParam(':s', $clean['state']);
							$stmt->bindParam(':pp', $clean['plan']);
							$stmt->bindParam(':pn', $clean['contact']);
							$stmt->bindParam(':e', $clean['email']);
							$stmt->bindParam(':w', $clean['website']);


							$stmt->execute();

							$message = "New Customer: ";
							$message .= $clean['bizOwner'];
							$message .= $clean['bizName'];

							$success = "Record Successfully Added, You Will Receive a Call From Us Shortly";

     			   }
     		}


     	?>


     	<form class="forms" action="" method="post">

     	<p style="color: green; margin-left: 10px; margin-right: 10px;"><?php if(isset($success)) echo $success ?> </p>

     	
     		<select name="plan">
     			<option value="">Choose Your Preferred Plan</option>
     			<?php foreach($bplan as $bplan){ ?>
     			<option value="<?php echo $bplan ?>"
                <?php if(isset($_POST['plan']) && ($_POST['plan'] == $bplan)) echo 'selected="selected"' ?>

                ><?php echo $bplan." Plan" ?></option>
     			<?php } ?>
     		</select>
     		<span style="color: red"><?php if(isset($error['plan'])) echo $error['plan'] ?></span>



     		<br/><br/>
     		<input type="text" name="bizOwner" placeholder="Name of Business Owner"
            value="<?php display_value('bizOwner') ?>" 
            />
     		<span style="color: red;"><?php if(isset($error['bizOwner'])) echo $error['bizOwner'] ?></span>
     		<br/><br/>

     		
            <input type="text" name="bizName" placeholder="Name of Business"
            value="<?php display_value('bizName') ?>" 
            />
     		<span style="color: red;"><?php if(isset($error['bizName'])) echo $error['bizName'] ?></span>
     		<br/><br/>

     		<select name="category">
     			<option value="">Business Category</option>
     			<?php foreach($bizcat as $bizcat) {?>
     			<option value="<?php echo $bizcat ?>"
    <?php if(isset($_POST['category']) && ($_POST['category'] == $bizcat)) echo 'selected="selected"' ?>
                ><?php echo $bizcat ?></option>
     			<?php } ?>
     		</select>
     		<span style="color: red;"><?php if(isset($error['category'])) echo $error['category'] ?></span>
     		<br/><br/>


     		<input type="text" name="bizAddress" placeholder="Business Address"
              value="<?php display_value('bizAddress') ?>"
            />
     		<span style="color: red;"><?php if(isset($error['bizAddress'])) echo $error['bizAddress'] ?></span>
     		<br/><br/>

     		<select name="state">
     			<option value="">State Where Located</option>
     			<?php foreach($bizstate as $bizstate){ ?>
     			<option value="<?php echo $bizstate ?>"
    <?php if(isset($_POST['state']) && ($_POST['state'] == $bizstate)) echo 'selected="selected"' ?>
                ><?php echo $bizstate ?></option>
     			<?php } ?>
     		</select>
     		<span style="color: red;"><?php if(isset($error['state'])) echo $error['state'] ?></span>
     		<br/><br/>

     		<input type="text" name="contact" placeholder="Contact Number"
            value="<?php display_value('contact') ?>"
            />
     		<span style="color: red;"><?php if(isset($error['contact'])) echo $error['contact'] ?></span>
     		<br/><br/>

     		<input type="email" name="email" placeholder="Contact Email"/>
     		<br/><br/>

     		<input type="text" name="website" placeholder="Business Website"/>
     		<br/><br/>

     		<input type="submit" name="add" value="Click to Submit"/>

     	</form>
     </div>


        <!-- footer -->
	 <div class="footer">
    	<div class="logo"></div>

        <span>
	    <h4>Quick Links</h4>
	    <ul>
	    	<a href="about.html"><li>About Pelnet</li></a>
	    	<a href="services.html"><li>Services</li></a>
	    	<a href="blog.html"><li>Blog</li></a>
	    </ul>
	    </span>
        
        <span>
	    <h4>Contact Us</h4>
	    <p>Email:</br>support@pelnet.com.ng</p>
	    <br>
	    <p>Phone:<br>07040358583<br>08185654614</p>
        </span>

        <span>
	    <h4>Office Address</h4>
	    <p>4 Ikorodu road Ojota,</br>Ojota Bus stop,</br>Lagos state.</p>
        </span>

        <span>
	    <h4>Follow Us</h4>
	    <a target="_blank" href="https://twitter.com/pelnetng/"><div id="twitter"></div></a>
	    <a target="_blank" href="https://m.facebook.com/pelnet.ng/"><div id="fb"></div></a>
        <a target="_blank" href="https://instagram.com/pelnet.ng/"><div id="instagram"></div></a>
        </span>

	    <div class="btm"></div>

	    <p id="paul">© pelnet.Nig. All rights reserved.</p>
    </div>


    <script type="text/javascript" src="js/myscript.js"></script>

</body>
</html>