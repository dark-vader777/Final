<div class="navbar">
    <div class="nav-left">
        <a class="arxa-reng-sari" href="{{route('front.layouts.home')}}">HOME</a>
        <a class="arxa-reng" href="{{route('front.pages.about')}}">ABOUT ME</a>
        <a class="arxa-reng" href="{{route('front.pages.featured')}}">FEATURED WORKS</a>
        <a class="arxa-reng" href="#">PROJECTS</a>
        <a class="arxa-reng" href="{{route('front.pages.blogs')}}">BLOGS</a>
        <div class="nav-left">
{{--            @foreach($categories as $category)--}}
{{--                <a class="arxa-reng {{ request()->is($category->route) ? 'arxa-reng-sari' : '' }}" href="{{ url($category->route) }}">--}}
{{--                    {{ $category->name }}--}}
{{--                </a>--}}
{{--            @endforeach--}}
        </div>


        {{--        @foreach($categories as $category)--}}
{{--            <a class="arxa-reng" href={{$category->route}}>{{ $category->name }}</a>--}}
{{--            @endforeach--}}

    </div>
    <div class="nav-right">
        <a href="#">
            <h3 class="lets">LET'S TALK <i style="color: yellow;"
                                           class="fa-solid fa-arrow-up-right-from-square"></i></h3>
        </a>
        <hr style="border: 1px solid yellow;">
    </div>
</div>

