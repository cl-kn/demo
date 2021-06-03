<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class PostController extends BaseController
{
    /**
     * 指定された投稿のIDを表示
     *
     * @param  int  $id
     * @return String
     */
    public function show($id)
    {
        return $id . '番の投稿';
    }
}
