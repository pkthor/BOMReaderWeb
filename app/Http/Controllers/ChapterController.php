<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Book;
use App\Chapter;
use App\Media;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($book, $chapter)
    {
        $thisBook = Book::firstWhere('slug', $book);
        $selectedChapter = $thisBook->chapters->where('slug', $chapter)->first();
        $chapterMedia = $selectedChapter->media;
        $narrator = $selectedChapter->narrator;

        if( $thisBook->id == 1){
            $selectedChapterName = $selectedChapter->display_name;
        } else {
            $selectedChapterName = 'Capitolo ' . $selectedChapter->number;
        }
		
		$books = Book::all();
		
        return view('chapter', compact('thisBook', 'selectedChapter', 'books', 'chapterMedia', 'narrator', 'selectedChapterName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listNav()
    {
        $books = Book::all();
        $navlist = [];
        $name = $slug = $chaptercount = $chapters = '';

        foreach( $books as $book){
            $name = $book->name;
            $slug = $book->slug;
            $chaptercount = $book->chapters->count();
            
            $chapters = $book->chapters;
            
            array_push($navlist, ["name" => $name, "slug" => $slug, "count" => $chaptercount, "chapters" => $chapters]);
        }

        return $navlist;
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stream($uuid) {
        $media = Media::where('uuid', $uuid)->firstOrFail();
        if( $media->chapter->book->id != 2) {
            $pathToFile = storage_path('app/media/' . $media->filename);
        } else {
            $pathToFile = storage_path('app/media_compressed/' . str_replace(".mp3", "-c.mp3", $media->filename));
        }
        
        return response()->file($pathToFile);
    }

}


