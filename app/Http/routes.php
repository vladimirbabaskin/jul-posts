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
    Route::get(
            '/',
            function () {
                return view('all-posts');
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
            function () {
                /**
                 * TODO Process
                 */
                return redirect("/admin/");
            }
    );
    Route::delete(
            '/admin/post/delete/',
            function () {
                /**
                 * TODO Delete
                 */
                return redirect("/admin/");
            }
    );
    Route::post(
            '/admin/post/edit/',
            function () {
                return view('edit');
            }
    );
    /**
     * https://laravel.com/docs/5.3/controllers#resource-controllers
     */
    Route::put(
            '/admin/post/update/',
            function () {
                /**
                 * TODO Update
                 */
                return redirect("/admin/");
            }
    );
