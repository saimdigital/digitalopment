<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortInfo;

class PortinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portinfos = PortInfo::get();
        return view('admin.portfolioinfo.index')->with(compact('portinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolioinfo.create');
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
            'title' => 'bail|required|unique:portinfo|max:255',
            'sub_title' => 'required',
        ]);

        PortInfo::create([
            'title' => request()->get('title'),
            'sub_title' => request()->get('sub_title'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'DEACTIVE'
        ]);
        return redirect()->to('/admin/portfolioinfo');
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
        $portinfo = PortInfo::find($id);
        return view('admin.portfolioinfo.edit')->with(compact('portinfo'));
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
        $portinfo = PortInfo::find($id);

        $portinfo->update([
            'title' => request()->get('title'),
            'sub_title' => request()->get('sub_title'),
            'meta_title' => request()->get('meta_title'),
            'meta_description' => request()->get('meta_description'),
            'meta_tags' => request()->get('meta_tags'),
            'meta_keywords' => request()->get('meta_keywords'),
            'status' => 'ACTIVE'
        ]);

        return redirect()->to('/admin/portfolioinfo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portinfo = PortInfo::find($id);
        $portinfo->delete();
        return redirect()->back();
    }
    public function status($id)
    {
        $portinfo = PortInfo::find($id);
        $newstatus = ($portinfo->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $portinfo->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }
}
