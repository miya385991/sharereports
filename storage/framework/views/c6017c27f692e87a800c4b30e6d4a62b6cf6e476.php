<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レポート詳細画面</title>
</head>
<body>
        <header>
        <h1>レポート詳細</h1>
        <p><a href="/logout">ログアウト</a></p>
    </header>
    
    <ul>
        <li><a href="/reports/showList">レポートリスト</a></li>
        <li>レポート詳細</li>
    </ul>
        <div >
<div>
        <table >
                <thead>
                    <tr>
                    <th>レポート ID</th>
                    <th>報告者名</th>
                    <th>メールアドレス</th>
                    <th>作業日</th>
                    <th>作業開始時刻</th>
                    <th>作業終了時刻</th>
                    <th>レポート登録日時</th>
                </tr>
            </thead>
        <tbody>

        <tr>
            <td><?php echo e($reportList->id); ?></td>
            <td><?php echo e($user->us_name); ?></td>
            <td><?php echo e($user->us_mail); ?></td>
            <td><?php echo e($reportList->rp_date); ?></td>
            <td><?php echo e($reportList->rp_time_from); ?></td>
            <td><?php echo e($reportList->rp_time_to); ?></td>
            <td><?php echo e($reportList->rp_created_at); ?></td>
        </tr>
        <tr>
            <th colspan="5">作業内容</th>
            <td><a href="/reports/prepareEdit/<?php echo e($reportList->id); ?>">編集</a> </th>
                <td><a href="/reports/confirmDelete/<?php echo e($reportList->id); ?>">削除</a></td>
            </tr>
            <tr>
                <td colspan="7"><?php echo nl2br(e($reportList->rp_content)); ?></td>
            </tr>
        </tbody>
    </table>
</div>
        </div>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ph34/sharereports/resources/views/reports/detail.blade.php ENDPATH**/ ?>