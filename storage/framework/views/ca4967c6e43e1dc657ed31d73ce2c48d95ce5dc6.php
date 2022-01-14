<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO">
		<title>レポート情報リスト | ScottAdminMiddle Sample</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	</head>
	<body>
		<header>
			<h1 class="ui header">レポート情報リスト</h1>
			<p><a href="/logout" class="item">ログアウト</a></p>
		</header>

		<?php if(session("flashMsg")): ?>
		<section id="flashMsg">
			<p><?php echo e(session("flashMsg")); ?></p>
		</section>
		<?php endif; ?>
		<section>
			<p>
				新規登録は<a href="/reports/goAdd">こちら</a>から
			</p>

		</section>
		<section>
			<table class="ui celled table">
				<thead>
					<tr>
						<th>作業日</th>
						<th>作業内容</th>
						<th>報告者名</th>
					</tr>
				</thead>
				<tbody>
					<?php $__empty_1 = true; $__currentLoopData = $reportList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpId => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<tr>
						<td><?php echo e($report->rp_date); ?></td>
						<td><a class="item" class="item"href="/reports/showDetail/<?php echo e($report->id); ?>"><?php echo e(mb_substr($report->rp_content, 0,10)); ?></a></td>
						<td><?php echo e($users[$report->user_id]->us_name); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<tr>
						<td colspan="5">該当レポートは存在しません。</td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</section>
	</body>
</html><?php /**PATH /Users/yusuke/Desktop/sharereports/resources/views/reports/list.blade.php ENDPATH**/ ?>