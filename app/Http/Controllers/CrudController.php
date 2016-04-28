<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CrudController extends Controller
{

	public $model_instance;
     
    public function index()
    {
      $products = $this->getModel()->all();
      return view($this->path.'.index', ['data' => $products]);
    }

    public function create()
    {
        return view($this->path.'.create');
    }

    public function store(Request $request)
    {
        $this->getModel()->create($request->all());
        return redirect()->route($this->path.'.index'); 
    }

    public function show($id)
    {  
        $products = $this->getModel()->find($id);
        return view($this->path.'.show', ["data"=>$products]);
    }

    public function edit($id)
    {  
        $dados = $this->getModel()->find($id);
        return view($this->path.'.edit', ["data"=>$dados]);
    }

    public function update(Request $request, $id)
    {
        $product = $this->getModel()->find($id);
        $product->update($request->all());

        return redirect()->route($this->path.'.index'); 
    }

    public function destroy($id)
    { 
        $products = $this->getModel()->find($id);
        $products->delete();
        return redirect()->route($this->path.'.index');
    }

   protected function getModel(){
   		if($this->model_instance == null)
   			$this->model_instance = new $this->model;

   		return $this->model_instance;
   }
}
