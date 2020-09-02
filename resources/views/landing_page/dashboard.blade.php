@extends('backbone.mainpage')
@push('header')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('vendor/custom-css/sticky-footer-navbar.css')}}">
<style>
.page-content{
  margin-top: 50px;
}
</style>
@endpush
@section('content')
<div class="content-wrapper">
  <div class="invisible" id="inicio">anchor</div>
  {{--Nav Bar--}}
  @include('landing_page.navigator._navbar')
  {{--Nav Bar--}}
  {{--content--}}
  <div class='page-content container-fluid'>
      @include('start.inicio')
      <h3 class="text-center"><b>PROTECCIÓN DE DATOS</b></h3>
      <div class="invisible" id="proteccion_datos">anchor</div>
      @include('protection_datos.proteccion')
      <h3 class="text-center"><b>SOLVENCIA</b></h3>
      @include('solvencia.solvencia')
      <div class="invisible" id="solvencia">anchor</div>
      <h3 class="text-center"><b>DOCUMENTACIÓN</b></h3>
      <div class="invisible" id="documentacion">anchor</div>
      @include('documentacion.documentacion-agregador')
      @include('documentacion.documentacion-agregadorB')
      @include('documentacion.documentacion-agregadorC')
  </div>
  {{--content--}}
  {{--footer--}}
  @include('landing_page.footer._footer-bar')
  {{--footer--}}
</div>

@endsection