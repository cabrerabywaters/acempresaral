<?php

namespace acempresarial\Http\Controllers;

use Illuminate\Http\Request;

use acempresarial\Http\Requests;

class CTEsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cte.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

  	/**
  	 * PDF upload for the CTE
  	 * @param  Request $request PDF
  	 * @param  [type]  $user_id User's ID
  	 * @return json           success/fail
  	 */
    public function upload(Request $request, $user_id)
    {
       $file = $request->file('file');

       $name = time() . $file->getClientOriginalName();

       $path = "uploads/ctes/$user_id";

       $file->move($path,$name);

       $ret = exec("pdf2json $path.$name", $out, $err);

	var_dump($ret);
	var_dump($out);
	var_dump($err);

       return 'Done';
    }
}
