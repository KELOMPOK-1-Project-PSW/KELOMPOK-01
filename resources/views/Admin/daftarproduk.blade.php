@include('admin.navadmin')


            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Produk
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($produks as $produk)
                                        <tr>
                                            <td>{{$produk->produk_id}}</td>
                                            <td>{{$produk->nama}}</td>
                                            <td>{{$produk->kategori}}</td>
                                            <td>@currency($produk->harga)</td>
                                            <td><img src="{{url('imgproduk/'.$produk->gambar)}}" width="80px" height="80px" alt=""></td>
                                            <td width="20%"><button type="button" class="btn btn-warning" onclick="window.location.href='/daftarproduk/edit/{{$produk->produk_id}}'"><i
                                                        class="fas fa-edit"></i>
                                                    Edit</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" ><i class="fas fa-trash-alt"></i>
                                                    Hapus</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="window.location.href='daftarproduk/tambah'"><i class="fas fa-plus"></i> Tambah Produk</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger" onclick="window.location.href='daftarproduk/delete/{{$produk->produk_id}}'">Hapus</button>
        </div>
      </div>

    </div>
  </div>



@include('admin.footeradmin')
