<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use File;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = HomeSlider::get();
        return view('admin.home_slider.index')->with(compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_slider.create');
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
            'title' => 'bail|required|unique:home_slider|max:255',
            'short_title' => 'required',
            'description' => 'required',
            'background_color' => 'required',
            'slider_img' => 'required',
            'button' => 'required',
            'button_link' => 'required',
        ]);
        $fileName = null;

        if (request()->hasFile('slider_img')) 
       {
           $file = request()->file('slider_img');
           $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
           $file->move('./uploads/', $fileName);
       }
       HomeSlider::create([
            'title' => request()->get('title'),
            'short_title' => request()->get('short_title'),
            'description' => request()->get('description'),
            'background_color' => request()->get('background_color'),
            'slider_img' => $fileName,
            'slider_alt' => request()->get('slider_alt'),
            'button' => request()->get('button'),
            'button_link' => request()->get('button_link'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'DEACTIVE'
        ]);
        return redirect()->to('/admin/home_slider');
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
        $slider = HomeSlider::find($id);
        return view('/admin.home_slider.edit')->with(compact('slider'));
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
            'description' => 'required',
            'background_color' => 'required',
            'button' => 'required',
            'button_link' => 'required',
        ]);
        $slider = HomeSlider::find($id);
        $currentImage = $slider->slider_img;

        $fileName = null;
        if(request()->hasFile('slider_img')){
            $file = request()->file('slider_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/',$fileName);
        }

        $slider->update([
            'title' => request()->get('title'),
            'short_title' => request()->get('short_title'),
            'description' => request()->get('description'),
            'background_color' => request()->get('background_color'),
            'slider_img' => ($fileName) ? $fileName : $currentImage,
            'slider_alt' => request()->get('slider_alt'),
            'button' => request()->get('button'),
            'button_link' => request()->get('button_link'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'ACTIVE'
        ]);
        if($fileName)
        File::delete('./uploads/' . $currentImage);

        return redirect()->to('/admin/home_slider');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = HomeSlider::find($id);
        $currentImage = $slider->slider_img;
        $slider->delete();
        File::delete('./uploads/' . $currentImage);
        return redirect()->back();
    }
    public function status($id)
    {
        $slider = HomeSlider::find($id);
        $newstatus = ($slider->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $slider->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }
}
