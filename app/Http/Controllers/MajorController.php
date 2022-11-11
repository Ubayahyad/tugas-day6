<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $majors = Major::get();

    return view('major', ['majors' => $majors, 'byId' => '']);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    // dd($request);
    $request->validate([
      'major_name' => ['required', 'string', 'max:50'],
    ]);

    Major::create([
      'major_name' => $request->input('major_name'),

    ]);

    return redirect()
      ->back()
      ->with('success', 'Data major berhasil disimpan');
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
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function show(Major $major)
  {
    $majors = Major::get();

    return view('major', [
      'majors' => $majors,
      'byId' => $major
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Major $id)
  {
    // dd($request, $id->id);
    $request->validate([
      'major_name' => ['required', 'string', 'max:50'],
    ]);

    // Major::create([
    //   'major_name' => $request->input('major_name'),

    // ]);
    Major::where('id', $id->id)
      ->update(['major_name' => $request->input('major_name')]);

    return redirect()
      ->back()
      ->with('success', 'Data major berhasil diupdate');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function destroy(Major $major)
  {
    $major = Major::find($major->id);

    $major->delete();
    return redirect()
      ->back()
      ->with('success', 'Data major berhasil dihapus');
  }
}
