@extends('layouts.app')

@section('content')

 <h1>id: {{ $task->id }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            @if (Auth::id() == $task->user_id)
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
            {!! Form::close() !!}
         @endif
    </div>
 </div>

@endsection