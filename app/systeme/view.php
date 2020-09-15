<?php
class View
{
  public function load(string $template_view,$data = null){
    if(isset($data)):
      extract($data);
    endif;

    $view_path = 'app/views/template-'.TEMPLATE_NAME.'/'.$template_view.'.php';

    if(file_exists($view_path)):
      include $view_path;
    else:
      show_error('Sorry, the file could not be found!');
    endif;
  }
}//End view


?>