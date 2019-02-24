@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Question</h2>
                        <div class="ml-auto">
                            <a href="{{action('QuestionsController@index')}}" class="btn btn-sm btn-outline-success">Back To All Questions</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{action('QuestionsController@store')}}" method="post">
                    {{csrf_field()}}
                     <div class="form-group">
                         <label>Question Title</label>
                     <input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" placeholder="Enter Question Title">
                        @if ($errors->has('title'))
                            <div class="invalid-feedbak">
                                <strong>{{$error->first('title')}}</strong>
                            </div>
                        @endif
                        </div>
                     <div class="form-group">
                         <label>Explain Your Question</label>
                         <textarea name="body" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" placeholder="Explain Your Question"></textarea>
                         @if ($errors->has('body'))
                         <div class="invalid-feedbak">
                             <strong>{{$error->first('body')}}</strong>
                         </div>
                     @endif
                        </div>
                     <div class="form-group">
                         <input type="submit" value="Submit Question" class="btn btn-sm btn-primary">
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
