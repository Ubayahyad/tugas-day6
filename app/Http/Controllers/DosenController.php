<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $dosens = Dosen::get();
    return view('dosen', ['dosens' => $dosens, 'byId' => '']);
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
      'dosen_name' => ['required', 'string', 'max:50'],
    ]);

    Dosen::create([
      'dosen_name' => $request->input('dosen_name'),

    ]);

    return redirect()
      ->back()
      ->with('success', 'Data dosen berhasil disimpan');
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
   * @param  \App\Models\Dosen  $dosen
   * @return \Illuminate\Http\Response
   */
  public function show(Dosen $dosen)
  {
    // dd($dosen);
    $dosens = Dosen::get();

    return view('dosen', [
      'dosens' => $dosens,
      'byId' => $dosen
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Dosen  $dosen
   * @return \Illuminate\Http\Response
   */
  public function edit(Dosen $dosen)
  {
    // dd($dosen);
    // $dosens = Dosen::get();
    // return view('dosen', ['dosens' => $dosens]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Dosen  $dosen
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Dosen $dosen)
  {
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Dosen  $dosen
   * @return \Illuminate\Http\Response
   */
  public function destroy(Dosen $dosen)
  {
    // dd($dosen);
    $dosen = Dosen::find($dosen->id);

    $dosen->delete();
    return redirect()
      ->back()
      ->with('success', 'Data dosen berhasil dihapus');
  }
}
