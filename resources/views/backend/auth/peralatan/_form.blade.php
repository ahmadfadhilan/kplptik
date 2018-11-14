
        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label(__('Kode Barang'))->class('col-md-2 form-control-label')->for('first_name') }}

                    <div class="col-md-10">
                        {{ Form::text('kode_barang',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Nama Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('nama_barang',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Merk_Type'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('merk',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Jumlah Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::number('jumlah',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Asal Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('asal_barang',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Harga Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('harga',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Kondisi Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('kondisi_barang',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Bukti Milik'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('bukti_milik',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Penguasaan'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('penguasaan',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('KIB'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('KIB',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('Tahun Masuk Barang'))->class('col-md-2 form-control-label')->for('last_name') }}
                    <div class="col-md-10">
                      {{ Form::text('tahun',  null, [ 'class' => 'form-control'])}}
                    </div><!--col-->
                </div><!--form-group-->

            </div><!--col-->
        </div><!--row-->
