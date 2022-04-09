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
					$q="select *from regstu";
					$st=mysql_query($q);
	?>
    <table  border="1" width="20%">
						  <tr>
                              <th class="tt">Student Name</th>
                              <th class="tt">Gender</th>
                              <th class="tt">Email</th>
                              <th class="tt">Contact No.</th>
                              <th class="tt">School</th>
                              <th class="tt">Year Of Passing</th>
                              <th class="tt">Persentage</th>
                              <th class="tt">Collage</th>
                              <th class="tt">Year Of Passing</th>
                              <th class="tt">Persentage</th>
                              <th class="tt">University</th>
                              <th class="tt">Year Of Passing</th>
                              <th class="tt">Persentage</th>
                              <th class="tt">Other Qualification</th>
                          </tr>
    <?php
					while($rs=mysql_fetch_assoc($st))
					{
						?>
                          <tr>
						  	<td><?php echo $rs['fna'];?></td>
						  	<td><?php echo $rs['gen'];?></td>
                            <td><?php echo $rs['em'];?></td>
                            <td><?php echo $rs['con'];?></td>
                            <td><?php echo $rs['scho'];?></td>
                            <td><?php echo $rs['yp1'];?></td>
                             <td><?php echo $rs['pr1'];?></td>
                             <td><?php echo $rs['coll'];?></td>
                            <td><?php echo $rs['yp2'];?></td>
                             <td><?php echo $rs['pr2'];?></td>
                             <td><?php echo $rs['uni1'];?></td>
                            <td><?php echo $rs['yp3'];?></td>
                             <td><?php echo $rs['pr3'];?></td>
                             <td><?php echo $rs['oqa'];?></td>
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
                	<a href="comdetail1.php">View Company Details</a>
                </div>
                <div id="cnt">
                	<a href="studetail1.php">View Student Details</a>
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