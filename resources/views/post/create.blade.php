@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2>ساخت پست جدید</h2>
            </div>
            <div class="pull-right d-flex">
                <a href="" class="btn btn-primary">بازگشت</a>
            </div>
        </div>
    </div>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <strong>متن پست:</strong>
                    <input type="text" name="body" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="number" name="user_id" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
