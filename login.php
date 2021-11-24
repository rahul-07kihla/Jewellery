<?php 
if (isset($_SESSION['USER_ID'])) {
	header("location:".$_SESSION['REFERER']);
	exit;
}

include_once 'class/class.Database.php';
include_once 'include/header.php';

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$error = isset($_SESSION['error'])?$_SESSION['error']:'';
unset( $_SESSION['error']);
?>
<?php						
						if(isset($_SESSION['err']))
						{
						?>
						<div class="alert alert-danger" style="margin-left: 106px;margin-right: 106px;overflow:hidden;">
						<?php echo $_SESSION['err']; echo "<br>";?>
						</div>
						<?php
						}
						?>
	<div class="container">
		<div class="login">
			<form class="login-form" id="form" action="models/loginprocess.php" method="post">
				<?php if (!empty($error)) { ?>
					<div class="alert alert-danger" role="alert">
						<a href="javascript:;" class="close" aria-label="close">&times;</a>
						<div class="msg-content"><?php echo $error; ?></div>
					</div>
				<?php } ?>
				<div class="login-wrap">

					<div class="input-group">
						<span class="input-group-addon">User name</span>
						<input type="email" name="username" class="form-control" placeholder="Username" title="Email Id" autofocus required>
					</div>

					<div class="input-group">
						<span class="input-group-addon">Password</span>
						<input type="password" name="password" class="form-control" placeholder="Password" title="Enter Password" required>
					</div>
					<br>

					<button class="btn btn-primary btn-lg btn-block" id="submit" name="submit" type="submit">Login</button>
				</div>
			</form>
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#submit').click(function(){
		$("#form").valid();
	});

	$('.close').click(function(){
		$(this).closest('div').addClass('hide');
	});
});
</script>

<?php include 'include/footer.php'; ?>