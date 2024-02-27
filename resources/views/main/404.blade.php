@php($page = '404')

@extends('layouts.main')

@section('content')
<main class="main">
    <h1 class="text-center text-danger">ERROR. Something going wrong!</h1>

    <section>
        <div class="container ">
            <p>
                Try to attempt later or try something else!
            </p>
        </div>
    </section>
</main>

@endsection
