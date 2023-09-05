<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="form-control"><h3>Edit Category</h3></div>

    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('update-category',$data['id']) }}">
        @csrf
        <div class="form-group" >
          <label for="category_name">Category-name:</label>
          <input type="text" name="category_name" class="form-control" id="category_name" value="{{ old('category_name', $data['name']) }}" placeholder="Enter name">
          @error('category_name') <span class="text-danger">{{ $message }}</span>   @enderror

        </div>
        <br>


        <div class="form-group">
          <label  for="category_desc">Category-Description:</label>
          <input type="text" name="category_desc" class="form-control" id="category_desc" value="{{ old('category_name', $data['description']) }}" placeholder="Enter description">
          @error('category_desc') <span class="text-danger">{{ $message }}</span>   @enderror

        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
 
              
         
          
        
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>