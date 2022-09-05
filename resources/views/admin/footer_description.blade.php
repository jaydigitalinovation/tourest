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
               <a href="{{url('/admin/footer_description')}}"><span>Footer Description</span></a>
            </li>
         </ul>
        </div>

          <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Footer Description</h4>
         
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                
               </div>
            </div>
         </div>

          <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped text">

              @foreach($footer_description as $id)
                
                <tr>
                  <th>Logo</th>
                </tr>
                 <tr>

                  <th class="text">
                    <img src="/uploads/{{$id->image}}" width="100" height="100">
                  </th>

                 </tr>

                 <tr>
                  
                  <th>Description</th>
                 </tr>

                 <tr>

                  <th class="text bg-black">{!!$id->description!!}</th>              
                  </tr>

                  <tr>

                     <th><button class="clo btn0"><a href="{{url('admin/update_footer_description_data')}}/{{$id->id}}">update</a></button></th>  
                    

                  </tr>

                 @endforeach
                    
              
            </table>
            
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
    .bg-black{
      background-color: #0000007a;
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
