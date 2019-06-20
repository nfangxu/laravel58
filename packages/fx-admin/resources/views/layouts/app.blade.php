<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>{{ config('fx-admin.title') }}</title>
  <link rel="stylesheet" href="{{ asset('vendor/fx-admin/layui/v2.5.4/css/layui.css') }}">
</head>
<body>
    <div class="layui-fluid" style="padding-top: 20px;">
        @yield('nav')
        <hr class="layui-bg-black">
        @yield('content')
    </div>
<script src="{{ asset('vendor/fx-admin/layui/v2.5.4/layui.js') }}"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</body>
</html>