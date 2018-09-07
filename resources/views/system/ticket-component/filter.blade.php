<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Tour</h3>
        <div class="pull-right box-tools">
            <button type="button" class="btn btn-success btn-sm" ng-click="showCreateArticleForm()">
                <i class="fa fa-plus"></i>
                Create a new component
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label col-md-3">Name </label>
                <div class="col-md-9">
                    <input class="form-control" type="text" ng-model="filter.search">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-5" style="margin-top: 10px">
            <button type="button" class="btn btn-success search" ng-click="find()" id="searchParamButton"
                    data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading..."><i class="fa fa-search"></i> Search
            </button>
            <button type="button" class="btn btn-warning btn-reset"
                    ng-click="reset()">
                <i class="fa fa-times"></i> Reset
            </button>
        </div>
    </div>
</div>
<script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
    })
</script>