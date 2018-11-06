<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>NIDN</th>
                <td>{{ $mahasiswa->nidn }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>

            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{!! $mahasiswa->tempat_lahir !!}, {!! $mahasiswa->tanggal_lahir !!}</td>
            </tr>

            <tr>
                <th>Jurusan</th>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>


        </table>
    </div>
</div><!--table-responsive-->
