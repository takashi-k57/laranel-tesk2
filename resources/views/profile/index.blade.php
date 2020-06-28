@extends('layouts.profile')

@section('content')
<div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->name, 100) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->gender, 650) }}</p>
                            <dd>[趣味]</dd>
                            <p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                            <dd>[自己紹介]</dd>
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                            <br>
                            <br>
                            
                            <p class="body mx-auto">性別:{{ str_limit($headline->gender, 650) }}</p>
                            <p class="body mx-auto">趣味:{{ str_limit($headline->hobby, 650) }}</p>
                            <p class="body mx-auto">自己紹介:{{ str_limit($headline->introduction, 650) }}</p>
                            <br>
                            <br>
                            
                            <dl>
                                <dt>性別</dt>
                                <dd>{{ str_limit($headline->gender, 650) }}</dd>
                                <dt>趣味</dt>
                                <dd>{{ str_limit($headline->hobby, 650) }}</dd>
                                <dt>自己紹介</dt>
                                <dd>{{ str_limit($headline->introduction, 650) }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    </div>
@endsection