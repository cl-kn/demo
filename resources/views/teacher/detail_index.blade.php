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
                    このページは「教師詳細画面」のデモページです。<br>
                </p>
                <!-- Page Content -->
                <div class="container mt-5">
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="id" class="col-md-3 control-label">ID</label>
                        <div class="col-sm-9">
                            <label for="id" class="col-md-3 control-label">{{$teacher->id}}</label>
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="name" class="col-md-3 control-label">お名前</label>
                        <div class="col-sm-9">
                            <label for="name" class="col-md-3 control-label">{{$teacher->name}}</label>
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="email" class="col-md-3 control-label">メールアドレス</label>
                        <div class="col-sm-9">
                            <label for="email" class="col-md-3 control-label">{{$teacher->email}}</label>
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="tell" class="col-md-3 control-label">電話番号</label>
                        <div class="col-sm-9">
                            <label for="tell" class="col-md-3 control-label">{{$teacher->tel}}</label>
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="tell" class="col-md-3 control-label">登録日</label>
                        <div class="col-sm-9">
                            <label for="tell" class="col-md-3 control-label">{{$teacher->created_at}}</label>
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="tell" class="col-md-3 control-label">更新日</label>
                        <div class="col-sm-9">
                            <label for="tell" class="col-md-3 control-label">{{$teacher->updated_at}}</label>
                        </div>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-primary btn-sm" type="button" onclick="history.back()">戻る</button>
                    </div>
                </div><!-- /container -->
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection
