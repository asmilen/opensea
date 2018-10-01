<br>
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Assigned Exclusive Offers</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered no-margin-bottom dataTable no-footer">
                    <tbody>
                    <tr ng-repeat="item in editArticle.offers">
                        <td><img ng-src="@{{item.icon}}" alt="Preview"
                                 class="preview-store-img img img-responsive" style="max-width: 50%"></td>
                        <td>@{{ item.description }}</td>
                        <td style="width: 20%">
                            <button class="btn btn-danger btn-sm" ng-click="detachOffer(item)" ng-disabled="detachOfferForm.disabled">
                                <i class="ace-icon fa fa-arrow-left bigger-110"></i> Remove
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">Available Exclusive Offers</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered no-margin-bottom dataTable no-footer">
                    <tbody>
                    <tr ng-repeat="item in UnAssignedComponents">
                        <td><img ng-src="@{{item.icon}}" alt="Preview"
                                 class="preview-store-img img img-responsive" style="max-width: 50%"></td>
                        <td>@{{ item.description }}</td>
                        <td style="width: 20%">
                            <button class="btn btn-info btn-sm" ng-click="attachOffer(item)" ng-disabled="attachOfferForm.disabled">
                                <i class="ace-icon fa fa-arrow-right bigger-110"></i> Add
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>