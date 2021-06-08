<header>
    <nav class="main-navigation container">
        <ul class="d-flex">
            <li>
                <a href="{{ route('home')}}">
                    <img src="{{ asset('images/dc-logo.png')}}" alt="logo"> 
                 </a>
            </li>
            <li>
                <a class="active" href="{{ route('comics')}}">Comics</a>
            </li>
            <li>
                <a href="{{ route('news')}}">News</a>
            </li>
        </ul>
    </nav>
</header>