<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->file('image')) {
            $path = $request->image->store('editor-uploads');

            return response()->json([
                'url' => '/'. $path
            ], 200);
        }

        return;
    }

    public function remove(Request $request)
    {
        if ($request->has('image')) {
            $image = $request->image;
            $exists = Storage::disk('public')->exists($image);
            if ($exists) {
                Storage::delete($image);

                return response()->json('Deleted', 200);
            }
        }
    }
}
