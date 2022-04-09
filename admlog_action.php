<html>
   <body>
       <?php
	     $con=mysql_connect("localhost","root","");
  if(!$con)
  {
	  echo "not connected...";
  }
  mysql_select_db("crs");
  $u=$_REQUEST['t1'];
  $p=$_REQUEST['t2'];
  $q="select *from regadm where uname='$u'";
  $st=mysql_query($q);
  $rs=mysql_fetch_assoc($st);
  $dp=$rs['pass'];
  if($dp==$p)
  {
	  header("location:afteradmlogin.html");
  }
  else
  {
	  echo "invalid user name and password";
  }
  
	   ?>
   </body>
</html>