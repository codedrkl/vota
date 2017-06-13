<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Create Election</h4>
                <p class="category">Enter election details</p>
            </div>
            <div class="card-content">
                <form method="POST" action="/election">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Election Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">End Date</label>
                                <input type="date" class="form-control" name="end_date">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Create Election</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>