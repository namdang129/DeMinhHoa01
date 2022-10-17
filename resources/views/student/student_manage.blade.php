@extends('layouts.app')
@section('content')
    <h1 class="display-one text-center">Quản lý sinh viên</h1>

    <a href="/student/create" class="btn btn-outline-success">Thêm mới +</a>


    <table class="table mt-3 text-left">
        <thead>
            <tr>
                <th scope="col">Mã</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->birthday }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="/student/edit/{{ $student->id }}" class="btn btn-outline-primary">Sửa</a>
                        <a href="/student/edit/{{ $student->id }}" class="btn btn-outline-info">Chi tiết</a>
                        <a href="/student/edit/{{ $student->id }}" class="btn btn-outline-danger">Xóa</a>
                        
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script></script>
@endsection
