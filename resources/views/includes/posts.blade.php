<div class="row">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">All Posts</h4>
            <p class="category">View all posts and candidates for the posts</p>
        </div>
        <div class="col-md-12">
            <div class="card-content table-responsive">
                @if(count($posts) == 0)
                    <p>There are currently no posts</p>
                @else
                    <table class="table posts">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Responsibility</th>
                                <th>Candidates</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($posts as $eachPost)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $eachPost->name }}</td>
                                <td>{{ $eachPost->responsibility }}</td>
                                <td></td>
                                <td><a class="btn btn-primary btn-small btn-round actions add-candidate" post="{{ $eachPost->id }}" data-toggle="modal" data-target="#candidate-modal" title="Add candidates">Add</a></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>

            <a class="btn btn-primary btn-round" data-toggle="modal" data-target="#post-modal">
                Create Post
            </a>
        </div>
    </div>
</div>
<style type="text/css">
    .actions {
        display: none;
    }
    .posts tr:hover .actions {
        display: block;
    }
</style>