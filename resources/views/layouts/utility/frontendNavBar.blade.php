
<!-- menus -->
<ul class="navbar-nav">
    <li class="nav-item dropdown {{Route::is('frontend') ? 'active' : ''}} ">
        <a class="nav-link" href="index.html">Home</a>
    </li>
    @foreach ($categories as $category)
    <li class="nav-item dropdown ">
        <a class="nav-link {{count($category->SubCategory) > 0 ? 'dropdown-toggle' : ''}}" href="{{route('PostCate.all',$category->slug)}}">{{$category->title}}</a>
        @if (count($category->SubCategory) > 0)
            <ul class="dropdown-menu">
                @foreach ($category->SubCategory as $SubCata)
                <li><a href="{{route('PostCate.all',$SubCata->slug)}}" class="dropdown-item">{{$SubCata->title}}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    @endforeach
    
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
    </li>
    @endguest
    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Dashbord</a>
    </li>
    @endauth
</ul>