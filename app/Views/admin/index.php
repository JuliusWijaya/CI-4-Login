<!-- Begin Page Content -->
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List User</h1>
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Username</th>
                        <th scope="col" class="pl-5">Email</th>
                        <th scope="col" class="mr-3 pr-4">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $usr) : ?>
                    <tr>
                        <th scope="row" class="align-middle"><?= $i++; ?></th>
                        <td class="align-middle"><?= $usr['username']; ?></td>
                        <td class="align-middle"><?= $usr['email']; ?></td>
                        <td class="align-middle"><?= $usr['name']; ?></td>
                        <td class="align-middle">
                            <a href="<?= base_url('admin/' . $usr['userid']); ?>" class="btn btn-success">
                                <b>Detail</b>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>