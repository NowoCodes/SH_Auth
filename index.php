<?php
  include 'head.php';
  session_start();
  if(!isset($_SESSION['userData']['username'])) {
    header("Location login.php");
    exit;
  }
?>


<body>
  <div class="container pt-5 mt-5">
    <h1>Welcome</h1>
  
  
    <p>Click <a href="logout.php" class="btn btn-primary"> here </a> to logout!!!</p>
  </div>
</body>
</html>