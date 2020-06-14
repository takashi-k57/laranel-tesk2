@extends('layouts.profile')


@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ optional($e) }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2"　for="name">name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profiles_from->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">gender</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profiles_from->gender }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">hobby</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profiles_from->hobby }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">introduction</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profiles_from->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profiles_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection