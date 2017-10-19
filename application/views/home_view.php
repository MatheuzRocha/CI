<p class="bg-sucess">
	<?php
		if($this->session->flashdata('login_success')){
			echo $this->session->flashdata('login_sucess');
		} 
	?>
</p>
<p class="bg-danger">
	<?php
		if($this->session->flashdata('login_failed')){
			echo $this->session->flashdata('login_failed');
		} 
	?>
</p>
<h1>Hello this is the view</h1>