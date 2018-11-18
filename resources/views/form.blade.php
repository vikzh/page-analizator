@extends('layouts.app')

@section('title', 'Page Analizator')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Page Analyzer</h1>
        <p class="lead">Simple page that reflects the core values of the page</p>
        <hr class="my-4">
        <p>Enter URL for testing:</p>
        <div class="mb-3">
            <form action="{{ route('domains') }}" class="input-group input-group-lg" method="post">
                <input name="url" type="text" class="form-control" placeholder="url">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Analyze</button>
                </div>
            </form>
        </div>
    </div>
@endsection
