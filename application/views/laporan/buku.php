<div class="container-fluid">

<h3>Laporan Data Buku</h3>

<a href="<?= site_url('buku/cetak_peminjaman?bulan='. $bulan); ?>"
    target="_blank" class="btn btn-success btn-sm">Cetak PDF</a>

<table class="table table-bordered mt-3">
<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Stok</th>
</tr>

<?php $no=1; foreach($data as $b): ?>
<tr>
<td><?= $no++; ?></td>
<td><?= $b->kode_buku; ?></td>
<td><?= $b->judul; ?></td>
<td><?= $b->nama_kategori; ?></td>
<td><?= $b->stok; ?></td>
</tr>
<?php endforeach; ?>

</table>

</div>