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
				 
            
<center><h1>The <a href="index.html"><font color="black">A. C. Moore Herbarium</font></a> (USCH)<br>Collections Database</h1></center>

<form name="form" action="login.html" method="get">
   <center>
    <input type="submit" name="Submit" value="logout" />
  </center>
</form>

<?php
$PHP_SELF = 'stats.php';

// Get the search variable from URL
  $User = @$_GET['uid'] ;
  $Pword = @$_GET['pwd'] ;
// points back to this file (i.e. database.php).
// If this file is renamed "database.php" should be renamed to match.
  
// rows to return
$limit=10; 

// connect to your database ** EDIT REQUIRED HERE **
mysql_connect("129.252.87.104",$_GET['uid'],$_GET['pwd']); //(host, username, password)

// specify database ** EDIT REQUIRED HERE **
mysql_select_db("weblog") or die("Unable to select database"); //select which database we're using

// Created sortable variables.  Add 'Cultivated' back to array when fixed
$sortColumns = array('VisIP', 'VisRef', 'VisUrl', 'VisDate', 'Browser', 'SearchParam', 'NumRecords');
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
$query = "SELECT ".implode(", ", $sortColumns)." FROM logs ORDER BY ".$sortColumns[$_GET['op']]." ".$sortOrder[$_GET['ord']];
$PHP_SELF = getenv('SCRIPT_NAME'); // EDIT HERE and specify your table and field names for the SQL query 

// If query fails this sends a message detailing the point of failure...typically a MySQL syntax error.
if(! $sql= mysql_query($query) )
echo "query failed: \n[$query]\n" . mysql_error()."\n";

// delete this to remove query display from page
// echo $query;

// Calculate number of results and rows
 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);
 
// next determine if s has been passed to script, if not use 0
if (empty($_GET['s'])) {
  $s=0;
} else {
  $s = intval($_GET['s']);
}

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");
    
// begin to show results set
echo "<center><font color='black'>Results</font></center>";
$count = 1 + $s ;

// now you can display the results returned
$result = mysql_query($query);

$default_sort = $count;

echo "<table border='1'>";
echo '<tr>';
foreach($sortColumns as $key => $column)
{
echo '<th><a href="',$PHP_SELF,"?uid=$User&pwd=$Pword",'&op=',$key,'&ord=',($_GET['op'] == $key && 0 == $_GET['ord']) ? '1' : '0','&Submit=login"><font color="black">',$column,'</font></a></th>';
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

// Define current page variable
$currPage = (($s/$limit) + 1);

//break before paging
  echo "<br /><center>";

  // next we need to do the links to other results
  if ($s>=1) { // bypass PREV link if s is 0
  $prevs=($s-$limit);
  echo '<a href="',$PHP_SELF,"?s=$prevs&uid=$User&pwd=$Pword",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'&Submit=login"><font color="black">&lt;&lt;Prev 10</font></a>&nbsp&nbsp;';
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
  echo '<a href="',$PHP_SELF,"?s=$news&uid=$User&pwd=$Pword",'&op=',$_GET['op'],'&ord=',$_GET['ord'],'&Submit=login"><font color="black">Next 10 &gt;&gt;</font></a></center>';
  }


$a = $s + ($limit) ;
  if ($a > $numrows) { $a = $numrows ; }
  $b = $s + 1 ;
  echo "<center><p><font color='black'>Showing results $b to $a of $numrows</font></p></center>";
  
?>



</body>

</html>
