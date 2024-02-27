@php($page = 'showlist')

@extends('layouts.main')

@section('content')
<main class="main">
    <h1 class="text-center mb-5">List of all existent shortened links</h1>

    <section>
        <div class="container ">

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Link Name</th>
                        <th scope="col">Short link</th>
                        <th scope="col">Full Url</th>
                        <th scope="col">Usage Counter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($links as $link)
                    <tr>
                        <th scope="row">{{ $link->id }}</th>
                        <td>{{ $link->name }}</td>
                        <td><a href="{{route('redirect.original', $link->shortlink) }}" class="text-decoration-none">{{ env('APP_URL') . '/original/' . $link->shortlink }}</a></td>
                        <td><span class="full_url  text-nowrap text-truncate">{{ $link->url }}</span></td>
                        <td>{{ $link->counter }}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>

            <div>
                {{ $links->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section>
</main>

@endsection
