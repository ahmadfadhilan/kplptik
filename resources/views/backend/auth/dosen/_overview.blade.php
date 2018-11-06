<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>NIDN</th>
                <td>{{ $dosen->nidn }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $dosen->nama }}</td>
            </tr>

            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{!! $dosen->tempat_lahir !!}, {!! $dosen->tanggal_lahir !!}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive-->
