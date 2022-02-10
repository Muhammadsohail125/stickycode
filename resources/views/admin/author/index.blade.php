@extends('admin.layout.master')
@section('page-title')
    Manage Author
@endsection
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Manage Author</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a class="btn btn-danger btn-xm"><i class="fa fa-eye"></i></a>
                <a class="btn btn-danger btn-xm"><i class="fa fa-eye-slash"></i></a>
                <a class="btn btn-danger btn-xm"><i class="fa fa-trash"></i></a>
                <a class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
                </h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            @if($authors)

            <div class="box-body">
                <table class="table table-bordered">
                    <thead style="background-color: #F8F8F8;">
                        <tr>
                            <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                            <th width="20%">Title</th>
                            <th width="20%">Designation</th>
                            <th width="20%">Author Image</th>
                            <th width="10%">Status</th>
                            <th width="10%">Manage</th>
                        </tr>
                    </thead>
                    @foreach($authors as $author)                    
                    <tr>
                        <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                        <td>{{ $author->title }}</td>
                        <td>{{ $author->designation }}</td>
                        <td>{{ $author->author_img }}</td>
                        <td>
                            <form method="post" action="/admin/author/{{ $author->id }}/status">
                                @method('put')
                                @csrf
                                @if($author->status == 'DEACTIVE')
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                @else
                                    <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <form method="post" action="/admin/author/{{ $author->id }}">
                                @csrf
                                @method('delete')
                                <a href="/admin/author/{{ $author->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger btn-flat btn-sm "  onclick="return confirm('Are You Sure?')"> <i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="row">
                    <div class="col-sm-6">
                        <span style="display:block;font-size:15px;line-height:34px;margin:20px 0;">
                            Showing 100 to 500 of 1000 entries
                        </span>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ul class="pagination">
                            <li class="paginate_button previous"><a href="#" >Previous</a></li>
                            <li class="paginate_button active"><a href="#" >1</a></li>
                            <li class="paginate_button "><a href="#">2</a></li>
                            <li class="paginate_button "><a href="#" >3</a></li>
                            <li class="paginate_button "><a href="#">4</a></li>
                            <li class="paginate_button "><a href="#">5</a></li>
                            <li class="paginate_button "><a href="#">6</a></li>
                            <li class="paginate_button next"><a href="#" >Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-danger">No Record Found..!!</div>
            @endif
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->
</div>
@endsection