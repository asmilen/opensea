<div class="modal fade" id="createArticleForm" tabindex="-1" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" role="document" style="width: 80%; max-height: 570px; overflow: scroll;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create ticket</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input id="newArticleTitle" type="text" class="form-control" placeholder="Title" ng-model="newArticle.name">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Type<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <select ng-model="newArticle.type" class="form-control pull-right" id="newArticleCategory"
                                ng-options="type.value as type.name for type in listType">
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" id="newArticleSlug" class="form-control" placeholder="Slug" ng-model="newArticle.slug">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <select ng-model="newArticle.status" class="form-control pull-right"
                                ng-options="status.value as status.name for status in listStatus">
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label for="" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-12">
                        <textarea id="articleContent" ng-model="newArticle.content" style="width:100%"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="createArticle()" id="createArticleButton" class="btn btn-success" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Create</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editArticleForm" tabindex="-1" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" role="document" style="width: 80%; max-height: 570px; overflow: scroll;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create article</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Title<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input id="editArticleTitle" type="text" class="form-control" placeholder="Title" ng-model="editArticle.title">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Category<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <select ng-model="editArticle.category_id" class="form-control pull-right" id="editArticleCategory"
                                ng-options="category.id as category.name for category in listCategory">
                            <option value>-- Undefined --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" id="editArticleSlug" class="form-control" placeholder="Slug" ng-model="editArticle.slug">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <select ng-model="editArticle.status" class="form-control pull-right"
                                ng-options="status.value as status.name for status in listStatus">
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Description" ng-model="editArticle.description">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Order</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Order" ng-model="editArticle.order">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Meta description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" ng-model="editArticle.meta_description">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Meta title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" ng-model="editArticle.meta_title">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Meta keywords</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" ng-model="editArticle.meta_keywords">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label for="" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-12">
                        <textarea id="editArticleContent" ng-model="editArticle.content" style="width:100%"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="updateArticle()" id="updateArticleButton" class="btn btn-success" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Update</button>
            </div>
        </div>
    </div>
</div>
