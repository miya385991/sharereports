<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO">
		<title>レポート情報追加 | ScottAdminMiddle Sample</title>
		<link rel="stylesheet" href="/css/main.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	</head>
	<body >
		<header class="ui header">
			<h1>レポート情報追加</h1>
			<p><a href="/logout">ログアウト</a></p>
		</header>
		<nav id="breadcrumbs">
			<ul>
				<li><a href="/reports/showList">レポートリスト</a></li>
				<li>レポート登録</li>
			</ul>
		</nav>
		<?php if(isset($validationMsgs)): ?>
		<section id="errorMsg">
			<p>以下のメッセージをご確認ください。</p>
			<ul>
				<?php $__currentLoopData = $validationMsgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($msg); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</section>
		<?php endif; ?>
		<section>
			<p>
				情報を入力し、登録ボタンをクリックしてください。
			</p>
			<div class="ui two column centered grid">

				<form action="/reports/add" method="post" class="box ui form">
					<?php echo csrf_field(); ?>
					<div class="two fields ui label">
						<label for="rpDate" class="field">
							作業日&nbsp;<span class="required">必須</span>
					<input type="date" name="rpDate" required>
				</label><br>
				<label for="" class="field" class="field">
					作業種類名&nbsp;<span class="required ">必須</span>
					<select name="reportcateId" id="" required ">
						<option value="" >----</option>
						<?php $__currentLoopData = $categoryes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option  value="<?php echo e($category->id); ?>" ><?php echo e($category->rc_name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</label>
			</div>
			<div class="two fields ui label">
				<label for="" class="field">
					作業開始時刻&nbsp;<span class="required">必須</span>
					<input type="time" name="rpTimeFrom" required >
				</label><br>
				
				<label for="" class="field">
					作業終了時刻&nbsp;<span class="required">必須</span>
					<input type="time" name="rpTimeTo"  required >
				</label>
				<br>
			</div>
			<br>
			<label for="" class="field">
				作業内容&nbsp;<span class="required">必須</span>
				<textarea name="rpContent" id="" cols="100" rows="10" required></textarea>
			</label><br>
			<div>
				<button type="submit" class="ui button">登録</button>
			</div>
		</form>
	</div>
		</section>
	</body>
</html><?php /**PATH /Users/yusuke/Desktop/sharereports/resources/views/reports/add.blade.php ENDPATH**/ ?>