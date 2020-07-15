@extends('layouts.mvp')

@section('content')
<div class="main-content">
	<div class="reader-info">
		<img src="{{ asset( 'img/DanieleDicarolo.jpg ') }}" alt="" width="300" height="300"  class="reader-img rounded-circle mx-auto d-block"/>
		<p class="reader-name text-center h3">Daniele Dicarolo</p>
	</div>
	<p class="text-center h2 chapter-name">
		<a href="" id="book-name">{{ $thisBook->name }}</a><br>
		Capitolo {{ $selectedChapter->number }}
	</p>
	<div class="player text-center">
		<audio>
		<source src="/chapters/{{ $chapterMedia->uuid }}/stream" type=audio/mpeg>
			Unsupported browser
		</audio>
	</div>
</div>


@endsection
