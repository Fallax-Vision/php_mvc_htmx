
<?php require_once 'includes/head.include.php';?>

  <div id="page_content_container" class="page_content_container">

    <title>Login - <?= APP_NAME ?></title>

    <center>
      <?php
        if(!empty($errors)){
          echo "<div class='error'>".implode("<br>", $errors)."</div>";
        }
      ?>
      <h1>Login</h1>
      <form action="" method="post">
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="login_btn" value="Login">
      </form>
      <br>
      <a href="<?=ROOT?>/signup"
        hx-get="<?=ROOT?>/signup"
        hx-target="#page_content_container"
        hx-swap="outerHTML"
        hx-push-url="<?=ROOT?>/signup"
        hx-indicator="#loading">Create Account</a>
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