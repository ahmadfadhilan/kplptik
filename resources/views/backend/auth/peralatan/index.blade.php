@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.bangunan'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Manajemen Dosen') }} <small class="text-muted">{{ __('List Dosen') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
              <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                  <a href="{{ route('dosen.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
              </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($dosen as $dosen)
                              <tr>
                                  <td>{{ $dosen->nidn }}</td>
                                  <td>{{ $dosen->nama }}</td>
                                  <td>{{ $dosen->tempat_lahir }}, {{ $dosen->tanggal_lahir}}</td>
                                  <td >
                                      <a href="{{ route('dosen.show', [$dosen->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="fa fa-eye"> </i>
                                      </a>
                                      <a href="{{ route('dosen.edit', [$dosen->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="svg-inline fa fa-edit fa-w-18"> </i>
                                      </a>
                                      {!! Form::open(array(
                                          'style' => 'display: inline-block;',
                                          'method' => 'DELETE',
                                          'onsubmit' => "return confirm('".trans("Apakah Kamu Yakin?")."');",
                                          'route' => ['dosen.destroy', $dosen->id])) !!}
                                      {!! Form::submit(trans('Delete'), array('class' => 'btn btn-sm btn-danger')) !!}
                                      {!! Form::close() !!}

                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">

                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
