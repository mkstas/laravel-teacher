<?php

namespace App\Http\Controllers;

use App\Models\Videolesson;
use Illuminate\Http\Request;

class VideolessonController extends Controller
{
    public $videolesson;

    public function __construct()
    {
        $this->videolesson = new Videolesson();
    }

    public function videolesson()
    {
        $videolessons = $this->videolesson->all();
        return view('admin/videolessons', compact('videolessons'));
    }

    public function uploadVideolesson(Request $req)
    {
        $this->videolesson->name = $req->input('name');
        $this->videolesson->link = $req->input('url');
        $this->videolesson->save();
        return redirect()->route('videolessons');
    }

    public function editVideolesson($id)
    {
        $data = $this->videolesson->find($id);
        return view('admin/edit-videolesson', compact('data'));
    }

    public function updateVideolesson(Request $req, $id)
    {
        $data = $this->videolesson->find($id);
        $data->name = $req->input('name');
        $data->link = $req->input('url');
        $data->save();
        return redirect()->route('videolessons');
    }

    public function deleteVideolesson($id)
    {
        $data = $this->videolesson->find($id);
        $data->delete();
        return redirect()->route('videolessons');
    }
}
