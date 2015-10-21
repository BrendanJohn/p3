@extends('layouts.master')


@section('title')
    Developer`s Best Friend
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('content')
    <div class="container theme-showcase" role="main">    
        <div class="jumbotron">  
            <h1>Developer's Best Friend</h1>
            <p>This Laravel application provides two resources for today`s savvy developer. 
                <ul>
                    <li>One resource is a tool that generates a string of text called Lorem Ipsum. In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.</li>
                    <li>The second tool generates random user data. This is jult like Lorem Ipsum, except for people.</li>
                </ul>
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row apps">
            <div class="col-md-3 col-md-offset-2">
                    <i class="fa fa-align-justify fa-5x"></i>
                    <h2>Lorem Ipsum Generator</h2>
                    <p>Generates paragraphs of filler text.</p>
                    <form method='POST' action='generateIpsum'>
                    	
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>

                        <fieldset>
                            <label for='title'>Number of paragraphs:</label>
                            <input type='text' name='paragraphs' id='paragraphs'>
                        </fieldset>
                    	@if(count($errors) > 0)
						        @foreach ($errors->all() as $error)
						            <p>{{ $error }}</p>
						        @endforeach
						@endif
                    	<button type='submit' class="btn btn-lg btn-primary">Display Text</button>
                    </form>
            </div>
            <div class="col-md-3">
                    <i class="fa fa-users fa-5x"></i>
                    <h2>Random User Generator</h2>
                    <p>Generates random user data.</p>
                        <form method="POST" action='/user#results'>
                        
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                             <fieldset>
                                <label for='title'>Number of users:</label>
                                <input type='text' name='numUsers' id='numUsers' value =
                                    <?php 
                                        echo isset($_POST['numUsers']) ? $_POST['numUsers'] : '' 
                                    ?>
                                >
                                <label for='title'>Include email address: </label>
                                <input type="checkbox" name="wantsEmail"
                                    <?php
                                        if (isset($_POST["wantsEmail"]))
                                            echo "checked";
                                    ?>
                                >
                                <label for='title'>Include phone number: </label>
                                <input type="checkbox" name="wantsPhone"
                                    <?php
                                        if (isset($_POST["wantsPhone"]))
                                            echo "checked";
                                    ?>
                                > 
                            </fieldset>
                            @if(count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif
                        <button type='submit' class="btn btn-lg btn-primary">Get Users</button>
                    </form>

            </p>
            </div>
        </div>
    </div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop