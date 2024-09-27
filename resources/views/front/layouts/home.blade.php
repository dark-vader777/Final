<!DOCTYPE html>
<html lang="en">
@include('front.partials.head')


<body>
<div class="back">
    <div class="olcu">
        @include('front.partials.navbar')
        @yield('content')
        <hr style="border: 1px solid white; margin-top: 20px;">

        <div class="flex">
            <h1 class="yazi1">DAN<span>I</span>EL <span style="color: gold">BANQUO</span></h1>

        </div>
        <h1 class="yazi3">CAPTURING LIFE'S ESSENCE THROUGHT LENS"</h1>
        <div class="foto-arxaplan">
            <div class="foto1">
                <img class="mainimg" src="{{asset('assets/front/images/qocaadam.jpg')}}" alt="Slider">
                <div class="slider-1">
                    <span><i class="fa-solid fa-arrow-left fa-2x" onclick="next()"></i></span>
                    <span><i class="fa-solid fa-arrow-right fa-2x" onclick="back()"></i></span>
                </div>
            </div>
            <div class="foto2">
                <div class="fotolar">
                    <ul>
                        <li class="img-1"><img src="{{asset('assets/front/images/portrait-interesting-young-man-winter-clothes.jpg')}}" alt=""></li>
                        <li class="img-2"><img src="{{asset('assets/front/images/serious-man-looking-camera.jpg')}}" alt=""></li>
                        <li class="img-3"><img src="{{asset('assets/front/images/portrait-interesting-young-man-winter-clothes.jpg')}}" alt=""></li>
                    </ul>
                    <h2 class="happy">50+</h2>
                    <span class="client">HAPPY CLIENT</span>
                </div>
                <p class="metn">TED Conferences, IS an American-Canadian non-profit organization that posts
                    international TED Conferences, IS an American</p>
                <a class="talk" href="#">
                    Let's Talk
                    <i style="color: yellow;" class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="olcu-2">
    <div class="about-us">
        <div class="about-cont">
            <div class="head-title">
                <h1>ABOUT ME</h1>
            </div>
            <div class="about-desc">
                <p class="metn-uzun">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, laborum!
                    Totam voluptates quod
                    dolore nesciunt rerum unde dicta, ea numquam aspernatur? Nemo amet beatae, animi voluptates
                    explicabo quam laborum? Corporis?
                    Omnis mollitia possimus optio dicta cupiditate dolores quaerat ipsum delectus sunt vel dolorum
                    obcaecati architecto culpa deserunt nemo unde magnam rerum tenetur, aliquid eum nisi nobis
                    animi!
                    Error, consequuntur sit!
                    Excepturi praesentium dolor quos laudantium et cumque ipsum, harum repudiandae quam odio
                    molestias
                    minus ullam amet neque ratione quis inventore fugiat voluptatem? Debitis suscipit ipsam
                    repellendus
                    cumque aliquam, ipsum nostrum!
                    Id soluta provident totam nisi qui dolorum quaerat modi molestiae dolorem! Ipsa cupiditate
                    magnam,
                    deserunt earum, rerum vitae dicta incidunt veniam modi nihil doloremque optio itaque. Ut
                    delectus
                    maxime totam!</p>
            </div>
        </div>
        <div class="about-img">
            <img src="{{asset('/assets/front/images/portrait-interesting-young-man-winter-clothes.jpg')}}" alt="">
            <img src="{{asset('/assets/front/images/portrait-interesting-young-man-winter-clothes.jpg')}}" alt="">
            <img src="{{asset('/assets/front/images/portrait-interesting-young-man-winter-clothes.jpg')}}" alt="">
        </div>
    </div>
</div>
<div class="back-3">
    <div class="ana-div">
        <div class="yazilar">
            <h1>FEATURED WORKS</h1>
            <p>VISION CAPTURED <span>.</span> MOMENTS FROZEN <span>.</span> STORIES TOLD THROUGH DANIEL'S LENS.</p>
        </div>
        <div class="umumi">
            <div class="sekil-1">
                <h1>ERHEREAL SUNRISE</h1><span>MARCH 2023</span>
            </div>
            <div class="sekil-2">
                <h1>OCTOBER 2022</h1><span>WHISPERS OF AUTUMN</span>
            </div>
            <div class="sekil-3">
                <h1>CITY LIGHTS SYMPHONY</h1><span>DECEMBER 2023</span>
            </div>
            <div class="sekil-4">
                <h1>JULY 2024</h1><span>SILENT SERENITY</span>
            </div>
        </div>
        <div class="link">
            <a href="#">
                Let's Talk <i style="color: black;" class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
</div>
<div class="capturing-butun">
    <div class="back-4">
        <div class="esas">
            <div class="olcu-capturing">
                <h1>CAPTURING LIFE'S INTIMATE MOMENTS</h1>
            </div>
            <div class="olcu-capturing2">
                <p>Discover the nuanced beauty of life's fleeting moments, subtly illuminated through Daniel
                    Banquo's lens,
                    inviting you to explore the delicate dance</p>
            </div>
            <div class="kofe">
                <div class="kofe-1" ></div>
                <div class="kofe-2"></div>
                <div class="kofe-3"></div>
                <div class="kofe-4"></div>
                <div class="kofe-5"></div>
            </div>
        </div>
    </div>
</div>

<div class="back-5">
    <div class="olcu-microsoft">
        <div class="yari-1">
            <h1>TESTIMONIALS</h1>
            <p class="work">"Working with Jhon Smith was truly an unforgettable experience. Their keen attention to
                detail and
                artistic vision transformed ordinary momonts into timeless memories. From the initial consultation
                to the final delivery of our photographs, their professionalism and dedication were apperent every
                step of the way."</p>
            <p style="font-size: 40px; padding-top: 160px; color: grey;"><i class="fa-brands fa-microsoft"></i>
                Microsoft</p>
            <p style="font-size: 30px; padding-top: 20px; color: white;">Jhon Smith</p>
            <p style="padding-top: 10px; color: white;">Marketing Manager</p>
        </div>
        <div class="yari-2">
            <div class="fotoqraf">
                <img class="mainimgs" src="{{asset('assets/front/images/fotograf.jpeg')}}" alt="Slider">
            </div>
            <div class="slider">
                <span><i class="fa-solid fa-arrow-left fa-2x" onclick="nexts()"></i></span>
                <span><i class="fa-solid fa-arrow-right fa-2x" onclick="backs()"></i></span>
            </div>
        </div>
    </div>
</div>
<div class="projects-body">
    <div class="projects-olcu">
        <div class="pro-yari-1">
            <h1>PROJECTS</h1>
            <p>Explore My Portfolio Showcasing Diverse Projects. Each Image Tells A Unique Story, Capturing Moments
                And
                Emotions With Artistic Flair</p>
        </div>
        <div class="pro-yari-2">
            <a href="#">
                Let's Talk <i style="color: white;" class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
    <div class="prosekil-ana">
        <div class="pro-sekiller">
            <div class="prosekil-1"></div>
            <div class="prosekil-2"></div>
            <div class="prosekil-3"></div>
        </div>
        <div class="prosekil-4"></div>
        <div class="prosekil-5"></div>
    </div>
</div>
@include('front.partials.footer')
<script src="{{asset('assets/front/js/home.js')}}"></script>
</body>

</html>
