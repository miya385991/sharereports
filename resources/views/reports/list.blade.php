<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shinzo SAITO">
		<title>レポート情報リスト | ScottAdminMiddle Sample</title>
	</head>
	<body>
		<header>
			<h1 >レポート情報リスト</h1>
			<p><a href="/logout" >ログアウト</a></p>
		</header>

		@if(session("flashMsg"))
		<section id="flashMsg">
			<p>{{session("flashMsg")}}</p>
		</section>
		@endif
		<section>
			<p>
				新規登録は<a href="/reports/goAdd">こちら</a>から
			</p>

		</section>
		<section>
			<table >
				<thead>
					<tr>
						<th>作業日</th>
						<th>作業内容</th>
						<th>報告者名</th>
					</tr>
				</thead>
				<tbody>
					@forelse($reportList as $rpId => $report)
					<tr>
						<td>{{$report->rp_date}}</td>
						<td><a href="/reports/showDetail/{{$report->id}}">{{mb_substr($report->rp_content, 0,10)}}</a></td>
						<td>{{$users[$report->user_id]->us_name}}</td>
					</tr>
					@empty
					<tr>
						<td colspan="5">該当レポートは存在しません。</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</section>
	</body>
</html>