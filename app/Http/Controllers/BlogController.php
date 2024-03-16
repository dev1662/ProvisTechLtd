<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\BlogTag;
use App\Models\Tag;
use Exception;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blogs = Blogs::all();
        // return $blogs;
        // $blogs =json_decode(Http::get('https://api.oas36ty.com/v1/all-blogs'));
        $blogs = Blogs::orderBy('created_at', 'asc')->get();

        // return $blogs;
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    protected function my_random_string($char)
    {
        return uniqid('Oas36ty');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert the tag names in an array
        $tag_arr = [];
        if (($request->tag_name && count($request->tag_name) > 0) || ($request->tag_url && count($request->tag_url) > 0)) {
            // $tag_arr = [];

            foreach ($request->tag_name as $key => $value) {
                // Check if tag_url is set for the current index
                $url = isset($request->tag_url[$key]) ? $request->tag_url[$key] : null;

                // Push a new element to the array
                $tag_arr[] = ['name' => $value, 'url' => $url];
            }
        }
        // return $tag_arr;
        $fileName = 'image';
        // $path = Input::file('image');
        $path = 'oas_landing/';

        // return [$request, $fileName, $path];
        if ($request->hasFile($fileName)):
            $file = $request->file($fileName);
            $fullName = $file->getClientOriginalName();
            $stringName = $this->my_random_string(explode('.', $fullName)[0]);
            $fileName = $stringName . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $path . $fileName;
            $urls = Storage::disk('spaces')->put($filepath, file_get_contents($file), 'public');
            // $destinationPath = public_path($path);
            //$check = $file->move($destinationPath, $fileName);
            $url = Storage::disk('spaces')->url($filepath);
            // $return = $destinationPath ? $fileName : false;
        endif;
        //   dd($url);
        $tag_id = null;


        $blog = new Blogs();
        $blog->title = $request->title;
        $blog->description = $request->desc;
        $blog->meta_keyword = $request->meta_keyword ?? '';
        $blog->image = $url;
        $blog->slug = $request->slug;
        $blog->meta_desc = $request->meta_desc ?? '';
        $blog->tag_id = $tag_id;
        if ($blog->save()) {
            // insert the tag names in the table of tags and blog ids

            if (count($tag_arr) > 0) {
                foreach ($tag_arr as $key => $value) {


                    $tag = new Tag();
                    $tag->name = $value['name'] ?? '';
                    $tag->url = $value['url'] ?? '';
                    $tag->blog_id = $blog->id;
                    // $tag->save();
                    if ($tag->save()) {
                        $blog_tag = new BlogTag();
                        $blog_tag->tag_id = $tag->id;
                        $blog_tag->blog_id = $blog->id;
                        $blog_tag->save();
                    }
                }
                // $tag_id= $tag->id;
            }
            return redirect()->route('blogs');
        } else {
            return back();
        }
        // $file = $request->file('image');
        // Input::file('image')->getN
        // // dd(['file' => $file,'name' => $file->getClientOriginalName() ?? '','path' => $file->getclient() ?? '']);
        // $slug = time(); //name prefix
        // // $avatar = $this->getFileName($file, trim($file->getClientOriginalName()));
        // // return $avatar['name'];
        // $exte = $file->getClientOriginalExtension();
        // $ral = explode('.'.$exte,$file->getClientOriginalName())[0].$slug;
        // $ral = $ral.'.'.$exte;
        // // dd($ral);
        // // return $avatar;
        // Storage::disk('spaces')->put('oas_landing/' . $file->getClientOriginalName(),  $file, 'public');

        // $url = Storage::disk('spaces')->url('oas_landing/' . $file->getClientOriginalName().'/'.$file->getClientOriginalName());
        // // return $url;
        // $attach[] = ['url' => $url ?? '', 'fileName' => $file->getClientOriginalName() ?? ''];
        // dd($attach);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        try {
            //code...

            $tag_arr = [];
            // checking if the tag name exist with the particular blog id and delete it...
            $check_previous_tag = BlogTag::where('blog_id', $id)->get();
            $tags = Tag::where('blog_id', $id)->get();

            if (count($check_previous_tag) > 0) {
                BlogTag::where('blog_id', $id)->delete();
            }
            if (count($tags) > 0) {
                Tag::where('blog_id', $id)->delete();
            }
            // insert the tag names in an array
            if (($request->tag_name && count($request->tag_name) > 0) || ($request->tag_url && count($request->tag_url) > 0)) {


                foreach ($request->tag_name as $key => $value) {
                    // foreach ($request->tag_url as $key2 => $value2) {
                    $tag_arr[$key] = ['name' => $value, 'url' => $request->tag_url[$key]];
                    // }
                }
            }
            // return $tag_arr;
            // return $tag_arr;
            // return $request->all();


            $fileName = 'image';
            // return [$request->all(),$request->file($fileName)];
            // $path = Input::file('image');
            $path = 'oas_landing/';
            $url = null;
            // return [$request, $fileName, $path];
            if ($request->hasFile($fileName)):
                $file = $request->file($fileName);
                $fullName = $file->getClientOriginalName();
                $stringName = $this->my_random_string(explode('.', $fullName)[0]);
                $fileName = $stringName . time() . '.' . $file->getClientOriginalExtension();
                $filepath = $path . $fileName;
                $urls = Storage::disk('spaces')->put($filepath, file_get_contents($file), 'public');
                // $destinationPath = public_path($path);
                //$check = $file->move($destinationPath, $fileName);
                $url = Storage::disk('spaces')->url($filepath);
                // $return = $destinationPath ? $fileName : false;
            endif;
            // insert the tag names in the table of tags and blog ids

            if (count($tag_arr) > 0) {
                foreach ($tag_arr as $key => $value) {


                    $tag = new Tag();
                    $tag->name = $value['name'] ?? '';
                    $tag->url = $value['url'] ?? '';
                    $tag->blog_id = $id;
                    // $tag->save();
                    if ($tag->save()) {
                        $blog_tag = new BlogTag();
                        $blog_tag->tag_id = $tag->id;
                        $blog_tag->blog_id = $id;
                        $blog_tag->save();
                    }
                }
                // $tag_id= $tag->id;
            }
            // return $url;
            //   dd($url);
            $blog = Blogs::find($id);
            $blog->title = $request->title;
            $blog->description = $request->desc;
            $blog->slug = $request->slug;

            $blog->meta_desc = $request->meta_desc ?? '';
            $blog->meta_keyword = $request->meta_keyword ?? '';

            //  $blog->tag_id= $tag_id;

            if ($url) {

                $blog->image = $url;
            }
            if ($blog->update()) {


                return redirect()->route('blogs');
            } else {
                return redirect()->back();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function disable_blogs($id)
    {
        $check_active = Blogs::where(['id' => $id, 'status' => 'active'])->get();
        if (count($check_active) > 0) {


            Blogs::find($id)->update([

                'status' => 'inactive'
            ]);
        } else {
            Blogs::find($id)->update([

                'status' => 'active'
            ]);
        }
        return redirect()->route('blogs');
    }
    public function delete_blogs($id)
    {
        Blogs::where('id', $id)->delete();
        return redirect()->route('blogs');
    }

    public function fetchBlogsBySlug($slug)
    {
        // return $slug;
        $title = str_replace('-', ' ', $slug);

        $blogDetails = Blogs::where('slug', $slug)->orWhere('title', 'LIKE', '%' . $title . '%')->first();

        // return $blogDetails;
        // $specifiedDate = Carbon\Carbon::parse('2024-02-05');


        // // $cleanSearchQuery = preg_replace('/[^a-zA-Z0-9\s]/', '', $slug);
        // // $prevBlogs = Blogs::where('title', 'LIKE', '%' . $title . '%')
        // //     ->where('created_at', '<', $specifiedDate->startOfDay())->first();



        // $prevBlogs = Blogs::where('created_at', '<', $specifiedDate->startOfDay())->first();
        // $futureBlogs = Blogs::where('created_at', '>', $specifiedDate->startOfDay())->first();


        // // Use a raw SQL query to handle special characters
        // $abc = null;
        // // return $futureBlogs;
        // if ($futureBlogs) {
        //     $abc = Blogs::where('slug', $slug)->first();

        // } else {
        //     $abc = Blogs::where('title', 'LIKE', '%' . $title . '%')->first();
        // }
        // if ($prevBlogs) {
        //     $abc = Blogs::where('title', 'LIKE', '%' . $title . '%')->first();
        // } else {
        //     dd($slug);
        //     // $abc = $futureBlogs;
        //     $abc = Blogs::where('slug', $slug)->first();

        // }

        // return;
        if (!$blogDetails) {
            abort(404);
        }
        // $title = str_replace('-', ' ', $slug);
        // $title = preg_replace('/[^a-zA-Z0-9\s]/', '', $title);
        //   // Retrieve all blog posts and then filter based on the title
        //   $allBlogs = Blogs::all();

        //   $matchingBlogs = $allBlogs->filter(function ($blog) use ($title) {
        //       return Str::contains(strtolower($blog->title), strtolower($title));
        //   });
        //   $abc = $matchingBlogs->first();
        $Id = $blogDetails->id;
        // return $Id;
        // $url = 'https://api.oas36ty.com/v1/blogs/'.$Id;
        // return $url;
        // $blog = json_decode(Http::get($url));
        $blog = Blogs::with(['blog_tags'])->where('id', $Id)->first();
        // $blog = Blogs::where('id',$id)->first();
        $blogs = Blogs::with(['blog_tags'])->orderBy('created_at', 'desc')->get(); //json_decode(Http::get('https://api.oas36ty.com/v1/blogs'));
        // return [$blog,$blogs,$url];
        // return $blog->blog_tags;
        $tags = Tag::all();
        $real = [];
        foreach ($blog->blog_tags as $key => $value) {
            foreach ($tags as $key2 => $value2) {
                if ($value['tag_id'] === $value2['id']) {

                    $real[$key] = ['name' => $value2['name'] ?? '', 'url' => $value2['url'] ?? ''];
                }
            }
        }
        // return $real;
        // exit;
        return view('show-blog', compact('real', 'blog', 'blogs'));
    }
}
