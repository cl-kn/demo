<!-- 親テンプレート -->
@extends('layouts.master_bootstrap') {{-- テンプレート（CSSカスタマイズ版）読み込み --}}

@section('title', 'Laravel CRUD APP チュートリアル') {{-- サイトタイトル定義 --}}
<!-- 親テンプレートに表示させる場所 -->
@section('content')
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <h1 class="font-weight-light mt-4">Laravel CRUD APP チュートリアル</h1>
                <p class="lead">
                    このページは「Laravel CRUD APP」のデモページです。<br>
                </p>

                <!-- Page Content -->
                <div class="container mt-5">

                    <!-- 検索フォーム -->
                    <div class="row" style="padding-bottom: 30px; margin-left: 0px; margin-right: 15px;">
                        <div class="col-sm-10" style="padding-left:0;">
                            <form method="get" action="" class="form-inline">
                                {{Form::token()}}
                                <div class="form-group">
                                    <input type="text" name="keyword" class="form-control" value="{{$keyword}}" placeholder="検索キーワード">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="検索" class="btn btn-info" style="margin-left: 15px; color:white;">
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2" style="padding-left: 0;">
                            <a href="{{ url('/student/new_index') }}" class="btn" style="background-color: #f0ad4e; color: white; width: 100px;"><i class="fas fa-plus"></i> 新規登録</a>
                        </div>
                    </div>

                    {{Form::open(['url' => '/', 'files' => true])}}
                    {{Form::token()}}

                    <!--テーブル-->
                    <div class="table-responsive">
                        <table class="table" style="width: 1000px; max-width: 0 auto;">
                            <tr class="table-info">
                                <th scope="col" width="10%">Id</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col" width="30%">Email</th>
                                <th scope="col" width="15%">TEL</th>
                                <th scope="col" width="30%" colspan="3">OPTION</th>
                            </tr>

                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->tel}}</td>
                                    <td>
                                        <!-- <a href="" class="btn btn-primary btn-sm">詳細</a> -->
                                        <!-- <a href="{{ url('student/edit_index') }}?id={{ $student->id }}" class="btn btn-primary btn-sm">編集</a> -->
                                        <!-- <a href="{{action('App\Http\Controllers\StudentController@edit_index', $student->id)}}" class="btn btn-primary btn-sm">編集</a> -->
                                        <a href="edit_index/{{$student->id}}" class="btn btn-primary btn-sm">編集</a>
                                        <!-- <a href="" class="btn btn-danger btn-sm">削除</a> -->


                                    </td>
                                    <td>
                                        <form action="delete/{{$student->id}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--/テーブル-->

                    {{Form::close()}}
                    {{-- {!! $students->render() !!}--}}
                    {!! $students->appends(['keyword'=>$keyword])->render() !!}
                </div><!-- /container -->
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection

@section('script')
<script>
    $(function() {
        $(".btn-dell").click(function() {
            if (confirm("本当に削除しますか？")) {
                //そのままsubmit（削除）
            } else {
                //cancel
                return false;
            }
        });
    });
</script>
@endsection
