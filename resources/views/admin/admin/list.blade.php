@extends('layout.app')

@section('title', '管理员列表')

@section('content')
<div class="admin-list-page col-sm-12">
    <ol class="bread-line clearfix">
        <li><a href="{{ url('/') }}">首页</a></li>
        <li>&gt;</li>
        <li class="active">管理员列表</li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-heading">管理员列表</div>
        <div class="panel-body">
            <table class="table admin-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>邮箱</th>
                        <th>昵称</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($admins))
                    @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin['admin_id'] }}</td>
                        <td>{{ $admin['email'] }}</td>
                        <td>{{ $admin['name'] }}</td>
                        <td>{{ $admin['created'] }}</td>
                        <td>
                            <a href="{{ url('admin/edit?admin_id=' . $admin['admin_id']) }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $admins->appends($search)->render() !!}
        </div>
    </div>
</div>
@endsection()