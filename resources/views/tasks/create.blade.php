@extends('layouts.app')

@section('content')

@if (Auth::check())
 <h1>{{ Auth::user()->name }}の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content',  old('content'), ['class' => 'form-control']) !!}
                </div>
            
        
                  {!! Form::submit('投稿です', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    @else
    <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection