<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class FixPhotosPathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = DB::table('employees')->where('photo', 'like', 'uploads%')->get();

        foreach($photos as $photo) {
            $new_path = str_replace('uploads/', 'uploaded/', $photo->photo);
            DB::table('employees')->where('id', $photo->id)->update(['photo' => $new_path]);
        }

        $docs = DB::table('documents')->where('path', 'like', 'uploads%')->get();

        foreach($docs as $doc) {
            $new_doc_path = str_replace('uploads/', 'uploaded/', $doc->path);
            DB::table('documents')->where('id', $doc->id)->update(['path' => $new_doc_path]);
        }
    }
}
