@extends('admin.base')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $category->exists ? 'Edit Category' : 'Create Category' }}</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <!-- Default box -->
            <div class="container">
                <form
                    action="{{ route($category->exists ? 'admin.categories.update' : 'admin.categories.store', $category) }}"
                    method="POST">
                    @csrf
                    @method($category->exists ? 'PUT' : 'POST')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="code">Code</label>
                                        <input type="text" name="code" id="code"
                                            value="{{ old('code', $category->code) }}" class="form-control"
                                            placeholder="Code">
                                        @error('code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" id="description"
                                            value="{{ old('description', $category->description) }}" class="form-control"
                                            placeholder="Description">
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary">
                            @if ($category->exists)
                                Update
                            @else
                                Create
                            @endif
                        </button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
