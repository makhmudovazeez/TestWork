<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $blogs = Blog::all();
        return response()->json(['data' => $blogs, 'error' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BlogStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BlogStoreRequest $request)
    {
        try{
            $blog =$this->blogService->store($request->validated());

            return response()->json(['data' => $blog, 'error' => '']);
        }catch(Exception $exception){
            return response()->json(['data' => '', 'error' => $exception]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Blog  
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Blog $blog)
    {
        return response()->json(['data' => $blog, 'error' => '']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog  $blog
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Blog $blog)
    {
        return response()->json(['data' => $blog, 'error' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BlogUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        try{
            $blog =$this->blogService->update($request->validated(), $blog);

            return response()->json(['data' => $blog, 'error' => '']);
        }catch(Exception $exception){
            return response()->json(['error' => $exception]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return response()->json([
            'message' => 'User has been deleted',
            'error' => ''
         ]);
    }
}
