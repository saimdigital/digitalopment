<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeVideo;
use File;

class HomeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = HomeVideo::get();
        return view('admin.home_video.index')->with(compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'bail|required|unique:home_video|max:255',
            'short_title' => 'required',
            'background_img' => 'required',
            'popup_video' => 'required',
        ]);
        $fileName = null;

        if (request()->hasFile('background_img')) 
       {
           $file = request()->file('background_img');
           $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
           $file->move('./uploads/', $fileName);
       }
       HomeVideo::create([
            'title' => request()->get('title'),
            'short_title' => request()->get('short_title'),
            'background_img' => $fileName,
            'background_img_alt' => request()->get('background_img_alt'),
            'popup_video' => request()->get('popup_video'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'DEACTIVE'
        ]);
        return redirect()->to('/admin/home_video');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = HomeVideo::find($id);
        return view('admin.home_video.edit')->with(compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'popup_video' => 'required',
        ]);
        $video = Video::find($id);
        $currentImage = $video->background_img;

        $fileName = null;
        if(request()->hasFile('background_img')){
            $file = request()->file('background_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/',$fileName);
        }

        $video->update([
            'title' => request()->get('title'),
            'short_title' => request()->get('short_title'),
            'background_img' => ($fileName) ? $fileName : $currentImage,
            'background_img_alt' => request()->get('background_img_alt'),
            'popup_video' => request()->get('popup_video'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'ACTIVE'
        ]);
        if($fileName)
        File::delete('./uploads/' . $currentImage);

        return redirect()->to('/admin/home_video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = HomeVideo::find($id);
        $currentImage = $video->background_img;
        $video->delete();
        File::delete('./uploads/' . $currentImage);
        return redirect()->back();
    }
    public function status($id)
    {
        $video = HomeVideo::find($id);
        $newstatus = ($video->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $video->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }
}
