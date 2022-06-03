<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiciiRequest;
use App\Models\Serviciu;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ServiciiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.dashboard.servicii.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.servicii.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiciiRequest $request)
    {
        $serviciu = new Serviciu;
        $serviciu->title = $request->title;
        $serviciu->tagline = $request->tagline;
        $serviciu->nav_title = $request->nav_title;
        $serviciu->slug = Str::slug($request->nav_title);
        $serviciu->meta_description = $request->meta_description;
        $serviciu->video_id = $request->video_id;

        if($request->file('cover_image')){
            $image = $request->file('cover_image');
            $imageName = $image->getClientOriginalName();
            $imageNewName = explode('.', $imageName)[0];
            $fileExtension = time() . '.' . $imageNewName . '.' . $image->getClientOriginalExtension();

            $location       = storage_path('app/images/' . $fileExtension);
            Image::make($image)->resize(1200, 630)->save($location);

            $serviciu->cover_image = $fileExtension;

        };

        $serviciu->save();
        return redirect()->route('servicii.index')->with('success', 'Serviciu creat cu success');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviciu $serviciu)
    {
        return view('admin.dashboard.servicii.edit', compact('serviciu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiciiRequest $request, $serviciu)
    {
        $serviciu->title = $request->title;
        $serviciu->nav_title = $request->nav_title;
        $serviciu->slug = Str::slug($request->nav_title);
        $serviciu->tagline = $request->tagline;
        $serviciu->meta_description = $request->meta_description;
        $serviciu->video_id = $request->video_id;

        if($request->file('cover_image')){
            $oldFileName = $serviciu->cover_image;
            $image = $request->file('cover_image');
            $imageName = $image->getClientOriginalName();
            $imageNewName = explode('.', $imageName)[0];
            $fileExtension = time() . '.' . $imageNewName . '.' . $image->getClientOriginalExtension();

            $location       = storage_path('app/imagini_servicii/' . $fileExtension);
            Image::make($image)->resize(1200, 630)->save($location);

            $serviciu->cover_image = $fileExtension;
            File::delete(storage_path('app/imagini_servicii/'. $oldFileName));
        };

        $serviciu->save();
        return redirect()->route('servicii.index')->with('success', 'Serviciu modificat cu success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
