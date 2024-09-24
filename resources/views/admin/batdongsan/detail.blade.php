@extends('admin.layouts.index')

@section('title', 'Bất động sản')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Chi tiết bất động sản</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-transaction">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Infomation</a>
                            </li>
                        </ul>
                        </div>
                        <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Chủ bất động sản</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->user->name }}" disabled>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Type</label>
                                                <select class="form-control" name="property_type" id="property_type">
                                                    <option value="sale" {{ $realState->property_type == 'sale' ? 'selected':''}}>Bán</option>
                                                    <option value="rent" {{ $realState->property_type == 'sale' ? 'selected':''}}>Cho thuê</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Loại</label>
                                                <select class="form-control" name="property_category" id="property_category">
                                                    <option value="house" {{ $realState->property_category == 'house' ? 'selected':''}}>Nhà</option>
                                                    <option value="land" {{ $realState->property_category == 'land' ? 'selected':''}}>Đất</option>
                                                    <option value="apartment" {{ $realState->property_category == 'apartment' ? 'selected':''}}>Biệt thự</option>
                                                    <option value="office" {{ $realState->property_category == 'office' ? 'selected':''}}>BĐS thương mại</option>
                                                    <option value="villa" {{ $realState->property_category == 'villa' ? 'selected':''}}>Căn hộ chung cư</option>
                                                    <option value="commercial" {{ $realState->property_category == 'commercial' ? 'selected':''}}>Văn phòng</option>
                                                    <option value="industrial" {{ $realState->property_category == 'industrial' ? 'selected':''}}>BĐS công nghiệp</option>
                                                    <option value="agricultural" {{ $realState->property_category == 'agricultural' ? 'selected':''}}>BĐS nông nghiệp</option>
                                                    <option value="spiritual" {{ $realState->property_category == 'spiritual' ? 'selected':''}}>BĐS tâm linh</option>
                                                    <option value="service" {{ $realState->property_category == 'service' ? 'selected':''}}>BĐS dịch vụ</option>
                                                    <option value="other" {{ $realState->property_category == 'other' ? 'selected':''}}>BĐS khác</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Địa chỉ chi tiết</label>
                                        <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->detailAddress }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->title }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mô tả</label>
                                        <textarea class="form-control" rows="5">{{ $realState->description }}</textarea>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Diện tích</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->area }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Giá</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->price }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Đơn vị</label>
                                                <select class="form-control" name="price_unit" id="price_unit">
                                                    <option value="vnd" {{ $realState->price_unit == 'vnd' ? 'selected':''}}>VND</option>
                                                    <option value="price_per_m2" {{ $realState->price_unit == 'price_per_m2' ? 'selected':''}}>Giá/m2</option>
                                                    <option value="negotiable" {{ $realState->price_unit == 'negotiable' ? 'selected':''}}>Thỏa thuận</option>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="display: block">Hồ sơ pháp lý</label>
                                        <select class="form-control" name="legal_documents" id="legal_documents">
                                            <option value="none" {{ $realState->legal_documents == 'none' ? 'selected':''}}>Không</option>
                                            <option value="red_book" {{ $realState->legal_documents == 'red_book' ? 'selected':''}}>Sổ đỏ/ Sổ hồng</option>
                                            <option value="sale_contract" {{ $realState->legal_documents == 'sale_contract' ? 'selected':''}}>Hợp đồng mua bán</option>
                                            <option value="pending" {{ $realState->legal_documents == 'pending' ? 'selected':''}}>Đang chờ xử lý</option>
                                        </select>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Số phòng ngủ</label>
                                                <input type="number" class="form-control " placeholder="Enter ..." value="{{ $realState->num_of_bedrooms }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Số phòng tắm, vệ sinh</label>
                                                <input type="number" class="form-control " placeholder="Enter ..." value="{{ $realState->num_of_bathrooms }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Số tầng</label>
                                                <input type="number" class="form-control " placeholder="Enter ..." value="{{ $realState->num_of_floors }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" style="display: block">Hướng nhà</label>
                                                <select class="form-control" name="house_direction" id="house_direction">
                                                    <option value="east" {{ $realState->house_direction == 'east' ? 'selected':''}}>Đông</option>
                                                    <option value="west" {{ $realState->house_direction == 'west' ? 'selected':''}}>Tây</option>
                                                    <option value="south" {{ $realState->house_direction == 'south' ? 'selected':''}}>Nam</option>
                                                    <option value="north" {{ $realState->house_direction == 'north' ? 'selected':''}}>Bắc</option>
                                                    <option value="northeast" {{ $realState->house_direction == 'northeast' ? 'selected':''}}>Đông Bắc</option>
                                                    <option value="northwest" {{ $realState->house_direction == 'northwest' ? 'selected':''}}>Tây Bắc</option>
                                                    <option value="southeast" {{ $realState->house_direction == 'southeast' ? 'selected':''}}>Tây Nam</option>
                                                    <option value="southwest" {{ $realState->house_direction == 'southwest' ? 'selected':''}}>Đông Nam</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Hướng ban công</label>
                                                <select class="form-control" name="balcony_direction" id="balcony_direction">
                                                    <option value="east" {{ $realState->house_direction == 'east' ? 'selected':''}}>Đông</option>
                                                    <option value="west" {{ $realState->house_direction == 'west' ? 'selected':''}}>Tây</option>
                                                    <option value="south" {{ $realState->house_direction == 'south' ? 'selected':''}}>Nam</option>
                                                    <option value="north" {{ $realState->house_direction == 'north' ? 'selected':''}}>Bắc</option>
                                                    <option value="northeast" {{ $realState->house_direction == 'northeast' ? 'selected':''}}>Đông Bắc</option>
                                                    <option value="northwest" {{ $realState->house_direction == 'northwest' ? 'selected':''}}>Tây Bắc</option>
                                                    <option value="southeast" {{ $realState->house_direction == 'southeast' ? 'selected':''}}>Tây Nam</option>
                                                    <option value="southwest" {{ $realState->house_direction == 'southwest' ? 'selected':''}}>Đông Nam</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" style="display: block">Nội thất</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->furniture }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" style="display: block">Link youtube</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->video_link }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Tên</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">SĐT</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" style="display: block">Email</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->email }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" style="display: block">Ngày đăng</label>
                                                <input type="date" class="form-control " placeholder="Enter ..." value="{{ $realState->start_date }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" style="display: block">Số ngày</label>
                                                <input type="text" class="form-control " placeholder="Enter ..." value="{{ $realState->post_days }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="" style="display: block">Status</label>
                                        <select class="form-control" name="post_status" id="post_status">
                                            <option value="pending_approval" {{ $realState->post_status == 'none' ? 'selected':''}}>Chờ duyệt</option>
                                            <option value="pending_revision" {{ $realState->post_status == 'red_book' ? 'selected':''}}>Chờ sửa duyệt</option>
                                            <option value="rejected" {{ $realState->post_status == 'sale_contract' ? 'selected':''}}>Không duyệt</option>
                                            <option value="active" {{ $realState->post_status == 'pending' ? 'selected':''}}>Active</option>
                                        </select>

                                    </div>




                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    const inputs = document.querySelectorAll('.formattedNumberInput');

    inputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value;
            value = value.replace(/[^0-9]/g, '');
            value = new Intl.NumberFormat('vi-VN').format(value);
            e.target.value = value;
        });
    });
</script>

@endsection
