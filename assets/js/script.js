$(document).ready(function(){
  
  /*
  |--------------------------------------------------------------------------
  | Générale
  |--------------------------------------------------------------------------
  |
  */
  //==>
  let base_url = window.location.protocol + "//" +window.location.host+"/";
  
  //==>
  let urls = window.location.pathname;
  let url = urls.split('/');
  let urlHref = window.location.href;
  let urlSearch = window.location.search;
  //console.log(window.location); 

  //==Alert=>
  $('.item-alertSession').alertAjaxSession();


  //==DataTable=>
  $('#task-table').DataTable({
    "lengthMenu": [[3, -1], [3, "All"]]
    
  });

  
  
  //==>
  function actionAjaxStart(form,btn){
    btn.prop("disabled", true);
    btn.html('Загрузка... <span class="spin3icon- i-icon__"></span>');
  }
  function actionAjaxError(form,btn,btnText,message){
    form.find(".js-alert").remove();
    form.append('<div class="form-alert js-alert">'+message+'</div>');
    btn.html(btnText);
    btn.prop("disabled", false);
  }
  function actionAjaxInit(form,btn,btnText){
    form.find(".js-alert").remove();
    btn.html(btnText);
    btn.prop("disabled", false);
  }
  
  
  
  //==>StandarAjaxScript
  function StandarAjaxScript(url,formData,btnText,form,btn)
  {
    $.ajax({
      type: "POST",
      url:  url,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      async: false,
      success: function(data){
       if(data.statut=='success'&&data.data.indexOf("http") !== -1){
          document.location.href=data.data;
        }else{
          let message = data.message;
          actionAjaxError(form,btn,btnText,message);
        }
     
      },
      error: function(data){
        alert("Can not perform the upload action:" + JSON.stringify(data));
      }
    });
  }
  


  /*
  |--------------------------------------------------------------------------
  | Admin
  |--------------------------------------------------------------------------
  |
  */
  //==>Admin=> Login
  $('body').on('submit', 'form#form-login', function(e){
    e.preventDefault();
    
    let form = $(this);
    let btn = form.find('button[name="form-loginBtn"]');
    
    actionAjaxStart(form,btn);
    let formData = new FormData(form[0]);
  
    formData.append("ActiveAjax", 'adminLogin');
    formData.append("Returnlink", base_url);
		StandarAjaxScript(base_url+'login',formData,'Войти',form,btn);
    
  });


  
  /*
  |--------------------------------------------------------------------------
  | Task
  |--------------------------------------------------------------------------
  |
  */
  //==>Task=>Add New task
  $('body').on('submit', 'form#form-new-task', function(e){
    e.preventDefault();
    
    let form = $(this);
    let btn = form.find('button[name="form-new-taskBtn"]');
    
    actionAjaxStart(form,btn);
    let formData = new FormData(form[0]);
  
    formData.append("ActiveAjax", 'addNewTask');
    formData.append("Returnlink", base_url+'task');
		StandarAjaxScript(base_url+'task/add',formData,'Добавить',form,btn);
    
  });
  
   //==>Task=>Update task
   $('body').on('submit', 'form#form-update-task', function(e){
    e.preventDefault();
    
    let form = $(this);
    let btn = form.find('button[name="form-update-taskBtn"]');
    
    actionAjaxStart(form,btn);
    let formData = new FormData(form[0]);
  
    formData.append("ActiveAjax", 'updateTask');
    formData.append("Returnlink", urlHref);
		StandarAjaxScript(urlHref,formData,'Изменить',form,btn);
    
  });
  


  $('body').on('click', '.js-update-status', function(e){
    e.preventDefault();
    let ideTask = $(this).attr('data-idtask');
    let ideModal = $(this).attr('data-target');
    $(ideModal).find('form input[name="ide"]').val(ideTask);
  });

  //==>Task=>Update status task
  $('body').on('submit', 'form#updateStatusTask', function(e){
    e.preventDefault();
    
    let form = $(this);
    let btn = form.find('button[name="updateStatusTaskBtn"]');
    
    actionAjaxStart(form,btn);
    let formData = new FormData(form[0]);
  
    formData.append("ActiveAjax", 'updateStatusTask');
    formData.append("Returnlink", urlHref);
		StandarAjaxScript(urlHref,formData,'Да',form,btn);
    
  });
  
  
  
  
  
  
  
});//END DOCUMENT
