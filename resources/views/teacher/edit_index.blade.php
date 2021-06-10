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
                    このページは「教師編集画面」のデモページです。<br>
                </p>

                <!-- Page Content -->
                <div class="container mt-5">

                    <form action="{{ url('/teacher/edit_confirm', $teacher->id)}}" method="get" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('get') }}

                        <!-- 下記コードで、 $teacher->id を受け取る -->
                        <input type="hidden" name="id" value="{{$teacher->id}}">

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label for="name" class="col-md-3 control-label">お名前</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{$teacher->name}}">
                                @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
                            </div>
                        </div>
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label for="email" class="col-md-3 control-label">メールアドレス</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" value="{{$teacher->email}}">
                                @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
                            </div>
                        </div>
                        <div class="form-group @if($errors->has('tel')) has-error @endif">
                            <label for="tel" class="col-md-3 control-label">電話番号</label>
                            <div class="col-md-9">
                                <input type="tel" class="form-control" id="tel" name="tel" value="{{$teacher->tel}}">
                                @if($errors->has('tel'))<span class="text-danger">{{ $errors->first('tel') }}</span> @endif
                            </div>
                        </div>

                        <div class="col-md-offset-3 text-center"><button class="btn btn-primary">確認</button></div>
                    </form>

                </div><!-- /container -->
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection
