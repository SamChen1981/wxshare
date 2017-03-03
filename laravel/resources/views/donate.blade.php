@extends('app')
@section('content')

<style type="text/css">
    div.introduce {
        font-size: 20px;
        text-align: center;
        padding-top: 30px;
    }

    div.introduce > img {
        width: 80%;
    }
</style>

<body>

    <div class="container introduce">
        <p>收藏本站，<a href="/about">点击这里</a></p>
        <hr/>

        <p>所得打赏主要用于服务器续费，打赏固定金额 ￥1.2</p>
        <img src="{{url('image/1.2.png')}}" />
        <hr/>
        <p>也可以根据自己的情况打赏 点击自由打赏</p>
        <img src="{{url('image/pay.png')}}" />
    </div>
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="text-align: center; font-size: 36px; height: 52px">
        <div class="container">
            <a href="/">返回首页</a>
        </div>
    </nav>
<body>
@endsection
