<section class="content-header">
    <h1>
        Data User
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i></a></li>
        <li class="active">User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>

            <div class="pull-right">
                <a href="<?= site_url('user/add_user') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah User</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Posisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->nama_user ?></td>
                            <td><?= $data->username_user ?></td>
                            <td><?= $data->posisi_user == 1 ? "Admin" : "Kasir" ?></td>
                            <td class="text-center" width="180px">
                                <a href="<?php echo site_url("admin/edit_user/"); ?>" class="btn btn-warning"><span
                                        class="fa fa-pencil"> Edit</a>
                                <a href="<?php echo site_url("admin/delete_user/"); ?>" class="btn btn-danger"><span
                                        class="fa fa-trash"> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>