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
		<header >
			<h1>レポート情報追加</h1>
			<p><a href="/logout">ログアウト</a></p>
		</header>
		<nav id="breadcrumbs">
			<ul>
				<li><a href="/reports/showList">レポートリスト</a></li>
				<li>レポート登録</li>
			</ul>
		</nav>
		@isset($validationMsgs)
		<section id="errorMsg">
			<p>以下のメッセージをご確認ください。</p>
			<ul>
				@foreach($validationMsgs as $msg)
				<li>{{$msg}}</li>
				@endforeach
			</ul>
		</section>
		@endisset
		<section>
			<p>
				情報を入力し、登録ボタンをクリックしてください。
			</p>
			<div>

				<form action="/reports/add" method="post">
					@csrf
					<div >
						<label for="rpDate" >
							作業日&nbsp;<span>必須</span>
					<input type="date" name="rpDate" required>
				</label><br>
				<label for="" >
					作業種類名&nbsp;<span>必須</span>
					<select name="reportcateId" id="" required ">
						<option value="" >----</option>
						@foreach($categoryes as $key => $category)
						<option  value="{{$category->id}}" >{{$category->rc_name}}</option>
						@endforeach
					</select>
				</label>
			</div>
			<div >
				<label for="">
					作業開始時刻&nbsp;<span >必須</span>
					<input type="time" name="rpTimeFrom" required >
				</label><br>
				
				<label for="" >
					作業終了時刻&nbsp;<span >必須</span>
					<input type="time" name="rpTimeTo"  required >
				</label>
				<br>
			</div>
			<br>
			<label for="" >
				作業内容&nbsp;<span >必須</span>
				<textarea name="rpContent" id="" cols="100" rows="10" required></textarea>
			</label><br>
			<div>
				<button type="submit" >登録</button>
			</div>
		</form>
	</div>
		</section>
	</body>
</html>