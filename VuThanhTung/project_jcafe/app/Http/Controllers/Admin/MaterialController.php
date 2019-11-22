<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
    //
    public function getMaterial(){
    	$data['matelist'] = Material::all();
    	return view('backend.material',$data);
    }
    public function getEditMaterial(){
    	return view('backend.editmaterial');
    }
}