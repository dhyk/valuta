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
                                <li class="breadcrumb-item active">Ubah Soal</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ubah Soal</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <p class="sub-header">
                            Isikan soal baru pada form dibawah ini. Sistem melakukan pengecekan jawaban benar salah berdasarkan hasil query dan menilai kemiripan query.
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Deskripsi Soal</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Kategori</label>
                                        <div class="col-md-10">
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Update</option>
                                                <option>Delete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Query Environment</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                            <p class="sub-header text-orange">
                                                Query yang digunakan untuk mempersiapkan environment sebelum mengeksekusi jawaban.
                                            </p>
                                            <div class="text-right">
                                                <a><button class="btn btn-info waves-effect waves-light btn-xs">Cek Query</button></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Query Jawaban</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                            <p class="sub-header text-orange">
                                                Query yang digunakan untuk dinilai.
                                            </p>
                                            <div class="text-right">
                                                <a><button class="btn btn-info waves-effect waves-light btn-xs">Cek Query</button></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Query Checking</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                            <p class="sub-header text-orange">
                                                Query yang digunakan untuk melihat hasil jawaban.
                                            </p>
                                            <div class="text-right">
                                                <a><button class="btn btn-info waves-effect waves-light btn-xs">Cek Query</button></a>
                                            </div>
                                        </div>

                                    </div>


                                </form>
                            </div>



                        </div>





                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->