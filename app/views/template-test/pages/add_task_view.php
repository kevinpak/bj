<div class="page-content">
  <div class="page-content__head">
    <h1 class="i-title-page"><?=(isset($pageTitle))? $pageTitle:'';?></h1>
  </div>
  <div class="page-content__main">
    <div class="add-task">
      <form methode="POST" id="form-new-task">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Имя пользователя</label>
            <input type="text" class="form-control" name="name"   placeholder="Введите Имя пользователя" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Электронная почта</label>
            <input type="email" class="form-control" name="email" placeholder="Введите адрес электронной почты" required>
          </div>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">текст задачи</label>
          <textarea name="task" class="form-control" required>
          </textarea>
        </div>
        <button class="btn btn-primary" name="form-new-taskBtn">Добавить</button>
      </form>
    </div> 
  </div>

</div>

