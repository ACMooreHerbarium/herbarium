<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<!--COPYRIGHT NOTICE
Copyright 2011 by South Carolina Department of Natural Resources
on the web at www.dnr.sc.gov.
Created by Herrick Brown for the A. C. Moore Herbarium (USCH) at University of South Carolina - Columbia
on the web at www.herbarium.org.
This document is provided free of charge, 'as is' with no implied warranty or guarantee regarding its use
or functionality.  Modification of the following code is permitted and encouraged, but please retain attribution.-->

<html>
<!--favicon tag.  After 'type="image/' replace 'gif' with your image file extension.  After 'HREF=' replace with the file path or url to your image.-->
<link rel="icon" type="image/gif" HREF="http://www.MyImageDirectory.com/MyFavicon.gif">
<head>
<!--Replace text between 'title' tags.-->
<title>Replacing this text changes what is displayed at the top of your browser window.</title>

</head>
<body>
<center>
<!--Banner images.  Replace link urls with your link urls. Replace image files with your image file directory and files.  You may adjust width and height accordingly.-->
<table border="0" cellspacing="0" cellpadding="0" width="670">
  <tr align="center">
    <td bgcolor="black"><a href="http://www.link1.com"><img src="http://www.MyImageDirectory.com/TopLeftImage.gif" width="100" height="80" border="0" ></a></td>
    <td bgcolor="black"><a href="http://www.link2.com"><img src="http://www.MyImageDirectory.com/TopRightImage.gif" border="0" width="570" height="80"></a></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="670">   
  <tr aling="center">  
    <td bgcolor="black"  align="center" valign="middle"><a href="http://www.link3.com"><img src="http://www.MyImageDirectory.com/BottomLeftImage.gif" width="80" height="80" border="0"></a></td>
    <td bgcolor="black"  align="right" valign="middle"><a href="http://www.link4.com"><img src="http://www.MyImageDirectory.com/BottomRightImage.jpg" border="0" width="570" height="165"></a></td>
  </tr>
</table>
<!--Banner navigation bar.  Replace link urls with your link urls.  Replace 'Link 1' etc. with appropriate text.-->
<table border="0" cellspacing="0" cellpadding="0" width="670">  
  <tr bgcolor="#E5E5E5" align="center" valign="middle">
    <td bgcolor="#CCCCCC"><a href="http://www.link1.com" >Link 1</a></td>
    <td width="1" bgcolor="#CCCCCC"></td>
    <td bgcolor="#CCCCCC"><a href="http://www.link2.com" >Link 2</a></td>
    <td width="1" bgcolor="#CCCCCC"></td>
    <td bgcolor="#CCCCCC"><a href="http://www.link3.com" >Link 3</a></td>
    <td width="1" bgcolor="#CCCCCC"></td>
    <td bgcolor="#CCCCCC"><a href="http://www.link4.com" >Link 4</a></td>
  </tr>
</table>
</center>
				 
<!--Collections Database Title.  Change text to whatever you like.-->           
<center><h1>The <a href="http://www.link1.com"><font color="black">Collection Name</font></a> (Collection Acronym)<br>Collections Database</h1></center>

<form name="form" action="dbexpress.php" method="get">
  <center><table border='0'>
  <tr>
<!--User input box and submit button.  You can change 'Express Search' to whatever you like.-->  
    <font color="black"><input type="text" name="a"/></font>
  </tr>  
  </table> 
    <input type="submit" name="Submit" value="Express Search" />
      <br>
      <br>
<!--References Advanced Search page.  Be sure to adjust file path or url accordingly.-->      
    <center><a href="database.php">Advanced Search</a></center>
  </center>
</form>

<!--Begin Google Analytics Script-->

<!--Enter Google Analytics code here if you whish to track additional user statistics.-->

<!--End Google Analytics Script-->

<?php
// points back to this file (i.e. dbexpress.php).
// If this file is renamed "dbexpress.php" should be renamed to match.
$PHP_SELF = 'dbexpress.php';

// Get the search variable from URL
  $ExpressSearch = @$_GET['a'] ;
  
// Condense array of variables into a single, space-separated string.  
  $array = array($ExpressSearch);
  $var = implode(" ", $array);
 
// trim whitespace from the stored variable
  $trimmed = trim($var);
  
// rows to return
$limit=10; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<center><font color='black'><p>Please enter a search...</p></font></center>";
  echo "<center><font color='black'><p>Use '%' for wildcard</p></font></center>";
  exit;
  }

// check for a search parameter.
if (!isset($ExpressSearch))
  {
  echo "<p>Please enter a search parameter!</p>";
  exit;
  }

// connect to your database ** EDIT REQUIRED HERE **
mysql_connect("127.0.0.1","UserName","UserPassword"); //(host ip address, username, password)

// specify your database ** EDIT REQUIRED HERE **
mysql_select_db("your_database_name") or die("Unable to select database"); //select which database we're using

// Created sortable variables. Note datafield titles below should match those in your table.
$sortColumns = array('DataField1', 'DataField2', 'DataField3', 'DataField4', 'DataField5', 'DataField6', 'DataField7', 'DataField8', 'DataField9', 'DataField10', 'DataField11', 'DataField12', 'DataField13', 'DataField14', 'DataField15');
$sortOrder = array('ASC', 'DESC');

if(!isset($_GET['op']) || !isset($sortColumns[$_GET['op']]))
{
$_GET['op'] = 0;
}
if(!isset($_GET['ord']) || !isset($sortOrder[$_GET['ord']]))
{
$_GET['ord'] = 0;
}

// Build SQL Query.
$query = "SELECT ".implode(", ", $sortColumns)." FROM YourWebSearchTable WHERE DataField1 LIKE '%{$_GET['a']}%' OR DataField2 LIKE '%{$_GET['a']}%' OR DataField3 LIKE '%{$_GET['a']}%' OR DataField4 LIKE '%{$_GET['a']}%' OR DataField5 LIKE '%{$_GET['a']}%' OR DataField6 LIKE '%{$_GET['a']}%' OR DataField7 LIKE '%{$_GET['a']}%' OR DataField8 LIKE '%{$_GET['a']}%' OR DataField9 LIKE '%{$_GET['a']}%' OR DataField10 LIKE '%{$_GET['a']}%' OR DataField11 LIKE '%{$_GET['a']}%' OR DataField12 LIKE '%{$_GET['a']}%' OR DataField13 LIKE '%{$_GET['a']}%' OR DataField14 LIKE '%{$_GET['a']}%' OR DataField15 LIKE '%{$_GET['a']}%' ORDER BY ".$sortColumns[$_GET['op']]." ".$sortOrder[$_GET['ord']];
$PHP_SELF = getenv('SCRIPT_NAME'); // EDIT HERE and specify your table and field names for the SQL query 

// If query fails this sends a message detailing the point of failure...typically a MySQL syntax error.
if(! $sql= mysql_query($query) )
echo "query failed: \n[$query]\n" . mysql_error()."\n";

// Remove // before echo command to uncomment and display query string
//echo $query;

// Calculate number of results and rows
 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);
 

// If we have no results, offer a google search as an alternative
if ($numrows == 0)
  {
  echo "<center><font color='black'><h4>Results</h4></font></center>";
  echo "<center><font color='black'><p>Sorry, your search: &quot;" . $trimmed . "&quot; returned zero results</p></font></center>";

// Offer Google search.
 echo "<center><p><a href=\"http://www.google.com/search?q=" . $ExpressSearch . "\" target=\"_blank\" title=\"Look up 
  " . $ExpressSearch . " on Google\"><font color='black'>Click here</a> to try the 
  search on google</font></p></center>";
  }
 
// next determine if s has been passed to script, if not use 0
if (empty($_GET['s'])) {
  $s=0;
} else {
  $s = intval($_GET['s']);
}

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Could not execute query");
    
// display what the person searched for
echo "<center><font color='black'><p>You searched for: &quot;" . $trimmed . "&quot;</p></font></center>";

// begin to show results set
echo "<center><font color='black'>Results</font></center>";
$count = 1 + $s ;

// now you can display the results returned
$result = mysql_query($query);

$default_sort = $count;
$allowed_order = $array;

echo "<table border='1'>";
echo '<tr>';
foreach($sortColumns as $key => $column)
{
echo '<th><a href="',$PHP_SELF,"?a=$ExpressSearch",'&op=',$key,'&ord=',($_GET['op'] == $key && 0 == $_GET['ord']) ? '1' : '0','&Submit=SEARCH"><font color="black">',$column,'</font></a></th>';
}
echo '</tr>';


while ($row = mysql_fetch_array($result))
{
echo '<tr>';
foreach($sortColumns as $column)
{
echo '<td><font color="black">',$row[$column],'</font></td>';
}
echo '</tr>';
}
echo '</table>';

// Define current page variable
$currPage = (($s/$limit) + 1);

//break before paging
  echo "<br /><center>";

  // next we need to do the links to other results
  if ($s>=1) { // bypass PREV link if s is 0
  $prevs=($s-$limit);
  echo '<a href="',$PHP_SELF,"?s=$prevs&a=$ExpressSearch",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'"><font color="black">&lt;&lt;Prev 10</font></a>&nbsp&nbsp;';
  }

// calculate number of pages needing links
  $pages=intval($numrows/$limit);

// $pages now contains int of pages needed unless there is a remainder from division

  if ($numrows%$limit) {
  // has remainder so add one page
  $pages++;
  }

// check to see if last page
  if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {

  // not last page so give NEXT link
  $news=$s+$limit;
  echo '<a href="',$PHP_SELF,"?s=$news&a=$ExpressSearch",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'"><font color="black">Next 10 &gt;&gt;</font></a></center>';
  }

$a = $s + ($limit) ;
  if ($a > $numrows) { $a = $numrows ; }
  $b = $s + 1 ;
  echo "<center><p><font color='black'>Showing results $b to $a of $numrows</font></p></center>";
  
// ***** The following writes web usage statistics to a separate database.*****
// You must first create your web usage database and a log table in MySQL.
// You must then grant insert privileges to your web user so the information will be written to the log table.
// connect to your database ** EDIT REQUIRED HERE **. 
mysql_connect("127.0.0.1", "WebUserName", "WebUserPassword") or die (mysql_error()); //(host ip address, username, password)

// specify database ** EDIT REQUIRED HERE **
mysql_select_db("mywebusagedb") or die ("Unable to select database"); //select which database you're using

// records web usage statistics to mywebusagedb.mytablename.  Note datafield titles below should match those in your table.
mysql_query("INSERT INTO mytablename (VisitorIP, ReferringURL, VisitorUrl, Date, Browser, SearchParam, NumRecords) VALUES (\"".$_SERVER['REMOTE_ADDR']."\", \"".$_SERVER['HTTP_REFERER']."\", \"".$_SERVER['REQUEST_URI']."\", NOW(), \"".$_SERVER['HTTP_USER_AGENT']."\", \"".$trimmed."\", \"".$numrows."\")");
// ***** END WEB USAGE STATS RECORDING *****  
  
?>


</body>

</html>
