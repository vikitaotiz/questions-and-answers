@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>{{$question->title}}</h2>
                        <div class="ml-auto">
                            <a href="{{action('QuestionsController@edit', $question->id)}}" class="btn btn-sm btn-success">Edit Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p>{{$question->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
