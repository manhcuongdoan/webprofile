@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="color: #005288">Profile</h1>
    <form action="/profile" enctype="multipart/form-data" method="post">
        @csrf
            <label for="fullname">Họ và tên: </label>
            <input type="text" name="fullname" id="">
            <br><br>
            <label for="gender">Giới tính: </label>
            <select name="gender" id="cars">
                <option value="m">Nam</option>
                <option value="f">Nữ</option>
            </select>
            <br><br>
            <label for="address">Địa chỉ: </label>
            <input type="text" name="address" id="">
            <br><br>
            <label for="phonenumber">Số điện thoại: </label>
            <input type="text" name="phonenumber" id="">
            <br><br>
            <label for="programminglanguage">Ngôn ngữ lập trình: </label>
            <select name="programminglanguage" id="">
                <option value="c++">C++</option>
                <option value="java">Java</option>
                <option value="php">Php</option>
                <option value="python">Python</option>
            </select>
            <br><br>
            <label for="skill">Kĩ năng: </label>
            <input type="text" name="skill" id="">
            <br><br>
            <label for="aboutyou">Về bạn: </label>
            <textarea name="aboutyou" rows="4" cols="50"></textarea>
            <br><br>
            <label for="expectation">Kì vọng: </label>
            <textarea name="expectation" rows="4" cols="50"></textarea>
            <br><br>
            <input type="submit" value="Cập nhật" style="color: #005288">
    </form>
</div>
@endsection

