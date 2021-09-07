@extends('layouts.horizontal')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <div class="col-sm-4 col-xl-6">
        <h4 class="mb-1 mt-0">Página Inicial</h4>
    </div>
    {{-- <div class="col-sm-8 col-xl-6">
        <form class="form-inline float-sm-right mt-3 mt-sm-0">
            <div class="form-group mb-sm-0 mr-2">
                <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class='uil uil-file-alt mr-1'></i>Download
                    <i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                        <span>Email</span>
                    </a>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                        <span>Print</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                        <span>Re-Generate</span>
                    </a>
                </div>
            </div>
        </form>
    </div> --}}
</div>
@endsection

@section('content')
<!-- products -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-primary btn-sm float-right">
                    <i class='uil uil-plus'></i> Adicionar
                </a>
                <h5 class="card-title mt-0 mb-0 header-title">Listagem de Visualizações</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Episódio</th>
                                <th scope="col">Última atualização</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Slime Datta Ken 2 Part 2</td>
                                <td>
                                    <a href="#"><i class='uil uil-minus text-danger'></i></a>
                                    09
                                    <a href="#"><i class='uil uil-plus-circle text-success'></i></a>
                                    /12
                                </td>
                                <td>31/08/2021</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Informações" href="#" class="text-info">
                                        <i class='uil uil-search'></i>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Excluir" href="#" class="text-danger">
                                        <i class='uil uil-times'></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<!-- widgets -->
<div class="row">
    <div class="col-xl-6">
        <div class="card" style="max-height: 400px; min-height: 400px;">
            <div class="card-body pt-2">
                <h5 class="mb-4 header-title">Lançamentos de hoje(Terça-feira)</h5>
                <div class="media border-top pt-3">
                    <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Slime Datta Ken 2 Part 2</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Anime</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card" style="max-height: 400px; min-height: 400px;">
            <div class="card-body pt-2 pb-3">
                <h5 class="mb-4 header-title">Anotações</h5>
                <div class="slimscroll" style="max-height: 390px;">
                    <div class="row">
                        <div class="col-xl-10">
                            <label class="custom-control-label" for="task1">
                                Ler a parte do mangá de slime novamente
                            </label>
                            <p class="font-size-13 text-muted">
                                <i class="uil uil-calendar-alt"></i> Salvo em: 06/09/2021
                            </p>
                        </div>
                        <div class="col-xl-2">
                            <button type="button" class="btn btn-success btn-rounded"><i class="uil uil-check"></i> Concluir</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection