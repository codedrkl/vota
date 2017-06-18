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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Responsibility</th>
                                <th>Candidates</th>
                            </tr>
                        </thead>
                        @foreach($posts as $eachPost)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $eachPost->name }}</td>
                                <td>{{ $eachPost->responsibility }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>

            <a type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#postModal">
                Create Post
            </a>
        </div>
    </div>
</div>