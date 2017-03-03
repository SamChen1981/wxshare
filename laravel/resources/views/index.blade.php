
@extends('app')

@section('content')
<style>
    body {
        font-size: 36px;
        margin-top: 30px;
    }

    li {
        width: 100%;
        float: left;
        list-style-type:none;
        border: solid 2px aliceblue;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }
    a{
        display: block;
        text-decoration: none;
        color: black;
    }

    a:hover{
        background-color: gray;
    }
</style>

<body>
<div class="container">
    <div class="box">
        <li><a href="/coupon/elm">饿了吗</a></li>
        <li><a href="/coupon/meituan">美团外卖</a></li>
        <li><a href="/coupon/baidu">百度外卖</a></li>
    </div>
</div>
</body>
@endsection

