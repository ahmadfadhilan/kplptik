<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>NIP</th>
                <td>{{ $tendik->nip }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $tendik->nama }}</td>
            </tr>

            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{!! $tendik->tempat_lahir !!}, {!! $tendik->tanggal_lahir !!}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive-->
