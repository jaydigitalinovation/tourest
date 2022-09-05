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
               <a href="{{url('/admin/tour_type')}}"><span>Tour type</span></a>
            </li>
         </ul>
        </div>

 <div class="page title1" style="display: block;">
  <div id="saveform_errList"></div>
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4">Portfolio List</h4>
                  <button class="btn1"><a href="{{url('/admin/add_tour_type_info')}}" style="color:black;">ADD</a></button>
              </div>
              <div class="detail table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>Tour_name</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                      </thead>

                      @foreach($userdata as $key=>$u)

                      <tbody>
                          <tr class="data_{{$u->id}}">
                            <td>{{$key+1}}</td>
                              <td>{{$u->tour_name}}</td>
                              <td>
                                <button class="btn2 glow-on-hover"><a href="{{url('/admin/update_tour_type_data')}}/{{$u->id}}"><i class="fal fa-pencil"></i></a></button>
                              </td>
                              <td>
                                <button class="glow-on-hover"><a href="{{url('/admin/delete_tour_type_data')}}/{{$u->id}}"><i class="fal fa-trash-alt"></i></a></button>
                                <!-- <button type="button" value="{{$u->id}}" id="delete_data" class="btn3 btn0 glow-on-hover"><i class="fal fa-trash-alt"></i></button> -->
                              </td>
                          </tr>
                      </tbody>

                      @endforeach
                  </table>
              </div>
          </div>
      </div>







@endsection


<style type="text/css">
  .glow-on-hover {
        /*width: 50px!important;*/
    }
</style>

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
