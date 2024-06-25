@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.product') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-2 grid-margin stretch-card">
            <div class="card" style="height: max-content;">
                <div class="card-body">
                    <h6 class="card-title">Product Category</h6>

                    @foreach ($categories as $category)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $category->category_name }}
                                <span class="badge bg-primary rounded-pill">{{ $category->products->count() }}</span> <!-- Use count() method -->
                            </li>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="card-title mb-0">Products List</h6>
                        <a href="{{ route('admin.add.product') }}" class="btn btn-primary">Add Product</a>
                    </div>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-hover text-center">
                            <!-- Added text-center class here -->
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>  
                                    <th class="text-center">Image</th> 
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Category</th> 
                                    <th class="text-center">Price</th> 
                                    <th class="text-center">Stock</th> 
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                 
                                        <td class="text-center">
                                            <img src="{{ asset('upload/admin_images/' . $product->photo) }}" alt="Product Image" style="width: 50px; height: 50px;">
                                        </td>
             
                                        <td class="text-center">{{ $product->name }}</td>
         
                                        <td class="text-center">{{ $product->category->category_name }}</td>
     
                                        <td class="text-center">{{ $product->price }}</td>

                                        <td class="text-center">{{ $product->stock }}</td>

                                        <td class="text-center">
                                            <a href="#" class="btn btn-secondary btn-sm">View</a>
                                            <a href="{{ route('admin.edit.product', $product->id ) }}" class="btn btn-info btn-sm">Edit</a>
                                            <form action="{{ route('admin.delete.product', $product->id ) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
