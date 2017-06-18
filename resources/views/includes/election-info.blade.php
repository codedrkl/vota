<div class="row">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Election Details</h4>
            <p class="category">View all the details of the election</p>
        </div>
        <div class="col-md-12">
            <div class="card-content table-responsive">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $election->name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $election->description }}</td>
                    </tr>
                    <tr>
                        <th>Start</th>
                        <td>{{ $election->start_date }}</td>
                    </tr>
                    <tr>
                        <th>End</th>
                        <td>{{ $election->end_date }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        @if($election->status == '1')
                            <td class="text-success">Enabled</td>
                        @else
                            <td class="text-danger">Disabled</td>
                        @endif
                    </tr>
                </table>
                @if($election->publish_status == '1')
                    <td><a href="#" class="btn btn-round btn-primary">View Result</a></td>
                @endif
            </div>
        </div>
    </div>
</div>