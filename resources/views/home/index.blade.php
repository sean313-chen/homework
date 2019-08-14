<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="/scripts/jquery-1.9.1.min.js"></script>
    <script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
    <h1>公告系統</h1>
    @if ($count > 0)
    <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000/user/logout'">
        登出
    </button>
    <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000/create/page'">
        新增公告
    </button>
    @else
    <button type="button" class="btn btn-primary" onclick="javascript:location.href='http://127.0.0.1:8000/login/page'">
        管理人員登入
    </button>
    @endif
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
	@foreach ($dashboardList as $data)
		<li>
		<a href="/detail/{{ $data->id }}" data-ajax="false">
			<h4>{{ $data->title }}</h4>
			<p>{{ $data->content }}</p>
		</a>
		</li>
	@endforeach
	</ul>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">管理人員登入</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="/login">
                @csrf
                帳號:
                <input type="text" name="account"> <br>
                密碼:
                <input type="password" name="password"> <br>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                  <button type="submit" class="btn btn-primary">登入</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>