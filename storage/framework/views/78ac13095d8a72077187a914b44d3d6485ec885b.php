<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO" >
		<title>レポート情報削除 | ScottAdminMiddle Sample</title>
		<link rel="stylesheet" href="/css/main.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	</head>
	<body>
		<header>
			<h1>レポート情報削除</h1>
			<p><a href="/logout">ログアウト</a></p>
		</header>
		<nav id="breadcrumbs">
			<ul>
				<li><a href="/reports/showList">レポートリスト</a></li>
				<li>レポート削除確認</li>
			</ul>
		</nav>
		<div class="ui form">
		<section>
			<p>以下のレポート情報を削除します。<br>
			よろしければ、削除ボタンをクリックしてください。
		</p>
		<dl>
			<dt>報告者名</dt>
			<dd><?php echo e($report->user_id); ?></dd>
			<dt>メールアドレス</dt>
			<dd><?php echo e($category->us_mail); ?></dd>
			<dt>作業日</dt>
			<dd><?php echo e($report->rp_date); ?></dd>
			<dt>作業種類名</dt>
			<dd><?php echo e($report->reportcate_id); ?></dd>
			<dt>レポート登録日時</dt>
			<dd><?php echo e($report->rp_created_at); ?></dd>
			<dt>作業内容</dt>
			<dd><?php echo nl2br(e($report->rp_content)); ?></dd>
		</dl>
		<form action="/reports/delete" method="post">
		<?php echo csrf_field(); ?>
		<input type="hidden" id="deleteId" name="deleteId" value="<?php echo e($report->id); ?>">
		<button type="submit" class="ui button">削除</button>
		</form>
		</section>
		</div>
	</body>
</html><?php /**PATH /Users/yusuke/Desktop/sharereports/resources/views/reports/confirmDelete.blade.php ENDPATH**/ ?>