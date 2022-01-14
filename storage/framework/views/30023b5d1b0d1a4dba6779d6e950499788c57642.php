<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO">
		<title>ログイン | ScottAdminMiddle Sample</title>
		<link rel="stylesheet" href="/css/main.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	</head>
	<body>
		<h1>ログイン</h1>
		<?php if(isset($validationMsgs)): ?>
		<section id="errorMsg">
			<p>以下のメッセージをご確認ください。</p>
			<ul>
				<?php $__currentLoopData = $validationMsgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="ui red message"><?php echo e($msg); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</section>
		<?php endif; ?>
		<section>
			<p>
				IDとパスワードを入力し、ログインをクリックしてください。
			</p>
			<form action="/login" method="post">
			<?php echo csrf_field(); ?>
			<dl>
				<dt>ID</dt>
				<dd>
					<input type="text" id="loginId" name="loginId" value="<?php echo e($loginId ?? ""); ?>" required>
				</dd>
				<dt>パスワード</dt>
				<dd>
					<input type="password" id="loginPw" name="loginPw" required>
				</dd>
			</dl>
			<button type="submit">ログイン</button>
		</form>
	</section>
</body>
</html><?php /**PATH /Users/yusuke/Desktop/sharereports/resources/views/login.blade.php ENDPATH**/ ?>