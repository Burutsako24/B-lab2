<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
   <?php
       $majorList = array('DCM'=>"ดิจิทัลคอนเทนต์และสื่อ",
       'MTA'=>"เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม",
       'ITD'=>"เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล",
       'IMI'=>"นวัตกรรมสารสนเทศทางการแพทย์",
       'COM'=>"นิเทศศาสตร์ดิจิทัล");
 
       $name = $_POST["name"];
       $majorID = $_POST["major"];
       $majorName = "";
       foreach($majorList as $key => $value){
           if($majorID==$key){
            $majorName = $value;
           }
       }
   ?>
<div class="container">
   <h2>Student Show</h2>
   NAME: <?php echo $name  ?><br>
   MAJOR: <?php echo $majorName  ?><br>
</div>
 
</body>
</html>
 
