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

<form name="form" action="database.php" method="get">
  <center><table border='1'>
  <tr>
<!--User input boxes. You can change 'Label 1' etc. to whatever you like. -->
    <td><font color="black">
  Label 1: <td align="right"><input type="text" name="a"/></td>
    </font></td>
    <td><font color="black">
  Label 2: <td align="right"><input type="text" name="b"/></td>
    </font></td>
  </tr>
  <tr>
    <td><font color="black">
  Label 3: <td align="right"><input type="text" name="c"/></td>
    </font></td>    
    <td><font color="black">
  Label 4: <td align="right"><input type="text" name="d"/></td>
    </font></td>
  </tr> 
  <tr>
    <td><font color="black">
  Label 5: <td align="right"><input type="text" name="e"/></td>
    </font></td>    
    <td><font color="black">
  Label 6: <td align="right"><input type="text" name="f"/></td>
    </font></td>
  </tr>
  <tr>
    <td><font color="black">
  Label 7: <td align="right"><input type="text" name="g"/></td>
    </font></td>    
    <td><font color="black">
  Label 8: <td align="right"><input type="text" name="h"/></td>
    </font></td>
  </tr>  
  <tr>
    <td><font color="black">
  Label 9: <td align="right"><input type="text" name="i"/></td>
    </font></td>   
    <td><font color="black">
  Label 10: <td align="right"><input type="text" name="j"/></td>
    </font></td>
  </tr>
  <tr>
    <td><font color="black">
  Label 11: <td align="right"><input type="text" name="k"/></td>
    </font></td>    
    <td><font color="black">
  Label 12: <td align="right"><input type="text" name="l"/></td>
    </font></td>
  </tr>  
  <tr>
    <td><font color="black">
  Label 13: <td align="right"><input type="text" name="m"/></td>
    </font></td>    
    <td><font color="black">
  Label 14: <td align="right"><input type="text" name="n"/></td>
    </font></td>
  </tr>
  <tr>
    <td><font color="black">
  Label 15: <td align="right"><input type="text" name="o"/></td>
    </font></td>
  </tr>  
  </table> 
<!--Submit button.  You can change 'Advanced Search' to whatever you like.-->
  <input type="submit" name="Submit" value="Advanced Search" />
    <br>
    <br>
<!--References Express Search page.  Be sure to adjust file path or url accordingly.-->
  <center><a href='dbexpress.php'>Express Search</a></center>
  </center>
</form>

<!--Begin Google Analytics Script-->

<!--Enter Google Analytics code here if you whish to track additional user statistics.-->

<!--End Google Analytics Script-->

<?php
// points back to this file (i.e. database.php).
// If this file is renamed "database.php" should be renamed to match.
$PHP_SELF = 'database.php';

// Get the search variable from URL
  $DataField1 = @$_GET['a'] ;
  $DataField2 = @$_GET['b'] ;
  $DataField3 = @$_GET['c'] ;
  $DataField4 = @$_GET['d'] ;
  $DataField5 = @$_GET['e'] ;
  $DataField6 = @$_GET['f'] ;
  $DataField7 = @$_GET['g'] ;
  $DataField8 = @$_GET['h'] ;
  $DataField9 = @$_GET['i'] ;
  $DataField10 = @$_GET['j'] ;
  $DataField11 = @$_GET['k'] ;
  $DataField12 = @$_GET['l'] ;
  $DataField13 = @$_GET['m'] ;
  $DataField14 = @$_GET['n'] ;
  $DataField15 = @$_GET['o'] ;  
  
// Condense array of variables into a single, space-separated string.  
  $array = array($DataField1, $DataField2, $DataField3, $DataField4, $DataField5, $DataField6, $DataField7, $DataField8, $DataField9, $DataField10, $DataField11, $DataField12, $DataField13, $DataField14, $DataField15);
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
if (!isset($DataField1, $DataField2, $DataField3, $DataField4, $DataField5, $DataField6, $DataField7, $DataField8, $DataField9, $DataField10, $DataField11, $DataField12, $DataField13, $DataField14, $DataField15))
  {
  echo "<p>Please enter a search parameter!</p>";
  exit;
  }

// connect to your database ** EDIT REQUIRED HERE **
mysql_connect("127.0.0.1","UserName","UserPassword"); //(host ip address, username, password)

// specify your database ** EDIT REQUIRED HERE **
mysql_select_db("your_database_name") or die("Unable to select database"); //select which database we're using

// The following list of functions, builds query elements based on the presence or absence of search terms.
// If more than one variable is entered, the 'AND' clause must be added to connect consecutive query elements.
// If only one variable is entered, the 'AND' clause is omitted.
// Note datafield titles below should match those in your table.
function querybuilder1($trimmed) {
if ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] . $_GET['k'] . $_GET['l'] . $_GET['m'] . $_GET['n'] . $_GET['o'] == null)
exit;
elseif ($_GET['a'] == null)
return null;
else
return "DataField1 Like '{$_GET['a']}'";
}
function querybuilder2($trimmed) {
if ($_GET['b'] == null)
return null;
elseif ($_GET['a'] == null . $DataField2 = "")
return "DataField2 Like '{$_GET['b']}'";
else
return "AND DataField2 Like '{$_GET['b']}'";
}
function querybuilder3($trimmed) {
if ($_GET['c'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] == null . $DataField3 = "")
return "DataField3 Like '{$_GET['c']}'";
else
return "AND DataField3 Like '{$_GET['c']}'";
}
function querybuilder4($trimmed) {
if ($_GET['d'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] == null . $DataField4 = "")
return "DataField4 Like '{$_GET['d']}'";
else
return "AND DataField4 Like '{$_GET['d']}'";
}
function querybuilder5($trimmed) {
if ($_GET['e'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] == null . $DataField5 = "")
return "DataField5 Like '{$_GET['e']}'";
else
return "AND DataField5 Like '{$_GET['e']}'";
}
function querybuilder6($trimmed) {
if ($_GET['f'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] == null . $DataField6 = "")
return "DataField6 Like '{$_GET['f']}'";
else
return "AND DataField6 Like '{$_GET['f']}'";
}
function querybuilder7($trimmed) {
if ($_GET['g'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] == null . $DataField7 = "")
return "DataField7 Like '{$_GET['g']}'";
else
return "AND DataField7 Like '{$_GET['g']}'";
}
function querybuilder8($trimmed) {
if ($_GET['h'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] == null . $DataField8 = "")
return "DataField8 Like '{$_GET['h']}'";
else
return "AND DataField8 Like '{$_GET['h']}'";
}
function querybuilder9($trimmed) {
if ($_GET['i'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] == null . $DataField9 = "")
return "DataField9 Like '{$_GET['i']}'";
else
return "AND DataField9 Like '{$_GET['i']}'";
}
function querybuilder10($trimmed) {
if ($_GET['j'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] == null . $DataField10 = "")
return "DataField10 Like '{$_GET['j']}'";
else
return "AND DataField10 Like '{$_GET['j']}'";
}
function querybuilder11($trimmed) {
if ($_GET['k'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] == null . $DataField11 = "")
return "DataField11 Like '{$_GET['k']}'";
else
return "AND DataField11 Like '{$_GET['k']}'";
}
function querybuilder12($trimmed) {
if ($_GET['l'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] . $_GET['k'] == null . $DataField12 = "")
return "DataField12 Like '{$_GET['l']}'";
else
return "AND DataField12 Like '{$_GET['l']}'";
}
function querybuilder13($trimmed) {
if ($_GET['m'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] . $_GET['k'] . $_GET['l'] == null . $DataField13 = "")
return "DataField13 Like '{$_GET['m']}'";
else
return "AND DataField13 Like '{$_GET['m']}'";
}
function querybuilder14($trimmed) {
if ($_GET['n'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] . $_GET['k'] . $_GET['l'] . $_GET['m'] == null . $DataField14 = "")
return "DataField14 Like '{$_GET['n']}'";
else
return "AND DataField14 Like '{$_GET['n']}'";
}
function querybuilder15($trimmed) {
if ($_GET['o'] == null)
return null;
elseif ($_GET['a'] . $_GET['b'] . $_GET['c'] . $_GET['d'] . $_GET['e'] . $_GET['f'] . $_GET['g'] . $_GET['h'] . $_GET['i'] . $_GET['j'] . $_GET['k'] . $_GET['l'] . $_GET['m'] . $_GET['n'] == null . $DataField15 = "")
return "DataField15 Like '{$_GET['o']}'";
else
return "AND DataField15 Like '{$_GET['o']}'";
}

// The following array compiles the querybuilder functions and is 'imploded' in the query to create a contiguous query string.
// If no variable was entered for a particular querybuilder function, then 'NULL' is returned and that string is omitted from the query.
$querybuilder = array(querybuilder1($trimmed), querybuilder2($trimmed), querybuilder3($trimmed), querybuilder4($trimmed), querybuilder5($trimmed), querybuilder6($trimmed), querybuilder7($trimmed), querybuilder8($trimmed), querybuilder9($trimmed), querybuilder10($trimmed), querybuilder11($trimmed), querybuilder12($trimmed), querybuilder13($trimmed), querybuilder14($trimmed), querybuilder15($trimmed));

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
$query = "SELECT ".implode(", ", $sortColumns)." FROM YourWebSearchTable WHERE ".implode(' ', $querybuilder)." ORDER BY ".$sortColumns[$_GET['op']]." ".$sortOrder[$_GET['ord']];
$PHP_SELF = getenv('SCRIPT_NAME'); // EDIT HERE and specify your table.  Field names are added via the imploded $querybuilder command. 

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

// google.  Add $Cultivated .  back to string when fixed.
 echo "<center><p><a href=\"http://www.google.com/search?q=" . $DataField1 . $DataField2 . $DataField3 . $DataField4 . $DataField5 . $DataField6 . $DataField7 . $DataField8 . $DataField9 . $DataField10 . $DataField11 . $DataField12 . $DataField13 . $DataField14 . $DataField15 . "\" target=\"_blank\" title=\"Look up 
  " . $DataField1 . $DataField2 . $DataField3 . $DataField4 . $DataField5 . $DataField6 . $DataField7 . $DataField8 . $DataField9 . $DataField10 . $DataField11 . $DataField12 . $DataField13 . $DataField14 . $DataField15 . " on Google\"><font color='black'>Click here</a> to try the 
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
echo '<th><a href="',$PHP_SELF,"?a=$DataField1&b=$DataField2&c=$DataField3&d=$DataField4&e=$DataField5&f=$DataField6&g=$DataField7&h=$DataField8&i=$DataField9&j=$DataField10&k=$DataField11&l=$DataField12&m=$DataField13&n=$DataField14&o=$DataField15",'&op=',$key,'&ord=',($_GET['op'] == $key && 0 == $_GET['ord']) ? '1' : '0','&Submit=SEARCH"><font color="black">',$column,'</font></a></th>';
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
  echo '<a href="',$PHP_SELF,"?s=$prevs&a=$DataField1&b=$DataField2&c=$DataField3&d=$DataField4&e=$DataField5&f=$DataField6&g=$DataField7&h=$DataField8&i=$DataField9&j=$DataField10&k=$DataField11&l=$DataField12&m=$DataField13&n=$DataField14&o=$DataField15",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'"><font color="black">&lt;&lt;Prev 10</font></a>&nbsp&nbsp;';
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
  echo '<a href="',$PHP_SELF,"?s=$news&a=$DataField1&b=$DataField2&c=$DataField3&d=$DataField4&e=$DataField5&f=$DataField6&g=$DataField7&h=$DataField8&i=$DataField9&j=$DataField10&k=$DataField11&l=$DataField12&m=$DataField13&n=$DataField14&o=$DataField15",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'"><font color="black">Next 10 &gt;&gt;</font></a></center>';
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
