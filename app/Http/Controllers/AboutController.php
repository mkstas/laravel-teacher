<?php

namespace App\Http\Controllers;

use App\Models\TeacherAchivment;
use App\Models\TeacherMethodicalWork;
use App\Models\TeacherQualification;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $achivments;
    public $qualification;
    public $methodical;

    public function __construct()
    {
        $this->achivments = new TeacherAchivment();
        $this->qualification = new TeacherQualification();
        $this->methodical = new TeacherMethodicalWork();
    }

    public function about()
    {
        $teacherAchivments = $this->achivments->all();
        $teacherQualification = $this->qualification->all();
        $teacherMethodical = $this->methodical->all();
        return view('admin/about', compact('teacherAchivments', 'teacherQualification', 'teacherMethodical'));
    }

    public function uploadFile($name, Request $req)
    {
        switch ($name) {
            case 'teacher_achivment':
                return $this->upload('achivments', $this->achivments, $req);
            case 'teacher_qualification':
                return $this->upload('qualification', $this->qualification, $req);
            case 'teacher_methodical':
                return $this->upload('methodical', $this->methodical, $req);
        }
    }

    public function upload($directory, $model, $req)
    {
        copy($_FILES['file']['tmp_name'], '../public/docs/about/' . $directory . '/' . $_FILES['file']['name']);
        $model->name = $req->input('name');
        $model->file = $_FILES['file']['name'];
        $model->save();
        return redirect()->route('about');
    }

    public function editFile($name, $id)
    {
        switch ($name) {
            case 'teacher_achivment':
                $data = $this->achivments->find($id);
                return view('admin/edit-file', compact('data', 'name'));
            case 'teacher_qualification':
                $data = $this->qualification->find($id);
                return view('admin/edit-file', compact('data', 'name'));
            case 'teacher_methodical':
                $data = $this->methodical->find($id);
                return view('admin/edit-file', compact('data', 'name'));
        }
    }

    public function updateFile($name, $id, Request $req)
    {
        switch ($name) {
            case 'teacher_achivment':
                return $this->update('achivments', $id, $this->achivments, $req);
            case 'teacher_qualification':
                return $this->update('qualification', $id, $this->qualification, $req);
            case 'teacher_methodical':
                return $this->update('methodical', $id, $this->methodical, $req);
        }
    }

    public function update($directory, $id, $model, $req)
    {
        $data = $model->find($id);
        $data->name = $req->input('name');

        if (!empty($_FILES['file']['name'])) {
            copy($_FILES['file']['tmp_name'], '../public/docs/about/' . $directory . '/' . $_FILES['file']['name']);
            $data->file = $_FILES['file']['name'];
        }

        $data->save();

        return redirect()->route('about');
    }

    public function deleteFile($name, $id)
    {
        switch ($name) {
            case 'teacher_achivment':
                return $this->delete('achivments', $this->achivments, $id);
            case 'teacher_qualification':
                return $this->delete('qualification', $this->qualification, $id);
            case 'teacher_methodical':
                return $this->delete('methodical', $this->methodical, $id);
        }
    }

    public function delete($directory, $model, $id)
    {
        $data = $model->find($id);
        unlink('../public/docs/about/' . $directory . '/' . $data['file']);
        $data->delete();
        return redirect()->route('about');
    }
}
