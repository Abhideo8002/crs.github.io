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
        <h1><strong style="color: #FFFFFF">STUDENT REGISTRATION</strong></h1>
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
  $fn=$_REQUEST['n1'];
  $g1=$_REQUEST['n2'];
  $em=$_REQUEST['n3'];
  $cn=$_REQUEST['n4'];
  $ct=$_REQUEST['n5'];
  $add=$_REQUEST['n6'];
  $dob=$_REQUEST['n7'];
  $sch=$_REQUEST['n8'];
  $yop1=$_REQUEST['n9'];
  $per1=$_REQUEST['n10'];
  $col=$_REQUEST['n11'];
  $yop2=$_REQUEST['n12'];
  $per2=$_REQUEST['n13'];
  $uni1=$_REQUEST['n14'];
  $yop3=$_REQUEST['n15'];
  $per3=$_REQUEST['n16'];
  $oq=$_REQUEST['n20'];
  $un=$_REQUEST['n21'];
  $pw=$_REQUEST['n22'];
  $q="insert into regstu(fna,gen,em,con,cty,addr,dob,scho,yp1,pr1,coll,yp2,pr2,uni1,yp3,pr3,oqa,una,pwd)
 values('$fn','$g1','$em','$cn','$ct','$add','$dob','$sch','$yop1','$per1','$col','$yop2','$per2','$uni1','$yop3','$per3','$oq','$un','$pw')";
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