<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;




class PagesController extends BaseController
{
    public function show(Request $request, $path = null)
    {
        
        // If no path is provided, return a default view

        // If no path is provided, return a default view
        if (empty($path)) {
            return view('pages/home');
        }

        // Replace slashes (/) in the path with dots (.) to match Laravel view naming convention
        $viewPath = $path; //str_replace('/', '.', $path);

        // Check if the view exists
        if (View::exists('pages.' . $viewPath)) {
            return view('pages.' . $viewPath);
        }

        // If the view doesn't exist, return a 404 error
        abort(404);


       // }

        // Replace slashes (/) in the path with dots (.) to match Laravel view naming convention
      //  $viewPath = str_replace('/', '.', $path);

        // Check if the view exists
      //  if (View::exists($viewPath)) {
        //    return view($viewPath);
        //}

        // If the view doesn't exist, return a 404 error
       // abort(404);
    }
}
