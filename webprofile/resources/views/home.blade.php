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
                     <select class="form-control">
                           <option value="" disabled selected>Tất cả các địa điểm</option>
                           <option value="Hà nội">Hà nội</option>
                           <option value="Tp Hồ Chí Minh">Tp Hồ Chí Minh</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-3 col-3 pl-1 pr-0">
                  <div class="input-group">
                     <span class="input-group-text"><i class="fa fa-code" aria-hidden="true"></i></span>
                     <select class="form-control">
                           <option value="" disabled selected>Tất cả các ngôn ngữ</option>
                           <option value="C++">C++</option>
                           <option value="Python">Python</option>
                           <option value="PHP">PHP</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-2 pl-1">
                  <button class="btn btn-outline-secondary" type="button">Tìm kiếm</button>
               </div>
               
         </div>
      </form>
   <div class="row"> 
      <div class="col-12">
         <div class="card w-100 mb-2">
            <div class="card-body">
               <h5 class="card-title">Tuyển lập trình viên PHP</h5>
               <h6 class="card-subtitle mb-2 text-muted">Công ty TNHH Senspark</h6>
               <h6 class="card-subtitle mb-2 text-muted">TP Hồ chí Minh</h6>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
         </div>
         <div class="card w-100 mb-2">
            <div class="card-body">
               <h5 class="card-title">Tuyển lập trình viên C++</h5>
               <h6 class="card-subtitle mb-2 text-muted">Công ty TNHH Senspark</h6>
               <h6 class="card-subtitle mb-2 text-muted">TP Hồ chí Minh</h6>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               <a href="#" class="btn btn-primary">Chi tiết</a>
            </div>
         </div>
      </div>
   </div>

</div>
@endsection