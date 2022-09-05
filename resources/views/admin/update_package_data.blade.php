@extends('admin.layout.header')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">

  <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">Details List</h4>
            <div class="detail">
                <div class="form">      
                  <form method="post" action="{{url('/admin/store_update_package_data')}}/{{$id}}" enctype="multipart/form-data">  

                  	@csrf

                            <div class="part">
                              <div class="col-md-12 label">
                                 <label>Image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="image" onchange="readURL1(this);" value="">
                                 <img id="blah1" src="/uploads/{{$image}}" width="100px" height="100px" alt="">
                                 @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                                 <input type="hidden" name="oldimage" value="{{$image}}">
                               </div>   
                            </div>

                            <div class="part">
                              <div class="col-md-12 label">
                                 <label>multi_image</label>
                              </div>
                              <div class="col-md-12 d-flex justify-content-between">

                                @foreach($multi_image as $pi)
                                 <img id="blah1" src="/uploads/{{$pi->multi_image}}" width="100px" height="100px" alt="">
                                 <a href="{{url('/admin/update_package_image')}}/{{$pi->id}}"><i class="fal fa-pencil"></i></a>
                                 <a href="{{url('/admin/delete_package_image')}}/{{$pi->id}}"><i class="fal fa-trash-alt"></i></a>
                                 @if($errors->has('multi_image')) <p class="error_mes">{{ $errors->first('multi_image') }}</p> @endif

                                @endforeach
                                 
                               </div>   
                            </div>

                            <div class="part">
                              <div class="col-md-12 label">
                                 <label>multi_image</label>
                              </div>
                              <div class="col-md-12">
                                 <input type="file" name="multi_image[]" multiple class="product_image" onchange="readURL(this);">
                                 @if($errors->has('multi_image')) <p class="error_mes">{{ $errors->first('multi_image') }}</p> @endif
                                 <img id="blah" src="#" alt="">
                               </div>   
                          </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>tour_name</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="tour_name" name="tour_name" value="{{$tour_name}}">
                                      @if($errors->has('tour_name')) <p class="error_mes">{{ $errors->first('tour_name') }}</p> @endif
                                  </div>   
                            </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>tour_type_id</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="tour_type_id" name="tour_type" value="{{$tour_type_id}}">
                                      @if($errors->has('tour_type_id')) <p class="error_mes">{{ $errors->first('tour_type_id') }}</p> @endif
                                  </div>   
                            </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>price</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="price" name="price" value="{{$price}}">
                                      @if($errors->has('price')) <p class="error_mes">{{ $errors->first('price') }}</p> @endif
                                  </div>   
                            </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>duration</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="duration" name="duration" value="{{$duration}}">
                                      @if($errors->has('duration')) <p class="error_mes">{{ $errors->first('duration') }}</p> @endif
                                  </div>   
                            </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>Add Location</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="location" name="location" value="{{$location}}">
                                      @if($errors->has('location')) <p class="error_mes">{{ $errors->first('location') }}</p> @endif
                                  </div>   
                            </div>


                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>description</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <textarea type="text" name="description">{{$description}}</textarea>
                                      @if($errors->has('description')) <p class="error_mes">{{ $errors->first('description') }}</p> @endif
                                  </div>
                            </div>

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>detail_description</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <textarea type="text" name="detail_description" id="summernote2">{{$detail_description}}</textarea>
                                      @if($errors->has('detail_description')) <p class="error_mes">{{ $errors->first('detail_description') }}</p> @endif
                                  </div>
                            </div>

                            <div class="d-block w-100 my-5 TextBoxContainer">

                            @foreach($travel_plan_data as $tpd)
                            <div class="w-75 mx-auto">
                              <div class="part mx-auto w-75">
                                <div class="col-md-12 label">
                                    <label>travel_type_title</label>
                                </div>
                                <div class="col-md-12 data">
                                    <input type="text" placeholder="travel_type_title" name="travel_type_titles[]" value="{{$tpd->title}}" class="travel_type_title">
                                    @if($errors->has('travel_type_title')) <p class="error_mes">{{ $errors->first('travel_type_title') }}</p> @endif
                                </div>
                            </div>

                            <div class="part mx-auto w-75">
                                <div class="col-md-12 label">
                                    <label>travel_type_description</label>
                                </div>
                                <div class="col-md-12 data">
                                    <textarea type="text" name="travel_type_descriptions[]" class="summernote1">{{$tpd->description}}</textarea>
                                    @if($errors->has('travel_type_description')) <p class="error_mes">{{ $errors->first('travel_type_description') }}</p> @endif
                                </div>
                            </div>

                            <a class="btnRemove add_section remove_section mx-end" href="">Remove</a>
                            <a class="add_section btnAdd" href="">Add More</a>
                          </div>
                          @endforeach
                          </div>

                          <button type="submit" class="glow-on-hover my-5 mx-auto">update</button>
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

  $('#summernote2').summernote({
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

      <style type="text/css">
        

    
</style>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script type="text/javascript">

        
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(130);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah1')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(130);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>


















@endsection