
        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label(__('NIP'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('nip',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Nama'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('nama',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Tempat Lahir'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('tempat_lahir',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Tanggal Lahir'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::date('tanggal_lahir',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

            </div><!--col-->
        </div><!--row-->
