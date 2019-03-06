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
            '/',
            function () {
                $new = Post::all();
             return view('all-posts', ["new" => $new]);
            }
    );
    Route::get(
            '/admin/',
            function () {
                return view('admin.panel');
            }
    );
    Route::post(
            '/admin/post/',
            function (Request $request) {
                /**
                 * TODO Process
                 */
                //return redirect("/admin/");
            }
    );
    Route::delete(
            '/admin/post/delete/{post}',
            function (Post $post) {
                /**
                 * TODO Delete
                 */
                //return redirect("/admin/");
            }
    );
    Route::get(
            '/admin/post/',
            function () {
                return view('admin.post.edit');
            }
    );
    /**
     * https://laravel.com/docs/5.3/controllers#resource-controllers
     */
    Route::put(
            '/admin/post/update/',
            function (Post $post) {
                /**
                 * TODO Update
                 */
                //return redirect("/admin/");
            }
    );
