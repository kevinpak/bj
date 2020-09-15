

<div class="modal" tabindex="-1" role="dialog" id="upStatus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Изменение статуса</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<form method="POST" id="updateStatusTask">
				<input type="hidden" name="ide">
				<div class="modal-body">
					<p>Вы действительно хотите закрыть это задание?</p>
				</div>
				<div class="modal-footer">
					<button  class="btn btn-primary" name="updateStatusTaskBtn">Да</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
				</div>
			</form>
    </div>
  </div>
</div>

<?php 
	//EXISTE
if(isset($_SESSION['message_existe'])){
	$message = $_SESSION['message_existe'];
	echo '<div class="item-alertSession" data-title="Alert: Existe déja!."  data-type="alert" data-session="message_existe">'.
	$message
	.'</div>';
}


//SUCCESS
if(isset($_SESSION['message_success'])){
	$message = $_SESSION['message_success'];
	echo '<div class="item-alertSession" data-title="Success!!!."  data-type="success" data-session="message_success">'.
	$message
	.'</div>';
}

//ERROR
if(isset($_SESSION['message_error'])){
	$message = $_SESSION['message_error'];
	echo '<div class="item-alertSession" data-title="Alert!."  data-type="error" data-session="message_error">'.
	$message
	.'</div>';
}
?>


<!-- Bootstrap JS -->
<script src="<?=BASE_URL.'assets/librairies/bootstrap/js/bootstrap.min.js';?>"></script>

<!-- DataTables JS -->
<script src="<?=BASE_URL.'assets/librairies/datatables/js/datatables.min.js';?>"></script>

<!-- Validate Form Js-->
<script src="<?=BASE_URL.'assets/librairies/ValidateForme/jquery.validate.min.js';?>"></script>
<script src="<?=BASE_URL.'assets/librairies/ValidateForme/MyscriptsValidateForm.js';?>"></script>

<!-- Simple-Alert -->
<script src="<?=BASE_URL.'assets/librairies/spw_alert/spw_select.js';?>"></script>



<!-- <script Js -->
<script src="<?=BASE_URL.'assets/js/script.js';?>"></script>

</html>