<!DOCTYPE...>
<html>
	<title>www.crs.com</title>
    <head>
    	<link rel="stylesheet" href="action.css">
    </head>
    <body>
    	<div id="main">
        	<div id="top">
            	
            </div>
            <div id="mid">
            <div id="mid1">
            	<center>
        <h1><strong style="color: #FFFFFF">COMPANY REGISTRATION</strong></h1>
      </center>
    </div>
    <div id="mid2">
    <?php
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
	  echo "not connected...";
  }
  mysql_select_db("crs");
  $n=$_REQUEST['t1'];
  $e=$_REQUEST['t2'];
  $em=$_REQUEST['t3'];
  $cn=$_REQUEST['t4'];
  $hn=$_REQUEST['t5'];
  $un=$_REQUEST['t7'];
  $ps=$_REQUEST['t8']; 
  $q="insert into regcmp(cn,et,em,ct,hr,us,ps) values('$n','$e','$em','$cn','$hn','$un','$ps')";
   mysql_query($q);
?>
<h1 align="center">Thanks for register with us </h1>
    </div>
            </div>
            <div id="menu">
            	<div id="hom">
                	<a href="index.html">HOME</a>
                </div>
                <div id="abt">
                	<a href="about.html">ABOUT US</a>
                </div>
                <div id="cnt">
                	<a href="contact.html">CONTACT</a>
                </div>
            </div>
            
            <div id="bottom">
            	<div id="bottom1">
    			<table>
                	<tr>
                    	<td><a href="index.html" class="bot">
                        HOME</a>&nbsp;|</td>
                    <td><a href="about.html" class="bot">
                    ABOUT US</a>&nbsp;|</td>
                   <td><a href="contact.html" class="bot">
                   CONTACT</a>&nbsp;|</td>
                    </tr>
                </table>
              </div>
              <div id="bottom2">
              	<span class="bot2">Design By :</span><span class="bot3"> Mr. Shyam Sundar Pradhan, Mr. Shiv Shankar Pradhan, & Mr. Prakash Oraon.</span>
              </div>
            </div>
        </div>
    </body>
</html>