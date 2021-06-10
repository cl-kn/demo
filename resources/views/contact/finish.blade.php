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
                    このページは「お問い合わせ画面」のデモページです。<br>
                </p>
                メール送信しました！
            </div>
            <div class="col text-center">
                <a class="navbar-brand" href="{{ url('/top') }}">
                    <button class="btn btn-primary btn-sm" type="button">TOPへ</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection
