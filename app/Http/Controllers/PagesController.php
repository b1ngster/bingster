<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//#use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//#use Illuminate\Foundation\Validation\ValidatesRequests;
//#use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;




class PagesController extends Controller
{
    public function show(Request $request, $category = null, $topic = null, $subject = null, $page = null)
    {
        
       
        // Replace slashes (/) in the path with dots (.) to match Laravel view naming convention
        //return($request->path());

         $viewPath = $request->path(); //str_replace('/', '.', $path);
 //      return($viewPath);

        // Check if the view exists
        if (View::exists($viewPath)) {
            return view( $viewPath);
        }
        if (View::exists($viewPath .'/home')) {
            return view($viewPath .'/home');
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
