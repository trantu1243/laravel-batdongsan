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
                                    <a class="btn btn-info btn-sm" href="{{ Route('detail.real-state', ['id' => $item->id])}}">
                                        Detail
                                    </a>

                                    <a class="btn btn-danger btn-sm delete-button" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                    <div class="card-footer">
                        {{ $realStates->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.card-body -->

              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
</section>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel">Xác nhận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="content-popup">
                Bạn có chắc chắn muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <form action="" method="POST" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" id="deleteButton" href="">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div data-base-url="{{ route('delete.real-state', ['id' => 'PLACEHOLDER']) }}" id="urlBasePlaceholder"></div>

<script>
    document.querySelectorAll('.delete-button').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();

            var id = this.getAttribute('data-id');

            var baseUrl = document.getElementById('urlBasePlaceholder').getAttribute('data-base-url');
            var actionUrl = baseUrl.replace('PLACEHOLDER', id);

            document.getElementById('deleteForm').setAttribute('action', actionUrl);
            document.querySelector('#content-popup').textContent = `Bạn có chắc chắn muốn xóa không?`;

            var confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'), {});
            confirmDeleteModal.show();
        });
    });
</script>
@endsection
