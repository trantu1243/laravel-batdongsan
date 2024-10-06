@extends('admin.layouts.index')

@section('title', 'Add News')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <form action="{{ Route('admin.add-news.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input name="title" type="text"
                                       class="form-control" id="inputTitle"
                                       placeholder="Enter title" autocomplete="none">

                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input name="author" type="text"
                                       class="form-control" id="author"
                                       placeholder="Enter title" autocomplete="none">
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="7" placeholder="Enter ..." name="content"></textarea>
                            </div>
                            <div class="form-group">

                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile" name="image" accept="image/*">
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                              </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!--/. container-fluid -->
@endsection
