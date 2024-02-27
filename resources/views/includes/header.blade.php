<header class="header">
    <div class="header__logo">
        @if($page !== 'home')
        <a href="{{ route('home') }}">⊷</a>
        @else
        <span class="logo">⊷</span>
        @endif
        <span>Shortenizer</span>
    </div>
</header>
