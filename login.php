<?php
	require('includes/init.php');
	include('includes/sidebar.php');

	session_start();
?>
	<div class="container">
			<div class='login-container'>
				<form method="POST" class='login-form' action='login-action.php'>
					<label for='username'>Username</label>
					<input type='text' id='username' name='username' placeholder=' Username'>

					<label for='password'>Password</label>
					<input type='password' id='password' name='password' placeholder='Password'>

					<input type='submit' value='Login'>
				</form>
			</div>
		</div>
<?php
	include('includes/footer.php');
?>
