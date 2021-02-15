@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Title</label>
                            <input name="question[question]" type="text" 
                                class="form-control @error('question.question') is-invalid @enderror" 
                                id="question" aria-describedby="questionHelp" value="{{ old('question.question') }}" 
                                placeholder="Enter Question" autocomplete="question" autofocus>
                            <small id="questionHelp" class="form-text text-muted">
                                Ask simple and to-the-point questions for best results.
                            </small>

                            @error('question.question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">
                                    Give choices that give you the most insight into your question.
                                </small>

                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" 
                                            class="form-control @error('answers.0.answer') is-invalid @enderror" 
                                            id="answer1" aria-describedby="choicesHelp" value="{{ old('answers.0.answer') }}" 
                                            placeholder="Enter Choice 1" autocomplete="answer1">
                                        
            
                                        @error('answers.0.answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" type="text" 
                                            class="form-control @error('answers.1.answer') is-invalid @enderror" 
                                            id="answer2" aria-describedby="choicesHelp" value="{{ old('answers.1.answer') }}" 
                                            placeholder="Enter Choice 2" autocomplete="answer2">
                                        
            
                                        @error('answers.1.answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]" type="text" 
                                            class="form-control @error('answers.2.answer') is-invalid @enderror" 
                                            id="answer3" aria-describedby="choicesHelp" value="{{ old('answers.2.answer') }}" 
                                            placeholder="Enter Choice 3" autocomplete="answer3">
                                        
            
                                        @error('answers.2.answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" type="text" 
                                            class="form-control @error('answers.3.answer') is-invalid @enderror" 
                                            id="answer4" aria-describedby="choicesHelp" value="{{ old('answers.3.answer') }}" 
                                            placeholder="Enter Choice 4" autocomplete="answer4">
                                        
            
                                        @error('answers.3.answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
