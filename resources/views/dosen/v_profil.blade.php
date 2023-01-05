@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Profil Dosen</h4>
                    <button type="button" class="btn btn-primary" style="float: right; margin-top: -35px;" onclick="createdMember()">
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah
                    </button>
                    <hr>
                    <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($profil as $key => $v) { ?>
                            <tr>
                                <td><?= $v->id_dosen; ?></td>
                                <td>
                                    <?= $v->nip; ?>
                                </td>
                                <td><?= $v->nama_dosen; ?></td>
                                <td><?= $v->foto_dosen; ?></td>

                                <td>
                                    <button type="button" class="btn btn-primary" onclick="editing(<?= $v->id; ?>)"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger" onclick="deleting(<?= $v->id; ?>)"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        	<?php } ?>

                        </tbody>
                        {{-- {{-- <tbody>
                            @forelse ($datas as $data)
                            <td>{{ ++$no }}</td>
                            <td>{{ $data->id_dosen }}</td>
                            <td>{{ $data->nip }}</td>
                            <td>{{ $data->nama_dosen }}</td>
                            <td>{{ $data->foto_dosen }}</td>
                            <td>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>

                            </td> --}}

                    </table>
                	</div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection

