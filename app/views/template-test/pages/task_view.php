<div class="tasks">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-content">
          <div class="page-content__head">

            <div class="add-task">
              <h4 class="h4">Добавить новое задание</h4>
              <hr>
              <form methode="POST" id="form-new-task">
                <div class="row">
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
                  <textarea name="task" class="form-control" required placeholder="Введите текст задачи"></textarea>
                </div>
                <button class="btn btn-primary" name="form-new-taskBtn">Добавить</button>
              </form>
            </div> 

            <h1 class="i-title-page"><?=(isset($pageTitle))? $pageTitle:'';?></h1>
          </div>

          <div class="page-content__main">
            <?php
         
              if($all_tasks):
                ?>
                <table class="i-table" id="task-table">
                  <thead>
                    <tr>
                      <th>Имя пользователя</th>
                      <th>E-mail</th>
                      <th>Текст задачи</th>
                      <th>Статус</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach($all_tasks as $all_task):
                        $ideTask = $all_task->ideTas;
                        $status = $all_task->status;
                        $up = $all_task->up;
                        ?>
                          <tr>
                            <td><?=$all_task->name;?></td>
                            <td><?=$all_task->email;?></td>
                            <td><?=$all_task->task;?></td>
                            <td>
                              <ul class="tbl-action">
                                <?php 
                                  if($status==1):
                                    if(isset($_SESSION['admin'])):
                                      ?>
                                        <li><a href="<?=BASE_URL.'task/update/?id='.$ideTask;?>" class="toggle-officon- js-update-status" data-toggle="modal" data-target="#upStatus" data-idtask="<?=$ideTask;?>"></a></li>
                                      <?php
                                    endif;
                                  elseif($status==2):
                                    ?>
                                      <li>
                                        <span class="okicon- green">Выполнено</span>
                                      </li>
                                    <?php
                                  endif;
                                  if($up>0):
                                    ?>
                                      <li><span class="okicon- ">Отредактировано администратором</span></li>
                                    <?php
                                  endif;      
                                  if(isset($_SESSION['admin'])):
                                    ?>
                                      <li><a href="<?=BASE_URL.'task/update/?id='.$ideTask;?>" class="editicon-"></a></li>
                                    <?php
                                  endif;
                                ?>
                              </ul>
                            </td>
                          </tr>
                        <?php 
                      endforeach;
                    ?>
                  </tbody>
                </table>
                <?php
              else:
                echo '<div class="alert-empty alert alert-primary" role="alert">Информация не найдена</div>';
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  