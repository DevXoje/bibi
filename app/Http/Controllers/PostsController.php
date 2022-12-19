<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostPost;
use App\Models\{Post, User};
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        /* $this->middleware(
            [
                'auth',
                'rol:admin',
            ],
            [
                'auth' => [
                    'except' => [
                        'index',
                        'show'
                    ],
                ],
                'rol' => [
                    'only' => [
                        'show'
                    ],
                ]
            ]
        ); */
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('roles:admin', ['only' => ['edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        /* return $posts;
        $posts = Post::orderBy('title'); */
        //$users = User::orderBy('login')->get();
        //return $posts;
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('login')->get();
        $post = new Post();
        return view('posts.create', compact('post', 'users'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostPost $request)
    {
        $newPost = new Post();
        $hasData = $request->has('post_title') && $request->has('post_content');
        if ($hasData) {
            $newPost->title = $request->get('post_title');
            $newPost->content = $request->get('post_content');
            $newPost->user()->associate(User::findOrFail(auth()->user()->id));
            /* $newPost->user()->associate(User::get()->first()); */
        }
        return $newPost->save() ? redirect('/posts') : redirect('/posts/create');
        /* return "hola"; */
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        /*if (!is_numeric($id)) {
            return "The id must be numeric";
        }
        $post = Post::findOrFail($id);*/
        /* $user= User::findOrFail(auth()->user()->id); */

        return view('posts.show', compact("post"));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('login')->get();
        return view('posts.edit', compact('post', 'users'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $postToEdit = Post::findOrFail($id);
        $postToEdit->title	= $request->get('post_title');
        $postToEdit->content = $request->get('post_content');
        $postToEdit->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        request()->session()->flash('alert-success', ' Report is deleted successfully.');
        return redirect()->route('posts.index');
    }

    public function newTest()
    {
        $rand = rand();

        $post = new Post();
        $post->title = 'Post ' . $rand;
        $post->content = 'Content' . $rand;
        $post->save();

        return redirect()->route('posts.index');
    }
    public function editTest(int $id)
    {
        $rand = rand();

        $postToEdit = Post::findOrFail($id);
        $postToEdit->title = 'Post ' . $rand;
        $postToEdit->content = 'Content' . $rand;
        $postToEdit->save();
        return redirect()->route('posts.index');
    }
}
