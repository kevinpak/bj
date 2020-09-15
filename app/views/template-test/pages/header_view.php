<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header__content">
          <div class="header__content-left">
            <a href="<?=BASE_URL;?>" class="logo-link">Bee<span>Jee</span></a>
          </div>
          <div class="header__content-right">
            <?php
            if(isset($_SESSION['admin'])):
              ?>
              <div class="header_login">Admin - <?=$_SESSION['admin']['login'];?></div>
              <a href="<?=BASE_URL.'login/logout'?>" class="connect-link i-link officon- i-icon__">Выйти</a>
              <?php
            else:
              ?>
              <a href="<?=BASE_URL.'login'?>" class="connect-link i-link usericon- i-icon__">Войти</a>
              <?php
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>