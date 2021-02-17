@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $questionnaire->title }}</h1>

            <form action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                @csrf

                @foreach ($questionnaire->questions as $key => $question)
                    <div class="card mt-4">
                        <div class="card-header">
                            <strong>{{ $key + 1 }}</strong>
                            {{ $question->question }}
                        </div>

                        <div class="card-body">
                            @error('responses.' . $key . '.answer_id')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                            <ul class="list-group">
                                @foreach ($question->answers as $answer)
                                    <label for="answer{{ $answer->id }}">
                                        <li class="list-group-item">
                                            <input type="radio" name="responses[{{ $key }}][answer_id]" 
                                            id="answer{{ $answer->id }}" class="mr-2"
                                            {{ old('responses.' . $key . '.answer_id') == $answer->id ? 'checked' : '' }} 
                                            value="{{ $answer->id }}">
                                            {{ $answer->answer }}

                                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                        </li>
                                    </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

                {{-- User details --}}
                <div class="card mt-4">
                    <div class="card-header">Your Information</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input name="survey[name]" type="text" class="form-control @error('survey.name') is-invalid @enderror" 
                                id="name" aria-describedby="nameHelp" placeholder="Enter Name" autocomplete="name" autofocus>
                            <small id="nameHelp" class="form-text text-muted">
                                Hello! What's your name?
                            </small>
    
                            @error('survey.name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <label for="email">Purpose</label>
                            <input name="survey[email]" type="email" class="form-control @error('survey.email') is-invalid @enderror" 
                                id="email" aria-describedby="emailHelp" placeholder="Enter Email" autocomplete="email">
                            <small id="emailHelp" class="form-text text-muted">
                                Your Email Please.
                            </small>
    
                            @error('survey.email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                        <div>
                            <button class="btn btn-dark mt-2" 
                                type="submit">
                                Complete Survey
                            </button>
                        </div>
                    </div>       
                </div>          
            </form>
        </div>
    </div>
</div>
@endsection
