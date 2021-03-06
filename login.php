<?php
  include 'head.php';
  session_start();

  if (isset($_POST)) {
    $loginData = array(
      'Dan' => '12345',
      'User1' => '123456', 
      'User2' => '1234567'    
    );

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (isset($loginData[$username]) && $loginData[$username] == $password) {
      $_SESSION['userData']['username'] = $loginData[$username];
      header("Location: index.php");
      exit;
    }
  }
?>

<div class="container pt-5 mt-5">
  <h2 class="text-center fw-bold">Login</h2>
  <form action="" method="POST" name="loginForm">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group mb-2">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary mb-4">Submit</button>
  </form>

  <h4>Username and Password</h4>
  Dan = 12345 <br>
  User1 = 123456 <br>
  User2 = 1234567  
</div>

<?php include 'footer.php'; ?>