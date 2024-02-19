

<?php require_once 'includes/head.include.php';?>

  <div id="page_content_container" class="page_content_container">

    <title>Signup - <?= APP_NAME ?></title>
    
    <center>
      <?php
        if(!empty($errors)){
          echo "<div class='error'>".implode("<br>", $errors)."</div>";
        }
      ?>
      <h1>Create Account</h1>
      <form action="" method="post">
        <label for="name">Fullname</label><br>
        <input type="text" id="name"name="name"  required>
        <br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        <label>
          <input type="checkbox" name="terms" value="1" required>Accept Terms
        </label>
        <br>
        <br>
        <input type="submit" name="signup_btn" value="Create">
      </form>
      <br>
      <a href="<?=ROOT?>/login"
        hx-get="<?=ROOT?>/login"
        hx-target="#page_content_container"
        hx-swap="outerHTML"
        hx-push-url="<?=ROOT?>/login"
        hx-indicator="#loading">Login</a>
      <br>
      <br>
      <a href="<?=ROOT?>"
        hx-get="<?=ROOT?>"
        hx-target="#page_content_container"
        hx-swap="outerHTML"
        hx-push-url="<?=ROOT?>"
        hx-indicator="#loading">Return to Home</a>
    </center>
    
  </div>


<?php require_once 'includes/footer.include.php';?>