@extends('admin.layouts.index')

@section('title', 'Danh sách bất động sản')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách bất động sản</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bất động sản</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Ngày đăng</th>
                        <th>Số ngày</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($realStates as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->post_days }}</td>
                                <td>{{ $item->post_status }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
</section>

@endsection
