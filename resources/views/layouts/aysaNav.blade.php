<div class="container header hidden-xs visible-sm-block visible-md-block visible-lg-block">
        <div class="aysa-navbar-row">
            <div class="logo">
                <a class="aWithRootUrl" href="https://www.aysa.com.ar/">
                <img src="{{ asset('/img/from-aysa-web/logo.png') }}" alt="" class="img-responsive" style="border-radius: 10px" />
                </a>
            </div>
            <div class="logo">
              <a class="aWithRootUrl" href="https://www.aysa.com.ar/">
                <img src="{{ asset('/img/logo-sgbatos-head.png') }}" alt="" class="img-responsive sgbatos" style="border-radius: 10px" />
              </a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-10 col-sm-10 no-pd">
            <nav class="navbar navbar-aysa">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu">
                  <li class="dropdown">
                    <a href="/applicants/create" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Carga de
                      CV</a>
                    <ul class="dropdown-menu"></ul>
                  </li>

                  <li class="dropdown">
                    {{-- <a href="{{ route('curriculums.index') }}" class="dropdown-toggle" role="button" aria-haspopup="true"
                      aria-expanded="false">Listado de CV enviados</a> --}}
                    <ul class="dropdown-menu"></ul>
                  </li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
          <!-- /.col-sm-2 -->
        </div>
        <!-- /.row -->
</div>