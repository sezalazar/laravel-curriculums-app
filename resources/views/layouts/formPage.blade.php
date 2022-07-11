<p style="margin-top: 5px"></p>
<div class="tab">
<span class="alert alert-success" role="alert">Datos Personales</span>
<p style="margin-top: 10px"></p>
  <div style="border: 1px solid gray">
  <div class="form-group row  spacingForm required">
  <p style="margin-top: 5px"></p>
        <div class="col-md-6 position-relative">
            <label for="inputStreet" class="col-sm-2 col-form-label control-label">Tipo</label>
            @php $selectedType = '';  @endphp
            <select name="tipo" class="form-select"  id="tipo" required>
                <option @if(old('tipo'))
                            @if((old('tipo')) == "Default")
                                @php $selectedType = 'selected' @endphp {{ $selectedType }}
                            @endif
                        @else
                            @if (isset($cv->tipo))
                                @if( $cv->tipo == "Default" )
                                    @php $selectedType = 'selected' @endphp {{ $selectedType }}
                                @endif
                            @endif
                        @endif
                    value="Default" autocomplete="off" selected>Seleccione una opción
                </option>
                <option @if(old('tipo'))
                            @if((old('tipo')) == "DNI")
                                @php $selectedType = 'selected' @endphp {{ $selectedType }}
                            @endif
                        @else
                            @if (isset($cv->tipo))
                                @if( $cv->tipo == "DNI" )
                                    @php $selectedType = 'selected' @endphp {{ $selectedType }}
                                @endif
                            @endif
                        @endif
                    value="DNI" autocomplete="off">DNI
                </option>
                <option @if(old('tipo'))
                            @if((old('tipo')) == "LC")
                                @php $selectedType = 'selected' @endphp {{ $selectedType }}
                            @endif
                        @else
                            @if (isset($cv->tipo))
                                @if( $cv->tipo == "LC" )
                                    @php $selectedType = 'selected' @endphp {{ $selectedType }}
                                @endif
                            @endif
                        @endif
                    value="LC" autocomplete="off">Libreta cívica
                </option>
                <option @if(old('tipo'))
                            @if((old('tipo')) == "LE")
                                @php $selectedType = 'selected' @endphp {{ $selectedType }}
                            @endif
                        @else
                            @if (isset($cv->tipo))
                                @if( $cv->tipo == "LE" )
                                    @php $selectedType = 'selected' @endphp {{ $selectedType }}
                                @endif
                            @endif
                        @endif
                    value="LE" autocomplete="off">Libreta de Enrolamiento
                </option>
            </select>
        </div>
        <div class="col-md-6 position-relative">
            <label for="inputIdentity" class="col-sm-2 col-form-label control-label">Número</label>
            <input type="number" class="form-control hideArrows" name="dni" id="inputIdentity" placeholder="Ingrese su número de identidad" @if(old('dni')) value="{{ old('dni') }}" @else @if (isset($cv->dni)) value="{{ $cv->dni }}" @endif @endif/>
        </div>
    </div>
    <div class="form-group row spacingForm required">
        <label for="inputName" class="col-sm-2 col-form-label control-label">Nombre completo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Ingrese su nombre completo" @if(old('name')) value="{{ old('name') }}" @else @if (isset($cv->name))  value="{{ $cv->name }}" @else  @if(isset($user[0])) value="{{ $user[0]->name  }}" @endif @endif @endif />
        </div>
    </div>
    <div class="form-group row spacingForm required">
        <label for="inputEmail" class="col-sm-2 col-form-label control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Ingrese su email" @if(old('email')) value="{{ old('email') }}" @else  @if (isset($cv->email)) value="{{ $cv->email }}" @else @if(isset($user[0])) value="{{ $user[0]->email  }}" @endif @endif @endif required="required"/>
            </div>
    </div>
    <!-- <div class="form-group row spacingForm required">
        <label for="inputStreet" class="col-sm-2 col-form-label control-label">Calle</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nombre de su calle" name="calle" @if (isset($cv->street)) value="{{ $cv->street }}"  @endif>
        </div>
    </div> -->
    <!-- <div class="form-group row spacingForm required">
        <label for="inputStreet" class="col-sm-2 col-form-label control-label">Número</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="Número de su calle" name="númeroCalle" @if (isset($cv->streetNbr)) value="{{ $cv->streetNbr }}"  @endif >
        </div>
    </div> -->
    <div class="form-group row  spacingForm required">
        <div class="col-md-3 position-relative">
            <label for="inputStreet" class="col-sm-2 col-form-label control-label">Calle</label>
            <input type="text" class="form-control" placeholder="Nombre de su calle" name="street" @if(old('street')) value="{{ old('street') }}" @else  @if (isset($cv->street)) value="{{ $cv->street }}" @endif  @endif>
        </div>
        <div class="col-md-3 position-relative">
            <label for="inputStreetNbr" class="col-sm-2 col-form-label control-label">Número</label>
            <input type="number" class="form-control" placeholder="Número de su calle" name="streetNbr" @if(old('streetNbr')) value="{{ old('streetNbr') }}" @else @if (isset($cv->streetNbr)) value="{{ $cv->streetNbr }}"  @endif @endif >
        </div>
        <div class="col-md-3 position-relative">
            <label for="inputFloor" class="col-sm-2 col-form-label">Piso</label>
            <input type="text" class="form-control" placeholder="Piso" name="piso" @if(old('piso')) value="{{ old('piso') }}" @else @if (isset($cv->piso)) value="{{ $cv->piso }}"  @endif @endif>
        </div>
        <div class="col-md-3 position-relative">
            <label for="inputFloor" class="col-sm-2 col-form-label">Departamento</label>
            <input type="text" class="form-control" placeholder="Número departamento" name="depto" @if(old('depto')) value="{{ old('depto') }}" @else @if (isset($cv->depto)) value="{{ $cv->depto }}"  @endif @endif >
        </div>
    </div>
    <div class="form-group row  spacingForm required">
        <div class="col-md-6 position-relative">
            <label for="county" class="form-label control-label">Provincia</label>
            @php $countySelected = '';  @endphp
            <select name="provincia" class="form-select"  id="provincia" required>



                <option>--Provincia--</option>
                        @foreach ($provincias as $provincia)
                            <option value="{{ $provincia->nombre }}"
                                @if(old('provincia'))
                                    {{ $provincia->nombre == old('provincia') ? $countySelected = 'selected' : '' }}
                                @else
                                    @if (isset($cv)){
                                        {{ $provincia->nombre == $cv->provincia ? $countySelected = 'selected' : '' }}
                                    }
                                    @endif
                                @endif
                            >{{ $provincia->nombre }} </option>
                        @endforeach
            </select>

        </div>
        <div class="col-md-3 position-relative">
            <label for="state" class="form-label control-label">Localidad</label>
            @php $selectedCity = '';  @endphp
            <select name="ciudad" class="form-select" style="min-width:150px">

                        @if (isset($cv->city))
                        {
                            <option value="{{ $localidad[0]->id }}">{{ $localidad[0]->nombre }}</option>
                        }
                        @else{
                            {{-- <option>--Ciudad--</option> --}}
                        }
                        @endif
            </select>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationCustom05" class="form-label control-label">Código Postal</label>
            <input type="text" name="cp" class="form-control" id="validationCustom05" placeholder="Código Postal" @if(old('cp')) value="{{ old('cp') }}" @else @if (isset($cv->cp)) value="{{ $cv->cp }}" @endif  @endif required/>
            <div class="invalid-feedback">
            Please provide a valid zip.
            </div>
        </div>
    </div>
    <div id="dynamicAddRemove">
        @if (isset($phones))
            @php $countPhones = 1;
            @endphp
            @foreach($phones as $key => $phone)

                        @if($countPhones == 1)
                        <div class="form-group row spacingForm required" >
                            <label for="inputPhone" class="col-sm-2 col-form-label control-label">Teléfono</label>
                            <div class="col-sm-6">
                                <input type="text" name="phone[]" placeholder="Ingrese su teléfono" class="form-control" value="{{ $phone->phone }}"  />
                            </div>
                                <div class="col-sm-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30" id="dynamic-ar">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/>
                                    </svg>
                                </div>
                        </div>
                        @else
                        <div class="form-group row spacingForm required" >
                            <label for="inputPhone" class="col-sm-2 col-form-label">Teléfono</label>
                            <div class="col-sm-6">
                                <input type="text" name="phone[]" placeholder="Ingrese su teléfono" class="form-control" value="{{ $phone->phone }}" />
                            </div>
                                <div class="col-sm-2">
                                    {{-- <button type="button"  class="btn btn-outline-danger remove-input-field">
                                        Eliminar
                                    </button> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30" id="dynamic-ar" class="remove-input-field">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/>
                                    </svg>
                                </div>
                        </div>
                        @endif
                        @php
                            $countPhones++;
                        @endphp


            @endforeach
        @else
            <div class="form-group row spacingForm" >
                <label for="inputPhone" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-6">
                    <input type="text" name="phone[]" placeholder="Ingrese su teléfono" class="form-control" @if(old('phone')) value="{{old('phone.0')}}" @endif />
                </div>
                <div class="col-sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30" id="dynamic-ar">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/>
                    </svg>
                </div>
            </div>
        @endif
        @if(old('phone'))
        @for( $i =1; $i < count(old('phone')); $i++)

            <div class="row spacingForm">
                <label for="inputPhone" class="col-sm-2 col-form-label ">Teléfono</label>
                <div class="col-sm-6">
                    <input type="text" name="phone[]" placeholder="Ingrese su teléfono" class="form-control" value="{{ old('phone.'.$i)}}" />
                </div>
                <div class="col-sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30" id="dynamic-ar" class="remove-input-field">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/>
                    </svg>
                </div>
            </div>
        @endfor
    @endif
    </div>


    <div class="form-group row spacingForm required">
    <label for="inputBirthDate" class="col-sm-2 col-form-label control-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputBirthDate" name="dateOfBirth" placeholder="Ingrese su fecha de nacimiento" @if (isset($cv->dateOfBirth)) value="{{ $cv->dateOfBirth }}" @endif />
        </div>
    </div>
    <div class="form-group row spacingForm " >
        <label for="inputReffered" class="col-sm-2 col-form-label">Referido</label>
        <div class="col">
          <input type="text" class="form-control" placeholder="Legajo del referido" name="referredEmplid" @if (isset($cv->referredEmplid)) value="{{ $cv->referredEmplid }}" @endif>
        </div>

        <div class="col">
            <input type="text" class="form-control" id="inputReffered" name="referredName" placeholder="Nombre del referido" @if (isset($cv->referredName)) value="{{ $cv->referredName }}" @endif/>
        </div>
    </div>
    <div class="form-group row spacingForm">
        <div class="col-sm-2">Licencia de conducir</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="driverLicence" id="driverLicence"
                        @if (isset($cv->driverLicence))
                            @if($cv->driverLicence == 1)
                                checked="checked"
                            @endif
                        @endif
                    />
                    <label class="form-check-label" for="gridCheck1"> </label>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="tab">
    <p style="margin-top: 22px"></p>
    <div style="display: flex; justify-content: space-between">
        <span class="alert alert-success" role="alert">Estudios</span>

        <!-- <button type="button" name="add" id="dynamic-estudios" class="btn btn-outline-primary spacingForm btn-margin-bt">Agregar Estudio</button> -->
    </div>

    <p style="margin-top: -30px"></p>
    <div id="estudios">
        <div style="border: 1px solid gray" >
            <div class="form-group row spacingForm">
                <div class="row g-3 spacingForm">
                        <label for="validationDefault03">Carrera</label>
                        @php $carrerSelected = '' @endphp
                        <select name="carrerSelected" class="form-select" aria-label="Default select example">
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 1 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="1" autocomplete="off" selected>Seleccione una opción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6834 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6834" autocomplete="off">Administrador de Empresas Gastronómicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6835 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6835" autocomplete="off">Aerotécnico de la Fuerza Aérea</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6836 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6836" autocomplete="off">Analista en Computacion/Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6837 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6837" autocomplete="off">Analista en Comunicación Corporativa y Relaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6838 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6838" autocomplete="off">Analista en Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6839 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6839" autocomplete="off">Analista en Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6840 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6840" autocomplete="off">Analista en Tecnologías de la Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6841 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6841" autocomplete="off">Analista Financiero Contable</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6842 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6842" autocomplete="off">Analista Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6843 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6843" autocomplete="off">Apicultor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6844 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6844" autocomplete="off">Arquitecto</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6845 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6845" autocomplete="off">Asistente Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6846 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6846" autocomplete="off">Asistente en Odontología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6847 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6847" autocomplete="off">Auxiliar Administrativo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6848 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6848" autocomplete="off">Auxiliar Contable</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6849 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6849" autocomplete="off">Auxiliar de Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6850 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6850" autocomplete="off">Auxiliar de Farmacia Hospitalitaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6851 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6851" autocomplete="off">Auxiliar de Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6852 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6852" autocomplete="off">Ayudane Preparador de Laboratorio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6853 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6853" autocomplete="off">Bioquímico Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6854 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6854" autocomplete="off">Camarógrafo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6855 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6855" autocomplete="off">Contador Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6856 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6856" autocomplete="off">Cosmetología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6857 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6857" autocomplete="off">Diseñador de Páginas Web</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6858 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6858" autocomplete="off">Diseñador Gráfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6859 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6859" autocomplete="off">Diseño Autocad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6860 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6860" autocomplete="off">Diseño Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6861 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6861" autocomplete="off">Diseño Técnico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6862 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6862" autocomplete="off">Doctor en Derecho</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6863 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6863" autocomplete="off">Doctor en Medicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6864 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6864" autocomplete="off">Doctor en Odontología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6865 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6865" autocomplete="off">Economista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6866 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6866" autocomplete="off">Educador de Personas con Capacidades Diferentes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6867 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6867" autocomplete="off">Escribano Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6868 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6868" autocomplete="off">Especialista en Gestión Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6869 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6869" autocomplete="off">Especialista en Gestión Forestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6870 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6870" autocomplete="off">Gestión y Administración de Pequeñas y Micro Empre</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6871 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6871" autocomplete="off">Gestión Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6872 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6872" autocomplete="off">Guía Turístico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6873 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6873" autocomplete="off">Ingeniero Agrimensor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6874 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6874" autocomplete="off">Ingeniero Agrónomo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6875 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6875" autocomplete="off">Ingeniero Alimentario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6876 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6876" autocomplete="off">Ingeniero Civil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6877 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6877" autocomplete="off">Ingeniero Electricista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6878 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6878" autocomplete="off">Ingeniero en Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6879 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6879" autocomplete="off">Ingeniero en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6880 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6880" autocomplete="off">Ingeniero en Sistemas Eléctricos de Potencia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6881 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6881" autocomplete="off">Ingeniero en Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6882 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6882" autocomplete="off">Ingeniero en Telemática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6883 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6883" autocomplete="off">Ingeniero Industrail</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6884 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6884" autocomplete="off">Ingeniero Naval</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6885 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6885" autocomplete="off">Ingeniero Químico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6886 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6886" autocomplete="off">Instructor de Musculación y Fitness</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6887 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6887" autocomplete="off">Licenciado en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6888 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6888" autocomplete="off">Licenciado en Bibliotecología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6889 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6889" autocomplete="off">Licenciado en Biología Humana</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6890 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6890" autocomplete="off">Licenciado en Bioquímica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6891 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6891" autocomplete="off">Licenciado en Ciencia Política</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6892 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6892" autocomplete="off">Licenciado en Ciencias Antropológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6893 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6893" autocomplete="off">Licenciado en Ciencias Biológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6894 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6894" autocomplete="off">Licenciado en Ciencias de la Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6895 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6895" autocomplete="off">Licenciado en Ciencias de la Eduación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6896 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6896" autocomplete="off">Licenciado en Diseño de Indumentaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6897 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6897" autocomplete="off">Licenciado en Diseño de Interiores</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6898 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6898" autocomplete="off">Licenciado en Diseño Gráfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6899 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6899" autocomplete="off">Licenciado en Educación Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6900 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6900" autocomplete="off">Licenciado en Educación Inicial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6901 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6901" autocomplete="off">Licenciado en Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6902 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6902" autocomplete="off">Licenciado en Estadística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6903 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6903" autocomplete="off">Licenciado en Filosofía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6904 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6904" autocomplete="off">Licenciado en Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6905 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6905" autocomplete="off">Licenciado en Fisioterapia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6906 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6906" autocomplete="off">Licenciado en Fonoaudiología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6907 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6907" autocomplete="off">Licenciado en Geografía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6908 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6908" autocomplete="off">Licenciado en Geología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6909 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6909" autocomplete="off">Licenciado en Gestión Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6910 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6910" autocomplete="off">Licenciado en Humanidades</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6911 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6911" autocomplete="off">Licenciado en Ingeniería Eléctrica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6912 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6912" autocomplete="off">Licenciado en Instrumentación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6913 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6913" autocomplete="off">Licenciado en Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6914 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6914" autocomplete="off">Licenciado en Letras</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6915 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6915" autocomplete="off">Licenciado en Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6916 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6916" autocomplete="off">Licenciado en Matemáticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6917 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6917" autocomplete="off">Licenciado en Neumocardiología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6918 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6918" autocomplete="off">Licenciado en Neurofisiología Clínica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6919 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6919" autocomplete="off">Licenciado en Nutrición</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6920 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6920" autocomplete="off">Licenciado en Oftalmología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6921 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6921" autocomplete="off">Licenciado en Periodismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6922 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6922" autocomplete="off">Licenciado en Psicología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6923 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6923" autocomplete="off">Licenciado en Psicomotricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6924 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6924" autocomplete="off">Licenciado en Psicopedagogía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6925 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6925" autocomplete="off">Licenciado en Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6926 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6926" autocomplete="off">Licenciado en Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6927 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6927" autocomplete="off">Licenciado en Recursos Humanos y Relaciones Labora</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6928 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6928" autocomplete="off">Licenciado en Registros Médicos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6929 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6929" autocomplete="off">Licenciado en Relaciones Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6930 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6930" autocomplete="off">Licenciado en Relaciones Públicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6931 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6931" autocomplete="off">Licenciado en Seguridad Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6932 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6932" autocomplete="off">Licenciado en Seguridad Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6933 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6933" autocomplete="off">Licenciado en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6934 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6934" autocomplete="off">Licenciado en Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6935 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6935" autocomplete="off">Licenciado en Terapia Ocupacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6936 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6936" autocomplete="off">Licenciado en Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6937 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6937" autocomplete="off">Lingüística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6938 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6938" autocomplete="off">Logística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6939 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6939" autocomplete="off">Maestro</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6940 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6940" autocomplete="off">Maestro Técnico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6941 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6941" autocomplete="off">Negociación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6942 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6942" autocomplete="off">Operador Office Profesional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6943 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6943" autocomplete="off">Organizador Profesional de Congresos y Eventos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6944 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6944" autocomplete="off">Partera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6945 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6945" autocomplete="off">Perito/Técnico en Comercio Exterior y Aduana</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6946 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6946" autocomplete="off">Profesor de Educación Media</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6947 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6947" autocomplete="off">Profesor Técnico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6948 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6948" autocomplete="off">Profesorado de Eneñanza de Español como Lengua Ext</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6949 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6949" autocomplete="off">Programador Web</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6950 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6950" autocomplete="off">Químico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6951 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6951" autocomplete="off">Químico Famacéutico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6952 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6952" autocomplete="off">Recepcionista/Telefonista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6953 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6953" autocomplete="off">Secretariado Ejecutivo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6954 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6954" autocomplete="off">Técnico Agropecuario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6955 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6955" autocomplete="off">Técnico Asesor en Relaciones Laborales/Recursos Hu</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6956 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6956" autocomplete="off">Técnico en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6957 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6957" autocomplete="off">Técnico en Administración de Empresas Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6958 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6958" autocomplete="off">Técnico en Administración Rural</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6959 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6959" autocomplete="off">Técnico en Anatomía Patalógica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6960 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6960" autocomplete="off">Técnico en Animación Digital</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6961 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6961" autocomplete="off">Técnico en Comunicación Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6962 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6962" autocomplete="off">Técnico en Educación para el Tiempo Libre y la Rec</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6963 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6963" autocomplete="off">Técnico en Electrónica Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6964 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6964" autocomplete="off">Técnico en Hemoterapia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6965 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6965" autocomplete="off">Técnico en Podología Médica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6966 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6966" autocomplete="off">Técnico en Radioisótopos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6967 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6967" autocomplete="off">Técnico en Radioterapia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6968 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6968" autocomplete="off">Técnico en Realización Audiovisual</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6969 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6969" autocomplete="off">Técnico en Registros Médicos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6970 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6970" autocomplete="off">Técnico en Relaciones Públicas y Organización de E</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6971 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6971" autocomplete="off">Técnico en Reparación de PC y Redes Microsoft</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6972 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6972" autocomplete="off">Técnico Universitario en Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6973 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6973" autocomplete="off">Tecnólogo Mecánico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6974 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6974" autocomplete="off">Telemarketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6975 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6975" autocomplete="off">Traductor Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6976 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6976" autocomplete="off">Traductorado</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6977 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6977" autocomplete="off">Vendedor Técnico Profesional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6978 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6978" autocomplete="off">Veterinario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 6979 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="6979" autocomplete="off">Otra</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7874 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7874" autocomplete="off">Abogado</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7875 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7875" autocomplete="off">Acción Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7876 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7876" autocomplete="off">Actividad Física y Deporte</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7877 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7877" autocomplete="off">Actuario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7878 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7878" autocomplete="off">Acuicultura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7879 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7879" autocomplete="off">Administración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7880 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7880" autocomplete="off">Administración Aduanera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7881 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7881" autocomplete="off">Administración Agraria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7882 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7882" autocomplete="off">Administración Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7883 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7883" autocomplete="off">Administración Bancaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7884 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7884" autocomplete="off">Administración Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7885 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7885" autocomplete="off">Administración de Bienes Culturales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7886 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7886" autocomplete="off">Administración de Cooperativas y Mutuales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7887 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7887" autocomplete="off">Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7888 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7888" autocomplete="off">Administración de Empresas Agropecuarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7889 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7889" autocomplete="off">Administración de Empresas Agropecuarias y Agroind</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7890 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7890" autocomplete="off">Administración de Empresas de Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7891 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7891" autocomplete="off">Administración de Empresas Pyme</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7892 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7892" autocomplete="off">Administración de Gastronómicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7893 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7893" autocomplete="off">Administración de Hoteles</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7894 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7894" autocomplete="off">Administración de la Educación Superior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7895 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7895" autocomplete="off">Administración de la Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7896 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7896" autocomplete="off">Administración de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7897 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7897" autocomplete="off">Administración de Negocios Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7898 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7898" autocomplete="off">Administración de Negocios Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7899 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7899" autocomplete="off">Administración de ONG</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7900 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7900" autocomplete="off">Administración de Personal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7901 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7901" autocomplete="off">Administración de Proyectos de Software</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7902 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7902" autocomplete="off">Administración de Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7903 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7903" autocomplete="off">Administración de Seguros</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7904 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7904" autocomplete="off">Administración de Servicios de Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7905 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7905" autocomplete="off">Administración Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7906 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7906" autocomplete="off">Administración Hospitalaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7907 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7907" autocomplete="off">Administración Hotelera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7908 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7908" autocomplete="off">Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7909 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7909" autocomplete="off">Administración y Contabilidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7910 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7910" autocomplete="off">Administración y Gestión de Agronegocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7911 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7911" autocomplete="off">Administración y Gestión Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7912 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7912" autocomplete="off">Administración y Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7913 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7913" autocomplete="off">Administrador de Bases de Datos Oracle</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7914 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7914" autocomplete="off">Administrador de Empresas Turísticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7915 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7915" autocomplete="off">Administrativo Contable</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7916 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7916" autocomplete="off">Aduanas y Comercio Exterior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7917 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7917" autocomplete="off">Agente de Propagánda Médica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7918 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7918" autocomplete="off">Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7919 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7919" autocomplete="off">Análisis de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7920 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7920" autocomplete="off">Análisis de Balances y Créditos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7921 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7921" autocomplete="off">Asistente Ejecutiva</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7922 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7922" autocomplete="off">Asistente Ejecutiva Bilingüe</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7923 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7923" autocomplete="off">Asistente Psicológico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7924 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7924" autocomplete="off">Asistente Psicopedagógico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7925 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7925" autocomplete="off">Asistente Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7926 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7926" autocomplete="off">Auditor Nacional de Industrias Alimentarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7927 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7927" autocomplete="off">Auditoría Bancaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7928 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7928" autocomplete="off">Automatización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7929 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7929" autocomplete="off">Automatización y Robótica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7930 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7930" autocomplete="off">Auxiliar de Maquinas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7931 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7931" autocomplete="off">Auxiliares de Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7932 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7932" autocomplete="off">Ayudante de Laboratorio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7933 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7933" autocomplete="off">Ayudante de Laboratorio en Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7934 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7934" autocomplete="off">Ayudante de Laboratorio en Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7935 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7935" autocomplete="off">Base de Datos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7936 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7936" autocomplete="off">Bioinformática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7937 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7937" autocomplete="off">Bioingeniero</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7938 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7938" autocomplete="off">Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7939 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7939" autocomplete="off">Biología Molecular</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7940 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7940" autocomplete="off">Biomédico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7941 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7941" autocomplete="off">Bioquímico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7942 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7942" autocomplete="off">Biotecnología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7943 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7943" autocomplete="off">Botánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7944 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7944" autocomplete="off">Calidad de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7945 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7945" autocomplete="off">Calidad, Medio Ambiente e Higiene</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7946 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7946" autocomplete="off">Capacitación y Desarrollo Laboral</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7947 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7947" autocomplete="off">Cardiología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7948 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7948" autocomplete="off">Ceremonial y Organización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7949 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7949" autocomplete="off">Ciencia Política</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7950 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7950" autocomplete="off">Ciencia Política y Relaciones Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7951 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7951" autocomplete="off">Ciencia y Tecnología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7952 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7952" autocomplete="off">Ciencias Ambientales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7953 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7953" autocomplete="off">Ciencias Biológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7954 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7954" autocomplete="off">Ciencias de la Administración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7955 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7955" autocomplete="off">Ciencias de la Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7956 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7956" autocomplete="off">Ciencias de la Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7957 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7957" autocomplete="off">Ciencias de la Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7958 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7958" autocomplete="off">Ciencias de la Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7959 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7959" autocomplete="off">Ciencias de la Ingeniería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7960 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7960" autocomplete="off">Ciencias del Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7961 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7961" autocomplete="off">Ciencias Económicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7962 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7962" autocomplete="off">Ciencias Humanas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7963 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7963" autocomplete="off">Ciencias Naturales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7964 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7964" autocomplete="off">Ciencias Políticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7965 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7965" autocomplete="off">Ciencias Psicológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7966 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7966" autocomplete="off">Ciencias Químicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7967 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7967" autocomplete="off">Ciencias Sociales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7968 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7968" autocomplete="off">Cisco Certified Network Professional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7969 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7969" autocomplete="off">Comercialización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7970 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7970" autocomplete="off">Comercialización para Pymes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7971 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7971" autocomplete="off">Comercio Exterior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7972 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7972" autocomplete="off">Comercio Exterior y Aduanas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7973 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7973" autocomplete="off">Comercio Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7974 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7974" autocomplete="off">Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7975 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7975" autocomplete="off">Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7976 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7976" autocomplete="off">Comunicación Empresaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7977 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7977" autocomplete="off">Comunicación en Artes Visuales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7978 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7978" autocomplete="off">Comunicación Estratégica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7979 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7979" autocomplete="off">Comunicación Institucional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7980 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7980" autocomplete="off">Comunicación y Medios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7981 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7981" autocomplete="off">Comunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7982 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7982" autocomplete="off">Contabilidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7983 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7983" autocomplete="off">Contador Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7984 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7984" autocomplete="off">Control Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7985 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7985" autocomplete="off">Control de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7986 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7986" autocomplete="off">Control de Procesos Industriales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7987 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7987" autocomplete="off">Costos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7988 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7988" autocomplete="off">CRM</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7989 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7989" autocomplete="off">Derecho</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7990 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7990" autocomplete="off">Derecho Civil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7991 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7991" autocomplete="off">Derecho Económico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7992 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7992" autocomplete="off">Derecho Penal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7993 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7993" autocomplete="off">Derecho Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7994 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7994" autocomplete="off">Derecho Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7995 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7995" autocomplete="off">Desarrollo de Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7996 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7996" autocomplete="off">Desarrollo y Capacitación Laboral</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7997 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7997" autocomplete="off">Despachante de Aduanas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7998 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7998" autocomplete="off">Dirección de Comercialización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 7999 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="7999" autocomplete="off">Dirección de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8000 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8000" autocomplete="off">Dirección de Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8001 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8001" autocomplete="off">Dirección y Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8002 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8002" autocomplete="off">Discapacitados de Audición, Voz y Lenguaje</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8003 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8003" autocomplete="off">Diseñador de Envases y Packaging</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8004 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8004" autocomplete="off">Diseñador de Imagen y Sonido</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8005 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8005" autocomplete="off">Diseñador de Interiores</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8006 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8006" autocomplete="off">Diseñador de Sitios Web</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8007 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8007" autocomplete="off">Diseñador Gráfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8008 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8008" autocomplete="off">Diseñador Publicitario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8009 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8009" autocomplete="off">Diseño</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8010 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8010" autocomplete="off">Diseño Gráfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8011 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8011" autocomplete="off">Diseño Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8012 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8012" autocomplete="off">Diseño Publicitario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8013 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8013" autocomplete="off">Diseño Tecnológico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8014 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8014" autocomplete="off">Diseño Textil e Indumentaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8015 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8015" autocomplete="off">Distribución y Transporte</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8016 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8016" autocomplete="off">Ecología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8017 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8017" autocomplete="off">Ecología y Conservación del Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8018 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8018" autocomplete="off">Ecología y Control Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8019 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8019" autocomplete="off">Ecología y Medio Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8020 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8020" autocomplete="off">Economía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8021 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8021" autocomplete="off">Educación Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8022 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8022" autocomplete="off">Educación de Adultos y Adolescentes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8023 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8023" autocomplete="off">Educación Especial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8024 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8024" autocomplete="off">Educación Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8025 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8025" autocomplete="off">Educación Matemática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8026 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8026" autocomplete="off">Educación para Sordos y Perturbados del Lenguaje</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8027 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8027" autocomplete="off">Educación Preescolar</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8028 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8028" autocomplete="off">EGB</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8029 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8029" autocomplete="off">Electromedicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8030 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8030" autocomplete="off">Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8031 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8031" autocomplete="off">Electrónica Digital</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8032 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8032" autocomplete="off">Electrónico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8033 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8033" autocomplete="off">Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8034 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8034" autocomplete="off">Enseñanza de la Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8035 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8035" autocomplete="off">Enseñanza de la Matemática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8036 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8036" autocomplete="off">Enseñanza Pre-primaria y Primaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8037 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8037" autocomplete="off">Envases y Embalajes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8038 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8038" autocomplete="off">Escribano</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8039 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8039" autocomplete="off">Estadística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8040 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8040" autocomplete="off">Evaluación Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8041 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8041" autocomplete="off">Expresión y Lenguaje Corporal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8042 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8042" autocomplete="off">Farmacéuticos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8043 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8043" autocomplete="off">Farmacia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8044 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8044" autocomplete="off">Filosofía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8045 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8045" autocomplete="off">Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8046 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8046" autocomplete="off">Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8047 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8047" autocomplete="off">Física Aplicada</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8048 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8048" autocomplete="off">Física Médica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8049 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8049" autocomplete="off">Forestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8050 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8050" autocomplete="off">Forestal Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8051 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8051" autocomplete="off">Genética</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8052 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8052" autocomplete="off">Gerenciamiento Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8053 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8053" autocomplete="off">Gestión Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8054 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8054" autocomplete="off">Gestión Administrativa Contable</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8055 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8055" autocomplete="off">Gestión Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8056 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8056" autocomplete="off">Gestión Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8057 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8057" autocomplete="off">Gestión Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8058 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8058" autocomplete="off">Gestión de Agroalimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8059 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8059" autocomplete="off">Gestión de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8060 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8060" autocomplete="off">Gestión de Empresas Agrícolas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8061 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8061" autocomplete="off">Gestión de Empresas Agropecuarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8062 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8062" autocomplete="off">Gestión de Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8063 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8063" autocomplete="off">Gestión de Servicios de Transporte</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8064 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8064" autocomplete="off">Gestión Económica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8065 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8065" autocomplete="off">Gestión Hotelera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8066 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8066" autocomplete="off">Gestión Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8067 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8067" autocomplete="off">Gestiones de Servicios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8068 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8068" autocomplete="off">Grafólogo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8069 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8069" autocomplete="off">Guía de Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8070 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8070" autocomplete="off">Hematología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8071 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8071" autocomplete="off">Higiene y Seguridad del Trabajo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8072 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8072" autocomplete="off">Hotelería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8073 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8073" autocomplete="off">Impuestos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8074 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8074" autocomplete="off">Industrias Alimentarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8075 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8075" autocomplete="off">Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8076 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8076" autocomplete="off">Ingeniería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8077 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8077" autocomplete="off">Ingeniería Aeronáutico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8078 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8078" autocomplete="off">Ingeniería Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8079 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8079" autocomplete="off">Ingeniería Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8080 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8080" autocomplete="off">Ingeniería Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8081 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8081" autocomplete="off">Ingeniería en Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8082 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8082" autocomplete="off">Ingeniería Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8083 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8083" autocomplete="off">Ingeniero Agrimensor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8084 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8084" autocomplete="off">Ingeniero Agroindustrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8085 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8085" autocomplete="off">Ingeniero Agrónomo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8086 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8086" autocomplete="off">Ingeniero Agropecuario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8087 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8087" autocomplete="off">Ingeniero Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8088 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8088" autocomplete="off">Ingeniero Biomédico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8089 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8089" autocomplete="off">Ingeniero Civil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8090 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8090" autocomplete="off">Ingeniero Electricista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8091 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8091" autocomplete="off">Ingeniero Electricista con Orientación Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8092 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8092" autocomplete="off">Ingeniero Electricista con Orientación Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8093 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8093" autocomplete="off">Ingeniero Electricista Electrónico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8094 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8094" autocomplete="off">Ingeniero Electrónico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8095 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8095" autocomplete="off">Ingeniero en Agrimensura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8096 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8096" autocomplete="off">Ingeniero en Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8097 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8097" autocomplete="off">Ingeniero en Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8098 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8098" autocomplete="off">Ingeniero en Comunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8099 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8099" autocomplete="off">Ingeniero en Dirección de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8100 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8100" autocomplete="off">Ingeniero en Ecología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8101 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8101" autocomplete="off">Ingeniero en Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8102 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8102" autocomplete="off">Ingeniero en Electrónica y Comunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8103 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8103" autocomplete="off">Ingeniero en Electrónica y Electricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8104 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8104" autocomplete="off">Ingeniero en Electrónica y Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8105 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8105" autocomplete="off">Ingeniero en Industrias de la Alimentación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8106 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8106" autocomplete="off">Ingeniero en Industrias Forestales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8107 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8107" autocomplete="off">Ingeniero en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8108 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8108" autocomplete="off">Ingeniero en Materiales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8109 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8109" autocomplete="off">Ingeniero en Producción Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8110 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8110" autocomplete="off">Ingeniero en Recursos Naturales y Medio ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8111 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8111" autocomplete="off">Ingeniero en Seguridad Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8112 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8112" autocomplete="off">Ingeniero en Seguridad e Higiene en el Trabajo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8113 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8113" autocomplete="off">Ingeniero en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8114 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8114" autocomplete="off">Ingeniero en Sistemas de Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8115 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8115" autocomplete="off">Ingeniero en Sistemas Informáticos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8116 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8116" autocomplete="off">Ingeniero en Tecnología de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8117 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8117" autocomplete="off">Ingeniero Forestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8118 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8118" autocomplete="off">Ingeniero Hidráulico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8119 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8119" autocomplete="off">Ingeniero Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8120 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8120" autocomplete="off">Ingeniero Informático</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8121 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8121" autocomplete="off">Ingeniero Mecánico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8122 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8122" autocomplete="off">Ingeniero Mecánico Electricista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8123 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8123" autocomplete="off">Ingeniero Metalúrgico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8124 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8124" autocomplete="off">Ingeniero Nuclear</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8125 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8125" autocomplete="off">Ingeniero Químico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8126 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8126" autocomplete="off">Ingeniero Técnico en Electrónica y Electricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8127 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8127" autocomplete="off">Ingeniero Textil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8128 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8128" autocomplete="off">Instalaciones Industriales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8129 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8129" autocomplete="off">Instalaciones Industriales y Mantenimiento</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8130 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8130" autocomplete="off">Java Programming</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8131 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8131" autocomplete="off">Kinesiología y Fisiatría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8132 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8132" autocomplete="off">Laboratorio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8133 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8133" autocomplete="off">Laboratorio Clínico e Histopatología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8134 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8134" autocomplete="off">Laboratorio de Análisis Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8135 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8135" autocomplete="off">Laboratorio de Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8136 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8136" autocomplete="off">Licenciado en Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8137 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8137" autocomplete="off">Logística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8138 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8138" autocomplete="off">Manejo y Administración de Granos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8139 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8139" autocomplete="off">Mantenimiento Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8140 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8140" autocomplete="off">Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8141 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8141" autocomplete="off">Marketing Estratégico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8142 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8142" autocomplete="off">Marketing Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8143 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8143" autocomplete="off">Marketing Turístico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8144 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8144" autocomplete="off">Mecánico Electricista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8145 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8145" autocomplete="off">Médico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8146 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8146" autocomplete="off">Médico Veterinario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8147 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8147" autocomplete="off">Medio Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8148 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8148" autocomplete="off">Microbiología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8149 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8149" autocomplete="off">Microbiología Clínica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8150 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8150" autocomplete="off">Microbiólogo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8151 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8151" autocomplete="off">Monitoreo de Estudios Clínicos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8152 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8152" autocomplete="off">Network Design Program</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8153 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8153" autocomplete="off">Nutrición</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8154 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8154" autocomplete="off">Odontólogo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8155 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8155" autocomplete="off">Operador de Herramientas de Escritorio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8156 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8156" autocomplete="off">Organización de Eventos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8157 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8157" autocomplete="off">Organización Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8158 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8158" autocomplete="off">Pedagogía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8159 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8159" autocomplete="off">Periodismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8160 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8160" autocomplete="off">Piloto Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8161 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8161" autocomplete="off">Planeamiento Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8162 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8162" autocomplete="off">Producción Agraria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8163 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8163" autocomplete="off">Producción Agrícola Ganadera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8164 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8164" autocomplete="off">Producción Alimentaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8165 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8165" autocomplete="off">Producción de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8166 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8166" autocomplete="off">Producción de Bioimágenes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8167 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8167" autocomplete="off">Profesor en Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8168 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8168" autocomplete="off">Profesor en Matemática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8169 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8169" autocomplete="off">Profesor en Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8170 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8170" autocomplete="off">Programación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8171 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8171" autocomplete="off">Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8172 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8172" autocomplete="off">Protección Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8173 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8173" autocomplete="off">Psicología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8174 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8174" autocomplete="off">Psicología Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8175 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8175" autocomplete="off">Psicopedagogía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8176 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8176" autocomplete="off">Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8177 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8177" autocomplete="off">Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8178 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8178" autocomplete="off">Química Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8179 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8179" autocomplete="off">Química Farmacéutica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8180 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8180" autocomplete="off">Química y Biotecnología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8181 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8181" autocomplete="off">Químico Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8182 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8182" autocomplete="off">Químico Analista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8183 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8183" autocomplete="off">Químico Biológico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8184 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8184" autocomplete="off">Radiología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8185 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8185" autocomplete="off">Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8186 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8186" autocomplete="off">Recursos Humanos y Relaciones Laborales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8187 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8187" autocomplete="off">Redes y Comunicación de Datos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8188 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8188" autocomplete="off">Relaciones del Trabajo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8189 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8189" autocomplete="off">Relaciones Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8190 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8190" autocomplete="off">Relaciones Laborales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8191 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8191" autocomplete="off">Relaciones Públicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8192 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8192" autocomplete="off">Relevamiento de Información Estadística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8193 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8193" autocomplete="off">Resolución de Conflictos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8194 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8194" autocomplete="off">Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8195 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8195" autocomplete="off">Salud Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8196 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8196" autocomplete="off">Secretaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8197 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8197" autocomplete="off">Secretaria Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8198 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8198" autocomplete="off">Secretaria Ejecutiva</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8199 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8199" autocomplete="off">Secretariado Ejecutivo Bilingüe</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8200 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8200" autocomplete="off">Seguridad Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8201 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8201" autocomplete="off">Seguridad, Higiene y Control Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8202 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8202" autocomplete="off">Seguridad, Higiene y Control Ambiental Laboral</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8203 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8203" autocomplete="off">Servicio Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8204 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8204" autocomplete="off">Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8205 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8205" autocomplete="off">Sistemas de Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8206 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8206" autocomplete="off">Sistemas de Seguridad en Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8207 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8207" autocomplete="off">Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8208 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8208" autocomplete="off">Tecnología Alimentaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8209 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8209" autocomplete="off">Tecnología de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8210 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8210" autocomplete="off">Trabajo Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8211 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8211" autocomplete="off">Traductor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8212 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8212" autocomplete="off">Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8213 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8213" autocomplete="off">Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8214 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8214" autocomplete="off">Veterinario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8243 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8243" autocomplete="off">Administración Agroecológica e Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8244 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8244" autocomplete="off">Administración Agroindustrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8245 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8245" autocomplete="off">Administración Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8246 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8246" autocomplete="off">Administración Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8247 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8247" autocomplete="off">Administrción Turística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8248 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8248" autocomplete="off">Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8249 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8249" autocomplete="off">Administración Agraria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8250 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8250" autocomplete="off">Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8251 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8251" autocomplete="off">Administración Rural</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8252 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8252" autocomplete="off">Agronomía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8253 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8253" autocomplete="off">Análisis de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8254 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8254" autocomplete="off">Arquitectura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8255 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8255" autocomplete="off">Artes Visuales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8256 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8256" autocomplete="off">Auditoría de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8257 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8257" autocomplete="off">Bioquímica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8258 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8258" autocomplete="off">Cálculo de Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8259 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8259" autocomplete="off">Ciencia y Tecnología de Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8260 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8260" autocomplete="off">Ciencias Ambientales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8261 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8261" autocomplete="off">Ciencias Biológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8262 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8262" autocomplete="off">Ciencias de la Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8263 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8263" autocomplete="off">Ciencias de la Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8264 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8264" autocomplete="off">Ciencias de la Empresa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8265 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8265" autocomplete="off">Ciencias de la Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8266 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8266" autocomplete="off">Ciencias de la Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8267 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8267" autocomplete="off">Ciencias del Deporte</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8268 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8268" autocomplete="off">Ciencias Físicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8269 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8269" autocomplete="off">Ciencias Geográficas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8270 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8270" autocomplete="off">Ciencias Geológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8271 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8271" autocomplete="off">Ciencias Informáticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8272 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8272" autocomplete="off">Ciencias Jurídicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8273 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8273" autocomplete="off">Ciencias Matemáticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8274 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8274" autocomplete="off">Ciencias Políticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8275 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8275" autocomplete="off">Ciencias Químicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8276 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8276" autocomplete="off">Ciencias Sociales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8277 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8277" autocomplete="off">Comercio Internacional/Exterior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8278 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8278" autocomplete="off">Comunicación Audiovisual</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8279 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8279" autocomplete="off">Comunicación Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8280 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8280" autocomplete="off">Contabilidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8281 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8281" autocomplete="off">Contabilidad y Administración Rural</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8282 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8282" autocomplete="off">Cooperativismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8283 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8283" autocomplete="off">Derecho Notarial y Ciencias Sociales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8284 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8284" autocomplete="off">Diseño de Interiores</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8285 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8285" autocomplete="off">Diseño de Productos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8286 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8286" autocomplete="off">Diseño Gráfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8287 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8287" autocomplete="off">Diseño Infográfico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8288 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8288" autocomplete="off">Diseño Textil e Indumentaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8289 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8289" autocomplete="off">Diseño y Comucicación Gráfica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8290 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8290" autocomplete="off">Ecología Humana</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8291 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8291" autocomplete="off">Economía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8292 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8292" autocomplete="off">Economía Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8293 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8293" autocomplete="off">Educación Parvularia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8294 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8294" autocomplete="off">Educación Artísica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8295 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8295" autocomplete="off">Educación Bilingüe</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8296 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8296" autocomplete="off">Educ. Física, Deportes y Recreación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8297 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8297" autocomplete="off">Educ. Física y Dir.Técnica Deportiva</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8298 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8298" autocomplete="off">Educación por el Arte</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8299 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8299" autocomplete="off">Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8300 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8300" autocomplete="off">Escribanía Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8301 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8301" autocomplete="off">Farmacia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8302 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8302" autocomplete="off">Filosofía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8303 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8303" autocomplete="off">Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8304 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8304" autocomplete="off">Fisioterapia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8305 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8305" autocomplete="off">Gestión de Calidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8306 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8306" autocomplete="off">Historia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8307 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8307" autocomplete="off">Hotelería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8308 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8308" autocomplete="off">Ingeniería Agroindustrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8309 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8309" autocomplete="off">Ingeniería Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8310 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8310" autocomplete="off">Ingeniería Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8311 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8311" autocomplete="off">Ingeniería de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8312 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8312" autocomplete="off">Ingeniería en Ciencias de Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8313 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8313" autocomplete="off">Ingeniería en Marketing y Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8314 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8314" autocomplete="off">Ingeniería en Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8315 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8315" autocomplete="off">Ingeniería Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8316 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8316" autocomplete="off">Ingeniería Técnica en Electricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8317 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8317" autocomplete="off">Ingeniería Técnica en Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8318 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8318" autocomplete="off">Ingeniería Civil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8319 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8319" autocomplete="off">Ingeniería Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8320 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8320" autocomplete="off">Ingeniería de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8321 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8321" autocomplete="off">Ingeniería Eléctrica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8322 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8322" autocomplete="off">Ingeniería Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8323 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8323" autocomplete="off">Ingeniería en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8324 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8324" autocomplete="off">Ingeniería Forestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8325 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8325" autocomplete="off">Ingeniería Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8326 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8326" autocomplete="off">Ingeniería Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8327 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8327" autocomplete="off">Ingeniería Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8328 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8328" autocomplete="off">Instrumentación y Area Quirúrgica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8329 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8329" autocomplete="off">Kinesiología y Fisioterapia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8330 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8330" autocomplete="off">Lengua Alemana</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8331 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8331" autocomplete="off">Lengua Francesa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8332 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8332" autocomplete="off">Lengua Guaraní</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8333 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8333" autocomplete="off">Lengua Inglesa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8334 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8334" autocomplete="off">Lengua Portuguesa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8335 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8335" autocomplete="off">Lengua y Literatura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8336 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8336" autocomplete="off">Letras</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8337 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8337" autocomplete="off">Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8338 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8338" autocomplete="off">Medicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8339 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8339" autocomplete="off">Mercadotecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8340 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8340" autocomplete="off">Meteorología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8341 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8341" autocomplete="off">Música</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8342 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8342" autocomplete="off">Notariado</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8343 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8343" autocomplete="off">Nutrición</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8344 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8344" autocomplete="off">Obstetricia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8345 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8345" autocomplete="off">Odontología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8346 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8346" autocomplete="off">Optica y Contactología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8347 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8347" autocomplete="off">Pedagogía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8348 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8348" autocomplete="off">Pedagogía Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8349 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8349" autocomplete="off">Periodismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8350 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8350" autocomplete="off">Psicología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8351 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8351" autocomplete="off">Psicología Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8352 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8352" autocomplete="off">Psicopedagogía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8353 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8353" autocomplete="off">Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8354 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8354" autocomplete="off">Química Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8355 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8355" autocomplete="off">Química y Farmacia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8356 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8356" autocomplete="off">Relaciones Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8357 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8357" autocomplete="off">Relaciones Públicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8358 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8358" autocomplete="off">Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8359 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8359" autocomplete="off">Tecnología de Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8360 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8360" autocomplete="off">Teología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8361 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8361" autocomplete="off">Trabajo Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8362 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8362" autocomplete="off">Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 8363 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="8363" autocomplete="off">Veterinaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9016 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9016" autocomplete="off">Administración Agrícola y Comercialización de Prod</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9017 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9017" autocomplete="off">Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9018 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9018" autocomplete="off">Administrador de Comercio Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9019 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9019" autocomplete="off">Administrador de Empresas, especialización en Mark</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9020 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9020" autocomplete="off">Administrador en Banca</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9021 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9021" autocomplete="off">Agrícola</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9022 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9022" autocomplete="off">Agroecología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9023 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9023" autocomplete="off">Agroempresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9024 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9024" autocomplete="off">Agroforestería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9025 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9025" autocomplete="off">Agroindustrias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9026 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9026" autocomplete="off">Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9027 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9027" autocomplete="off">Agrozootecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9028 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9028" autocomplete="off">Análisis de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9029 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9029" autocomplete="off">Análisis de Sistemas Informáticos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9030 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9030" autocomplete="off">Análisis en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9031 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9031" autocomplete="off">Antropología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9032 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9032" autocomplete="off">Arquitectura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9033 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9033" autocomplete="off">Asistente Bilingüe de Gerencia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9034 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9034" autocomplete="off">Asistente Pedagócico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9035 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9035" autocomplete="off">Asistente Técnico de Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9036 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9036" autocomplete="off">Auditor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9037 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9037" autocomplete="off">Auxiliar de Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9038 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9038" autocomplete="off">Auxiliar Superior de Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9039 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9039" autocomplete="off">Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9040 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9040" autocomplete="off">Bioquímica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9041 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9041" autocomplete="off">Bioquímica Clínica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9042 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9042" autocomplete="off">Bioquímico Farmacéutico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9043 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9043" autocomplete="off">Comunicación Audiovisual</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9044 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9044" autocomplete="off">Comunicación Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9045 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9045" autocomplete="off">Contador Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9046 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9046" autocomplete="off">Contador Público Auditor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9047 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9047" autocomplete="off">Diseño</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9048 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9048" autocomplete="off">Doctor en Administración Hospitalaria y Servicios </option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9049 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9049" autocomplete="off">Doctor en Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9050 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9050" autocomplete="off">Doctor en Contabilidad y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9051 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9051" autocomplete="off">Doctor en Psicología Clínica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9052 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9052" autocomplete="off">Doctor en Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9053 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9053" autocomplete="off">Doctor en Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9054 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9054" autocomplete="off">Doctorado en Eduacación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9055 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9055" autocomplete="off">Economía Agrícola</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9056 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9056" autocomplete="off">Economía Agrícola</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9057 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9057" autocomplete="off">Economía Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9058 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9058" autocomplete="off">Economía en Comercio Internacional, Pequeña y Medi</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9059 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9059" autocomplete="off">Economía Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9060 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9060" autocomplete="off">Economista</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9061 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9061" autocomplete="off">Economista Agropecuario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9062 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9062" autocomplete="off">Economista Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9063 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9063" autocomplete="off">Economista en Gestión Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9064 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9064" autocomplete="off">Economista Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9065 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9065" autocomplete="off">Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9066 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9066" autocomplete="off">Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9067 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9067" autocomplete="off">Guía de Turismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9068 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9068" autocomplete="off">Igeniería en Mecánica Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9069 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9069" autocomplete="off">Industrias Agropecuarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9070 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9070" autocomplete="off">Ingenería en Desarrollo Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9071 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9071" autocomplete="off">Ingeniería Agrícola</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9072 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9072" autocomplete="off">Ingeniería Agroforestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9073 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9073" autocomplete="off">Ingeniería Agroindustrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9074 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9074" autocomplete="off">Ingeniería Agronómica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9075 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9075" autocomplete="off">Ingeniería Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9076 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9076" autocomplete="off">Ingeniería Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9077 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9077" autocomplete="off">Ingeniería Agropecuaria Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9078 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9078" autocomplete="off">Ingeniería Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9079 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9079" autocomplete="off">Ingeniería Civil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9080 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9080" autocomplete="off">Ingeniería Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9081 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9081" autocomplete="off">Ingeniería Comercial en Gerencia de Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9082 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9082" autocomplete="off">Ingeniería Comercial y Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9083 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9083" autocomplete="off">Ingeniería de Emprendedores</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9084 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9084" autocomplete="off">Ingeniería de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9085 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9085" autocomplete="off">Ingeniería de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9086 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9086" autocomplete="off">Ingeniería de Sistemas Informáticos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9087 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9087" autocomplete="off">Ingeniería Económico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9088 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9088" autocomplete="off">Ingeniería Eléctrica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9089 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9089" autocomplete="off">Ingeniería Eléctrica Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9090 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9090" autocomplete="off">Ingeniería Electrónica en Automatización y Control</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9091 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9091" autocomplete="off">Ingeniería Electrónica en Sistemas Computacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9092 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9092" autocomplete="off">Ingeniería Electrónica y de Control</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9093 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9093" autocomplete="off">Ingeniería Electrónica y Redes de Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9094 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9094" autocomplete="off">Ingeniería Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9095 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9095" autocomplete="off">Ingeniería en Acuicultura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9096 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9096" autocomplete="off">Ingeniería en Administración de Banca y Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9097 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9097" autocomplete="off">Ingeniería en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9098 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9098" autocomplete="off">Ingeniería en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9099 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9099" autocomplete="off">Ingeniería en Administración de Empresas Agropecua</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9100 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9100" autocomplete="off">Ingeniería en administración de Empresas con Siste</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9101 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9101" autocomplete="off">Ingeniería en Administración de Empresas de Servic</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9102 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9102" autocomplete="off">Ingeniería en Administración de Empresas o Ingenie</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9103 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9103" autocomplete="off">Ingeniería en Administración de Empresas Turística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9104 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9104" autocomplete="off">Ingeniería en administración de empresas y marketi</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9105 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9105" autocomplete="off">Ingeniería en Administración de Empresas y Negocio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9106 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9106" autocomplete="off">Ingeniería en Administración de la Seguridad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9107 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9107" autocomplete="off">Ingeniería en Administración de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9108 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9108" autocomplete="off">Ingeniería en Administración de Procesos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9109 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9109" autocomplete="off">Ingeniería en Administración de Proyectos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9110 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9110" autocomplete="off">Ingeniería en Administración de Recursos Humanos y</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9111 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9111" autocomplete="off">Ingeniería en Administración de Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9112 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9112" autocomplete="off">Ingeniería en Administración Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9113 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9113" autocomplete="off">Ingeniería en Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9114 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9114" autocomplete="off">Ingeniería en Administración y Gestión Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9115 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9115" autocomplete="off">Ingeniería en Administración y Gestión Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9116 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9116" autocomplete="off">Ingeniería en Administración y Marketing Estratégi</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9117 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9117" autocomplete="off">Ingeniería en Administración y Planificación de Pr</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9118 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9118" autocomplete="off">Ingeniería en Administración, Gestión Pública y Mu</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9119 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9119" autocomplete="off">Ingeniería en Agroindustrias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9120 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9120" autocomplete="off">Ingeniería en Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9121 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9121" autocomplete="off">Ingeniería en Biomédica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9122 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9122" autocomplete="off">Ingeniería en Biotecnología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9123 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9123" autocomplete="off">Ingeniería en Ciencias Administrativas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9124 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9124" autocomplete="off">Ingeniería en Ciencias Administrativas y Económica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9125 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9125" autocomplete="off">Ingeniería en Ciencias de la Economía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9126 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9126" autocomplete="off">Ingeniería en Ciencias de la Informática y Computa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9127 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9127" autocomplete="off">Ingeniería en Ciencias de la Seguridad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9128 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9128" autocomplete="off">Ingeniería en Ciencias Económicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9129 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9129" autocomplete="off">Ingeniería en Ciencias Económicas o Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9130 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9130" autocomplete="off">Ingeniería en Ciencias Económicas y Financieras</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9131 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9131" autocomplete="off">Ingeniería en Ciencias Empresariales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9132 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9132" autocomplete="off">Ingeniería en Ciencias Gastronómicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9133 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9133" autocomplete="off">Ingeniería en Ciencias Geográficas y Desarrollo Su</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9134 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9134" autocomplete="off">Ingeniería en Comercio Exterior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9135 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9135" autocomplete="off">Ingeniería en Comercio Exterior e Integración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9136 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9136" autocomplete="off">Ingeniería en Comercio Exterior y Negocios Interna</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9137 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9137" autocomplete="off">Ingeniería en Comercio y Administración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9138 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9138" autocomplete="off">Ingeniería en Comercio y Finanzas Internacionales:</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9139 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9139" autocomplete="off">Ingeniería en Computación Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9140 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9140" autocomplete="off">Ingeniería en Computación e Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9141 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9141" autocomplete="off">Ingeniería en Computación y Ciencias de la Informá</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9142 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9142" autocomplete="off">Ingeniería en Computación y Redes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9143 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9143" autocomplete="off">Ingeniería en Contabilidad Superior y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9144 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9144" autocomplete="off">Ingeniería en Contabilidad Superior, Auditoría y F</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9145 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9145" autocomplete="off">Ingeniería en Contabilidad y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9146 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9146" autocomplete="off">Ingeniería en Contaduría Pública Autorizada</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9147 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9147" autocomplete="off">Ingeniería en Contaduría Pública y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9148 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9148" autocomplete="off">Ingeniería en Desarrollo Humano</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9149 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9149" autocomplete="off">Ingeniería en Desarrollo Humano y Comunitario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9150 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9150" autocomplete="off">Ingeniería en Desarrollo Social y Gestión Política</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9151 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9151" autocomplete="off">Ingeniería en Ejecución de Ciencias Económico Admi</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9152 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9152" autocomplete="off">Ingeniería en Electr´nica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9153 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9153" autocomplete="off">Ingeniería en Electricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9154 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9154" autocomplete="off">Ingeniería en Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9155 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9155" autocomplete="off">Ingeniería en Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9156 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9156" autocomplete="off">Ingeniería en Electromedicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9157 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9157" autocomplete="off">Ingeniería en Electromedicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9158 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9158" autocomplete="off">Ingeniería en Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9159 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9159" autocomplete="off">Ingeniería en Empresas Comerciales y Consumo Ecoló</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9160 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9160" autocomplete="off">Ingeniería en Empresas y Administración de Negocio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9161 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9161" autocomplete="off">Ingeniería en Estadística</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9162 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9162" autocomplete="off">Ingeniería en Estadística e Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9163 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9163" autocomplete="off">Ingeniería en Estadística Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9164 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9164" autocomplete="off">Ingeniería en Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9165 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9165" autocomplete="off">Ingeniería en Finanzas Empresariales y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9166 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9166" autocomplete="off">Ingeniería en Finanzas y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9167 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9167" autocomplete="off">Ingeniería en Geología Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9168 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9168" autocomplete="off">Ingeniería en Gerencia de Sistemas Informáticos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9169 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9169" autocomplete="off">Ingeniería en Gerencia Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9170 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9170" autocomplete="off">Ingeniería en Gestión de Calidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9171 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9171" autocomplete="off">Ingeniería en Gestión de Recursos Humanos:</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9172 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9172" autocomplete="off">Ingeniería en Gestión de Sistemas de Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9173 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9173" autocomplete="off">Ingeniería en Gestión del Conocimiento Organizacio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9174 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9174" autocomplete="off">Ingeniería en Gestión Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9175 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9175" autocomplete="off">Ingeniería en Gestión Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9176 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9176" autocomplete="off">Ingeniería en Gestión Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9177 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9177" autocomplete="off">Ingeniería en Gestión Tecnológica de Pequeñas y Me</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9178 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9178" autocomplete="off">Ingeniería en Gestión y Negocio Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9179 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9179" autocomplete="off">Ingeniería en Horticultura y Fruticultura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9180 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9180" autocomplete="off">Ingeniería en Industrias Agropecuarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9181 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9181" autocomplete="off">Ingeniería en Industrias Pecuarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9182 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9182" autocomplete="off">Ingeniería en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9183 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9183" autocomplete="off">Ingeniería en Informática de Gestión</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9184 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9184" autocomplete="off">Ingeniería en Informática y Ciencias de la Computa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9185 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9185" autocomplete="off">Ingeniería en Informática y Multimedia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9186 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9186" autocomplete="off">Ingeniería en Informática y Sistemas Computacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9187 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9187" autocomplete="off">Ingeniería en la Administración de la Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9188 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9188" autocomplete="off">Ingeniería en Mantenimiento</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9189 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9189" autocomplete="off">Ingeniería en Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9190 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9190" autocomplete="off">Ingeniería en Marketing Estratégico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9191 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9191" autocomplete="off">Ingeniería en Marketing y Comercio Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9192 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9192" autocomplete="off">Ingeniería en Marketing y Comercio Internacional y</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9193 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9193" autocomplete="off">Ingeniería en Marketing y Gestión de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9194 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9194" autocomplete="off">Ingeniería en Marketing y Negociación Comercial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9195 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9195" autocomplete="off">Ingeniería en Marketing y Negociación Comercial In</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9196 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9196" autocomplete="off">Ingeniería en Marketing, Publicidad y Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9197 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9197" autocomplete="off">Ingeniería en Medio Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9198 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9198" autocomplete="off">Ingeniería en Mercadotecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9199 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9199" autocomplete="off">Ingeniería en Mercadotecnia y Gerencia Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9200 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9200" autocomplete="off">Ingeniería en Negocios Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9201 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9201" autocomplete="off">Ingeniería en Negocios Internacionales: Universida</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9202 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9202" autocomplete="off">Ingeniería en Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9203 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9203" autocomplete="off">Ingeniería en Producción Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9204 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9204" autocomplete="off">Ingeniería en Puertos y Aduanas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9205 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9205" autocomplete="off">Ingeniería en Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9206 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9206" autocomplete="off">Ingeniería en Seguridad Industrial, Salud Ocupacio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9207 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9207" autocomplete="off">Ingeniería en Sistemas Administrativos Computariza</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9208 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9208" autocomplete="off">Ingeniería en Sistemas Computacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9209 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9209" autocomplete="off">Ingeniería en Sistemas Computacionales e Informáti</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9210 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9210" autocomplete="off">Ingeniería en Sistemas Computacionales e Informáti</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9211 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9211" autocomplete="off">Ingeniería en Sistemas de Computación e Informátic</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9212 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9212" autocomplete="off">Ingeniería en Sistemas de Información Gerencial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9213 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9213" autocomplete="off">Ingeniería en Sistemas e Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9214 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9214" autocomplete="off">Ingeniería en sistemas informáticos y de computaci</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9215 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9215" autocomplete="off">Ingeniería en Sistemas Multimedia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9216 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9216" autocomplete="off">Ingeniería en Sistemas y Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9217 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9217" autocomplete="off">Ingeniería en Sistemas y Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9218 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9218" autocomplete="off">Ingeniería en Telecomunicaciones</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9219 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9219" autocomplete="off">Ingeniería en Transportes y Servicios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9220 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9220" autocomplete="off">Ingeniería Forestal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9221 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9221" autocomplete="off">Ingeniería Geologógica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9222 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9222" autocomplete="off">Ingeniería Naval</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9223 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9223" autocomplete="off">Ingeniería Portuario y Aduanero</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9224 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9224" autocomplete="off">Ingeniería Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9225 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9225" autocomplete="off">Ingeniería Tecnológico en Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9226 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9226" autocomplete="off">Ingeniería Tecnológico en Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9227 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9227" autocomplete="off">Ingeniería Tecnológico en Mantenimiento de Equipos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9228 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9228" autocomplete="off">Ingeniería Zootécnica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9229 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9229" autocomplete="off">Ingeniero en Biotecnología Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9230 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9230" autocomplete="off">Ingeniero en Sistemas Informáticos y Networking</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9231 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9231" autocomplete="off">Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9232 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9232" autocomplete="off">Licenciado en Psicología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9233 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9233" autocomplete="off">Licenciatura en Acuicultura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9234 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9234" autocomplete="off">Licenciatura en Administración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9235 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9235" autocomplete="off">Licenciatura en Administración Bancaria e Instituc</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9236 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9236" autocomplete="off">Licenciatura en Administración de Centros de Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9237 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9237" autocomplete="off">Licenciatura en Administración de Cooperativas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9238 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9238" autocomplete="off">Licenciatura en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9239 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9239" autocomplete="off">Licenciatura en Administración de Empresas y Negoc</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9240 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9240" autocomplete="off">Licenciatura en Administración de la Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9241 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9241" autocomplete="off">Licenciatura en Administración de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9242 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9242" autocomplete="off">Licenciatura en Administración de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9243 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9243" autocomplete="off">Licenciatura en Administración de Negocios y Calid</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9244 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9244" autocomplete="off">Licenciatura en Administración de Personal</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9245 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9245" autocomplete="off">Licenciatura en Administración Hospitalaria y Serv</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9246 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9246" autocomplete="off">Licenciatura en Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9247 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9247" autocomplete="off">Licenciatura en Administración Pública, Organizaci</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9248 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9248" autocomplete="off">Licenciatura en Administración y Gerencia de Farma</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9249 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9249" autocomplete="off">Licenciatura en Agroindustrias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9250 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9250" autocomplete="off">Licenciatura en Análisis de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9251 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9251" autocomplete="off">Licenciatura en Antropología Aplicada</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9252 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9252" autocomplete="off">Licenciatura en Banca y Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9253 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9253" autocomplete="off">Licenciatura en Bioanálisis</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9254 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9254" autocomplete="off">Licenciatura en Ciencias Administrativas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9255 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9255" autocomplete="off">Licenciatura en Ciencias Administrativas, Humaníst</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9256 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9256" autocomplete="off">Licenciatura en Ciencias Biológicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9257 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9257" autocomplete="off">Licenciatura en Ciencias de la Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9258 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9258" autocomplete="off">Licenciatura en Ciencias de la Eduacación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9259 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9259" autocomplete="off">Licenciatura en Ciencias de la Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9260 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9260" autocomplete="off">Licenciatura en Ciencias de la Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9261 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9261" autocomplete="off">Licenciatura en Ciencias de la Educación:</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9262 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9262" autocomplete="off">Licenciatura en Ciencias de la Ingeniería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9263 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9263" autocomplete="off">Licenciatura en Ciencias de la Salud</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9264 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9264" autocomplete="off">Licenciatura en Ciencias Económicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9265 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9265" autocomplete="off">Licenciatura en Ciencias Geográficas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9266 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9266" autocomplete="off">Licenciatura en Ciencias Históricas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9267 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9267" autocomplete="off">Licenciatura en Ciencias Públicas y Sociales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9268 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9268" autocomplete="off">Licenciatura en Comercio Exterior</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9269 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9269" autocomplete="off">Licenciatura en Computación Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9270 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9270" autocomplete="off">Licenciatura en Contabilidad Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9271 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9271" autocomplete="off">Licenciatura en Contabilidad Pública y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9272 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9272" autocomplete="off">Licenciatura en Contabilidad Superior y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9273 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9273" autocomplete="off">Licenciatura en Contabilidad y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9274 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9274" autocomplete="off">Licenciatura en Contabilidad y Auditoria Informáti</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9275 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9275" autocomplete="off">Licenciatura en Contabilidad y Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9276 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9276" autocomplete="off">Licenciatura en Docencia Técnica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9277 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9277" autocomplete="off">Licenciatura en Economía y Presupuestos Empresaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9278 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9278" autocomplete="off">Licenciatura en Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9279 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9279" autocomplete="off">Licenciatura en Educación Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9280 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9280" autocomplete="off">Licenciatura en Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9281 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9281" autocomplete="off">Licenciatura en Electrónica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9282 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9282" autocomplete="off">Licenciatura en Enfermería</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9283 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9283" autocomplete="off">Licenciatura en Filosofía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9284 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9284" autocomplete="off">Licenciatura en Gerencia Socioeducativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9285 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9285" autocomplete="off">Licenciatura en Gestión Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9286 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9286" autocomplete="off">Licenciatura en Gestión Empresarial Internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9287 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9287" autocomplete="off">Licenciatura en gestión internacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9288 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9288" autocomplete="off">Licenciatura en Gestión Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9289 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9289" autocomplete="off">Licenciatura en Gestión Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9290 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9290" autocomplete="off">Licenciatura en Gestión Social y Desarrollo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9291 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9291" autocomplete="off">Licenciatura en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9292 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9292" autocomplete="off">Licenciatura en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9293 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9293" autocomplete="off">Licenciatura en Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9294 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9294" autocomplete="off">Licenciatura en Literatura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9295 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9295" autocomplete="off">Licenciatura en Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9296 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9296" autocomplete="off">Licenciatura en Mercadotecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9297 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9297" autocomplete="off">Licenciatura en Organización de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9298 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9298" autocomplete="off">Licenciatura en Orientación Familiar</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9299 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9299" autocomplete="off">Licenciatura en Orientación y Consultoría Familiar</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9300 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9300" autocomplete="off">Licenciatura en Planificación de Proyectos Sociale</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9301 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9301" autocomplete="off">Licenciatura en Programas de Educación Básica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9302 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9302" autocomplete="off">Licenciatura en Programas de Profesionalización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9303 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9303" autocomplete="off">Licenciatura en Psicología del Trabajo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9304 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9304" autocomplete="off">Licenciatura en Psicología Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9305 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9305" autocomplete="off">Licenciatura en Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9306 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9306" autocomplete="off">Licenciatura en Relaciones Empresariales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9307 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9307" autocomplete="off">Licenciatura en Relaciones Internacionales y Cienc</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9308 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9308" autocomplete="off">Licenciatura en Relaciones Internacionales y Diplo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9309 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9309" autocomplete="off">Licenciatura en Seguridad e Higiene Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9310 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9310" autocomplete="off">Licenciatura en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9311 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9311" autocomplete="off">Licenciatura en Sistemas Computacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9312 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9312" autocomplete="off">Licenciatura en sistemas de información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9313 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9313" autocomplete="off">Licenciatura en Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9314 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9314" autocomplete="off">Licenciatura en Sociología y Ciencias Políticas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9315 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9315" autocomplete="off">Licenciatura en Técnicas Bancarias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9316 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9316" autocomplete="off">Licenciatura en Terapia de Lenguaje</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9317 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9317" autocomplete="off">Licenciatura en Terapia de Lenguaje y Administraci</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9318 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9318" autocomplete="off">Licenciatura en Trabajo Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9319 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9319" autocomplete="off">Matemático</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9320 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9320" autocomplete="off">Medicina</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9321 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9321" autocomplete="off">Negocios Internacionales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9322 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9322" autocomplete="off">Pecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9323 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9323" autocomplete="off">Periodismo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9324 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9324" autocomplete="off">Profesor</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9325 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9325" autocomplete="off">Profesor de Ciencias de la Educación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9326 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9326" autocomplete="off">Profesor de Educación Física</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9327 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9327" autocomplete="off">Profesor en Educación Básica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9328 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9328" autocomplete="off">Programación de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9329 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9329" autocomplete="off">Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9330 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9330" autocomplete="off">Programador de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9331 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9331" autocomplete="off">Programador y Analista de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9332 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9332" autocomplete="off">Promotor de Desarrollo Humano</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9333 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9333" autocomplete="off">Promotor del Desarrollo Humano</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9334 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9334" autocomplete="off">Promotor Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9335 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9335" autocomplete="off">Psicología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9336 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9336" autocomplete="off">Psicología Administrativa Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9337 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9337" autocomplete="off">Psicología Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9338 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9338" autocomplete="off">Psicología Educativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9339 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9339" autocomplete="off">Psicología en gerentología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9340 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9340" autocomplete="off">Psicología en Psicorrehabilitación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9341 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9341" autocomplete="off">Psicología Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9342 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9342" autocomplete="off">Psicología infantil</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9343 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9343" autocomplete="off">Psicología Infantil y Psicorrehabilitador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9344 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9344" autocomplete="off">Psicología Laboral y Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9345 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9345" autocomplete="off">Psicología Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9346 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9346" autocomplete="off">Psicología Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9347 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9347" autocomplete="off">Publicista Profesional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9348 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9348" autocomplete="off">Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9349 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9349" autocomplete="off">Química y Farmacéutica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9350 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9350" autocomplete="off">Relaciones Públicas y Comuniación Organizacional</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9351 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9351" autocomplete="off">Secretaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9352 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9352" autocomplete="off">Secretaria Bilingüe</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9353 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9353" autocomplete="off">Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9354 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9354" autocomplete="off">Supervisor Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9355 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9355" autocomplete="off">Técnico Ejecutivo Contador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9356 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9356" autocomplete="off">Técnico Ejecutivo en Información Económica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9357 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9357" autocomplete="off">Técnico Ejecutivo en Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9358 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9358" autocomplete="off">Técnico en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9359 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9359" autocomplete="off">Técnico en Administración de Empresas Agroindustri</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9360 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9360" autocomplete="off">Técnico en Desarrollo de Software</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9361 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9361" autocomplete="off">Técnico en Electromecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9362 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9362" autocomplete="off">Técnico en Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9363 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9363" autocomplete="off">Técnico en Gestión Social y Desarrollo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9364 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9364" autocomplete="off">Técnico en Marketing, Publicidad y Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9365 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9365" autocomplete="off">Técnico en Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9366 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9366" autocomplete="off">Técnico en Procesos Económicos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9367 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9367" autocomplete="off">Técnico en Programación de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9368 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9368" autocomplete="off">Técnico en Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9369 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9369" autocomplete="off">Técnico en Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9370 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9370" autocomplete="off">Técnico en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9371 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9371" autocomplete="off">Técnico Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9372 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9372" autocomplete="off">Técnico Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9373 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9373" autocomplete="off">Técnico Superior en Contabilidad y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9374 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9374" autocomplete="off">Técnico Superior en Desarrollo de Websites</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9375 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9375" autocomplete="off">Técnico Superior en Electricidad y Mecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9376 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9376" autocomplete="off">Técnico Superior en mercadotecnia y gerencia finan</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9377 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9377" autocomplete="off">Técnico Superior en Procesos de Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9378 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9378" autocomplete="off">Técnico Superior en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9379 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9379" autocomplete="off">Técnico Superior Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9380 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9380" autocomplete="off">Tecnología Agraria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9381 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9381" autocomplete="off">Tecnología Agrícola</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9382 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9382" autocomplete="off">Tecnología Agroecológica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9383 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9383" autocomplete="off">Tecnología Agroindustrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9384 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9384" autocomplete="off">Tecnología Agrónoma</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9385 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9385" autocomplete="off">Tecnología Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9386 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9386" autocomplete="off">Tecnología Agropecuaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9387 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9387" autocomplete="off">Tecnología Agrosilvopastoril</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9388 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9388" autocomplete="off">Tecnología Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9389 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9389" autocomplete="off">Tecnología Analista de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9390 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9390" autocomplete="off">Tecnología en Administración</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9391 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9391" autocomplete="off">Tecnología en Administración Bancaria</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9392 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9392" autocomplete="off">Tecnología en Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9393 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9393" autocomplete="off">Tecnología en Administración de Empresas Agropecua</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9394 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9394" autocomplete="off">Tecnología en Administración de la Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9395 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9395" autocomplete="off">Tecnología en Administración de Pequeñas y Mediana</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9396 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9396" autocomplete="off">Tecnología en Administración Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9397 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9397" autocomplete="off">Tecnología en Administración Hospitalaria y Servic</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9398 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9398" autocomplete="off">Tecnología en Administración Judicial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9399 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9399" autocomplete="off">Tecnología en Administración Pública</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9400 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9400" autocomplete="off">Tecnología en Administración y Relaciones Públicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9401 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9401" autocomplete="off">Tecnología en Agroindustrias</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9402 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9402" autocomplete="off">Tecnología en Alimentos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9403 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9403" autocomplete="off">Tecnología en análisis de Recursos Humanos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9404 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9404" autocomplete="off">Tecnología en Análisis de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9405 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9405" autocomplete="off">Tecnología en Análisis de Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9406 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9406" autocomplete="off">Tecnología en Ciencias de la Informática y Computa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9407 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9407" autocomplete="off">Tecnología en Ciencias Económicas y Administrativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9408 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9408" autocomplete="off">Tecnología en Computación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9409 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9409" autocomplete="off">Tecnología en Computación e Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9410 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9410" autocomplete="off">Tecnología en Computación e Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9411 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9411" autocomplete="off">Tecnología en Contabilidad de Costos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9412 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9412" autocomplete="off">Tecnología en Contabilidad y Auditoría</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9413 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9413" autocomplete="off">Tecnología en Creación de Negocios</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9414 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9414" autocomplete="off">Tecnología en Diseño y Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9415 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9415" autocomplete="off">Tecnología en Economía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9416 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9416" autocomplete="off">Tecnología en Economía y Administración de Empresa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9417 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9417" autocomplete="off">Tecnología en Electricidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9418 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9418" autocomplete="off">Tecnología en Estadística Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9419 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9419" autocomplete="off">Tecnología en Gerencia Social y Desarrollo Humano</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9420 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9420" autocomplete="off">Tecnología en Gestión de Marketing y Publicidad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9421 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9421" autocomplete="off">Tecnología en Informática</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9422 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9422" autocomplete="off">Tecnología en Informática Educativa</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9423 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9423" autocomplete="off">Tecnología en Informática y Programación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9424 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9424" autocomplete="off">Tecnología en Investigación en Trabajo Social</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9425 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9425" autocomplete="off">Tecnología en Investigación y Proyectos Sociales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9426 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9426" autocomplete="off">Tecnología en Laboratorio Clínico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9427 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9427" autocomplete="off">Tecnología en Laboratorio de Química y Biología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9428 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9428" autocomplete="off">Tecnología en Mantenimiento</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9429 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9429" autocomplete="off">Tecnología en Mantenimiento Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9430 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9430" autocomplete="off">Tecnología en Marketing y Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9431 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9431" autocomplete="off">Tecnología en Marketing, Publicidad y Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9432 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9432" autocomplete="off">Tecnología en Medio Ambiente</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9433 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9433" autocomplete="off">Tecnología en Mercadotecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9434 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9434" autocomplete="off">Tecnología en Mercadotecnia y Gerencia Financiera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9435 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9435" autocomplete="off">Tecnología en Procesos de Producción</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9436 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9436" autocomplete="off">Tecnología en Procesos Económicos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9437 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9437" autocomplete="off">Tecnología en Producción y Calidad Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9438 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9438" autocomplete="off">Tecnología en Proyectos de Inversión</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9439 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9439" autocomplete="off">Tecnología en Química</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9440 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9440" autocomplete="off">Tecnología en Redes y Sistemas Operativos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9441 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9441" autocomplete="off">Tecnología en Seguridad</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9442 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9442" autocomplete="off">Tecnología en Sistemas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9443 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9443" autocomplete="off">Tecnología en Sistemas Contables Computarizados</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9444 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9444" autocomplete="off">Tecnología en Sistemas Integrados de Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9445 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9445" autocomplete="off">Tecnología en Terapia del Lenguaje</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9446 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9446" autocomplete="off">Tecnología en Ventas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9447 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9447" autocomplete="off">Tecnología Industrial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9448 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9448" autocomplete="off">Tecnología Mecánica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9449 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9449" autocomplete="off">Tecnología Pedagógica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9450 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9450" autocomplete="off">Tecnología Portuaria y Aduanera</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9451 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9451" autocomplete="off">Tecnología Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9452 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9452" autocomplete="off">Tecnología Superior en Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9453 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9453" autocomplete="off">Veterinaria y Zootecnia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9454 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9454" autocomplete="off">Veterinario</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9723 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9723" autocomplete="off">Sociología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 9724 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="9724" autocomplete="off">Antropología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65253 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65253" autocomplete="off">Arquitectura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65264 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65264" autocomplete="off">Licenciado en Letras</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65265 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65265" autocomplete="off">Arquitectura</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65270 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65270" autocomplete="off">Arquitecto</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65288 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65288" autocomplete="off">Tecnicatura Superior en Minoridad y Familia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65289 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65289" autocomplete="off">Geólogo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65290 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65290" autocomplete="off">Biologo</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65297 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65297" autocomplete="off">Administración y Finanzas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65298 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65298" autocomplete="off">Administración de Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65315 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65315" autocomplete="off">Técnico de Laboratorio para Odontólogos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65318 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65318" autocomplete="off">Técnico Programador</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65319 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65319" autocomplete="off">Analista Química Biológica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65330 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65330" autocomplete="off">Técnico Operador de Sonido y Grabación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65335 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65335" autocomplete="off">Locución</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65336 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65336" autocomplete="off">Ingeniero Sanitario y Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65362 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65362" autocomplete="off">Tec. Electrocardiograma</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65363 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65363" autocomplete="off">Tec. Comercialización</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65364 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65364" autocomplete="off">Economía Empresarial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65368 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65368" autocomplete="off">Profesor de Nivel Inicial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65370 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65370" autocomplete="off">Lic. Tec. de la Información</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65371 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65371" autocomplete="off">Magisterio</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65373 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65373" autocomplete="off">Prof. Cs. Naturales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65375 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65375" autocomplete="off">Música</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65380 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65380" autocomplete="off">Artes Electrónicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65382 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65382" autocomplete="off">Chef</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65383 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65383" autocomplete="off">Ciclo Pedagógico</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65405 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65405" autocomplete="off">Profesor de Historia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65412 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65412" autocomplete="off">Profesor de Geografía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65416 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65416" autocomplete="off">Administración de Redes</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65421 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65421" autocomplete="off">Lic. Obstetricia</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65442 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65442" autocomplete="off">Lic. Música y Tecnología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65458 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65458" autocomplete="off">Ciencias Geologicas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65460 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65460" autocomplete="off">Antrología</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65467 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65467" autocomplete="off">Martillero Público</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65468 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65468" autocomplete="off">Restauración y conservación de Bienes Culturales</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65469 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65469" autocomplete="off">Lic. Realización y Producción de Medios Audivisual</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65470 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65470" autocomplete="off">Téc. Aeronáutica</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65471 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65471" autocomplete="off">Ing. Sanitaria y Ambiental</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65472 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65472" autocomplete="off">Esp. Adm. Mercado Eléctrico y del Gas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65474 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65474" autocomplete="off">Dir. y Gestión de Marketing</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65475 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65475" autocomplete="off">Dir. Empresas</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65476 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65476" autocomplete="off">Prof. Inglés</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65477 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65477" autocomplete="off">Ing. Vías de Comunicación</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65480 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65480" autocomplete="off">Lic. Geografía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65484 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65484" autocomplete="off">Téc. Vial</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65485 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65485" autocomplete="off">Téc. Energía</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65487 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65487" autocomplete="off">Ingeniería en Recursos Hídricos</option>
                        <option @if (isset($cv->carrerSelected)) @if( $cv->carrerSelected == 65488 ) @php $carrerSelected = 'selected' @endphp {{ $carrerSelected }} @endif @endif value="65488" autocomplete="off">Prof. Artes Plásticas</option>
                    </select>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row spacingForm">
                    <p style="margin-top: 5px"></p>
                    <span class="col-form-label col-sm-2 pt-0 ">Máximo nivel de estudio</span>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{-- @php $cv->carrerLevel = 0 @endphp --}}
                            <input class="form-check-input" type="radio" name="carrerLevel" id="gridRadios1" value="1" @if (isset($cv->carrerLevel)) @if( $cv->carrerLevel == 1 ) checked @endif @endif />
                            <label class="form-check-label" for="gridRadios1">
                            Primarios
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carrerLevel" id="gridRadios2" value="2" @if (isset($cv->carrerLevel)) @if( $cv->carrerLevel == 2 ) checked @endif @endif />
                            <label class="form-check-label" for="gridRadios2">
                            Secundarios
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carrerLevel" id="gridRadios3" value="3" @if (isset($cv->carrerLevel)) @if( $cv->carrerLevel == 3 )  checked @endif @endif/>
                            <label class="form-check-label" for="gridRadios3">
                            Terciarios
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="carrerLevel" id="gridRadios4" value="4" @if (isset($cv->carrerLevel))  @if( $cv->carrerLevel == 4 )  checked @endif @endif/>
                            <label class="form-check-label" for="gridRadios4">
                            Universitarios
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row spacingForm">
                    <span class="col-form-label col-sm-2 pt-0">Avance</span>
                    <div class="col-sm-10">
                        {{-- @php $cv->carrerAdvance = "0" @endphp --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carrerAdvance" id="gridRadios1" value="1" @if (isset($cv->carrerAdvance)) @if( $cv->carrerAdvance == 1 ) checked @endif @endif/>
                            <label class="form-check-label" for="gridRadios1">Completo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carrerAdvance" id="gridRadios2" value="2" @if (isset($cv->carrerAdvance)) @if( $cv->carrerAdvance == 2 ) checked @endif @endif />
                            <label class="form-check-label" for="gridRadios2">Cursando</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carrerAdvance" id="gridRadios3" value="3" @if (isset($cv->carrerAdvance)) @if( $cv->carrerAdvance == 3 ) checked @endif @endif />
                            <label class="form-check-label" for="gridRadios3">Incompleto</label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="tab">
    <p style="margin-top: 22px"></p>
    <span class="alert alert-success" role="alert">Adjuntar Curriculum</span>
    @if (isset($cv->dni))
        <p style="margin-top: 10px"></p>
        <div id="archivo">
            <div style="border: 1px solid gray" >
                <p style="margin-top: 10px"></p>
                <div class="form-group row spacingForm  align-items-center spacingForm">
                    <div class="col-auto">
                        <label class="form-check-label" for="form11Example4">
                            Último CV subido:
                        </label>
                    </div>
                    <div class="col-auto">
                        <a href="{{ asset('uploads/' . $cv->filename) }}" target="_blank">
                            <svg id="file-13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="35" height="35"><path id="primary" d="M6,21a1,1,0,0,1-1-1V7L9,3h9a1,1,0,0,1,1,1V20a1,1,0,0,1-1,1Zm9-4H9m6-4H9m6-4H9" style="fill: none; stroke: rgba(0, 104, 255, 0.77); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>



                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="replaceCV" onchange="valueChanged()" />
                        <label class="form-check-label" for="form11Example2"> Reemplazar </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 spacingForm">
                    <input type="file" name="file" id="inputFile" class=" form-control  file-loading col spacingForm @error('file') is-invalid @enderror" value="{{ asset('uploads/' . $cv->filename) }}"  style="display:none;"  >
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
        </div>
    @else
        <p style="margin-top: 10px"></p>
        {{-- <input class="form-control" type="file" name="fileCv" id="formFileMultiple" multiple /> --}}

        <input type="file" name="file" id="inputFile" class="form-control @error('file') is-invalid @enderror">
        @error('file')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    @endif
    {{-- <div class="form-group mt-5"></div>
        <div class="form-group row mt-20">
            <div class="col-sm-10 mt-20">
                <button id="form-btn" class="btn btn-primary mt-20" type="submit">Enviar</button>

            </div>
        </div>
    </div> --}}
</div>
<p style="margin-bottom: 10px;"></p>
<div style="overflow:auto;">
<div style="text-align: center;">
<button type="button" class="step-button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
<button type="button" class="step-button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
</div>
</div>
<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
</div>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Enviar";
      } else {
        document.getElementById("nextBtn").innerHTML = "Siguiente";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
    //   for (i = 0; i < y.length; i++) {
    //     // If a field is empty...
    //     if (y[i].value == "") {
    //       // add an "invalid" class to the field:
    //       y[i].className += " invalid";
    //       // and set the current valid status to false
    //       valid = false;
    //     }
    //   }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    </script>
