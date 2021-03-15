<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeService;
use File;

class HomeServiceController extends Controller
{
    /**d
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = HomeService::get();
        return view('admin.home_service.index')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_service.create');
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
            'service_title' => 'bail|required|unique:home_service|max:255',
            'service_word' => 'required',
            'service_img' => 'required',
            'service_text' => 'required',
            'service_link' => 'required',
            'service_description' => 'required',
        ]);
        $fileName = null;

        if (request()->hasFile('service_img')) 
       {
           $file = request()->file('service_img');
           $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
           $file->move('./uploads/', $fileName);
       }
        HomeService::create([
            'service_title' => request()->get('service_title'),
            'service_word' => request()->get('service_word'),
            'service_img' => $fileName,
            'service_img_alt' => request()->get('service_img_alt'),
            'service_text' => request()->get('service_text'),
            'service_link' => request()->get('service_link'),
            'service_description' => request()->get('service_description'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'DEACTIVE'
        ]);
        return redirect()->to('/admin/home_service');
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
        $service = HomeService::find($id);
        return view('/admin.home_service.edit')->with(compact('service'));
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
            'service_title' => 'required',
            'service_word' => 'required',
            'service_text' => 'required',
            'service_link' => 'required',
            'service_description' => 'required',
        ]);
        $service = HomeService::find($id);
        $currentImage = $service->service_img;

        $fileName = null;
        if(request()->hasFile('service_img')){
            $file = request()->file('service_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/',$fileName);
        }

        $service->update([
            'service_title' => request()->get('service_title'),
            'service_word' => request()->get('service_word'),
            'service_img' => ($fileName) ? $fileName : $currentImage,
            'service_img_alt' => request()->get('service_img_alt'),
            'service_text' => request()->get('service_text'),
            'service_link' => request()->get('service_link'),
            'service_description' => request()->get('service_description'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'ACTIVE'
        ]);
        if($fileName)
        File::delete('./uploads/' . $currentImage);

        return redirect()->to('/admin/home_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = HomeService::find($id);
        $currentImage = $service->service_img;
        $service->delete();
        File::delete('./uploads/' . $currentImage);
        return redirect()->back();
    }
    public function status($id)
    {
        $service = HomeService::find($id);
        $newstatus = ($service->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $service->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }
}
