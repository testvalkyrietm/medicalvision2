<?php

namespace App\Http\Controllers;

use App\Congress;
use App\Media;
use App\Http\Requests\AddMedia;
use App\Http\Requests\EditMedia;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function addMedia(Congress $congress = null)
    {
        $request = [
            'congresses'        =>  Congress::all(),
            'congress_selected' =>  $congress != null ? $congress->id : ''
        ];
        return view('addPages.media', $request);
    }

    public function saveAddMedia(AddMedia $media)
    {
        try {
            $new_media = Media::create($media->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect('admin');
    }

    public function editMedia(Media $media)
    {
        $request = [
            'media'         =>  $media,
            'congresses'    =>  Congress::all()
        ];
        return view('editPages.media', $request);
    }

    public function saveEditMedia(EditMedia $media)
    {
        try {
            $old_media = Media::find($media->id);
            $old_media->update($media->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect()->back()->with('message', 'Edit Successful!');
    }

    public function deleteMedia(Media $media)
    {
        $media->delete();
        return redirect()->back();
    }
}
