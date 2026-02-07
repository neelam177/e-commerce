<h1>Hello there</h1>
{{-- option1 --}}
<a href="/about">About page</a><br>
{{-- option 2 --}}
<a href="{{ URL::to('about') }}">About page</a><br>
<a href="{{ URL::to('about', ['neelam']) }}">About2 page</a><br>
{{--  option 3
<a href="{{ URL::to('home') }}">Home page</a><br>
<a href="{{ URL::to('home') }}">Home page</a> --}}



<h2>Named Route :</h2>
<div>
    {{-- option 1 --}}
    <a href="home/profile/user">Go TO Welcom Page</a>  <br>
    {{-- option 2 --}}
    <a href="{{ route('hm') }}">Go TO Welcom Page2</a>

</div>
