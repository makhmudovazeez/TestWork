<?php

namespace App\Services;

use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\DB;
use Throwable;

class BlogService
{
    private $blogModel;

    public function __construct(Blog $blog)
    {
        $this->blogModel = $blog;
    }

    public function store(array $data): Blog
    {
        DB::beginTransaction();
        try{
            $blog = $this->blogModel->create([
                'title' => $data['title'],
                'description' => $data['description']
            ]);

            DB::commit();
            return $blog;
        }catch(Throwable $exception){
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }

    public function update(array $data, $blog): Blog
    {
        DB::beginTransaction();
        try{
            $blog->update([
                'title' => $data['title'],
                'description' => $data['description']
            ]);

            DB::commit();
            return $blog;
        }catch(Throwable $exception){
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }
    }
}