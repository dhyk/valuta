<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Valuta</li>
                                <li class="breadcrumb-item">Soal</li>
                                <li class="breadcrumb-item active">Daftar Soal</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Daftar Soal</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">

                        <p class="sub-header">Berikut merupakan daftar soal-soal yang terdapat pada sistem.</p>

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="bg-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Kategori Soal</th>
                                    <th>Deskripsi Soal</th>
                                    <th>User</th>
                                    <th>Rating Soal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>DML</td>
                                    <td>Singapore bla</td>
                                    <td>Dhykdika</td>
                                    <td>10/20</td>
                                    <td>
                                        <a href="<?= base_url().'/soal_detail' ?>"><button class="btn btn-info waves-effect waves-light btn-xs">Detail</button></a>
                                        <a href="<?= base_url().'/soal_ubah' ?>"><button class="btn btn-orange waves-effect waves-light btn-xs">Ubah</button></a>
                                        <a><button class="btn btn-danger waves-effect waves-light btn-xs">Hapus</button></a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

