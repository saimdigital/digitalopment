<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serviceinfo;

class ServiceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesinfo = Serviceinfo::get();
        return view('admin.serviceinfo.index')->with(compact('servicesinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.serviceinfo.create');
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
            'title' => 'bail|required|unique:serviceinfo|max:255',
            'sub_title' => 'required',
        ]);

        Serviceinfo::create([
            'title' => request()->get('title'),
            'sub_title' => request()->get('sub_title'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'DEACTIVE'
        ]);
        return redirect()->to('/admin/serviceinfo');
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
        $serviceinfo = Serviceinfo::find($id);
        return view('admin.serviceinfo.edit')->with(compact('serviceinfo'));
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
            'sub_title' => 'required',
        ]);
        $serviceinfo = Serviceinfo::find($id);

        $serviceinfo->update([
            'title' => request()->get('title'),
            'sub_title' => request()->get('sub_title'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'ACTIVE'
        ]);

        return redirect()->to('/admin/serviceinfo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceinfo = Serviceinfo::find($id);
        $serviceinfo->delete();
        return redirect()->back();
    }
    public function status($id)
    {
        $serviceinfo = Serviceinfo::find($id);
        $newstatus = ($serviceinfo->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $serviceinfo->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }
}
