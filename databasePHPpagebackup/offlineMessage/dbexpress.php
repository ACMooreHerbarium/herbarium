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
    <td bgcolor="black"  align="right" valign="middle"><a href="index.html"><img src="images/mainimage_filler.jpg" border="0" width="570" height="165"></a></td>
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

<center><h1><font color="red">Due to facilities maintenance	the collections database will be unavailable from 5:30PM (EST) Friday, March 25, 2011 through 8:00AM (EST) Tuesday, March 29, 2011.
<br>We apologize for any inconvenience.</font></h1></center>				 
            
<center><h1>The <a href="index.html"><font color="black">A. C. Moore Herbarium</font></a> (USCH)<br>Collections Database</h1></center>

<form name="form" action="dbexpress.php" method="get">
  <center><table border='0'>
  <tr>
    <font color="black"><input type="text" name="a"/></font>
  </tr>  
  </table> 
    <input type="submit" name="Submit" value="Express Search" />
      <br>
      <br>
    <center><a href="database.php">Advanced Search</a></center>
  </center>
</form>

<!--Begin Google Analytics Script-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10377458-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--End Google Analytics Script-->

<?php
// points back to this file (i.e. database.php).
// If this file is renamed "database.php" should be renamed to match.
$PHP_SELF = 'dbexpress.php';

// Get the search variable from URL
  $ExpressSearch = @$_GET['a'] ;
  
// Condense array of variables into a single, space-separated string. Add $Cultivated back to string when fixed.  
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

// check for a search parameter.  Add $Cultivated back to string when fixed.
if (!isset($ExpressSearch))
  {
  echo "<p>We dont seem to have a search parameter!</p>";
  exit;
  }

// connect to your database ** EDIT REQUIRED HERE **
mysql_connect("129.252.87.104","WebUser","Webuser123!"); //(host, username, password)

// specify database ** EDIT REQUIRED HERE **
mysql_select_db("sc_herbaria") or die("Unable to select database"); //select which database we're using

// The following array compiles the querybuilder functions and is 'imploded' in the query to create a contiguous query string.
$querybuilder = array('USCHNumber', 'Family', 'Genus', 'Species', 'SpeciesAuthor', 'FullName', 'commonName', 'FirstName', 'LastName', 'fieldNumber', 'StartDate', 'Country', 'StateProvince', 'County', 'environmentalProtectionStatus');

// Created sortable variables.  Add 'Cultivated' back to array when fixed
$sortColumns = array('USCHNumber', 'Family', 'Genus', 'Species', 'SpeciesAuthor', 'FullName', 'commonName', 'FirstName', 'LastName', 'fieldNumber', 'StartDate', 'Country', 'StateProvince', 'County', 'environmentalProtectionStatus');
$sortOrder = array('ASC', 'DESC');

if(!isset($_GET['op']) || !isset($sortColumns[$_GET['op']]))
{
$_GET['op'] = 0;
}
if(!isset($_GET['ord']) || !isset($sortOrder[$_GET['ord']]))
{
$_GET['ord'] = 0;
}

// Build SQL Query. Removed from query until fixed --> Cultivated LIKE '%{$_GET['h']}%' AND 
$query = "SELECT ".implode(", ", $sortColumns)." FROM USCH_WebSearch WHERE USCHNumber LIKE '%{$_GET['a']}%' OR Family LIKE '%{$_GET['a']}%' OR Genus LIKE '%{$_GET['a']}%' OR Species LIKE '%{$_GET['a']}%' OR SpeciesAuthor LIKE '%{$_GET['a']}%' OR FullName LIKE '%{$_GET['a']}%' OR commonName LIKE '%{$_GET['a']}%' OR FirstName LIKE '%{$_GET['a']}%' OR LastName LIKE '%{$_GET['a']}%' OR fieldNumber LIKE '%{$_GET['a']}%' OR StartDate LIKE '%{$_GET['a']}%' OR Country LIKE '%{$_GET['a']}%' OR StateProvince LIKE '%{$_GET['a']}%' OR County LIKE '%{$_GET['a']}%' OR environmentalProtectionStatus LIKE '%{$_GET['a']}%' ORDER BY ".$sortColumns[$_GET['op']]." ".$sortOrder[$_GET['ord']];
$PHP_SELF = getenv('SCRIPT_NAME'); // EDIT HERE and specify your table and field names for the SQL query 

// If query fails this sends a message detailing the point of failure...typically a MySQL syntax error.
if(! $sql= mysql_query($query) )
echo "query failed: \n[$query]\n" . mysql_error()."\n";

// delete this to remove query display from page
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
  $result = mysql_query($query) or die("Couldn't execute query");
    
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

// Add &h=$Cultivated back to url when fixed

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

// The code below is an attempt to get Cultivated values to display as yes/no.
//  if ($row[$Cultivated] = '') {
//        echo "unknown";
//  }  elseif ($row[$Cultivated] = '0') {
//        echo "No";
//  }  else {
//        echo "Yes";
//  } 


// Define current page variable
$currPage = (($s/$limit) + 1);

//break before paging
  echo "<br /><center>";

  // next we need to do the links to other results
  if ($s>=1) { // bypass PREV link if s is 0
  $prevs=($s-$limit);
  echo '<a href="',$PHP_SELF,"?s=$prevs&a=$ExpressSearch",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'"><font color="black">&lt;&lt;Prev 10</font></a>&nbsp&nbsp;';
  }

// Add &h=$Cultivated back to url when fixed

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

// Add &h=$Cultivated back to url when fixed

$a = $s + ($limit) ;
  if ($a > $numrows) { $a = $numrows ; }
  $b = $s + 1 ;
  echo "<center><p><font color='black'>Showing results $b to $a of $numrows</font></p></center>";
  
// ***** The following writes web usage statistics to the database: 'weblog' table: 'logs' *****
// connect to your database ** EDIT REQUIRED HERE **
mysql_connect("129.252.87.104", "WebUser", "Webuser123!") or die (mysql_error()); //(host, username, password)

// specify database ** EDIT REQUIRED HERE **
mysql_select_db("weblog") or die ("Unable to select database"); //select which database we're using

// records web usage statistics to weblog
mysql_query("INSERT INTO logs (VisIP, VisRef, VisUrl, VisDate, Browser, SearchParam, NumRecords) VALUES (\"".$_SERVER['REMOTE_ADDR']."\", \"".$_SERVER['HTTP_REFERER']."\", \"".$_SERVER['REQUEST_URI']."\", NOW(), \"".$_SERVER['HTTP_USER_AGENT']."\", \"".$trimmed."\", \"".$numrows."\")");
// ***** END WEB USAGE STATS RECORDING *****  
  
?>


</body>

</html>
