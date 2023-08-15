<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;


class ArticlesController extends BaseController
{
    public function show(Request $request, $path = null, $category, $topic = null, $page = null)
    {


           return($request);

        // If no path is provided, return a default view
        if (empty($path)) {
            return view('articles/home');
        }

        // Replace slashes (/) in the path with dots (.) to match Laravel view naming convention
        $viewPath = $path; //str_replace('/', '.', $path);

        // Build the view name based on the provided parameters
        $viewName = 'articles.' . $viewPath . '.' . $category;

        // Append the topic and page to the view name if provided
        if (!empty($topic)) {
            $viewName .= '.' . $topic;
        }
        if (!empty($page)) {
            $viewName .= '.' . $page;
        }

        // Check if the view exists
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // If the view doesn't exist, return a 404 error
        abort(404);
    }
}
