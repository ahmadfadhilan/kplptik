<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>Kode Barang</th>
                <td>{{ $peralatan->kode_barang }}</td>
            </tr>

            <tr>
                <th>Nama Barang</th>
                <td>{{ $peralatan->nama_barang }}</td>
            </tr>

            <tr>
                <th>Merk/Tipe</th>
                <td>{{ $peralatan->merk }}</td>
            </tr>

            <tr>
                <th>Jumlah Barang</th>
                <td>{{ $peralatan->jumlah }}</td>
            </tr>

            <tr>
                <th>Asal Barang</th>
                <td>{{ $peralatan->asal_barang }}</td>
            </tr>

            <tr>
                <th>Harga Barang</th>
                <td>{{ $peralatan->harga }}</td>
            </tr>

            <tr>
                <th>Tahun Masuk Barang</th>
                <td>{{ $peralatan->tahun }}</td>
            </tr>

            <tr>
                <th>Kondisi Barang</th>
                <td>{{ $peralatan->kondisi_barang }}</td>
            </tr>

            <tr>
                <th>Bukti Milik</th>
                <td>{{ $peralatan->bukti_milik }}</td>
            </tr>

            <tr>
                <th>Penguasaan</th>
                <td>{{ $peralatan->penguasaan }}</td>
            </tr>

            <tr>
                <th>KIB</th>
                <td>{{ $peralatan->KIB }}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive-->
