<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Create Candidate</h4>
                <p class="category">Enter all the details of the candidate</p>
            </div>
            <div class="card-content">
                <form method="POST" action="/candidate">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Full Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nickname</label>
                                <input type="text"class="form-control" name="nickname" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="text"class="form-control" name="email" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Profile</label>
                                <textarea rows="5" class="form-control" name="profile"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Create Candidate</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>