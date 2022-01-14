<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO">
		<title>レポート情報編集 | ScottAdminMiddle Sample</title>
	</head>
	<body>
		<header>
			<h1>レポート編集</h1>
			<p><a href="/logout">ログアウト</a></p>
		</header>
		<nav id="breadcrumbs">
			<ul>
				<li><a href="/reports/showList">レポートリスト</a></li>
				<li>レポート編集</li>
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
				情報を入力し、更新ボタンをクリックしてください。
			</p>
			<div >
			<form action="/reports/edit" method="post" >
			<?php echo csrf_field(); ?>
			<div >
				レポートID:&nbsp;<?php echo e($report->id); ?> <br>
			</div>
			<input type="hidden" name="id" value="<?php echo e($report->id); ?>">
			<div >
			<label for="rpDate" >
				作業日&nbsp;<span >必須</span>
				<input type="date" name="rpDate" value='<?php echo e($report->rp_date); ?>' required>
			</label><br>
			<label for="" >
				作業種類名&nbsp;<span>必須</span>
			<select name="reportcateId" id=""  required>
				<option value="" >----</option>
				<?php $__currentLoopData = $categoryes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option  value="<?php echo e($category->id); ?>" <?php echo e($category->id === $report->reportcate_id  ? 'selected' : ''); ?>><?php echo e($category->rc_name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</label><br>
	</div>
	<div >
			<label for="" >
				作業開始時刻&nbsp;<span>必須</span>
				<input type="time" name="rpTimeFrom" value='<?php echo e($report->rp_time_from); ?>' required >
			</label><br>
				<label for="" >
					作業終了時刻&nbsp;<span >必須</span>
					<input type="time" name="rpTimeTo" value='<?php echo e($report->rp_time_to); ?>'  required >
				</label><br>
			</div>

				<label for="">
				作業内容&nbsp;<span >必須</span>
				<textarea name="rpContent" id="" cols="100" rows="10"  required><?php echo e($report->rp_content); ?></textarea>
			</label><br>
			<button type="submit" >変更</button>
			</form>
			</div>
		</section>
	</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ph34/sharereports/resources/views/reports/edit.blade.php ENDPATH**/ ?>