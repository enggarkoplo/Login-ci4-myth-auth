<?= $this->extend('layout/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User List</h1>

  <div class="table-responsive">
    <table class="table caption-top text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($users as $a) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $a->username; ?></td>
            <td><?= $a->email; ?></td>
            <td><?= $a->name; ?></td>
            <td>
              <a href="<?= base_url('admin/' . $a->userid); ?>" class="btn btn-info">detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>



</div>

<?= $this->endSection('page-content'); ?>