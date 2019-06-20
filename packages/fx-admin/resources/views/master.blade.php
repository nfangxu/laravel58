<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>layout 后台大布局 - Layui</title>
  <link rel="stylesheet" href="{{ asset('vendor/fx-admin/layui/v2.5.4/css/layui.css') }}">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  @include('fx-admin::layouts.header')
  
  @include('fx-admin::layouts.menu')
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
  <iframe src="{{ route('fx-admin.dashboard') }}" frameborder="0" height="100%" width="100%"></iframe>
  </div>
  
  @include('fx-admin::layouts.footer')
</div>
<script src="{{ asset('vendor/fx-admin/layui/v2.5.4/layui.js') }}"></script>
<script src="{{ asset('vendor/fx-admin/js/fx-admin.js') }}"></script>
</body>
</html>