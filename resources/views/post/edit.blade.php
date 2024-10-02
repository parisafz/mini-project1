@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت</a>
            </div>
        </div>
    </div>

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <strong>متن پست:</strong>
                    <textarea class="form-control" style="height:150px" name="body">{{ $post->body }}</textarea>
                </div>

                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="text" name="user_id" class="form-control" value="{{ $post->user_id }}">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>

    </form>
@endsection
