@extends('layouts.aysaLayout')



    @section('app-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <script>
        $(function(){

            @if(Session::has('success'))
                Swal.fire({
                icon: 'success',
                title: 'Excelente!',
                text: '{{ Session::get("success") }}'
            })
            @endif
        });
        </script>
    @endsection

    @section('app-styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/dataTables.bootstrap.min.css') }}"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/wizard-form.css') }}">
    @endsection

    @php
        session()->forget('success');
    @endphp
    @section('aysa-content')

<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header flex-gap_sgz">{{ __('Opciones') }}</div>

                {{-- // TODO https://codepen.io/donho_zamo/pen/YzXzPXZ --}}

                @if (Route::has('login'))
                    @if (isset($applicantID))

                        @if ($applicantID)

                            {{-- route('applicants.edit',$cv->id)  --}}
                            <a href="{{ route('applicants.edit',  $applicantID[0]->user) }}" >
                            <div class="card separate-cards">
                                    <div class="card-body flex-gap_sgz">
                                        <p class="card-text">Actualizá tu información</p>
                                        <div class="">
                                            »
                                        </div>
                                    </div>
                            </div>
                            </a>
                            @else
                            <a href="{{ route('applicants.create') }}">
                            <div class="card">
                                <div class="card-body flex-gap_sgz">
                                    <p class="card-text">Cargá tu curriculum</p>
                                    <div>
                                        »
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endif
                    @endif
                @endif
                @if (Route::has('login'))
                    @if (isset($applicantID))
                        @if ($applicantID)
                        <a href="" >
                            <div class="card separate-cards">
                                    <div class="card-body flex-gap_sgz">
                                        <p class="card-text">Eliminá tu información</p>
                                        <div class="">
                                            »
                                        </div>
                                    </div>
                            </div>
                        </a>
                        @endif
                    @endif
                @endif
            </div>
    </div>
</div>

@endsection


