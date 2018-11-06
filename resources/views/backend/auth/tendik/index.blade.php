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
                    {{ __('Manajemen Tendik') }} <small class="text-muted">{{ __('List Tendik') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
              <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                  <a href="{{ route('tendik.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
              </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($tendik as $tendik)
                              <tr>
                                  <td>{{ $tendik->nip }}</td>
                                  <td>{{ $tendik->nama }}</td>
                                  <td>{{ $tendik->tempat_lahir }}, {{ $tendik->tanggal_lahir}}</td>
                                  <td >
                                      <a href="{{ route('tendik.show', [$tendik->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="fa fa-eye"> </i>
                                      </a>
                                      <a href="{{ route('tendik.edit', [$tendik->id]) }}" class="btn btn-sm btn-outline-primary">
                                          <i class="svg-inline fa fa-edit fa-w-18"> </i>
                                      </a>
                                      {!! Form::open(array(
                                          'style' => 'display: inline-block;',
                                          'method' => 'DELETE',
                                          'onsubmit' => "return confirm('".trans("Apakah Kamu Yakin?")."');",
                                          'route' => ['tendik.destroy', $tendik->id])) !!}
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
