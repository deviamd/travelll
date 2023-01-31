<table border="2">
    <h2>Laporan Transaksi</h2>
    <thead>
        <tr style="cursor: pointer;">
            <th>Id</th>
            <th>Id Order</th>
            <th>Total Bayar</th>
            <th>Metode Pembayaran</th>
            <th>Tanggal Pembayaran</th>


        </tr>
    </thead>
    <tbody>
    @foreach($laporan as $row)
<tr>
<td>{{ $loop->iteration + ($laporan->perpage() *  ($laporan->currentPage() -1)) }}</td>
<td>{{ $row->id}}</td>
<td>{{ $row->total_bayar}}</td>
<td>{{ $row->metode_pembayaran }}</td>
<td>{{ $row->tanggal_pembayaran}}</td>


</tr>
@endforeach
</tbody>
