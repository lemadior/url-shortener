@php($page = 'showlink')

@extends('layouts.main')

@section('content')
<main class="main">
    <h1 class="text-left mb-5">Short link for the: {{ $link->name }}</h1>

    <section>
        <div class="container ">
            <div class="col-12 shortener">
                <p>Url of the short alias: <span class="text-success font-weight-bold">{{ env('APP_URL') . '/original/' . $link->shortlink }}</span></p>

                <p>Original URL to the site: <span class="text-primary">{{ $link->url }}</span></p>

                <a href="{{ route('redirect.original', $link->shortlink) }}" class="col-3 btn btn-primary mt-3">Go to Link</a>
            </div>
        </div>
    </section>
</main>

@endsection
