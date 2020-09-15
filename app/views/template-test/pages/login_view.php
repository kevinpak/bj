<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="page-content">
        <div class="page-content__head">
          <h1 class="i-title-page"><?=(isset($pageTitle))? $pageTitle:'';?></h1>
        </div>
        <div class="page-content__main">
          <div class="login">
            <form methode="POST" id="form-login">
              <div class="form-group">
                <label for="adminLogin">Логин</label>
                <input type="text" class="form-control" name="login" placeholder="Введите Логин" id="adminLogin" required>
              </div>
              <div class="form-group">
                <label for="dminPassword">Пароль</label>
                <input type="password" class="form-control" name="password" placeholder="Ваш пароль" id="adminPassword"  required>
              </div>
              <button type="submit" class="btn btn-primary" name="form-loginBtn">Войти</button>
            </form>
          </div> 
        </div>

      </div>
    </div>
  </div>
</div>


