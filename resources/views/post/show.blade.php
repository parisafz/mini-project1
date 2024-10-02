@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>نمایش پست</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت</a>
            </div>

        </div>
        <a class="btn btn-primary d-flex justify-content-end" href="{{ route('post.edit', $post->id) }}">ویرایش</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <div class="form-group">
                <strong>عنوان:</strong>
                {{ $post->title }}
            </div>

            <div class="form-group">
                <strong>متن پست:</strong>
                {{ $post->body }}
            </div>

            <div class="form-group">
                <strong>نویسنده:</strong>
                {{ $post->user_id }}
            </div>
        </div>
    </div>
@endsection
