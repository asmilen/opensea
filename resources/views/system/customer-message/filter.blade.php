<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Customer Message</h3>
    </div>
    <div class="box-body">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label col-md-3">Email </label>
                <div class="col-md-9">
                    <input class="form-control" type="text" ng-model="filter.email">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label col-md-3">Phone </label>
                <div class="col-md-9">
                    <input class="form-control" type="text" ng-model="filter.phone_number">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group" style="margin-top: 10px">
                <label class="control-label col-md-3">Name </label>
                <div class="col-md-9">
                    <input class="form-control" type="text" ng-model="filter.name">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label col-md-3">Status </label>
                <div class="col-md-9">
                    <select ng-model="filter.status" class="form-control pull-right"
                            ng-options="type.value as type.name for type in listStatus"
                            ng-change="find()">
                        <option value>-- Undefined --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 10px">
            <div class="form-group">
                <label class="control-label col-md-3">Sort </label>
                <div class="col-md-9">
                    <select ng-model="filter.order" class="form-control pull-right"
                            ng-options="order.value as order.name for order in listOrder"
                            ng-change="find()">
                        <option value>-- Undefined --</option>
                    </select>
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