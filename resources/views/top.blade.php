@extends('layouts.common')

@section('content')

@if(!Auth::check())
<div id="login-wrapper" class="row">
    <div class="col-7">
        <h1 class="text-white"><b>Hello Hackers！</b></h1>
        <p class="text-white">Qiita風は、テックピットマーケットより発売されている、Qiita風記事投稿サービスの教材です。<br>Qitaっぽいサイトを作ってスキルアップしましょう！ ;)<br>コードを書いていて気づいたこと・学んだことはバンバンシェアしてください！</p>
    </div>
    <div class="col-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <table>
                <tr>
                    <th>ユーザ名</th>
                    <td><input type="text" class="form-control" placeholder="qiita風たん" size="50" value="{{ old('email') }}" name="username" required autofocus></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" class="form-control" placeholder="qiitahuu@qiitahuu.com" size="50" name="email" required></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="password" class="form-control" name="password" required size="50"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="ログイン" class="form-control"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@else

<div class="top-wrapper">
    <div class="articles-wrapper col-md-6">
      @foreach ($articles as $article)
      <div class="article-box">
        <div class="article-box-left"></div>
        <div class="article-box-right">
          <a class="article-title" href="/drafts/{{ $article->id }}">{{ $article->title }}</a>
          <div class="article-details">
            <div class="article-date">{{ $article->created_at }}</div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>

@endif

@endsection