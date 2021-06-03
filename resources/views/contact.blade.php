<!-- 継承するビューの指定 -->
@extends('layouts.app')

@section('title', 'お問い合わせページ')
@section('content')
<div>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">メールアドレス</label>
            <input type="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">お問い合わせ</label>
            <textarea class="form-control" rows="5"></textarea>
        </div>
    </form>
</div>
@endsection
