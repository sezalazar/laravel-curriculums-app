@extends('layouts.aysaLayout')

    @section('app-styles')
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/buttons.dataTables.min.css') }}">

    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('/css/datatable.bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @endsection

{{-- @extends('layouts.aysaLayout') --}}

    @section('titulo', 'Listado de aplicantes')

    @section('h1', 'Listado de aplicantes')

    @section('aysa-content')


      <div class="container">
      <table id="maintable" class="display compact cell-border" style="width=10%">
        <thead>
            <tr>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Estado civil</th>
                <th>Provincia</th>
                <th>Licencia conducir</th>
                <th>CV</th>
            </tr>
        </thead>
        <tbody>
            @if($cvs->count())

            @foreach($cvs as $key => $cv)
            <tr>
                <td>{{ $cv->dni }}</td>
                <td>{{ $cv->name }}</td>
                <td>{{ $cv->marStatus }}</td>
                <td>@if($cv->provincia==1)
                    Capital
                @else
                    Buenos Aires
                @endif</td>
                <td>@if($cv->driverLicence==1)
                    Si
                @else
                    No
                @endif</td>
                <td>
                    <a href="{{ asset('uploads/' . $cv->filename) }}">
                        <svg id="file-13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="48" height="48"><path id="primary" d="M6,21a1,1,0,0,1-1-1V7L9,3h9a1,1,0,0,1,1,1V20a1,1,0,0,1-1,1Zm9-4H9m6-4H9m6-4H9" style="fill: none; stroke: rgba(0, 104, 255, 0.77); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach

            @endif
        </tbody>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
            <tr>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Estado Civil</th>
                <th>Provincia</th>
                <th>Licencia Conducir</th>
                <th>CV</th>
            </tr>
            </tfoot>
        </table>
      </div>




    @endsection

    @section('app-scripts')
        <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
         <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>


         <script type="text/javascript" src="{{ asset('/js/jquery-2.2.4.min.js') }}"></script>
         <script type="text/javascript" src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jszip.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/pdfmake.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/vfs_fonts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/buttons.html5.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/buttons.print.min.js') }}"></script>



        <script src="{{ asset('/js/sgz.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.mark.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/datatables.mark.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/buttons.colVis.min.js') }}"></script>
        @endsection
