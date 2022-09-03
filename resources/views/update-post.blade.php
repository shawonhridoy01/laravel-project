<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Blog Post </h4>
                    </div>
                    <div class="card-body">
                
                        <form action="{{route('posts.updatePostSubmit')}}" method="post">
                        @csrf
                            <div class="form-group">
                              <input type="hidden" name="id" id="id" class="form-control" placeholder="Enter Your Blog Title" aria-describedby="helpId" value= "{{$posts->id}}">
                              <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>            
                            
                            
                            <div class="form-group">
                              <input type="text" name="title" id="title" class="form-control" placeholder="Enter Your Blog Title" aria-describedby="helpId" value= "{{$posts->title}}">
                              <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>            
                            
                            <div class="form-group">
                              <input type="text" name="sub_title" id="sub_title" class="form-control" placeholder="Enter Your Blog Sub Title" aria-describedby="helpId" value="{{$posts->sub_title}}"> 
                            </div>
                                                            
                            <div class="form-group">
                            <textarea  name="description" class='form-control' id="description" cols="10" rows="4">{{$posts->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <button type='submit' class='btn btn-primary btn-block'>Update Blog Post</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>







