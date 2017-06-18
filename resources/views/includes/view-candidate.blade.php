<div class="row" id="elections">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Candidate</h4>
                <p class="category">View all candidates</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nickname</th>
                        <th width="40%">Profile</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        @foreach($candidates as $aCandidate)
                            <tr>
                                <td>{{ $aCandidate->name }}</td>
                                <td>{{ $aCandidate->email }}</td>
                                <td>{{ $aCandidate->nickname }}</td>
                                <td>{{ $aCandidate->profile }}</td>
                                <td><a class="btn btn-primary" href="#">Edit</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>