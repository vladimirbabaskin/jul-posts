<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

use App\Post;
use Illuminate\Http\Request;

Route::get(
	'/admin', function () {
    $posts = Post::all();
    return view('all-posts', ["posts" => $posts]);
}
);

Route::post(
	'/admin/posts', function (Request $request) {
     $validator = Validator::make($request->all(), [
    'title' => 'required|max:255',
    'text' => 'required|text',
  ]);

  if ($validator->fails()) {
    return redirect('/admin')
      ->withInput()
      ->withErrors($validator);
  }

  $post = new Post();
  $post->title = $request->title;
  $post->text = $request->text;
  $post->save();

  return redirect("/admin");
}
);

Route::delete(
	'/admin/post/delete/{post}', function (Post $posts) {
    /**
     * TODO Delete
     */
    //return redirect("/admin/");
}
);
Route::get(
	'/admin/post/', function () {
    return view('admin.post.edit');
}
);
/**
 * https://laravel.com/docs/5.3/controllers#resource-controllers
 */
Route::put(
	'/admin/post/update/', function (Post $posts) {
    /**
     * TODO Update
     */
    //return redirect("/admin/");
}
);
