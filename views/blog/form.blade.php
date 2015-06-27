@extends('blog.template')

@section('content')
    <div class="container-fluid">
        <h1>Blog form</h1>

        <!-- Create and edit -->
        <form class="form-horizontal" method="post" action="{{ route('blog_store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="author" class="col-sm-2 control-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" name="author">
                </div>
            </div>

            <div class="form-group">
                <label for="public_date" class="col-sm-2 control-label">Public Date</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="public_date" name="public_date">
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>

            <div class="form-group">
                <label for="category_id" class="col-sm-2 control-label">Category</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                        <option value="1">Android</option>
                        <option value="2">iOS</option>
                        <option value="3">Web</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="tags" class="col-sm-2 control-label">Tags</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="1" name="tags[]"> Web Design
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="2" name="tags[]"> Android
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="3" name="tags[]"> iOS
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>

        <!-- Delete button -->
        <form class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>

    </div>
@stop