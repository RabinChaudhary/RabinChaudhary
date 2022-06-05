<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home.homepage')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('Posts.add_post')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'image' => ['image', 'nullable', 'max:1999'],
                'content' => ['required'],
            ]
        );
        if ($request->hasFile('image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename\
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload the picture 
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        
      
        $post = new Post();
        $post->title = $request->input('title');
        $post->content=$request->input('content');
        $post->slug=SlugService::createSlug(Post::class,'slug',$request->title);
        $post->image_path = $fileNameToStore;
        $admin = Session('admin');
        $post->user_id=$admin->id;

        if($post->save()){

        Session::flash('success', 'New Post is added Succesfully.');
        return redirect()->back()->with('posts',Post::orderBy('updated_at','DESC')->get());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function action()

    {
      
        return view('Posts.action_post')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $post=Post::where('id',$id)->first();

        return view('Posts.edit_action_post')
        ->with(['post'=>$post]);
     
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'title' => ['required','max:255'],
            'image_path' => ['image','nullable','max:1999'],
            'content'=>['required'],
        ]);
        if (request()->hasFile('image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename\
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload the picture 
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        
            
      $post=Post::find($id);
        $post->title = $request->input('title');
      
        $post->content = $request->input('content');
        $post->slug=SlugService::createSlug(Post::class,'slug',$request->title);
        $post->user_id=$request->input('user_id');

        if ($request->hasFile('image')) {
            $post->image_path = $fileNameToStore;
        }
        $post->save();
       
        Session()->flash('status', 'You have updated Successfully.');
        return back()->with(['post'=>$post]);
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::where('id',$id)->delete();
        
        Session::flash('success','Post is deleted successfully.');
        return redirect()->back();
    }
}
