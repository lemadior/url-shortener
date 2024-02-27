@php($page = 'shorten')

@extends('layouts.main')

@section('content')
<main class="main">
    <h1 class="text-left">Create short alias for any url</h1>

    <section>
        <div class="container ">

            <div class="">

            </div>
    </section>

    <section>
        <div class="container ">
            <div class="shortener">
                <form action="{{ route('create.alias') }}" method="post" class="col-8 d-flex flex-column align-items-left">
                    @csrf

                    <div class="form-group text-left">
                        <label for="name" class="col-sm-8 col-form-label mx-2">Specify name of the short link</label>
                        <input type="text" name="name" placeholder="Place your short link name" value="{{ old ('name') }}" class="col-4 form-control" />
                        @error('name')
                        <div class="text-danger mt-2">
                            @foreach($errors->get('name') as $msg)
                            <p>{{ $msg }}</p>
                            @endforeach
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="full_url" class="col-sm-8 col-form-label mx-2">Url to be shortened</label>
                        <input type="text" name="full_url" placeholder="Place your url here" value="{{ old ('full_url') }}" class="form-control"/>
                        @error('full_url')
                        <div class="text-danger mt-2">
                            @foreach($errors->get('full_url') as $msg)
                            <p>{{ $msg }}</p>
                            @endforeach
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary col-4 mt-5">Get short link</button>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection
