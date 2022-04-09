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
					$q="select *from regcmp";
					$st=mysql_query($q);
	?>
    <table width="100%" border="1">
						  <tr>
                              <th class="tt">Company ID</th>
                              <th class="tt">company name</th>
                              <th class="tt">Estabalished</th>
                              <th class="tt">Email</th>
                              <th class="tt">Contact No.</th>
                              <th class="tt">HR Name</th>
                          </tr>
    <?php
					while($rs=mysql_fetch_assoc($st))
					{
						?>
                          <tr>
						  	<td><?php echo $rs['cid'];?></td>
						  	<td><?php echo $rs['cn'];?></td>
                            <td><?php echo $rs['et'];?></td>
                            <td><?php echo $rs['em'];?></td>
                            <td><?php echo $rs['ct'];?></td>
                            <td><?php echo $rs['hr'];?></td>
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
              	<span class="bot2">Design By :</span><span class="bot3"> Mr. Shyam Sundar Pradhan, Mr. Shiv Shankar Pradhan, & Mr. Prakash Oraon.</span>
              </div>
            </div>
        </div>
    </body>
</html>