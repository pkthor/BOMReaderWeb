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

<div class="book-menu">
	<div class="menu-content text-left">
		<p class="h4">Chapters</p>
		<ul class="nav flex-column">
			@foreach ($books as $book)
				@if ($book->id == $thisBook->id)
	  		  	<li class="nav-item">
	  		   	 	<a class="nav-link active" href="#">{{ $book->name }}
						<svg class="bi bi-chevron-right menu-arrow" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
						</svg>
					</a>
	  		 	</li>
				@else
	  		  	<li class="nav-item">
	  		   	 	<a class="nav-link" href="#">{{ $book->name }}
						<svg class="bi bi-chevron-right menu-arrow" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
						</svg>
					</a>
	  		 	</li>				
				@endif
			@endforeach
		</ul>
	</div>
</div>
@endsection
