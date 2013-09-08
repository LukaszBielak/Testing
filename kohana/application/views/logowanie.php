<html>
	<head>
		<body>
			<?php echo Form::open();
				echo Form::label('username', 'Username');
				echo Form::input('username', '')."<br />";
				echo Form::label('pass', 'Password');
				echo Form::input('pass', '')."<br />";
				echo Form::submit(NULL, 'Login');
				echo Form::close(); ?>
				<p><?php echo HTML::anchor('account/reset', 'Lost my log in information'); ?></p>

		</body>
	</head>
</html>