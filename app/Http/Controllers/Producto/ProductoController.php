<?php

namespace App\Http\Controllers\Producto;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $producto = Producto::where('producto', 'LIKE', "%$keyword%")
                ->orWhere('generico', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $producto = Producto::latest()->paginate($perPage);
        }

        return view('producto.producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('producto.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'producto' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        Producto::create($requestData);

        return redirect('producto')->with('flash_message', 'Producto added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);

        return view('producto.producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('producto.producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'producto' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        $producto = Producto::findOrFail($id);
        $producto->update($requestData);

        return redirect('producto')->with('flash_message', 'Producto updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Producto::destroy($id);

        return redirect('producto')->with('flash_message', 'Producto deleted!');
    }
}
