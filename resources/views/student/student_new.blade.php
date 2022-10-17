@extends('layouts.app')
@section('content')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h1>Thêm mới thông tin sinh viên</h1>
                    <form method="POST">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="txtFullname">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ngày sinh</label>
                            <input type="date" class="form-control" name="txtBirthday">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="txtAddress">
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-danger" onclick="window.history.back()">Quay lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
