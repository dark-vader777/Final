<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="featured.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Featured Works</title>
    <link rel="stylesheet" href="{{ asset('assets/front/css/featured.css') }}">

</head>

<body>
<div class="back">
    <div class="olcu">
        <div class="navbar">
            <div class="nav-left">
{{--                @foreach($categories as $category)--}}
{{--                    <a class="arxa-reng {{ request()->is($category->route) ? 'arxa-reng-sari' : '' }}" href="{{ url($category->route) }}">--}}
{{--                        {{ $category->name }}--}}
{{--                    </a>--}}
{{--                @endforeach--}}
                <a class="arxa-reng" href="{{route('front.layouts.home')}}">HOME</a>
                <a class="arxa-reng" href="{{route('front.pages.about')}}">ABOUT ME</a>
                <a class="arxa-reng-sari" href="{{route('front.pages.featured')}}">FEATURED WORKS</a>
                <a class="arxa-reng" href="#">PROJECTS</a>
                <a class="arxa-reng" href="{{route('front.pages.blogs')}}">BLOGS</a>
            </div>
            <div class="nav-right">
                <a href="#">
                    <h3 class="lets">LET'S TALK <i style="color: yellow;"
                                                   class="fa-solid fa-arrow-up-right-from-square"></i></h3>
                </a>
                <hr style="border: 1px solid yellow;">
            </div>
        </div>
        <hr style="border: 1px solid white; margin-top: 20px;">
        <div class="about-me">

        </div>
        <div style="display: flex; justify-content: space-between;">
            <div class="div-1">
                <h1>Featured Works</h1>
            </div>
            <div class="div-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quia hic deserunt et ut? Deserunt
                    fugit consequatur molestiae. Molestiae deserunt optio laborum ad delectus, maxime in praesentium
                    fugiat repellat ipsum explicabo quisquam odit dignissimos a autem dicta. Totam nihil veniam
                    ratione cum, explicabo provident, officia nulla, earum corrupti maxime enim consequatur expedita
                    ipsam suscipit consectetur voluptatem eaque distinctio similique error reiciendis. Quae minus
                    qui dolores quod quis voluptatem sint earum quaerat ullam, omnis aut rem cumque ipsa, at
                    mollitia! Debitis provident, dolore possimus ea omnis sint aliquam facere vitae distinctio
                    perferendis autem dignissimos, consequuntur dolores incidunt modi impedit. Harum, mollitia!</p>
            </div>
        </div>
    </div>
</div>
