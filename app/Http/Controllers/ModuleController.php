<?php namespace App\Http\Controllers;

use App\Modules_Mod;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller {

	public function index() {
    $modules_mod = new Modules_Mod();
    $data['page_title'] = 'Dashboard';
    $data['tasks'] = [
        [
            'name' => 'Design New Dashboard',
            'progress' => '87',
            'color' => 'danger'
        ],
        [
            'name' => 'Create Home Page',
            'progress' => '76',
            'color' => 'warning'
        ],
        [
            'name' => 'Some Other Task',
            'progress' => '32',
            'color' => 'success'
        ],
        [
            'name' => 'Start Building Website',
            'progress' => '56',
            'color' => 'info'
        ],
        [
            'name' => 'Develop an Awesome Algorithm',
            'progress' => '10',
            'color' => 'success'
        ]
    ];
    $data['uinfo'] = $modules_mod->setuser_func();
    $data['isactive'] = ['dashboard'];
    return view('dashboard')->with($data);
  }

  public function about(){
        $data['isactive'] = ['about'];
        return view('pages.about')->with($data);
    }

}
