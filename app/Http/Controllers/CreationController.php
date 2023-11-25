<?php

namespace App\Http\Controllers;

use App\Models\StudentCreationImage;
use App\Models\StudentCreationVideo;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public $images;
    public $videos;

    public function __construct()
    {
        $this->images = new StudentCreationImage();
        $this->videos = new StudentCreationVideo();
    }

    public function creation()
    {
        $creationImages = $this->images->all();
        $creationVideos = $this->videos->all();
        return view('admin/creation', compact('creationImages', 'creationVideos'));
    }

    public function creationUpload($name, Request $req)
    {
        switch ($name) {
            case 'image':
                return $this->upload('image', 'image', $this->images, $req);
            case 'video':
                return $this->upload('video', 'video', $this->videos, $req);
        }
    }

    public function upload($directory, $type, $model, $req)
    {
        copy($_FILES['file']['tmp_name'], '../public/docs/student-creation/' . $directory . '/' . $_FILES['file']['name']);
        $model->name = $req->input('name');
        $model->$type = $_FILES['file']['name'];
        $model->save();
        return redirect()->route('admin-creation');
    }

    public function creationEdit($name, $id)
    {
        switch ($name) {
            case 'image':
                $text = [
                    'new_file' => 'Новое изображение',
                    'old_file' => 'Старое изображение'
                ];
                return $this->edit($id, $this->images, $text, 'image', $name);
            case 'video':
                $text = [
                    'new_file' => 'Новое видео',
                    'old_file' => 'Старое видео'
                ];
                return $this->edit($id, $this->videos, $text, 'video', $name);
        }
    }

    public function edit($id, $model, $text, $type, $name)
    {
        $data = $model->find($id);
        return view('admin/edit-creation', compact('data', 'name', 'type', 'text'));
    }

    public function creationUpdate($name, $id, Request $req)
    {
        switch ($name) {
            case 'image':
                return $this->update('image', 'image', $id, $req, $this->images);
            case 'video':
                return $this->update('video', 'video', $id, $req, $this->videos);
        }
    }

    public function update($directory, $type, $id, $req, $model)
    {
        $data = $model->find($id);
        $data->name = $req->input('name');

        if (!empty($_FILES['file']['name'])) {
            copy($_FILES['file']['tmp_name'], '../public/docs/student-creation/' . $directory . '/' . $_FILES['file']['name']);
            $data->$type = $_FILES['file']['name'];
        }

        $data->save();

        return redirect()->route('admin-creation');
    }

    public function creationDelete($name, $id)
    {
        switch ($name) {
            case 'image':
                return $this->delete('image', 'image', $id, $this->images);
            case 'video':
                return $this->delete('video', 'video', $id, $this->videos);
        }
    }

    public function delete($directory, $type, $id, $model)
    {
        $data = $model->find($id);
        unlink('../public/docs/student-creation/' . $directory . '/' . $data[$type]);
        $data->delete();
        return redirect()->route('admin-creation');
    }
}
