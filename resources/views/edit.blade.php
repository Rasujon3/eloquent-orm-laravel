<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row">
            <h1 class="bg-success p-2 text-white text-center ">ORM CRUD PROJECT update</h1>
            <div class="col-lg-8">
                <h1>update data</h1>
              <form action="{{url('/update/'.$data->id)}}" method="post">
                @csrf
                 <input value="{{$data->name}}" type="text" placeholder="enter name" name="stname" class="form-control"> 
                 <input value="{{$data->email}}" type="email" placeholder="enter email" name="stemail" class="form-control"> 
                 <input value="{{$data->dept}}" type="dept" placeholder="enter dept" name="stdept" class="form-control"> 
                 <button class="btn btn-primary">update</button>
             </form>
            </div>
            
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>