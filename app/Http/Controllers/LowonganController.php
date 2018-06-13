<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Excel;
use App\Alumni;
use App\Lowongan;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/lowongan');
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
        return Lowongan::find($id);
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

    public function apilowongan()
    {
        $lowongan = DB::table('lowongans')
                  ->leftjoin('alumnis','lowongans.alumni_id','=','alumnis.id')
                  ->select('lowongans.*','alumnis.nama')
                  ->get();
        return DataTables::of($lowongan)
          ->addColumn('isi',function($lowongan){
            return strip_tags(substr($lowongan->isi,0,50)).' ...';
          })
          ->addColumn('aksi',function($lowongan){
            return '
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#" onclick="editData('.$lowongan->id.')">Edit</a></li>
                <li><a href="#" onclick="deleteData('.$lowongan->id.')">Delete</a></li>
              </ul>
            </div>
            ';
          })->escapeColumns([])->make(true);
    }
}
