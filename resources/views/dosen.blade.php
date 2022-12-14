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
          <div class="card-header">{{ __('Dosen') }}</div>

          {{-- {{ dd($dosens); }} --}}
          {{-- {{ dd($byId); }} --}}




          <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">


              <strong>{{ Session::get('success') }}</strong> You should check in on some of those fields below.

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            <div class="card-body ">
              <div class="container ">

                @if(!$byId)
                <form action="{{ route('dosen-create') }}" method="POST">
                  @else
                  <form action="{{ route('dosen-update', $byId->id ) }}" method="POST">
                    @method('put')
                    @endif


                    @csrf
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Dosen</label>
                      <input name="dosen_name" type="text" class="form-control @error('dosen_name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="E.g jhon" @if($byId) value="{{ $byId->dosen_name }}" @endif>

                      @error('dosen_name')

                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>
                    @if(!$byId)
                    <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary">
                        Save
                      </button>
                    </div>
                    @endif

                    @if($byId)
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('dosen')  }}" class="btn btn-danger mx-2">
                        Cancel
                      </a>

                      <button type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                    @endif
              </div>
              </form>
            </div>
            <hr>
            <hr>
            <div class="container">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col" class="d-flex flex-row justify-content-end">action</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach ($dosens as $dosen)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>

                    <td>{{ $dosen->dosen_name }}</td>
                    <td class="d-flex flex-row justify-content-end">

                      {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                      <form action="{{ route('dosen-edit',$dosen->id ) }}" method="POST">
                        @csrf
                        @method('GET')

                        <button type="submit" class="btn btn-sm btn-primary">Update</button>

                      </form>

                      |
                      <form action="{{ route('dosen-delete',$dosen->id ) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>

                    </td>

                  </tr>

                  @endforeach


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
