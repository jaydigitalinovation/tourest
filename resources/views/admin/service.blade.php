@extends('admin.layout.header')

@section('content')


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

@if(session()->has('error'))
              <div class="alert alert-success" id="newhide">
                  {{session()->get('error')}}
              </div>
              @endif
<div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a><i class="fal fa-chevron-double-right"></i>
            </li>
            
            <li>
               <a href="{{url('/admin/service')}}"><span>Service</span></a>
            </li>
         </ul>
        </div>

          <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Service Description</h4>
         
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                
               </div>
            </div>
         </div>

          <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped text">

              @foreach($service_description as $id)
                  
                  <tr>
                    
                     <th>Sub_title</th>

                 </tr>

                 <tr>

                  <th class="text">{{$id->sub_title}}</th>

                 </tr>

                 <tr>

                  <tr>
                    
                     <th>Title</th>

                 </tr>

                 <tr>

                  <th class="text">{{$id->title}}</th>

                 </tr>

                 <tr>
                  
                  <th>Description</th>
                 </tr>

                 <tr>

                  <th class="text">{!!$id->description!!}</th>              
                  </tr>

                  <tr>

                     <th><button class="clo btn0"><a href="{{url('admin/update_service_description_data')}}/{{$id->id}}">update</a></button></th>  
                    

                  </tr>

                 @endforeach
                    
              
            </table>
            
         </div>

 <div class="page title1" style="display: block;">
  <div id="saveform_errList"></div>
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4">Service List</h4>
                  <button class="btn1"><a href="{{url('/admin/add_service_info')}}" style="color:black;">ADD</a></button>
              </div>
              <div class="detail table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                      </thead>

                      @foreach($userdata as $key=>$u)

                      <tbody>
                          <tr class="data_{{$u->id}}">
                            <td>{{$key+1}}</td>
                            <td>
                              <img src="/uploads/{{$u->image}}" width="100" height="100">
                            </td>
                            <td>
                              {!!$u->icon!!}
                            </td>
                              <td>{{$u->title}}</td>
                              <td>{{$u->description}}</td>
                              <td>
                                <button class="btn2 glow-on-hover"><a href="{{url('/admin/update_service_data')}}/{{$u->id}}"><i class="fal fa-pencil"></i></a></button>
                              </td>
                              <td>
                                <button class="glow-on-hover"><a href="{{url('/admin/delete_service_data')}}/{{$u->id}}"><i class="fal fa-trash-alt"></i></a></button>
                                <!-- <button type="button" value="{{$u->id}}" id="delete_data" class="btn3 btn0 glow-on-hover"><i class="fal fa-trash-alt"></i></button> -->
                              </td>
                          </tr>
                      </tbody>

                      @endforeach
                  </table>
              </div>
          </div>
      </div>



<style type="text/css">
  .glow-on-hover {
        /*width: 50px!important;*/
    }
    .text{

       font-weight: 400;
    }
    .text th{

       text-align: left;

       border: none !important;
    }
    .error_mes{

       color: red;
    }
</style>



@endsection




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

  setTimeout(function() { $(".alert").fadeOut(1500);},5000);
  


  /*$(document).ready(function(){

  $(document).on('click' , '#delete_data', function(e) {

        e.preventDefault();
        var my_id = $(this).val();

          alert("Are you sure to delete whole data??");

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });

          $.ajax({

        type: "get",
        url: "/admin/delete_home_data/"+my_id,
        datatype: "json",
        success:function(response){

          if(response.status == 200)
          {

            $('#saveform_errList').text(response.message);
            $('#saveform_errList').addClass('alert alert-success');
            $('.data_'+my_id).hide();
         
          }else{

             alert("somthing went wrong!!");

          }

          }
      });
    });
  });
  */
</script>
