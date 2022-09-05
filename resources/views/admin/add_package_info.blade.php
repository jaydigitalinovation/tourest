@extends('admin.layout.header')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">

  <div class="page my-4 title1" id="AddHomeModel">
        <div class="mt-5">
            <h4 class="mb-4">Details List</h4>
            <div class="detail">

              <div id="success_message"></div>
                <div class="form"> 

                  <!-- action="{{url('/admin/store_add_home_info')}}" -->

                  <ul id="saveform_errList"></ul>
                  <form method="post" enctype="multipart/form-data" id="addData" action="{{url('/admin/store_add_package_info')}}">

                  	@csrf
                          <div class="part">
                              <div class="col-md-12 label">
                                 <label>Image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="image" class="image" onchange="readURL(this);">
                                 @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                                 <img id="blah" src="#" alt="">
                               </div>   
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                 <label>Multi_image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="multi_image[]" class="multi_image" multiple onchange="readURL1(this);">
                                 @if($errors->has('multi_image')) <p class="error_mes">{{ $errors->first('multi_image') }}</p> @endif
                                 <img id="blah" src="#" alt="">
                               </div>   
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Tour_name</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="tour_name" name="tour_name" value="" class="tour_name">
                                  @if($errors->has('tour_name')) <p class="error_mes">{{ $errors->first('tour_name') }}</p> @endif
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Tour_type</label>
                              </div>
                              <div class="col-md-12 data">
                                  <select name="tour_type">
                                    <option value="">Select tour Type</option>
                                    @foreach($userdata as $u)
                                    <option value="{{$u->id}}">{{$u->tour_name}}</option>
                                    @endforeach
                                </select>
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Price</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="price" name="price" value="" class="price">
                                  @if($errors->has('price')) <p class="error_mes">{{ $errors->first('price') }}</p> @endif
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Duration in Days</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="duration" name="duration" value="" class="duration">
                                  @if($errors->has('duration')) <p class="error_mes">{{ $errors->first('duration') }}</p> @endif
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Add Location name</label>
                              </div>
                              <div class="col-md-12 data">
                                  <input type="text" placeholder="location" name="location" value="" class="location">
                                  @if($errors->has('location')) <p class="error_mes">{{ $errors->first('location') }}</p> @endif
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>Description</label>
                              </div>
                              <div class="col-md-12 data">
                                  <textarea type="text" name="description"></textarea>
                                  @if($errors->has('description')) <p class="error_mes">{{ $errors->first('description') }}</p> @endif
                              </div>
                          </div>

                          <div class="part">
                              <div class="col-md-12 label">
                                  <label>detail_description</label>
                              </div>
                              <div class="col-md-12 data">
                                  <textarea type="text" name="detail_description" id="summernote1"></textarea>
                                  @if($errors->has('detail_description')) <p class="error_mes">{{ $errors->first('detail_description') }}</p> @endif
                              </div>
                          </div>
                          
                          <div class="d-block w-100 my-5 TextBoxContainer">
                            <div class="w-75 mx-auto">
                              <div class="part mx-auto w-75">
                                <div class="col-md-12 label">
                                    <label>travel_type_title</label>
                                </div>
                                <div class="col-md-12 data">
                                    <input type="text" placeholder="travel_type_title" name="travel_type_title" value="" class="travel_type_title">
                                    @if($errors->has('travel_type_title')) <p class="error_mes">{{ $errors->first('travel_type_title') }}</p> @endif
                                </div>
                            </div>

                            <div class="part mx-auto w-75">
                                <div class="col-md-12 label">
                                    <label>travel_type_description</label>
                                </div>
                                <div class="col-md-12 data">
                                    <textarea type="text" name="travel_type_description" class="summernote1"></textarea>
                                    @if($errors->has('travel_type_description')) <p class="error_mes">{{ $errors->first('travel_type_description') }}</p> @endif
                                </div>
                            </div>

                            <a class="btnRemove add_section remove_section mx-end" href="">Remove</a>
                            <a class="add_section btnAdd" href="">Add More</a>
                          </div>
                          </div>


                          <button type="submit" class="glow-on-hover my-5">submit form</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>

<style type="text/css">
  .remove_section{
    display: block;
    margin-bottom: 1%;
    margin-left: 66%!important;
  }
  .add_section{
    width: 130px;
    height: 50px;
    display: inline-block;
    background-color: #029e9d;
    margin-left: 14%;
  }
  .add_section:hover{
    background-color: black;
    text-decoration: none;
  }
  .add_section{
    color: white;
    text-decoration: none;
    text-align: center;
    line-height: 3;
  }
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script type="text/javascript">


  $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

  $('#summernote1').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });


  /*$(function () {
    $("#btnAdd").bind("click", function () {


        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);

    });
    
    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });
});
function GetDynamicTextBox(value) {

    return '<input type="text" value = "' + value + '" />&nbsp;'  + '<input name = "DynamicTextBox" type="text" value = "' + value + '" />&nbsp;' +'<input id="btnAdd" type="button" value="Add" />'
        +'<input type="button" value="Remove" class="remove" />'
}*/


  
  $(document).ready(function(){

  $(document).on('click' , '.btnAdd', function(e) {

        e.preventDefault();

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          }
        });

        $.ajax({

        type: "get",
        url: "/admin/add_section",
        datatype: "json",
         success:function(response) {
          
          var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $(".TextBoxContainer").append(div);
        },

        
        error:function (response) {

          alert(22);
      },
      
      });
    });


  });


  $(document).ready(function(){

  $(document).on('click' , '.btnRemove', function(e) {

        e.preventDefault();

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          }
        });

        $.ajax({

        type: "get",
        url: "/admin/remove_section",
        datatype: "json",
         success:function(response) {
          
          $(".btnRemove:last").closest("div").remove();

        },
        error:function (response) {

          alert(22);
      },
      
      });
    });


  });

  function GetDynamicTextBox(value) {

    return '<div class="w-75 mx-auto"><div class="part mx-auto w-75"><div class="col-md-12 label"><label>travel_type_title</label></div><div class="col-md-12 data"><input type="text" placeholder="travel_type_title" name="travel_type_titles[]" value="" class="travel_type_title">@if($errors->has('travel_type_title')) <p class="error_mes">{{ $errors->first('travel_type_title') }}</p> @endif</div></div><div class="part mx-auto w-75"><div class="col-md-12 label"><label>travel_type_description</label></div><div class="col-md-12 data"><textarea type="text" name="travel_type_descriptions[]" class="summernote1"></textarea>@if($errors->has('travel_type_description')) <p class="error_mes">{{ $errors->first('travel_type_description') }}</p> @endif</div></div><a class="add_section remove_section mx-end btnRemove" href="">Remove</a><a class="add_section btnAdd" href="">Add More</a></div>'
}

  
</script>




@endsection




<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

    $(document).on('click' , '.add_info' ,function(e){

      e.preventDefault();

      let formData=new FormData($('#addData')[0]);

      var image=$("input[type=file]")[0].files[0];

      formData.append('fieldImg', image);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $.ajax({

        type:"post",
        url:"/admin/store_add_home_info",
        data:formData,
        enctype: 'multipart/form-data',
        mimeType: 'multipart/form-data',
        contentType:false,
        processData:false,
        datatype: "json",
        success:function(response){

          if(response.status==400){

            $("#saveform_errList").html();
            $("#saveform_errList").addClass('alert alert-success');
            $.each(response.errors , function(key , err_values){
              $('#saveform_errList').append('<li>'+err_values+'</li>');
            });
          }else{

            window.location.href = "{{url('admin/home')}}";
          }
        }
      });
    });
  });
</script> -->