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
  $q="select *from regstu where una='$u'";
  $st=mysql_query($q);
  $rs=mysql_fetch_assoc($st);
  $dp=$rs['pwd'];
  if($dp==$p)
  {
	  header("location:afterstulogin.html");
  }
  else
  {
	  echo "invalid user name and password";
  }
  
	   ?>
   </body>
</html>