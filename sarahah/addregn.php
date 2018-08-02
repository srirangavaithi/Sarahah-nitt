<html>
<head>
	<style type="text/css">
		div.c{
		text-align: right;
	}
	 h1.b{color: white;
	 	  font-family: Rage Italic;

	 }
	    h2{
	    	color: white;
	    	font-family: Blackadder ITC;
	    	
	    }
		h1.a{ 
		    color:powderblue;
            font-family:Brush Script MT;
            font-style: italic;
            font-size: 300%;
            border: 1px solid lightblue;

		  }
		body
		  {
            color: blue;
		  }
        div.a
        {text-align: center;
       
        }
        div.b
        {margin: 50px;}

        .button {
  border-radius: 4px;
  background-color:#66CCCC;
  border: none;
  color: #FFFFFF;
  text-align: top;
  font-size: 14px;
  padding: 20px;
 
  transition: all 0.5s;
  cursor: pointer;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 12px;
  right : -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	</style>
</head>
<body bgcolor="#344152">
<?php
echo "<h1 class=\"a\"> <div class=\"c\">";
$username=$_POST["uname"];
$password=$_POST["pword"];
$password2=$_POST["pword2"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_db";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if (empty($username)||empty($password)||empty($password2))
{
	echo "All fields required";
}
//$SELECT="SELECT FROM lg_register VALUES (?,?)";
//$stmt = $conn->prepare($SELECT);
//$stmt->bind_param("ss",$uname,$pword);
//$stmt->execute();
//$stmt->bind_result($uname);
//$stmt->store_result();
//$rnum= $stmt->num_rows;
//if($rnum==1)

if($password==$password2)
{
{


$INSERT="INSERT INTO lg_register VALUES(?,?)";
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
echo "registered";
}
}


else
{
echo "password and confirmed password not matching";
}
echo "</h1></div>";
?>
<button class="button"  ><span><p class="b">Go to index page</p> </span></button>
</body>
</html>