<html>
<body>
   <h1>REQUEST</h1>
   Welcome <?php echo $_REQUEST["name"]; ?><br>
   Your email address is: <?php echo $_REQUEST["email"]; ?>
   <div>===========================</div>
   <h1>GET</h1>
   Welcome <?php echo $_GET["name"]; ?><br>
   Your email address is: <?php echo $_GET["email"]; ?>
   <div>===========================</div>
   <h1>POST</h1>
   Welcome <?php echo $_POST["name"]; ?><br>
   Your email address is: <?php echo $_POST["email"]; ?>
   <div>===========================</div>
</body>
</html>
