@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    {{-- <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

  <div class="card-body ">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
  </div>
</div>
</div> --}}

<div class="container">
  <div class="row">

    <div class="col">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Jurusan') }}</div>

          <div class="card-body ">
            <div class="container ">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="E.g Sains">
              </div>
              <div class=" d-flex justify-content-end"><button type="button" class="btn btn-primary">Save</button></div>
            </div>
            <div class="container">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Jurusan</th>

                  </tr>

                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>



</div>

</div>
</div>
@endsection
