<?php

namespace App\Http\Controllers;

use App\Models\Coterie;
use Illuminate\Http\Request;

class CoterieController extends Controller
{
    public $coterie;

    public function __construct()
    {
        $this->coterie = new Coterie();
    }

    public function coterie()
    {
        $data = $this->coterie->all();
        $name = 'Историко-литературная гостиная';
        $directory = 'coterie';
        $route = 'coterie-single';
        return view('news', compact('data', 'name', 'directory', 'route'));
    }

    public function coterieSingle($id)
    {
        $post = $this->coterie->find($id);
        $text = explode(PHP_EOL, $post['text']);
        $directory = 'coterie';
        $route = 'coterie';
        return view('post', compact('post', 'directory', 'text', 'route'));
    }

    public function adminCoterie()
    {
        $data = $this->coterie->all();
        $name = 'Историко-литературная гостиная';
        $routes = [
            'route_uplade' => 'admin-coterie-upload',
            'route_edit' => 'admin-coterie-edit',
            'route_delete' => 'admin-coterie-delete'
        ];
        return view('admin/post', compact('data', 'name', 'routes'));
    }

    public function uploadCoterie(Request $req)
    {
        copy($_FILES['image']['tmp_name'], '../public/img/coterie/' . $_FILES['image']['name']);
        $this->coterie->name = $req->input('name');
        $this->coterie->text = $req->input('text');
        $this->coterie->image = $_FILES['image']['name'];
        $this->coterie->save();
        return redirect()->route('admin-coterie');
    }

    public function editCoterie($id)
    {
        $data = $this->coterie->find($id);
        $route = 'admin-coterie-update';
        return view('admin/edit-post', compact('data', 'route'));
    }

    public function updateCoterie(Request $req, $id)
    {
        $data = $this->coterie->find($id);
        $data->name = $req->input('name');
        $data->text = $req->input('text');

        if (!empty($_FILES['image']['name'])) {
            copy($_FILES['image']['tmp_name'], '../public/img/coterie/' . $_FILES['image']['name']);
            $data->image = $_FILES['image']['name'];
        }

        $data->save();

        return redirect()->route('admin-coterie');
    }

    public function deleteCoterie($id)
    {
        $data = $this->coterie->find($id);
        unlink('../public/img/coterie/' . $data['image']);
        $data->delete();
        return redirect()->route('admin-coterie');
    }
}
