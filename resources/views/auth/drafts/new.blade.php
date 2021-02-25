@extends('layouts.common')
@section('content')
<form class="post-page-wrapper" action="/drafts/new" method="post">
@csrf

    @if($errors->first('title'))
        <div class="validation">{{ $errors->first('title') }}</div>
    @endif

    <input type="text" class="form-control m-1" id="title-input" placeholder="タイトル" name="title">

    @if($errors->first('tags'))
        <div class="validation">{{ $errors->first('tags') }}</div>
    @endif

    <input type="text" class="form-control m-1" placeholder="プログラミング技術に関するタグをスペース区切りで3つまで入力" name="tags">

    @if($errors->first('body'))
        <div class="validation">{{ $errors->first('article') }}</div>
    @endif
    
    <div class="row">
        <div class="col-6 m-1">
            <textarea name="article" id="markdown_editor_textarea" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-6 m-1">
            <div id="markdown_preview"></div>
        </div>
    </div>
    <div class="post-page-footer">
        <input type="submit" class="post-button m-1" value="Qiitaに投稿">
    </div>
</form>

@endsection