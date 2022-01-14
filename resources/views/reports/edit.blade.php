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
				情報を入力し、更新ボタンをクリックしてください。
			</p>
			<div >
			<form action="/reports/edit" method="post" >
			@csrf
			<div >
				レポートID:&nbsp;{{$report->id}} <br>
			</div>
			<input type="hidden" name="id" value="{{$report->id}}">
			<div >
			<label for="rpDate" >
				作業日&nbsp;<span >必須</span>
				<input type="date" name="rpDate" value='{{$report->rp_date}}' required>
			</label><br>
			<label for="" >
				作業種類名&nbsp;<span>必須</span>
			<select name="reportcateId" id=""  required>
				<option value="" >----</option>
				@foreach($categoryes as $category)
				<option  value="{{$category->id}}" {{$category->id === $report->reportcate_id  ? 'selected' : ''}}>{{$category->rc_name}}</option>
				@endforeach
			</select>
		</label><br>
	</div>
	<div >
			<label for="" >
				作業開始時刻&nbsp;<span>必須</span>
				<input type="time" name="rpTimeFrom" value='{{$report->rp_time_from}}' required >
			</label><br>
				<label for="" >
					作業終了時刻&nbsp;<span >必須</span>
					<input type="time" name="rpTimeTo" value='{{$report->rp_time_to}}'  required >
				</label><br>
			</div>

				<label for="">
				作業内容&nbsp;<span >必須</span>
				<textarea name="rpContent" id="" cols="100" rows="10"  required>{{$report->rp_content}}</textarea>
			</label><br>
			<button type="submit" >変更</button>
			</form>
			</div>
		</section>
	</body>
</html>