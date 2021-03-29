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
 
   ?>
<div class="container">
   <h2>Student Form</h2>
   <p><span class="error">* required field</span></p>
   <form method="post" action="student-show.php"> 
       <div>
           Name: <input type="text" name="name" value="">
       </div>
       <div>
           E-mail: <input type="text" name="email" value="">
       </div>
       <div>  Phone Number: <input type="text" name="phoneno" value="">
       </div>
       <div>
           Gender:
           <input type="radio" name="gender"  value="female">Female
           <input type="radio" name="gender"  value="male">Male
           <input type="radio" name="gender"  value="other">Other 
       </div>
       <div>
           Major:
           <select name="major">
               <!--
                   <option value="DIM">ดิจิทัลคอนเทนต์และสื่อ</option>
                   <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม</option>
                   <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                   <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                   <option value="COM">นิเทศศาสตร์ดิจิทัล</option>
               -->
               <?php
               foreach($majorList as $id => $name){
                   echo "<option value='".$id."'>".$name."</option>";
               }
               ?>
           </select>
       </div>
       <div>
           Comment: <textarea name="comment" rows="5" cols="40"></textarea>
       </div>
       <div>
           <input type="submit" name="submit" value="Submit"> 
       </div>
   </form>
</div>
 
</body>
</html>
