<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CCP4-BCA Summer School 2023</title>
<link rel="SHORTCUT ICON" HREF="images/icon_www.jpg" />
<link rel="stylesheet" type="text/css" href="styles/gallery.css"/>
<link rel="stylesheet" type="text/css" href="styles/ccp4.css" />
<!--script type="text/javascript" src="gallery.js"></script-->
</head>
<body>

<?PHP
// Include the CCP4 banner and navigation bar
include("includes/banner.php");
?>

<div class="pageBody">

<h2 style="clear:both">Lecture and workshop slides</h2>

<?PHP
selectFiles("2022");

//////////////////////////////////////////////////
// Function to display all files as table of links  //
//////////////////////////////////////////////////
function selectFiles($check) {
  echo "<table>\n";
  $rtnArray=scandir("course_material", 0);
  $numFiles = count($rtnArray);
  for ($i=0 ; $i < $numFiles ; $i++) {
    if(strstr($rtnArray[$i],$check)!=FALSE)
      {
    $fileArray = explode("/", $rtnArray[$i]);
    $descArray = explode(".", $fileArray[1]);
    echo "<tr><td><font size=\"+1\"><a class=darklink href=\"course_material/".$rtnArray[$i]."\">".$rtnArray[$i]."</a></font></td></tr>\n";
      }
  }
  echo "</table>\n";
}
?>

<p><strong style="color: red;">Watch this space!</strong></p>

<?PHP
// Include the CCP4 banner and navigation bar
include("includes/sponsors.php");
?>

</body>

</HTML>
