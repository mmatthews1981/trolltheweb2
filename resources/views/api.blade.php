@extends('layout')

@section('content')

    <div class="col-md-8">
        <div class="quote api">
            <p>PHP Does Not Suck offers two public API endpoints for your quoting convenience. All quotes return a JSON object with the following fields:</p>

            <ul>
                <li><em>id:</em> Each quote has a unique ID number.</li>
                <li><em>body:</em> The quote text.</li>
                <li><em>author:</em> The author, obviously.</li>
                <li><em>author_link:</em> The URL to the most frequently-upated social media profile for the author I could find at the time the quote was added to the site.</li>
                <li><em>source:</em> The URL to the context the quote was pulled from.</li>
            </ul>

            <p>Specific quotes are available at /api/{id}, and random quotes are available at /api/random.</p>

            
        </div>

    </div>

@stop