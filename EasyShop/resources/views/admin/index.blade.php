@extends('admin.master')

@section('content')

  <section id="container" class="">

        @include('admin.sidebar')

        <section id="main-content">
            <section class="wrapper">
              <section class="panel">
                          <div id="c-slide" class="carousel slide auto panel-body">
                              <ol class="carousel-indicators out">
                                  <li class="" data-slide-to="0" data-target="#c-slide"></li>
                                  <li class="active" data-slide-to="1" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="2" data-target="#c-slide"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item text-center">
                                      <h3>Creative is new model of Admin</h3>
                                      <small class="">Based on Bootstrap 3</small>
                                  </div>
                                  <div class="item text-center active">
                                      <h3>Massive UI Elements</h3>
                                      <small class="">Fully Responsive</small>
                                  </div>
                                  <div class="item text-center">
                                      <h3>Well Documentation</h3>
                                      <small class="">Easy to Use</small>
                                  </div>
                              </div>
                              <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="arrow_carrot-left_alt2"></i>
                              </a>
                              <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="arrow_carrot-right_alt2"></i>
                              </a>
                          </div>
                      </section>
            </section>
          </section>

</section>

@endsection
