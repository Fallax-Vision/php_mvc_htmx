
<header id="header" hx-preserve="true">
  <!-- <menu>
    <a href="<?=ROOT?>">Home</a>
    <a href="<?=ROOT?>/products">Products</a>
    <a href="<?=ROOT?>/login">Account</a>
  </menu> -->

  <div class="main_menu">

    <div class="wrapper">
      <?php
        one_menu_item('home','home','','Home','');
        one_menu_item('about','about','','About','');
        one_menu_item('login','login','','Login','');
      ?>
    </div>
  </div>
</header>