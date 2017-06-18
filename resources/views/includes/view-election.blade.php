<div class="row" id="elections">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Elections</h4>
                <p class="category">All elections you've created</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Name</th>
                        <th width="40%">Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Settings</th>
                    </thead>
                    <tbody>
                        @foreach($elections as $eachElection)
                            <tr>
                                <td>{{ $eachElection->name }}</td>
                                <td>{{ $eachElection->description }}</td>
                                <td>{{ $eachElection->start_date }}</td>
                                <td>{{ $eachElection->end_date }}</td>
                                @if($eachElection->status == 0)
                                    <td class="text-danger">Disabled</td>
                                @else
                                    <td class="text-success">Enabled</td>
                                @endif
                                @if($eachElection->publish_status == 0)
                                    <td class="text-danger">No Result</td>
                                @else
                                    <td class="text-success"><a href="#">View</a></td>
                                @endif
                                <td>
                                    <a href={{"/election/".$eachElection->id}} class="btn btn-primary">Prepare</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>