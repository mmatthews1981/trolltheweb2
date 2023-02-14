@extends('layout')

@section('content')

    <div class="col-md-8">
        <div class="quote">
            {{ $quote->body }}
        </div>
        <div class="attribution">
            <div><a class="link" href="{{ $quote->author_link }}">{{ $quote->author }}</a></div>
            <div><a class="btn btn-primary link" href="{{ $quote->source }}">Source</a></div>
        </div>
    </div>
                    
@stop