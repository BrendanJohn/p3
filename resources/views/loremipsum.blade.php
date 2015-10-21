@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
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
		<h1>Your Lorem Ipsum has been generated</h1>
        	@if(isset($paragraphs))
        		<p><?php echo implode('<p>', $paragraphs); ?></p>
			@endif
	</div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop