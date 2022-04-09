<!DOCTYPE...>
<html>
	<title>www.crs.com</title>
    <head>
    	<link rel="stylesheet" href="loginaction.css">
    </head>
    <body>
    	<div id="main">
        	<div id="top">
            	
            </div>
            <div id="mid">
           
    <div id="mid2">
    	<?php
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
	  echo "not connected...";
  }
  mysql_select_db("crs");
  $cn=$_REQUEST['t0'];
  $jp=$_REQUEST['t1'];
  $sa=$_REQUEST['t2'];
  $eli=$_REQUEST['t3'];
  $emai=$_REQUEST['t4'];
  $q="insert into postvac(cname,job,sal,elb,emaa)
 values('$cn','$jp','$sa','$eli','$emai')";
  mysql_query($q);
  ?>
  <h1 align="center">Your Vacancy is post </h1>
    </div>
            </div>
            <div id="menu">
            	<div id="hom">
                	<a href="index.html">HOME</a>
                </div>
                <div id="abt">
                	<a href="postvac.php">Post Vacancy</a>
                </div>
                <div id="cnt">
                	<a href="studetail.php">View Student Details</a>
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