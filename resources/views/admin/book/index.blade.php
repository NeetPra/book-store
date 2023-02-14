@extends('admin.layouts.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Books</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header">
                <h3 class="card-title">Books List</h3>
                <div id="categoryExport" style="float:right">
                    <a href="{{ route('books.create') }}" class="btn btn-book-store">
                        <i class="fa fa-plus"></i> Add Book
                    </a>

                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th colspan="2">Filter</th>
                            <th>
                                <input class="form-control filter-books"
                                    type="text" placeholder="Enter Title"
                                    name="title"
                                    id="title"
                                    autocomplete="off"
                                >
                            </th>
                            <th>
                                <input class="form-control filter-books"
                                    type="text" placeholder="Enter Author"
                                    name="author"
                                    id="author"
                                    autocomplete="off"
                                >
                            </th>
                            <th>
                                <input class="form-control filter-books"
                                    type="text" placeholder="Enter Genre"
                                    name="genre"
                                    id="genre"
                                    autocomplete="off"
                                >
                            </th>
                            <th>
                                <input class="form-control filter-books"
                                    type="number" placeholder="Enter Isbn"
                                    name="isbn"
                                    id="isbn"
                                    autocomplete="off"
                                >
                            </th>
                            <th>

                                <input class="form-control filter-books"
                                    type="text" placeholder="Enter Publisher"
                                    name="publisher"
                                    id="publisher"
                                    autocomplete="off"
                                >

                            </th>
                            <th>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input class="form-control filter-books"
                                        type="text" placeholder="Select Date"
                                        name="published"
                                        id="published"
                                        autocomplete="off"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </th>
                            {{-- <th>Description</th> --}}
                            <th>
                                <a href="{{ route('books.index') }}" class="btn btn-danger">Reset</a>
                            </th>
                        </tr>
                    </thead>
                </table>
              </div>
              <div class="card-body" id="show-books">

                <table class="table table-bordered table-hover ">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Isbn</th>
                    <th>Published</th>
                    <th>Publisher</th>
                    {{-- <th>Description</th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @forelse ($books as $book)
                        <tr id="delete-row-{{$book->id}}">
                            <td>{{ $i++."." }}</td>
                            <td>
                                <a href="{{ $book->image }}" target="_blank">
                                    <img src="{{ $book->image }}" alt="user" class="brand-image img-circle" style="width: 50px; height: 50px;">
                                </a>
                            </td>
                            <td>
                                {{ $book->title }}
                            </td>
                            <td>
                                {{ $book->author }}
                            </td>
                            <td>
                                {{ $book->genre }}
                            </td>
                            <td>
                                {{ $book->isbn }}
                            </td>
                            <td>
                                {{ $book->published }}
                            </td>
                            <td>
                                {{ $book->publisher }}
                            </td>
                            <td>
                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")

                                   <button type="submit" class="btn btn-book-store delete-book" onclick="return confirm('Are you sure want to delete this book!')" ><i class="fa fa-trash"></i></button>
                                   <a href="{{ route('books.edit', $book->id) }}" id="edit-book" class="btn btn-book-store"  ><i class="fa fa-pencil"></i></a>
                                   <a href="{{ route('books.edit', $book->id) }}" id="edit-book" class="btn btn-book-store"  ><i class="fa fa-eye"></i></a>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr class="no-data-row">
                            <td colspan="9" rowspan="2" align="center">
                                <div class="message"><p>No data available in table</p></div>

                            </td>
                        </tr>
                    @endforelse
                </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

  <!-- /.content-wrapper -->


@stop
