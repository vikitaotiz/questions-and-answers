@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Questions</h2>
                        <div class="ml-auto">
                            <a href="{{action('QuestionsController@create')}}" class="btn btn-sm btn-outline-primary">Ask New Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (count($questions) > 0)
                        @foreach ($questions as $question)
                            <div class="media">
                                <div class="d-flex flex-column counters">
                                    <div class="votes">
                                        <strong>{{$question->votes}}</strong>{{str_plural('vote', $question->votes)}}
                                    </div>
                                    <div class="status {{$question->status}}">
                                        <strong>{{$question->answers}}</strong>{{str_plural('answer', $question->answers)}}
                                    </div>
                                    <div class="views">
                                        {{$question->views. " " .str_plural('view', $question->views)}}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                                    <p class="lead">
                                        Asked By <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        <small class="text-muted">{{$question->created_date}}</small>
                                    </p>
                                    <p>{{str_limit($question->body, 250)}}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        {{$questions->links()}}
                    @else
                       <p>There are no questions available yet</p> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
