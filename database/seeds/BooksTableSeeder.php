<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		DB::table('books')->insertOrIgnore([
	        ['id' => 1, 'name' => 'Introduzione', 'slug' => 'introduzione'],
			['id' => 2, 'name' => '1 Nefi', 'slug' => '1-nefi'],
			['id' => 3, 'name' => '2 Nefi', 'slug' => '2-nefi'],
	        ['id' => 4, 'name' => 'Giacobbe', 'slug' => 'giacobbe'],
			['id' => 5, 'name' => 'Enos', 'slug' => 'enos'],
			['id' => 6, 'name' => 'Giarom', 'slug' => 'giarom'],
			['id' => 7, 'name' => 'Omni', 'slug' => 'omni'],
			['id' => 8, 'name' => 'Parole di Mormon', 'slug' => 'parole-di-mormon'],
			['id' => 9, 'name' => 'Mosia', 'slug' => 'mosia'],
			['id' => 10, 'name' => 'Alma', 'slug' => 'alma'],
			['id' => 11, 'name' => 'Helaman', 'slug' => 'helaman'],
			['id' => 12, 'name' => '3 Nefi', 'slug' => '3-nefi'],
			['id' => 13, 'name' => '4 Nefi', 'slug' => '4-nefi'],
			['id' => 14, 'name' => 'Mormon', 'slug' => 'mormon'],
			['id' => 15, 'name' => 'Ether', 'slug' => 'ether'],
			['id' => 16, 'name' => 'Moroni', 'slug' => 'moroni']
		]);
		
		// Insert Chapters Table
			
		DB::table('chapters')->insertOrIgnore([
			['number' => 1, 'display_name' => 'Frontespizio del Libro di Mormon', 'book_id' => 1],
			['number' => 2, 'display_name' => 'Introduzione', 'book_id' => 1],
			['number' => 3, 'display_name' => 'La testimonianza di tre testimoni', 'book_id' => 1],
			['number' => 4, 'display_name' => 'La testimonianza di otto testimoni', 'book_id' => 1],
			['number' => 5, 'display_name' => 'La testimonianza del profeta Joseph Smith', 'book_id' => 1],
		]);
			
		$books = [2 => ['1 Nefi', 22], 3 => ['2 Nefi', 33], 4 => ['Giacobbe', 7], 5 => ['Enos', 1], 6 => ['Giarom', 1], 7 => ['Omni', 1], 8 => ['Parole di Mormon', 1], 9 => ['Mosia', 29], 10 => ['Alma', 63], 11 => ['Helaman', 16], 12 => ['3 Nefi', 30], 13 => ['4 Nefi', 1], 14 => ['Mormon', 9], 15 => ['Ether', 15], 16 => ['Moroni', 10]];
			
		$chapters = [];
	
		foreach($books as $book_id => $book_info ) { 
			//create array then put in table insert command
	
			for ($i=1; $i <= $book_info[1]; $i++) { 
				array_push($chapters, ['number' => $i, 'display_name' => $book_info[0] . ' ' . $i, 'book_id' => $book_id ]);
			}
			
	
		}	
		
		DB::table('chapters')->insertOrIgnore($chapters);

		// Insert Media Table

		DB::table('media')->insertOrIgnore([
			['filename' => 'intro1.mp3', 'uuid' => sha1('Frontespizio del Libro di Mormon' . microtime()), 'chapter_id' => 1],
			['filename' => 'intro2.mp3', 'uuid' => sha1('Introduzione' . microtime()), 'chapter_id' => 2],
			['filename' => 'intro3.mp3', 'uuid' => sha1('La testimonianza di tre testimoni' . microtime()), 'chapter_id' => 3],
			['filename' => 'intro4.mp3', 'uuid' => sha1('La testimonianza di otto testimoni' . microtime()), 'chapter_id' => 4],
			['filename' => 'intro5.mp3', 'uuid' => sha1('La testimonianza del profeta Joseph Smith' . microtime()), 'chapter_id' => 5],
		]);

		$media = [];
		$i = 6;

		foreach($chapters as $chapter) { 
			
			//create array then put in table insert command
			$filename = str_replace(' ', '', $chapter['display_name']);

			array_push($media, ['filename' => $filename . ".mp3", 'uuid' => sha1($filename . microtime()), 'chapter_id' => $i]);

			$i++;

		}

		DB::table('media')->insertOrIgnore($media);
			
    }
}
