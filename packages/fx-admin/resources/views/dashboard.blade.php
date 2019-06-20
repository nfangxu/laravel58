@extends('fx-admin::layouts.app')

@section('nav')
<span class="layui-breadcrumb">
    <a href="">首页</a>
    <a href="">国际新闻</a>
    <a href="">亚太地区</a>
    <a><cite>正文</cite></a>
</span>
@endsection

@section('content')
<table class="layui-table">
  <colgroup>
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>昵称</th>
      <th>加入时间</th>
      <th>签名</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <td>贤心</td>
      <td>2016-11-29</td>
      <td>人生就像是一场修行</td>
    </tr>
    <tr>
      <td>许闲心</td>
      <td>2016-11-28</td>
      <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
    </tr>
  </tbody>
</table>
@endsection