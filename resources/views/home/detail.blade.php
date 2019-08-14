<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
        <div data-role="header">
        <h1>{{ $detailData->title }}</h1>
        <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000'">回首頁</button>
        @if ($count > 0)
        <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000/edit/page/{{ $detailData->id }}'">編輯</button>
        <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000/dashboard/{{ $detailData->id }}'">刪除</button>
        @endif
        </div>
        <div data-role="content">
            <div class="employee-details">
                {{ $detailData->content }}
            </div>
        </div>
    </div>
</body>
</html>
