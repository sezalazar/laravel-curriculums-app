@extends('layouts.aysaLayout')

    @section('app-styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/dataTables.bootstrap.min.css') }}"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/wizard-form.css') }}">

    {{-- Prevent resubmission when page is refreshed --}}
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
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
        'El curriculum ha sido actualizado!',
        'success'
      )
    </script>
@endif

@php Session::forget('success')  @endphp

<div class="container ">

    <form action="{{ route('applicants.update',$cv->id) }}"  method="POST" id="regForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            @include('layouts.formPage')
     </form>
  </div>




@include('layouts.formScripts')

<script type="text/javascript">
    $(function (){
        $('#replaceCV').on("click", function(){
            $(".file-loading").toggle(this.checked);
        });

    });
</script>

@endsection


