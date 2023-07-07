@extends('layouts.default')

@section('content')
<div class="container groud-base">
    <div class="row">
        <div class="col-md-6 mx-auto login-card">
            <h1>株式会社テスト管理システム</h1>
            <input type="text" id="email" class="form-control" name='email' placeholder="メールアドレス" required>
            <input type="password" id="password" class="form-control" name='password' placeholder="パスワード" required>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="#">パスワードを忘れた方はこちら</a>
        </div>
    </div>
</div>
@endsection