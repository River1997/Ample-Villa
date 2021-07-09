@extends('layouts.template')

@section('page_title')

最新消息

@endsection

@section('css')

@endsection


@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/home')}}">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">會員系統</li>
        </ol>
    </nav>

    <a href="{{ asset('admin/user/create') }}" class="btn btn-primary" style="margin-bottom: 15px">新增</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>會員系統</h2>
                </div>
                <div class="card-body">
                    <table id="my-datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>帳號</th>
                                <th>電話</th>
                                <th>信箱</th>
                                <th>出生日期</th>
                                <th>功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $item)

                            <tr>
                                <td>{{ $item ->name }}</td>
                                <td>{{ $item ->phone }}</td>
                                <td>{{ $item ->email }}</td>
                                <td>{{ $item ->birthday }}</td>
                                <td>
                                    <a href="{{asset('admin/user/edit')}}/{{$item ->id}}"
                                        class="btn btn-primary btn-sm">
                                        編輯
                                    </a>
                                    <form style="display: inline-block"
                                        action="{{asset('admin/user/delete')}}/{{ $item ->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">刪除</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>帳號</th>
                                <th>電話</th>
                                <th>信箱</th>
                                <th>出生日期</th>
                                <th>功能</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('js')

<script>
    $(document).ready(function() {
            $('#my-datatable').DataTable();
        } );
</script>

@endsection
