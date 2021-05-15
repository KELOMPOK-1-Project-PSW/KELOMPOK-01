@include('admin.navadmin')


            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Pemesanan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $orders)
                                    <tr>
                                            <td>{{$orders->orders_id}}</td>
                                            <td>{{$orders->name}}</td>
                                            <td>@currency($orders->total)</td>
                                            <td><form action="{{route('daftarpemesanan.update',$orders->orders_id)}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}


                                                            <select class="form-control"  required="required" name="keterangan" aria-label="Default select example" >
                                                                <option value="{{$orders->keterangan}}">{{$orders->keterangan}}</option>
                                                                <option value="Verifikasi">Verify</option>
                                                                <option value="Proses">On Process</option>
                                                                <option value="Antar">Delivered</option>
                                                                <option value="Selesai">Done</option>
                                                            </select>

                                                </td>
                                            <td><img src="{{url('buktibayar/'.$orders->bukti_bayar)}}" width="80px" height="80px" alt="" data-toggle="modal" data-target="#myModal{{$orders->orders_id}}"></td>
                                            <td><button type="button" class="btn btn-warning" onclick="window.location.href='detailpemesanan/{{$orders->orders_id}}'"><i class="fas fa-info"></i> Detail</button>
                                            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Simpan Data</button>
                                            </form>
                                            </td>

                                              <div id="myModal{{$orders->orders_id}}" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <img src="{{url('buktibayar/'.$orders->bukti_bayar)}}"  class="img-fluid" >
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                    @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




@include('admin.footeradmin')
