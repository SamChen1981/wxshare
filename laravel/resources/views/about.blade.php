@extends('app')
@section('content')
<style type="text/css">
    div.introduce {
        font-size: 20px;
        text-align: center;
        padding-top:30px;
        margin-bottom: 30px;
    }

    div.introduce > img {
        width: 80%;
    }
</style>
<body>
<div class="container introduce">
    <p>如果你愿意资助我们，<a href="/about/donate">资助链接</a></p>
    <hr />
    <p>收藏本站，请关注微信公众号</p>
    <hr />
    <img src="image/qrcode.jpg" />
</div>

<div class="footer" style="height: 82px">
</div>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="text-align: center; font-size: 36px; height: 52px">
    <div class="container">
        <a href="/">返回首页</a>
    </div>
</nav>
@endsection