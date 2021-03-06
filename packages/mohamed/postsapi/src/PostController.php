<?php

/**
 * Posts API
 * Api to deal with posts and comments
 *
 * OpenAPI spec version: 1.0.0
 *
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace Mohamed\PostsAPI;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation index
     *
     * .
     *
     *
     * @return Http response
     */
    public function index()
    {
        $post = Post::all()->get();
        return view('postsapi::index')->with('posts', $posts);
    }
    /**
     * Operation store
     *
     * .
     *
     *
     * @return Http response
     */
    public function store()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['post'])) {
            throw new \InvalidArgumentException('Missing the required parameter $post when calling store');
        }
        $post = $input['post'];


        return response('How about implementing store as a post method ?');
    }
    /**
     * Operation destroy
     *
     * .
     *
     * @param int $post_id Numeric ID of the post. (required)
     *
     * @return Http response
     */
    public function destroy($post_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing destroy as a delete method ?');
    }
    /**
     * Operation show
     *
     * .
     *
     * @param int $post_id Numeric ID of the post. (required)
     *
     * @return Http response
     */
    public function show($post_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing show as a get method ?');
    }
    /**
     * Operation update
     *
     * .
     *
     * @param int $post_id Numeric ID of the post. (required)
     *
     * @return Http response
     */
    public function update($post_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing update as a put method ?');
    }
}
