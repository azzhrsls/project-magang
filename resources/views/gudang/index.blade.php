@extends('layouts.main')

@section('title_content', 'Lihat Gudang')

@section('page_title', 'Lihat Gudang')

@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gudang A </p>
                    <h5 class="font-weight-bolder">
                      53,000
                    </h5>
                    <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder"></span>
                        <a href="{{ url ('gudang/gudanga')}}">Lihat data selengkapnya</a>
                      </p>

                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-8" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gudang B</p>
                    <h5 class="font-weight-bolder">
                      2,300
                    </h5>
                    <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder"></span>
                        <a href="{{ url ('gudang/gudangb')}}">Lihat data selengkapnya</a>
                      </p>

                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gudang C</p>
                    <h5 class="font-weight-bolder">
                      +3,462
                    </h5>
                    <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder"></span>
                        <a href="{{ url ('gudang/gudangc')}}">Lihat data selengkapnya</a>
                      </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gudang D</p>
                    <h5 class="font-weight-bolder">
                      $103,430
                    </h5>
                    <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder"></span>
                        <a href="{{ url ('gudang/gudangd')}}">Lihat data selengkapnya</a>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
