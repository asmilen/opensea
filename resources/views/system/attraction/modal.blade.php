<div class="modal fade" id="createArticleForm" tabindex="-1" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" role="document" style="width: 95%; max-height: 100vh;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create a new attraction</h4>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: calc(100vh - 205px);">
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input id="newArticleTitle" type="text" class="form-control" placeholder="Name"
                               ng-model="newArticle.name">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea id="newArticleSlug" rows="4" class="form-control" placeholder="Description"
                                  ng-model="newArticle.description"></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <div class="button"
                             ngf-select="upload($file, newArticle)"
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
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="createArticle()" id="createArticleButton" class="btn btn-success"
                        data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editArticleForm" tabindex="-1" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" role="document" style="width: 95%; max-height: 570px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Update tour</h4>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: calc(100vh - 205px);">
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input id="editArticleTitle" type="text" class="form-control" placeholder="Name"
                               ng-model="editArticle.name">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea id="newArticleSlug" rows="4" class="form-control" placeholder="Description"
                                  ng-model="editArticle.description"></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
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
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="updateArticle()" id="updateArticleButton" class="btn btn-success"
                        data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Save
                </button>
            </div>
        </div>
    </div>
</div>
