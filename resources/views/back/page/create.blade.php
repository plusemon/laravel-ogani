@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header border-bottom p-1 mb-1">
            <h4>Add New page</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('account.pages.index') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control">
                            <option value="">Default</option>
                            <option value="">Custom Link</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="About Us" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Slug (uniqe)</label>
                        <input type="text" name="slug" class="form-control" placeholder="about-us">
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" name="url" class="form-control" placeholder="http//google.com">
                    </div>
                    <div class="form-group">
                        <label>Add to Menu</label>
                        <select name="menu_id" class="form-control">
                            <option value="">None</option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Page Content</label>
                        <textarea name="content" class="form-control" cols="30" rows="10">
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Add
                        page</button>
                </div>
            </form>

        </div>
    </div>

@endsection