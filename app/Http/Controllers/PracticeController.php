<?php

namespace App\Http\Controllers;

use App\Models\PracticticalWork;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public $practice;

    public function __construct()
    {
        $this->practice = new PracticticalWork();
    }

    public function practice()
    {
        $practices = $this->practice->all();
        return view('admin/practice', compact('practices'));
    }

    public function uploadPractice(Request $req)
    {
        copy($_FILES['file']['tmp_name'], '../public/docs/practice/' . $_FILES['file']['name']);
        $this->practice->name = $req->input('name');
        $this->practice->file = $_FILES['file']['name'];
        $this->practice->save();
        return redirect()->route('admin-practice');
    }

    public function editPractice($id)
    {
        $data = $this->practice->find($id);
        return view('admin/edit-practice', compact('data'));
    }

    public function updatePractice(Request $req, $id)
    {
        $data = $this->practice->find($id);
        $data->name = $req->input('name');

        if (!empty($_FILES['file']['name'])) {
            copy($_FILES['file']['tmp_name'], '../public/docs/practice/' . $_FILES['file']['name']);
            $data->file = $_FILES['file']['name'];
        }

        $data->save();

        return redirect()->route('admin-practice');
    }

    public function deletePractice($id)
    {
        $data = $this->practice->find($id);
        unlink('../public/docs/practice/' . $data['file']);
        $data->delete();
        return redirect()->route('admin-practice');
    }
}
