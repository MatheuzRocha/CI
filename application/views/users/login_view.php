<?php 
	if($this->session->userdata('logged_in')){
?>		
<h2> Logout </h2>
<?php
		echo form_open('users/logout');
		$data = array('class'=>'btn btn-primary', 'name'=>'submit', 'value'=>'Logout');
		echo form_submit($data);
		echo form_close();
?>
<p>
<?php
		if($this->session->userdata('username')){
			echo "You are logged in as " . $this->session->userdata('username');
		}
?>
</p>
<?php
    } else{
?>
<h2> Login View</h2>

<?php 
	$attributes =  array('id'=>'login_form', 'class'=>'form_horizontal');
	echo form_open('users/login', $attributes);

	if($this->session->flashdata('errors')){
		echo $this->session->flashdata('errors');
	}
?>

<div class="form-group">
	<?php
		echo form_label('Username');
		$input_attributes = array('class'=>'form-control', 'name'=>'username', 'placeholder'=>'Enter Username');
		echo form_input($input_attributes);
	?>
</div>

<div class="form-group">
	<?php
		echo form_label('Password');
		$input_attributes = array('class'=>'form-control', 'name'=>'password', 'placeholder'=>'Enter Password');
		echo form_password($input_attributes);
	?>
</div>

<div class="form-group">
	<?php
		echo form_label('Confirm Password');
		$input_attributes = array('class'=>'form-control', 'name'=>'confirm_password', 'placeholder'=>'Confirm Password');
		echo form_password($input_attributes);
	?>
</div>

<div class="form-group">
	<?php
		$input_attributes = array('class'=>'btn btn-primary', 'name'=>'submit', 'value'=>'Login');
		echo form_submit($input_attributes);
	?>
</div>

<?php
	echo form_close();
	}
?>