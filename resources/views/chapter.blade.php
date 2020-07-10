@extends('layouts.mvp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

		    <div class="container">
				<img src="{{ asset( 'img/DanieleDicarolo.jpg ') }}" alt="" width="300" height="300"  class="reader-img rounded-circle mx-auto d-block"/>
		        <p class="reader-name text-center h3">Daniele Dicarolo</p>
			</div>
			<a href="" class="chapter-info">
				<svg class="bi bi-list-ul list-icon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
				</svg>
		        <p class="text-center h2 chapter-name">{{ $selectedChapter->display_name }}</p>
			</a>
		    <div class="player text-center">
				<audio>
				<source src="{{ asset('audio/Mosia3.mp3') }}" type=audio/mpeg>
					Unsupported browser
				</audio>
		    </div>

        </div>
    </div>
</div>


@endsection
