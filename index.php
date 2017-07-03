<html>
<head>
    <meta charset="UTF-8">
    <title>Strona</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>


        .im {
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 0;

        }
        .ob {

            width:740px;
            height:490px;
        }
        .pierwszy {
            height: 490px;
            background-size: cover;
           
        }
        .jdata {
            position: absolute;
            height:50%;
            top: 400px;
            width: 100%;
            font-size:12px;
            font-family: 'Century Gothic';
            color: #827f76;
            left:8%;
            text-transform: uppercase;
        }
        .jtekst {
            position: absolute;
            height:35%;
            width: 100%;
            font-size:27px;
            font-family: 'Arial';
            left: 5%;
            text-transform: uppercase;
            font-style: bold;
            color: white;
            font-weight: 700;
            top: 400px;

        }

        html {
            background-color: #e2e7ec;
            position: absolute;
            width: 100%;
            height: 100%;}

        body {
            background-color: #e2e7ec;;
            margin-top: 90px;
            margin-left: 240px;
            margin-right: 140px;
            position: absolute;}

        .img-circle {
            margin-left:20px;
            top: 30px;
            position: relative;
        }
        .tekst {
            width:360px;
            height:240px;
            background-color: white;
        }

        h1 {
            font-size:25px;
            font-style: bold;
            color: #1d1d1d;
            font-weight: 700;
            font-family: 'Century Gothic';
            margin-left: 20px;
            margin-right: 20px;
            text-transform: uppercase;

        }
        .de {
            font-size:10px;
            font-family: 'Century Gothic';
            margin-left: 20px;
            text-transform: uppercase;
            color: white;
            color: #818181;
        }

        .col-sm-8 {
            width:64%;

            
        }
    </style>
</head>
<body>
<?php
$connection=mysqli_connect("localhost","bloguser","","blog");
$wynik = $connection->query("select * from posts  order by id desc");
echo "<div class='content'><center><div class='row'>
<div class='col-sm-4'><form method='post' action='add.php'>
 <input type='submit' value='Add'/>
</form></div>
<div class='col-sm-4'><form method='post' action='edit.php'>
 <input type='submit' value='Edit'/>
</form></div>
<div class='col-sm-4'><form method='post' action='del.php'>
 <input type='submit' value='Delete'/>
</form></div></div></center>";
echo "<div class='row'><div class='a'>";

$ro=$wynik->fetch_assoc();
echo "<div class='m-8col-s' style='background-color: transparent;'><div class='col-sm-8 im pierwszy' style='margin-right:30px; background-image: url(". $ro['image'].");'>
	<img src='http://oi65.tinypic.com/13zoigw.jpg' /><p class='jdata'>"
    . date('F d, Y',strtotime($ro['date']))."</p><h1 class='jtekst'>"
    . $ro['title']."</h1></div></div></div> ";


if ($wynik->num_rows > 0) {
    while(($row=$wynik ->fetch_assoc()) != NULL)

        echo "<div class='col-sm-4 im'>
	<img src='". $row['image']."'border='0' width='360' height='250'><div class='tekst'>
  <div class='de'></br>". date('F d, Y',strtotime($row['date']))."</div><h1>". $row['title']."</h1><img src='". $row['authorImage']."' class='img-circle' width='54' height='54'></div></div>";
}

echo "</div></div>";

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
    $(document).ready(function() {

    });
</script>
</body></html>
