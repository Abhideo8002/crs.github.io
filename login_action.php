<!DOCTYPE...>
<html>
	<title>www.crs.com</title>
    <head>
    	<link rel="stylesheet" href="other.css">
    </head>
    <body>
    	<div id="main">
        	<div id="top">
            	
            </div>
            <div id="mid">
            	<?php
	     $con=mysql_connect("localhost","root","");
  if(!$con)
  {
	  echo "not connected...";
  }
  mysql_select_db("crs");
  $u=$_REQUEST['t1'];
  $p=$_REQUEST['t2'];
  $q="select *from regcmp where us='$u'";
  $st=mysql_query($q);
  $rs=mysql_fetch_assoc($st);
  $dp=$rs['ps'];
  if($dp==$p)
  {
	  header("location:compsite.php");
  }
  else
  {
	  echo "invalid user name and password";
  }
  
	   ?>
            </div>
            <div id="menu">
            	<div id="hom">
                	<a href="index.html">HOME</a>
                </div>
                <div id="abt">
                	<a href="about.html">ABOUT US</a>
                </div>
                <div id="cnt">
                	<a href="contact.html">CONTACT US</a>
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