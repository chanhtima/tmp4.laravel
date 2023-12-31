<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontend::index');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function about()
    {
        return view('frontend::about');
    }
     /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function products()
    {
        return view('frontend::products');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function newsevent()
    {
        return view('frontend::newsevent');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function contactus()
    {
        return view('frontend::contactus');
    }
      /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function blogDetails()
    {
        return view('frontend::blogDetails');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function productDetails()
    {
        return view('frontend::productDetails');
    }
       /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function productGroups()
    {
        return view('frontend::productGroups');
    }
   

    /* */
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('frontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
