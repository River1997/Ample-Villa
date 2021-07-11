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
                <li class="breadcrumb-item active" aria-current="page">最新消息</li>
            </ol>
        </nav>

        <a href="{{ asset('admin/news/create') }}" class="btn btn-primary" style="margin-bottom: 15px">新增</a>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>最新消息</h2></div>
                    <div class="card-body">
                        <table id="my-datatable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>日期</th>
                                    <th>標題</th>
                                    <th>圖片</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $item)

                                    <tr>
                                        <td>{{ $item ->title }}</td>
                                        <td>{{ $item ->date }}</td>
                                        <td>
                                            <img style="width: 200px" src="{{ asset($item ->photo) }}" alt=""></td>
                                        <td>
                                            <a href="{{asset('admin/news/edit')}}/{{$item ->id}}" class="btn btn-primary btn-sm">
                                                    編輯
                                            </a>
                                            <form style="display: inline-block" action="{{asset('admin/news/delete')}}/{{ $item ->id }}" method="POST">
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
                                    <th>日期</th>
                                    <th>標題</th>
                                    <th>圖片</th>
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
