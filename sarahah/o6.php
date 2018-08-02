<html>
<head>
  <style type="text/css">
    input{
        border:1px solid lightblue;
        padding: 4px; 
        border-radius: 40px;

       }
      h2.a{
        color: white;
        font-family: Blackadder ITC;
        font-size: 300%;
      }
    h1{ 
        color:powderblue;
            font-family:Brush Script MT;
            font-style: italic;
            font-size: 300%;
            border: 1px solid lightblue;

      }
      h1.c{ 
        color:grey;
            font-family:Brush Script MT;
            font-style: italic;
            font-size: 200%;
            border: 1px solid grey;

      }
    body
      {
            color: #33cccc;
            font-family:  Blackadder ITC;
      }
        div.a
        {text-align: center;}
        div.b
        {margin: 50px;}

        .button {
                 background-color: #00FFFF;
                 border: none;
                 color: white;
                 padding: 20px;
                 text-align: center;
                 text-decoration: none;
                 display: inline-block;
                 font-size: 16px;
                 margin: 4px 2px;
                 cursor: pointer;
                 border-radius: 12px;
               }

          p.a{
            color:#66CCCC; 
            font-style:italic;
          }      
          p.b{
            color:black; 
            font-style:italic;
          } 
          p.c{
            border: 10px solid lightblue;
            padding: 5px;
          }
          body {
    margin: 0 auto;
    max-width: 800px;
    padding: 0 20px;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
  </style>
</head>
<body bgcolor="#344152">
<?php

$uname="NITT ADMIN";
$pword=$_POST["pword"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_db";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$SELECT="SELECT Username FROM lg_register WHERE Username=? AND Password=?";
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss",$uname,$pword);
$stmt->execute();
$stmt->bind_result($uname);
$stmt->store_result();
$rnum= $stmt->num_rows;
if($rnum==1)
{
  echo "welcome<br>";
  echo "<h1>".$uname."</h1>";
  
  
  echo "<br><h1>inbox</h1>";
  $sql = "SELECT mesg FROM mesgl WHERE receiver=\"".$uname."\"";
  $result = $conn->query($sql);


  if ($result->num_rows> 0)
 { echo "<div class=\"c\"><br><h2>INBOX</h2></div>";

    while($row = $result->fetch_assoc()) {

        echo  "<div class=\"container\"><h1 class=\"c\">".$row["mesg"]."</h1><br></div>";
        echo "";
    }

} else {
    echo "No Messages";
}
}
  
else
{
  echo "Username or Password wrong";
}
?>
<button class="button"  ><span><p class="b">Go to index page</p> </span></button>
</body>
</html>
