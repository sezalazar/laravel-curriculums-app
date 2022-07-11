@extends('layouts.aysaLayout')

    @section('app-styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/dataTables.bootstrap.min.css') }}"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/wizard-form.css') }}">
    @endsection

@section('aysa-content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Existen problemas en la actualización de sus datos.</strong><br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success'))
{{-- <div class="alert alert-success">
    {{ $message
    }}
</div> --}}
<script>

    Swal.fire(
        'Excelente!',
        'El curriculum ha sido enviado!',
        'success'
      )
    </script>
@endif

<div class="container ">



    {{-- <div class="form-group">
        <label for="country">Select Country:</label>
        <select name="country2" class="form-control" style="width:250px" id="provincia" >
            <option value="">--- Select Country ---</option>
            @foreach ($provincias as $key => $value)
            <option value="{{ $value->nombre }}">{{ $value->nombre }}</option>
            @endforeach
        </select>
    </div> --}}






    <form action="{{ route('applicants.store') }}"  method="POST" id="regForm" enctype="multipart/form-data">
        @csrf
            @include('layouts.formPage')
    </form>
  </div>


@include('layouts.formScripts')

@endsection

