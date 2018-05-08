<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{

    public $path = "/usr/pagina/dev/crud/storage/uploads";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploads.index');
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


    public function upload(Request $request)
    {
        $planilha = $request->file('excel');
        $name = $planilha->getClientOriginalName();
        date_default_timezone_set("America/Sao_Paulo");
        $newname = date("Y-m-d-h-i-s.");
        $extension = $planilha->getClientOriginalExtension();
        $newname .= strtolower($extension);        
        try
        {
            $planilha->move($this->path,  $newname);
        }
        catch(\Exception $e)
        {
            return $e->getMessage();   
        }

        return $this->loadExcel("$this->path/$newname");

        //return "File has been uploaded successfuly.";
    }


    public function loadExcel($arquivo)
    {
        /*Excel::load($arquivo, function($reader) {

        })->get();*/
        return Excel::load($arquivo)->all()->toArray();
        
    }
}
