<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function view($page = 'home') {

        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $data['title'] = ucfirst($page);
        echo view('template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('template/footer');
    }


}
