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
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                               @foreach($user as $users)
                                    <tr>
                                            <td>{{$users -> user_id}}</td>
                                            <td>{{$users -> name}}</td>
                                            <td>{{$users -> alamat}}</td>
                                            <td>{{$users -> no_telepon}}</td>
                                            <td><button type="button" class="btn btn-info" onclick="window.location.href='/detailcustomer/{{$users->user_id}}'"><i class="fas fa-info"></i> Detail</button></td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




@include('admin.footeradmin')
