<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
	<div class="col">
    <h1 class="=mt-3">Daftar Baju </h1>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Katalog</th>
      <th scope="col">Bahan</th>
      <th scope="col">More</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="/img/yale.jpeg" alt="" width="200"></td>
      <td>Yale Bulldog</td>
      <td>
        <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>

<?= $this->endSection(); ?>