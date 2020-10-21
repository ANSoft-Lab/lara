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
    }
}
