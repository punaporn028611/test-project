@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>Edit Category</h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Category Name" value="{{$edit->name}}">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
