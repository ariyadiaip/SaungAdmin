@extends('Admin/NavbarAdmin')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data User</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data User</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <tr>
                          <th>No</th>
                          <th>Nama User</th>
                          <th>Email</th>
                          <th>Total Post</th>
                          <th>Point</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>User 1</td>
                          <td>user1@gmail.com</td>
                          <td>2</td>
                          <td>100</td>
                        </tr>
                        <!-- @foreach($errors as $row)
                        <tr>
                          <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                          <td>{{ $row->namaUserPost }}</td>
                          <td>{{ $row->email }}</td>
                          <td>{{ $row->totalPost }}</td>
                          <td>{{ $row->point }}</td>
                        </tr>
                        @endforeach -->
                        
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div><!-- /.row -->
</div>
@endsection
