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
            <h1><strong>Developer's Best Friend</strong></h1>
            <p>This Laravel application provides <strong>two</strong> resources for application development:</p> 
                <ul>
                    <li>One resource is a tool that generates a string of text called <em>Lorem Ipsum</em>. In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.</li>
                    <li>The second tool generates random user data. This is just like Lorem Ipsum, except for people.</li>
                </ul>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row apps">
            <div class="col-md-3 col-md-offset-2">
                    <i class="fa fa-paragraph fa-5x"></i>
                    <h2>Lorem Ipsum Generator</h2>
                    <p>Generates paragraphs of filler text.</p>
                    <form method='POST' action='generateIpsum'>
                    	<div class="form-group">
                            <input type='hidden' name='_token' value='{{ csrf_token() }}'>

                            <fieldset>
                                <label>Number of paragraphs:</label>
                                <input type='text' name='paragraphs' class="form-control" id='paragraphs' size="3">
                            </fieldset>
                        	@if(count($errors) > 0)
    						        @foreach ($errors->all() as $error)
    						            <p>{{ $error }}</p>
    						        @endforeach
    						@endif
                        </div>
                    	<button type='submit' class="btn btn-lg btn-primary">Display Text</button>
                    </form>
            </div>
            <div class="col-md-3 col-md-offset-1">
                    <i class="fa fa-user-plus fa-5x"></i>
                    <h2>Random User Generator</h2>
                    <p>Generates random user data.</p>
                        <form method="POST" action='/user#results'>
                            <div class="form-group">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                             <fieldset>
                                <label>Number of users:</label>
                                <input type='text' name='numUsers' class="form-control" id='numUsers' value =
                                    <?php 
                                        echo isset($_POST['numUsers']) ? $_POST['numUsers'] : '' 
                                    ?>
                                >
                                @if(count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                 @endif
                                <label>Include email address: </label>
                                <input type="checkbox" name="wantsEmail"
                                    <?php
                                        if (isset($_POST["wantsEmail"]))
                                            echo "checked";
                                    ?>
                                >
                                <br />
                                <label>Include phone number: </label>
                                <input type="checkbox" name="wantsPhone"
                                    <?php
                                        if (isset($_POST["wantsPhone"]))
                                            echo "checked";
                                    ?>
                                > 
                            </fieldset>
                        </div>
                        <button type='submit' class="btn btn-lg btn-primary">Get Users</button>
                    </form>
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