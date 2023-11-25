<?php

namespace App\Http\Controllers;

use App\Models\StudentAchivmentFile;
use App\Models\StudentAchivmentImage;
use Illuminate\Http\Request;

class AchivmentController extends Controller
{
    public $images;
    public $files;

    public function __construct()
    {
        $this->images = new StudentAchivmentImage();
        $this->files = new StudentAchivmentFile();
    }

    public function achivment()
    {
        $achivmentImages = $this->images->all();
        $achivmentFiles = $this->files->all();
        return view('admin/achivment', compact('achivmentImages', 'achivmentFiles'));
    }

    public function achivmentUpload($name, Request $req)
    {
        switch ($name) {
            case 'image':
                return $this->upload('image', 'image', $this->images, $req);
            case 'file':
                return $this->upload('file', 'file', $this->files, $req);
        }
    }

    public function upload($directory, $type, $model, $req)
    {
        copy($_FILES['file']['tmp_name'], '../public/docs/student-achivment/' . $directory . '/' . $_FILES['file']['name']);
        $model->name = $req->input('name');
        $model->$type = $_FILES['file']['name'];
        $model->save();
        return redirect()->route('admin-achivment');
    }

    public function achivmentEdit($name, $id)
    {
        switch ($name) {
            case 'image':
                $text = [
                    'new_file' => 'Новое изображение',
                    'old_file' => 'Старое изображение'
                ];
                return $this->edit($id, $this->images, $text, 'image', $name);
            case 'file':
                $text = [
                    'new_file' => 'Новый файл',
                    'old_file' => 'Старый файл'
                ];
                return $this->edit($id, $this->files, $text, 'file', $name);
        }
    }

    public function edit($id, $model, $text, $type, $name)
    {
        $data = $model->find($id);
        return view('admin/edit-achivment', compact('data', 'name', 'type', 'text'));
    }

    public function achivmentUpdate($name, $id, Request $req)
    {
        switch ($name) {
            case 'image':
                return $this->update('image', 'image', $id, $req, $this->images);
            case 'file':
                return $this->update('file', 'file', $id, $req, $this->files);
        }
    }

    public function update($directory, $type, $id, $req, $model)
    {
        $data = $model->find($id);
        $data->name = $req->input('name');

        if (!empty($_FILES['file']['name'])) {
            copy($_FILES['file']['tmp_name'], '../public/docs/student-achivment/' . $directory . '/' . $_FILES['file']['name']);
            $data->$type = $_FILES['file']['name'];
        }

        $data->save();

        return redirect()->route('admin-achivment');
    }

    public function achivmentDelete($name, $id)
    {
        switch ($name) {
            case 'image':
                return $this->delete('image', 'image', $id, $this->images);
            case 'file':
                return $this->delete('file', 'file', $id, $this->files);
        }
    }

    public function delete($directory, $type, $id, $model)
    {
        $data = $model->find($id);
        unlink('../public/docs/student-achivment/' . $directory . '/' . $data[$type]);
        $data->delete();
        return redirect()->route('admin-achivment');
    }
}
