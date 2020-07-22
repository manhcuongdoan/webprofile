@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" onsubmit="">
        @csrf
        <div class="row">
            <div class="form-group col-sm-4 col-4 pr-0">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển" />
                </div>
            </div>
            <div class="form-group col-sm-3 col-3 pl-1 pr-0">
                <div class="input-group"> 
                    <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Tất cả các địa điểm" />
                </div>
            </div>
            <div class="form-group col-sm-3 col-3 pl-1 pr-0">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-code" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Tất cả các ngôn ngữ" />
                    <!-- <select searchable="Tìm kiếm ở đây">
                        <option value="" disabled selected>Tất cả các ngôn ngữ</option>
                        <option value="1">C++</option>
                        <option value="2">Python</option>
                        <option value="3">PHP</option>
                    </select> -->
                </div>
            </div>
            <div class="form-group col-sm-2 pl-1">
                <button class="btn btn-outline-secondary" type="button">Tìm kiếm</button>
            </div>
            
        </div>
    </form>


</div>
@endsection