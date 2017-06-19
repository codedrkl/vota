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

<div class="modal fade" id="post-modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
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

<div class="modal fade" id="candidate-modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form method="POST" action="/addcandidate">
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
                                {{--<label class="control-label">Select Candidate</label>--}}
                                <select name="candidate_id" class="form-control">
                                    <option value="">Select Candidate</option>
                                    @foreach($candidates as $aCandidate)
                                        <option value="{{ $aCandidate->id }}">{{ $aCandidate->name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="post_id" value=""/>
                                <input type="hidden" name="election_id" value="{{ $election->id }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Manifesto</label>
                                <textarea rows="4" class="form-control" name="manifesto"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Candidate</button>
                </div>
            </div>
        </form>
    </div>
</div>

@section('customjs')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-candidate').click(function() {
                $('input[name="post_id"]').attr('value', $(this).attr('post'));
            });
        });
    </script>
@endsection