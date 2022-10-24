<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<link rel="icon" type="image/gif" HREF="images/1-4gumball_USCH(garnet).gif">
<head>
<title>The University of South Carolina A. C. Moore Herbarium (USCH) Collections Database</title>
<link rel="stylesheet" type="text/css" href="http://www.sc.edu/template/css/tstyles.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
<link rel="stylesheet" type="text/css" href="css/acm.css" />
</head>
<body>
<center>
<table border="0" cellspacing="0" cellpadding="0" width="670">
  <tr align="center">
    <td bgcolor="black"><a href="http://www.sc.edu/"><img src="http://www.sc.edu/template/images/hdr_usc.gif" width="100" height="80" alt="University of South Carolina home page" border="0" name="home"></a></td>
    <td bgcolor="black"><a href="index.html"><img src="images/hdr_title.gif" border="0" width="570" height="80"></a></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="670">   
  <tr aling="center">  
    <td bgcolor="black"  align="center" valign="middle"><a href="http://www.sc.edu/"><img src="http://www.sc.edu/template/images/hdr_logo.gif" width="80" height="80" alt="University of South Carolina logo" border="0"></a></td>
    <td bgcolor="black"  align="right" valign="middle"><a href="index.html"><img src="images/florascope_hdr.jpg" border="0" width="570" height="165"></a></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="670">  
  <tr bgcolor="#E5E5E5" align="center" valign="middle">
    <td bgcolor="#CCCCCC"><a href="http://www.sc.edu/" class="hdrNav"><img src="http://www.sc.edu/template/images/hdr_univofsc_button.gif" border="0" width="180" height="15"></a></td>
    <td width="1" bgcolor="#CCCCCC"><img src="images/grey_dot.gif" width="1" height="1" border="0" alt="|"></td>
    <td bgcolor="#CCCCCC"><a href="http://www.cas.sc.edu/" class="hdrNav">College of Arts & Sciences</a></td>
    <td width="1" bgcolor="#CCCCCC"><img src="images/grey_dot.gif" width="1" height="1" border="0" alt="|"></td>
    <td bgcolor="#CCCCCC"><a href="http://www.biol.sc.edu/" class="hdrNav">Department of Biological Sciences</a></td>
    <td width="1" bgcolor="#CCCCCC"><img src="images/grey_dot.gif" width="1" height="1" border="0" alt="|"></td>
    <td bgcolor="#CCCCCC"><a href="index.html" class="hdrNav">A. C. Moore Herbarium</a></td>
  </tr>
</table>
</center>

<?php
// define variables and set to empty values
$FirstName = $LastName = $Street = $City = $State = $Zip = $Email = $Confirm = $Delivery = "";

// check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $FirstName = test_input($_POST["first"]);
  $LastName = test_input($_POST["last"]);
  $Street = test_input($_POST["street"]);
  $City = test_input($_POST["city"]);
  $State = test_input($_POST["state"]);
  $Zip = test_input($_POST["zip"]);
  $Email = test_input($_POST["email"]);
  $Confirm = test_input($_POST["confirm"]);
  $Delivery = test_input($_POST["delivery"]);
}

// trim white space, remove backslashes, and screen html special characters
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$streetErr = $cityErr = $stateErr = $zipErr = $emailErr = $confirmErr = "";
$Street = $City = $State = $Zip = $Email = $Confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if ($_POST["delivery"] = "pdf")
  {
  if (empty($_POST["email"]))
    {$emailErr = "Email is required with this delivery method";}
  else
    {$Email = test_input($_POST["email"]);}
  if (empty($_POST["confirm"]))
    {$confirmErr = "Email is required with this delivery method";}
  else
    {$Confirm = test_input($_POST["confirm"]);}
  }
  
		if ($_POST["delivery"] = "print")
		{
		if (empty($_POST["city"]))
			{$cityErr = "City is required with this delivery method";}
		else
			{$City = test_input($_POST["city"]);}
		if (empty($_POST["state"]))
			{$stateErr = "State is required with this delivery method";}
		else
			{$State = test_input($_POST["state"]);}
		if (empty($_POST["zip"]))
			{$zipErr = "Zip code is required with this delivery method";}
		else
			{$Zip = test_input($_POST["zip"]);}
		}
  
			if ($_POST["delivery"] == "both1" or $_POST["delivery"] == "both2")
			{
			if (empty($_POST["email"]))
				{$emailErr = "Email is required with this delivery method";}
			else
				{$Email = test_input($_POST["email"]);}
			if (empty($_POST["confirm"]))
				{$confirmErr = "Email is required with this delivery method";}
			else
				{$Confirm = test_input($_POST["confirm"]);}
			if (empty($_POST["city"]))
				{$cityErr = "City is required with this delivery method";}
			else
				{$City = test_input($_POST["city"]);}
			if (empty($_POST["state"]))
				{$stateErr = "State is required with this delivery method";}
			else
				{$State = test_input($_POST["state"]);}
			if (empty($_POST["zip"]))
				{$zipErr = "Zip code is required with this delivery method";}
			else
				{$Zip = test_input($_POST["zip"]);}
			}			
  }
}
// Get the search variable from URL
 // $FirstName = $_POST['first'];
//  $LastName = $_POST['last'];
//  $Street = $_POST['street'];
//  $City = $_POST['city'];
//  $State = $_POST['state'];
//  $Zip = $_POST['zip'];
//  $Email = $_POST['email'];
//  $Confirm = $_POST['confirm'];
//  $Delivery = $_POST['delivery'];
  
// connect to your database ** EDIT REQUIRED HERE **
$con=mysqli_connect("localhost","mailuser","n3wAdre$", "mailinglist"); //(host, username, password, database)

// add escape string to prevent sql injection
$FirstName = mysqli_real_escape_string($con,$FirstName);
$LastName = mysqli_real_escape_string($con,$LastName);
$Street = mysqli_real_escape_string($con,$Street);
$City = mysqli_real_escape_string($con,$City);
$State = mysqli_real_escape_string($con,$State);
$Zip = mysqli_real_escape_string($con,$Zip);
$Email = mysqli_real_escape_string($con,$Email);
$Confirm = mysqli_real_escape_string($con,$Confirm);
$Delivery = mysqli_real_escape_string($con,$Delivery);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
// insert form data
$sql="INSERT INTO recipients (FirstName, LastName, Street, City, State, Zip, eMail, eMailConfirm, delivery) VALUES ('$FirstName','$LastName','$Street','$City','$State','$Zip','$Email','$Confirm','$Delivery')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo 'Your information has been successfully added to our mailing list.  Publication of the Florascope is made possible by the Wade T. Batson
Endowment for the A. C. Moore Herbarium.  Please consider making a contribution today. <a href="givenow.php">Give now!</a>';

mysqli_close($con);
?> 

<script language="JavaScript">
// <![CDATA[
function display(obj,id1,id2,id3,id4) {
txt = obj.options[obj.selectedIndex].value;
document.getElementById(id1).style.display = 'none';
document.getElementById(id2).style.display = 'none';
document.getElementById(id3).style.display = 'none';
document.getElementById(id4).style.display = 'none';
if ( txt.match(id1) ) {
document.getElementById(id1).style.display = 'block';
}
if ( txt.match(id2) ) {
document.getElementById(id2).style.display = 'block';
}
if ( txt.match(id3) ) {
document.getElementById(id3).style.display = 'block';
}
if ( txt.match(id4) ) {
document.getElementById(id4).style.display = 'block';
}
}
// ]]>
</script>

<center><h1>Sign Up To Receive The Florascope</h1></center>
<center>
<form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<fieldset style="display:inline">
		<div align="right">
	<label for="delivery">Preferred delivery method:</label>
	<select name="delivery" required style="width:184px" onchange="display(this,'both1','both2','pdf','print');">
		<option value="both1 | both2">both</option>
		<option value="pdf">electronic</option>
		<option value="print">hard copy</option>
	</select>
		</div>
		<div align="right">
	<label for="first">First Name:</label>
	<input type="text" name="first" required size="27"/>
		</div>
		<div align="right">
	<label for="last">Last Name:</label>
	<input type="text" name="last" required size="27"/>
		</div>
<!--DIV for delivery method = print only-->
<div id="print" style="display: none;">
		<div align="right">
	<label for="street">Street Address:</label>
	<input type="text" name="street" size="27"/>
  <span ><?php echo $streetErr;?></span>
		</div>
		<div align="right">
	<label for="city">City:</label>
	<input type="text" name="city" size="27"/>
  <span><?php echo $cityErr;?></span>
		</div>
		<div align="right">
	<label for="state">State:</label>
	<select name="state" style="width:184px">
		<option value="">None Selected</option>
		<option value="AL">ALABAMA</option>
		<option value="AK">ALASKA</option>
		<option value="AZ">ARIZONA</option>
		<option value="AR">ARKANSAS</option>
		<option value="CA">CALIFORNIA</option>
		<option value="CO">COLORADO</option>
		<option value="CT">CONNECTICUT</option>
		<option value="DE">DELAWARE</option>
		<option value="DC">DISTRICT OF COLUMBIA</option>
		<option value="FL">FLORIDA</option>
		<option value="GA">GEORGIA</option>
		<option value="HI">HAWAII</option>
		<option value="ID">IDAHO</option>
		<option value="IL">ILLINOIS</option>
		<option value="IN">INDIANA</option>
		<option value="IA">IOWA</option>
		<option value="KS">KANSAS</option>
		<option value="KY">KENTUCKY</option>
		<option value="LA">LOUISIANA</option>
		<option value="ME">MAINE</option>
		<option value="MD">MARYLAND</option>
		<option value="MA">MASSACHUSETTS</option>
		<option value="MI">MICHIGAN</option>
		<option value="MN">MINNESOTA</option>
		<option value="MS">MISSISSIPPI</option>
		<option value="MO">MISSOURI</option>
		<option value="MT">MONTANA</option>
		<option value="NE">NEBRASKA</option>
		<option value="NV">NEVADA</option>
		<option value="NH">NEW HAMPSHIRE</option>
		<option value="NJ">NEW JERSEY</option>
		<option value="NM">NEW MEXICO</option>
		<option value="NY">NEW YORK</option>
		<option value="NC">NORTH CAROLINA</option>
		<option value="ND">NORTH DAKOTA</option>
		<option value="OH">OHIO</option>
		<option value="OK">OKLAHOMA</option>
		<option value="OR">OREGON</option>
		<option value="PA">PENNSYLVANIA</option>
		<option value="RI">RHODE ISLAND</option>
		<option value="SC">SOUTH CAROLINA</option>
		<option value="SD">SOUTH DAKOTA</option>
		<option value="TN">TENNESSEE</option>
		<option value="TX">TEXAS</option>
		<option value="UT">UTAH</option>
		<option value="VT">VERMONT</option>
		<option value="VA">VIRGINIA</option>
		<option value="WA">WASHINGTON</option>
		<option value="WV">WEST VIRGINIA</option>
		<option value="WI">WISCONSIN</option>
		<option value="WY">WYOMING</option>
	</select>
	<span ><?php echo $stateErr;?></span></td>
		</div>
		<div align="right">
	<label for="zip">Zip Code:</label>
	<input type="text" name="zip" size="27"/>
  <span ><?php echo $zipErr;?></span>
		</div>
</div>
<!--end print only-->
<!--DIV for delivery method = both-->
<div id="both1" style="display: block;">
		<div align="right">
	<label for="street">Street Address:</label>
	<input type="text" name="street" size="27"/>
  <span ><?php echo $streetErr;?></span>
		</div>
		<div align="right">
	<label for="city">City:</label>
	<input type="text" name="city" size="27"/>
  <span><?php echo $cityErr;?></span>
		</div>
		<div align="right">
	<label for="state">State:</label>
	<select name="state" style="width:184px">
		<option value="">None Selected</option>
		<option value="AL">ALABAMA</option>
		<option value="AK">ALASKA</option>
		<option value="AZ">ARIZONA</option>
		<option value="AR">ARKANSAS</option>
		<option value="CA">CALIFORNIA</option>
		<option value="CO">COLORADO</option>
		<option value="CT">CONNECTICUT</option>
		<option value="DE">DELAWARE</option>
		<option value="DC">DISTRICT OF COLUMBIA</option>
		<option value="FL">FLORIDA</option>
		<option value="GA">GEORGIA</option>
		<option value="HI">HAWAII</option>
		<option value="ID">IDAHO</option>
		<option value="IL">ILLINOIS</option>
		<option value="IN">INDIANA</option>
		<option value="IA">IOWA</option>
		<option value="KS">KANSAS</option>
		<option value="KY">KENTUCKY</option>
		<option value="LA">LOUISIANA</option>
		<option value="ME">MAINE</option>
		<option value="MD">MARYLAND</option>
		<option value="MA">MASSACHUSETTS</option>
		<option value="MI">MICHIGAN</option>
		<option value="MN">MINNESOTA</option>
		<option value="MS">MISSISSIPPI</option>
		<option value="MO">MISSOURI</option>
		<option value="MT">MONTANA</option>
		<option value="NE">NEBRASKA</option>
		<option value="NV">NEVADA</option>
		<option value="NH">NEW HAMPSHIRE</option>
		<option value="NJ">NEW JERSEY</option>
		<option value="NM">NEW MEXICO</option>
		<option value="NY">NEW YORK</option>
		<option value="NC">NORTH CAROLINA</option>
		<option value="ND">NORTH DAKOTA</option>
		<option value="OH">OHIO</option>
		<option value="OK">OKLAHOMA</option>
		<option value="OR">OREGON</option>
		<option value="PA">PENNSYLVANIA</option>
		<option value="RI">RHODE ISLAND</option>
		<option value="SC">SOUTH CAROLINA</option>
		<option value="SD">SOUTH DAKOTA</option>
		<option value="TN">TENNESSEE</option>
		<option value="TX">TEXAS</option>
		<option value="UT">UTAH</option>
		<option value="VT">VERMONT</option>
		<option value="VA">VIRGINIA</option>
		<option value="WA">WASHINGTON</option>
		<option value="WV">WEST VIRGINIA</option>
		<option value="WI">WISCONSIN</option>
		<option value="WY">WYOMING</option>
	</select>
	<span ><?php echo $stateErr;?></span></td>
		</div>
		<div align="right">
	<label for="zip">Zip Code:</label>
	<input type="text" name="zip" size="27"/>
  <span ><?php echo $zipErr;?></span>
		</div>
</div>
<!--end both1-->
<!--DIV for delivery method = pdf only-->
<div id="pdf" style="display: none;">
		<div align="right">
	<label for="zip">eMail:</label>
	<input type="text" name="email" size="27"/>
  <span ><?php echo $emailErr;?></span></td>
		</div>
		<div align="right">
	<label for="zip">Confirm eMail:</label>
	<input type="text" name="confirm" size="27"/>
  <span ><?php echo $confirmErr;?></span></td>
		</div>
</div>
<!--end pdf only-->
<!--DIV for delivery method = both2-->	
<div id="both2" style="display: block;">
		<div align="right">
	<label for="zip">eMail:</label>
	<input type="text" name="email" size="27"/>
  <span ><?php echo $emailErr;?></span></td>
		</div>
		<div align="right">
	<label for="zip">Confirm eMail:</label>
	<input type="text" name="confirm" size="27"/>
  <span ><?php echo $confirmErr;?></span></td>
		</div>
</div>
<!--end both-->		
  <input type="submit" name="Submit" value="Submit" />
    <br>
    <br>
  <center>Your <a href='givenow.php'>contribution</a> will be used in part
  <br>
  to support publication of the Florascope</center>
</form>
</table>
</fieldset>
</center>

 


</body>

</html>
