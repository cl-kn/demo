<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/top') }}">
            Laravel学習用
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/top') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/student/list') }}">生徒一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/teacher/list') }}">教師一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact/input') }}">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- / Navigation -->
