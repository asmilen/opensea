<br>

<div class="col-md-12" style="margin-top: 10px">
    <div class="form-group">
        <label for="" class="col-md-3 control-label">Name</label>
        <div class="col-md-9">
            <input type="text" class="form-control" ng-model="editArticle.name">
        </div>
    </div>
</div>

<div class="col-md-12" style="margin-top: 10px">
    <div class="form-group">
        <label for="" class="col-md-3 control-label">Type</label>
        <div class="col-md-9">
            <select ng-model="editArticle.type" class="form-control pull-right"
                    ng-options="type.value as type.name for type in listType">
            </select>
        </div>
    </div>
</div>

<div class="col-md-12" style="margin-top: 20px">
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Image</label>
        <div class="col-sm-9">
            <div class="button"
                 ngf-select="upload($file, editArticle)"
                 ngf-accept="'image/*'"
                 ngf-max-size="20MB"
                 ngf-pattern="'image/*'">
                <button class="btn btn-primary btn-sm">Select image...</button>
            </div>
            <div class="preview-store-container">
                <img ng-show="previewImg" ng-src="@{{previewImg}}" alt="Preview"
                     class="preview-store-img img img-responsive" style="max-width: 50%">
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 col-md-offset-5" style="margin-top: 10px">
    <button type="button" class="btn btn-success search" ng-click="updateArticle()" id="searchParamButton"
            data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading..."><i class="fa fa-save"></i> Save
    </button>
</div>