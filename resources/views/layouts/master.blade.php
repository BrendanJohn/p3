<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'p3' --}}
        @yield('title','p3')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha256-j7Dtnd7ZjexEiPNbscbopFn9+Cs0b3TLipKsWAPHZIM= sha512-RFhfi6P8zWMAJrEGU+CPjuxPh3r/UUBGqQ+/o6WKPIVZmQqeOipGotH2ihRULuQ8wsMBoK15TSZqc/7VYWyuIw==" crossorigin="anonymous">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }}
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>