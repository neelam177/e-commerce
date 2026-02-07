<div>
    <h1>hello home here</h1>
    <h1>
        {{-- {{ URL::current() }} --}}
        {{ url()->current() }}
        <a href="/about">About page</a>

    </h1>
    <h1>
        {{-- {{ URL::full() }} --}}
      full url   {{ url()->full() }}

    </h1>

    <h2>Named Route</h2>
    <h2>Make url WITH cHILD pATH</h2>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
