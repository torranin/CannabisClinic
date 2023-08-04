<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class MainController extends BaseController
{
    ////-------------View-------------////

    public function index() {
        helper(['form']);
        $data = [];
        echo view('template/header', $data);
        echo view('pages/create_user', $data);
        echo view('template/footer');
    }

    public function view($page = 'home') {

        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $data['title'] = ucfirst($page);
        echo view('template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('template/footer');
    }


    ////-------------View-------------////

    ////-------------Process-------------////

    ////-------------User
    public function save() {
        helper(['form']);
        $rules = [
            'fname' => 'required', 
            'lname' => 'required',
        ];
    }



    ////-------------Process-------------////
}
