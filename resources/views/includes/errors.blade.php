<div>
    @if(session()->has('error'))
    <div class="p-3 mb-2 bg-danger text-white">
        <p>ERROR: {{ session()->get('error') }}</p>
    </div>
    @endif

    @if(session()->has('success'))
    <div class="p-3 mb-2 bg-success text-white">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif
</div>
