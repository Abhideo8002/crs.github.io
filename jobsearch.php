<!DOCTYPE...>
<html>
	<title>www.crs.com</title>
    <head>
    	<link rel="stylesheet" href="shyam.css">
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
						echo "Not Connected...";
					}
					mysql_select_db("crs");
					$jt=$_REQUEST['t1'];
					$q="select *from postvac where job='$jt'";
					$jt1=mysql_query($q);
					$rs=mysql_fetch_assoc($jt1);
				?>
                	
                <table border="1" width="80%" align="center">
                	<tr>
                    	<td class="tt">Company Name</td>
                    	<td class="tt">Job Profile</td>
                        <td class="tt">salary</td>
                        <td class="tt">Eligibility</td>
                        <td class="tt">Email</td>
                    </tr>
               <?php
                while($rs=mysql_fetch_assoc($jt1))
					{
				?>
                    <tr>
                    	<td ><?php echo $rs['cname']; ?></td>
                    	<td><?php echo $rs['job']; ?></td>
                        <td><?php echo $rs['sal']; ?></td>
                        <td><?php echo $rs['elb']; ?></td>
                        <td><?php echo $rs['emaa']; ?></td>
                    </tr>
                    <?php
					}
					?>
                </table>
            </div>
            <div id="menu">
            	<div id="hom">
                	<a href="index.html">HOME</a>
                </div>
                <div id="abt">
                	<a href="studentsite.php">Search Job</a>
                </div>
                <div id="cnt">
                	<a href="comdetail.php">View company Details</a>
                </div>
                <div id="logout">
                	<a href="index.html">Logout</a>
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
              	<span class="bot2">Design By :</span><span class="bot3"></span>
              </div>
            </div>
        </div>
    </body>
</html>