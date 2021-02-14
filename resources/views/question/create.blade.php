@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                                id="title" aria-describedby="titleHelp" placeholder="Enter Title" autocomplete="title" autofocus>
                            <small id="titleHelp" class="form-text text-muted">
                                Give your questionnaire a title that attracts attention.
                            </small>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" class="form-control @error('purpose') is-invalid @enderror" 
                                id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose" autocomplete="purpose">
                            <small id="purposeHelp" class="form-text text-muted">
                                Giving a purpose will attract responses.
                            </small>

                            @error('purpose')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
