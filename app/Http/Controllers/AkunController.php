<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Admin;
use App\Alumni;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
      $alumni = Alumni::find($request->id);
      $alumni->status_akun = '1';
      $alumni->update();

      $data = [
        'nama' => $alumni->nama,
        'email' => $request->email_,
        'password' => $request->password,
        'role' => $request->role,
        'alumni_id' => $request->id
      ];
      $admin = Admin::create($data);
      if ($admin) {
        return back();
      } else {
        echo "Something went wrong, contact your administrator!";
      }
    }

    public function deactivate($id)
    {
        $alumni = Alumni::find($id);
        $alumni->status_akun = '0';
        $alumni->update();
        Admin::where('alumni_id',$id)->delete();
    }

    public function reset($id)
    {
        $akun = Admin::find($id);
        $akun->password = 12345;
        $akun->update();
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

}
