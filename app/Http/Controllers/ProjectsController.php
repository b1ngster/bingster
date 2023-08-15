<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProjectsController extends BaseController
{
    public function show(Request $request, $path = null, $category, $topic = null, $page = null)
    {
        // Validate the request parameters
        $validatedData = $request->validate([
            'path' => 'nullable|string|regex:/^[a-zA-Z0-9\s\-]+$/',
            'category' => 'required|string|regex:/^[a-zA-Z0-9\s\-]+$/',
            'topic' => 'nullable|string|regex:/^[a-zA-Z0-9\s\-]+$/',
            'page' => 'nullable|string|regex:/^[a-zA-Z0-9\s\-]+$/',
        ]);

        // If no path is provided, return a default view
        if (empty($validatedData['path'])) {
            return view('articles.home');
        }

        // Replace slashes (/) in the path with dots (.) to match Laravel view naming convention
        $viewPath = str_replace('/', '.', $validatedData['path']);

        // Build the view name based on the provided parameters
        $viewName = 'articles.' . $viewPath . '.' . $validatedData['category'];

        // Append the topic and page to the view name if provided
        if (!empty($validatedData['topic'])) {
            $viewName .= '.' . $validatedData['topic'];
        }
        if (!empty($validatedData['page'])) {
            $viewName .= '.' . $validatedData['page'];
        }

        // Check if the view exists
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // If the view doesn't exist, return a 404 error
        abort(404);
    }
}
