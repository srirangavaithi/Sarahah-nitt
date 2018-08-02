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
$name=$_POST["name"];
$cno=$_POST["cno"];
$moe=$_POST["moe"];
$yoe=$_POST["yoe"];
$cvv=$_POST["cvv"];
$donrs=$_POST["donrs"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_db";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
$INSERT="INSERT INTO don VALUES(?,?,?,?,?,?)";
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("siiiii",$name,$cno,$moe,$yoe,$cvv,$donrs);
$stmt->execute();
echo "<h1> Thank you for your donation</h1>";
?>

</body>
</html>