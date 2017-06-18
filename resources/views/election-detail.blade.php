@extends('layouts.dashboard')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            @include('includes.action')
        </nav>

        <div class="content">
            <div class="container-fluid">
                @include('includes.election-info')
                @include('includes.posts')
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="postModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form method="POST" action="/post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Post</h4>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="name">
                                <input type="hidden" name="election" value="{{$election->id}}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Description/Responsibility</label>
                                <textarea rows="5" class="form-control" name="responsibility"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
