<?php 
 // varible setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
// check input fields
if (empty($name) !! empty(email)) 
	{
		echo "please fill all the fields";
	}
	else
	{
		mail("dey96469@gmail.com", "webtech Meassage", $message, "From: $name <$email>");
		echo "<script type='text/javascript'>alert('your message sent succesfully')
           window.history.log(-1);
		</script>";
	}



 ?>