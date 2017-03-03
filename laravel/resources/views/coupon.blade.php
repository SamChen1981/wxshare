<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>{{$result['title']}}优惠券</title>

</head>
<style>
    body {
        text-align: center;
    }

    li {
        width: 100%;
        float: left;
        list-style-type: none;
        border: solid 2px aliceblue;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }

    ul {
        width: 40%;
        float: left;
    }

    a {
        display: block;
        text-decoration: none;
        color: black;
    }

    a:hover {
        background-color: gray;
    }
</style>
<body>
<div class="title">
    <h2>{{$result['title']}}优惠券</h2>
    {{--<p style="text-align: center">(今日未领完: 41 / 今日全部: 42)</p>--}}
</div>

<hr/>

<div class="container">

    <div class="row coupon-row">
        <div class="col-xs-8 coupon-info">
            一起为服务器续费？
        </div>
        <div class="col-xs-4 coupon-link">
            <button><a href="/about/donate">打赏地址</a></button>
        </div>
    </div>


    @foreach($result['data'] as $v)
        <div class="row coupon-row" style="width: 100%">
            <li  data-id="{{$v->id}}">
                <ul>点击量: <span class="click">{{$v->click}}</span></ul>
                <ul><a href="{{$v->url}}" >点击领取</a></ul>
            </li>

        </div>
    @endforeach
</div>
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

<script>
    $(document).on('click', 'li', function(){
        //$art_id = ("#test").val()
        $id = $(this).attr("data-id");
        $.ajax({
            url: '/click',
            type: 'POST',
            data: {
                'id' : $id,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
            },
            error: function(xhr, type){
            }

        })
    });

</script>

</body>
</html>
