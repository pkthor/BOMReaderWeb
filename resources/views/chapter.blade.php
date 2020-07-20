@extends('layouts.mvp')

@section('title-info')
{{ $selectedChapter->display_name}} letto da {{ $narrator->name }}
@endsection

@section('content')
<div class="main-content">
	<div class="reader-info">
		<img src="/img/photos/{{ $narrator->photo }}" alt="" width="300" height="300"  class="reader-img rounded-circle mx-auto d-block"/>
		<p class="reader-name text-center h3">{{ $narrator->name }}</p>
	</div>
	<p class="text-center h2 chapter-name">
		<a href="" id="book-name">{{ $thisBook->name }}</a><br>
		{{ $selectedChapterName }}
	</p>
	<div class="player text-center">
		<audio>
		<source src="/chapters/{{ $chapterMedia->uuid }}/stream" type=audio/mpeg>
			Unsupported browser
		</audio>
	</div>
</div>


@endsection
