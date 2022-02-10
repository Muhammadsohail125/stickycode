@extends('admin.layout.master')
@section('page-title')
Create Category
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Create Category
    <small>All * field required</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- SELECT2 EXAMPLE -->
    <!-- form start -->
    <form method="post" action="/admin/category" name="formCreate" id="formCreate" enctype="multipart/form-data">
      @csrf
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row">
            <div class="col-xs-6">

              <div class="form-group @error('title') has-error @enderror">
                <label for="title">Title <span class="text text-red">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                @error('title')
                  <div class="label label-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group @error('slug') has-error @enderror">
                <label for="slug">Slug <span class="text text-red">*</span></label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                @error('slug')
                  <div class="label label-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group @error('description') has-error @enderror">
                <label>Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter ..."></textarea>
                @error('description')
                  <div class="label label-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/admin/categoy" class="btn btn-danger">Cancel</a>
        </div>
      </div>
      <!-- /.box -->
      <!-- form end -->
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
