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
    return view('jurusan');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('major.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'nama' => 'required',
    ]);

    $student = new Siswa();
    $student->nama = $request->nama;
    $student->save();
    return redirect()->route('student.index')
      ->with('success', 'Data berhasil dibuat!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function show(Major $id)
  {
    $major = Student::findOrFail($id);
    return view('major.show', compact('major'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function edit(Major $id)
  {
    $major = Student::findOrFail($id);
    return view('major.edit', compact('major'));
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
    $validated = $request->validate([
      'nama' => 'required',
    ]);

    $student = new Siswa();
    $student->nama = $request->nama;
    $student->save();
    return redirect()->route('student.index')
      ->with('success', 'Data berhasil diedit!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Major  $major
   * @return \Illuminate\Http\Response
   */
  public function destroy(Major $major)
  {
    $major = Major::findOrFail($major);
    $major->delete();
    return redirect()->route('major.index')
      ->with('success', 'Data berhasil dihapus!');
  }
}
