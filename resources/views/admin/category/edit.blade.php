<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <b></b>
          <b  style="float:left">Edit Category
            <span class="badge badge-danger"></span>
        </b>
        </h2>
    </x-slot>

    


    <div class="container py-5">
        <div class="row">
          
<div class="col-md-8">
            <div class="card">
              <div class="card-header">Update Category
</div>
<div class="card-body">
              <form action="{{url('category/update/'.$categories->id)}}" method="POST">
                @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Update Category Name</label>
    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1" value="{{$categories->category_name}}" aria-describedby="emailHelp">
  @error('category_name')
      <span class="text-danger">{{$message}}</span>
  @enderror

  </div>

  
  <button type="submit" class="btn btn-primary">Update Category</button>
</form>
</div>
        </div>

    </div>
</x-app-layout>
