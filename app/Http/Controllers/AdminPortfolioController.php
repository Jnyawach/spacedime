<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfolios=Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        //
        $input=$request->all();
        if($files=$request->file('path')) {
            foreach ($files as $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $data[]=$name;

            }
        }
        $input['path']=json_encode($data);

        $portfolio=Portfolio::create($input);
        Session::flash('portfolio_message', 'The Project has been successfully Created');

return redirect('admin/homepage/portfolio');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $portfolio=Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $find=Portfolio::findOrFail($id);
        $input= $request->all();
        if($files=$request->file('path')) {
            foreach ($files as $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $data[]=$name;

            }
        }

        if(!empty($data)){
            $input['path']=json_encode($data);
        }

        $find->update($input);

        Session::flash('portfolio_message', 'The Project has been successfully Updated');

       return redirect('admin/homepage/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $portfolio=Portfolio::findOrFail($id);
        $photos=json_decode( $portfolio->path);
        foreach ($photos as $photo){
            unlink(public_path().'/images/'. $photo);
        }

        $portfolio->delete();
        Session::flash('portfolio_message', 'The Project has been successfully Deleted');

        return redirect('admin/homepage/portfolio');

    }
}
