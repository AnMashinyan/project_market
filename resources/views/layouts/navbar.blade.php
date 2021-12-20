<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo">
                <img src="{{asset('assets/admin/img/logo.png')}}" alt="" width="70" height="70">
                {{--<i class="fa fa-book fa-2x" aria-hidden="true"></i>--}}
            </div>
            <h1 class="text-center">MusBook</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item">
                    <a href="{{route('home')}}" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Գլխավոր
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="{{route('book.single')}}" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Գրքեր
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="{{route('task.single')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Առաջադրանքներ
                    </a>
                </li>
                <li class="tm-nav-item">
                    <form method="GET" class="form-inline tm-search-form" action="{{route('search')}}">
                        <input class="form-control tm-search-input @error('s') is-invalid @enderror" name="s"
                               type="text" placeholder="Փնտրել..."
                               aria-label="Search" required>
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        @include('layouts.sidebar')
    </div>
</header>
