@extends('layouts.master')


@section('title')
    Random User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('content')
	<div class="container">      
		<h1>Your unique users have been created</h1> 
        <?php 
            if (isset($users))
                foreach($users as $user) 
                {
                    echo "Name: " . $user['name'] . "  " . $user['lastName'] . "<br>";
                    if (isset($user['email']))
                    	echo "Email: " . $user['email'] . "<br>";
                    if (isset($user['email']))
                    	echo "Phone Number: " . $user['phoneNumber'] . "<br>";
                   echo "<hr>";
                }
        ?>
	</div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop