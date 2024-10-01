@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left p-2 text-center">
                <h2>mini project</h2>
            </div>
            <div class="pull-right d-flex">
                <a href="{{ route('post.create') }}" class="btn btn-primary p-2 m-2">پست جدید</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>
                {{ $message }}
            </p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>متن پست</th>
            <th>عملیات</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ substr($post->title, 0, 30) . '...' }}</td>
                <td>{{ $post->user_id }}</td>
                <td>{{ substr($post->body, 0, 30) . '...' }}</td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">نمایش</a>
                        <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">ویرایش</a>
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
