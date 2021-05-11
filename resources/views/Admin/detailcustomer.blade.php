@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Detail Customer</h1>
        <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" readonly class="form-control" value="{{$user->name}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" readonly class="form-control" value="{{$user->email}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Usia</label>
                    <div class="col-sm-4">
                        <input type="text" required="required" id="usia" name="usia" readonly class="form-control" value="{{$user->usia}}">
                    </div>
                    <div class="col-sm-1">
                    <label class="col-form-label">tahun</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" readonly class="form-control" value="{{$user->gender}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                    <input type="text" required="required" id="no_telepon" name="no_telepon" readonly class="form-control" value="{{$user->no_telepon}}">
                    </div>
                </div>

				<button type="button" class="btn btn-danger" onclick="window.location.href='/detailcustomer/{{$user->user_id}}'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Edit</button>
            </form>


        </div>
    </div>
</div>

@include('admin.footeradmin')