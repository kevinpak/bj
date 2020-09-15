<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-content">
      <div class="page-content__head">
        <h1 class="i-title-page"><?=(isset($pageTitle))? $pageTitle:'';?></h1>
      </div>
      <div class="page-content__main">
        <div class="update-task">
          <form methode="POST" id="form-update-task">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Имя пользователя</label>
                <input type="text" class="form-control" name="name"  value="<?=(isset($name)&&!empty($name))? $name:'';?>"  placeholder="Введите Имя пользователя" required>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Электронная почта</label>
                <input type="email" class="form-control" name="email" value="<?=(isset($email)&&!empty($email))? $email:'';?>" placeholder="Введите адрес электронной почты" required>
              </div>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">текст задачи</label>
              <textarea name="task" class="form-control" required><?=(isset($task)&&!empty($task))? $task:'';?></textarea>
            </div>
            <button class="btn btn-primary" name="form-update-taskBtn">Изменить</button>
          </form>
        </div> 
      </div>

    </div>
    </div>
  </div>
</div>

