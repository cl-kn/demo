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
                {{--
                {{var_dump($name)}}<br>
                {{var_dump($email)}}<br>
                {{request()->fullUrl()}}<br>
                --}}
                <!-- Page Content -->
                <div class="container mt-5">

                    <form action="{{ url('/teacher/edit_finish/' . $id )}}" method="get" class="form-horizontal">

                        {{ csrf_field() }}
                        <input type="hidden" name="name" value="{{$name}}">
                        <input type="hidden" name="email" value="{{$email}}">
                        <input type="hidden" name="tel" value="{{$tel}}">
                        <div class="row">
                            <label class="col-sm-4 control-label">お名前</label>
                            <div class="col-sm-8">{{$name}}</div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 control-label">メールアドレス</label>
                            <div class="col-sm-8">{{$email}}</div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 control-label">電話番号</label>
                            <div class="col-sm-8">{{$tel}}</div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-offset-4 col-sm-8">
                                <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
                            </div>
                        </div>
                    </form>

                </div><!-- /container -->
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection
