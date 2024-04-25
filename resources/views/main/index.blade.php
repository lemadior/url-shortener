@php($page = 'home')

@extends('layouts.main')

@section('content')
<main class="main">
    <h1 class="text-center">URL Shortened Service</h1>

    <section>
        <div class="container ">

            <div class="col-8 intro">
                <p>
                    A URL shortening service is an online platform designed to create concise and easily
                    shareable versions of longer website addresses. Users input a lengthy URL, and the
                    service generates a shorter, unique link that redirects to the original destination.
                </p>

                <p>
                    These services are particularly useful for sharing links on social media, in messaging,
                    or anywhere character count is limited, providing a more user-friendly experience and
                    enabling easier dissemination of web addresses. Popular URL shortening services often
                    include additional features like link tracking and analytics to monitor click-through
                    rates and engagement.
                </p>
            </div>

        </div>
    </section>

    <section>
        <div class="container ">
            <div>
                <a href="{{ route('shorten') }}" class="col-6 btn btn-success">Go to Shorten a Link</a>
            </div>
           <div class="other_links">
                <a href="{{ route('links') }}" class="col-3 btn btn-link">Show existent links</a>
            </div>
        </div>
    </section>
</main>

@endsection
