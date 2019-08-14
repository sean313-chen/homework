<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
        <div data-role="header">
        <h1>新增公告</h1>
        <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000'">取消</button>
        </div>
        <form method="post" action="/dashboard/create">
            @csrf
            標題:
            <input type="text" name="title" id="title"> <br>
            內容:
            <input type="text" name="content" id="content"> <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">送出</button>
            </div>
        </form>
    </div>
</body>
</html>
