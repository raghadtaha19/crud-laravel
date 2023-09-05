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
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-error" role="alert">
        {{ Session::get('error') }}
    </div>
    @endif


    <div><a style="margin: 20px;color:white" href="{{ route('create-category') }}" class="btn btn-sm btn-info">+ Add New Category</a></div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            
                    @if (!@empty($data))

                    @php  $i=1; @endphp
                
                    @foreach ($data as $category )
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a style="color: white" class="btn btn-sm btn-primary" href="{{ route('edit-category' ,$category->id) }}">Edit</a>
                            <a style="color: white" class="btn btn-sm btn-danger" href="{{ route('delete-category' ,$category->id) }}">Delete</a>
                         </td>
                    </tr>
                    @php   $i++;   @endphp
        
                    @endforeach
          
                    @else
                    @endif
                </tbody>
            </table>
            <br>
            {{ $data->links() }}

              
         
          
        
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>