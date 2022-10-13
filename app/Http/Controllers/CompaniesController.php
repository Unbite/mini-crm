<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')){
        $class = Companies::where('name','LIKE', '%' .$request->search. '%')-> paginate(10);
        }else{
        $class = Companies::paginate(10);    
        }
        return view('companies.companies', ['companies'=>$class]);
    }

    public function add(){
        return view('companies.add');
    }

    public function save(Request $request){
        Companies::create($request->all());
        return redirect('/companies');
    }

    public function getdata($id){
        $data = Companies::find($id);
        return view('companies.editform', compact('data'));
        //dd($data);
    }
    public function edit(Request $request, $id){
        $data = Companies::find($id);
        $data->update($request->all());
        return redirect('/companies')->with('success','Data Berhasil Diupdate');
    }

    public function delete($id){
        $data = Companies::find($id);
        $data->delete();
        return redirect('/companies')->with('success','Data Berhasil Dihapus');
    }
}
