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


                <div class="row">
                    <!--7列幅分のボックス-->
                    <div class="col-xs-1"><a href="{{ url('/student/list') }}"><img src="images/student.png" alt="student">
                            <p align="center">生徒一覧</p>
                        </a></div>
                    <!--5列幅分のボックス-->
                    <div class="col-xs-1"><a href="{{ url('/teacher/list') }}"><img src="images/teacher.png" alt="teacher">
                            <p align="center">教師一覧</p>
                        </a></div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
@endsection
