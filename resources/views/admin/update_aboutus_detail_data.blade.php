@extends('admin.layout.header')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">

  <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">Details List</h4>
            <div class="detail">
                <div class="form">      
                  <form method="post" action="{{url('/admin/store_update_aboutus_detail_data')}}/{{$id}}" enctype="multipart/form-data">  

                  	@csrf

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>count</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="count" name="count" value="{{$count}}">
                                      @if($errors->has('count')) <p class="error_mes">{{ $errors->first('count') }}</p> @endif
                                  </div>   
                            </div> 

                            <div class="part">
                                  <div class="col-md-12 label">
                                      <label>title</label>
                                  </div>
                                  <div class="col-md-12 data">
                                      <input type="text" placeholder="title" name="title" value="{{$title}}">
                                      @if($errors->has('title')) <p class="error_mes">{{ $errors->first('title') }}</p> @endif
                                  </div>   
                            </div>

                          <button type="submit" class="glow-on-hover my-5 mx-auto">update</button>
                    </form>       
                </div>  
            </div>
        </div>
      </div>


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