<?php

namespace App\Http\Controllers;

use App\Models\Excursion;
use Illuminate\Http\Request;

class ExcursionController extends Controller
{
    public $excursion;

    public function __construct()
    {
        $this->excursion = new Excursion();
    }

    public function excursion()
    {
        $data = $this->excursion->all();
        $name = 'Уроки-экскурсии';
        $directory = 'excursion';
        $route = 'excursion-single';
        return view('news', compact('data', 'name', 'directory', 'route'));
    }

    public function excursionSingle($id)
    {
        $post = $this->excursion->find($id);
        $text = explode(PHP_EOL, $post['text']);
        $directory = 'excursion';
        $route = 'excursion';
        return view('post', compact('post', 'directory', 'text', 'route'));
    }

    public function adminExcursion()
    {
        $data = $this->excursion->all();
        $name = 'Уроки-экскурсии';
        $routes = [
            'route_uplade' => 'admin-excursion-upload',
            'route_edit' => 'admin-excursion-edit',
            'route_delete' => 'admin-excursion-delete'
        ];
        return view('admin/post', compact('data', 'name', 'routes'));
    }

    public function uploadExcursion(Request $req)
    {
        copy($_FILES['image']['tmp_name'], '../public/img/excursion/' . $_FILES['image']['name']);
        $this->excursion->name = $req->input('name');
        $this->excursion->text = $req->input('text');
        $this->excursion->image = $_FILES['image']['name'];
        $this->excursion->save();
        return redirect()->route('admin-excursion');
    }

    public function editExcursion($id)
    {
        $data = $this->excursion->find($id);
        $route = 'admin-excursion-update';
        return view('admin/edit-post', compact('data', 'route'));
    }

    public function updateExcursion(Request $req, $id)
    {
        $data = $this->excursion->find($id);
        $data->name = $req->input('name');
        $data->text = $req->input('text');

        if (!empty($_FILES['image']['name'])) {
            copy($_FILES['image']['tmp_name'], '../public/img/excursion/' . $_FILES['image']['name']);
            $data->image = $_FILES['image']['name'];
        }

        $data->save();

        return redirect()->route('admin-excursion');
    }

    public function deleteExcursion($id)
    {
        $data = $this->excursion->find($id);
        unlink('../public/img/excursion/' . $data['image']);
        $data->delete();
        return redirect()->route('admin-excursion');
    }
}
