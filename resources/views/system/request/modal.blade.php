<div class="modal fade" id="createArticleForm" tabindex="-1" role="dialog" data-keyboard="true" data-backdrop="static">
    <div class="modal-dialog" role="document" style="width: 95%; max-height: 100vh;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create a new tour</h4>
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
                    <label for="" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-10">
                        <select ng-model="newArticle.type" class="form-control pull-right"
                                ng-options="type.value as type.name for type in listType">
                        </select>
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
                    <label for="" class="col-sm-2 control-label">Include</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="4" placeholder="Include"
                                  ng-model="newArticle.include"></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Add on</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="4" placeholder="Add on"
                                  ng-model="newArticle.add_on"></textarea>
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
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">
                        Price
                        <button class="btn btn-success btn-xs" ng-click="addPrice(newArticle.price)"><i class="fa fa-plus"></i> Add</button>
                    </label>
                    <div class="col-sm-10">
                        <div ng-repeat="price in newArticle.price">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-12 control-label">Title</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Title price"
                                           ng-model="price.title">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="" class="col-sm-12 control-label">Value</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" placeholder="Value price"
                                           ng-model="price.value">
                                </div>
                            </div>
                            <button class="col-sm-2 btn btn-danger btn-xs" style="margin-top: 30px" ng-click="removePrice(newArticle.price, $index)"><i class="fa fa-minus"></i> Remove</button>
                        </div>
                    </div>
                </div>
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
                <h4 class="modal-title" id="myModalLabel">Update request</h4>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: calc(100vh - 205px);">
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input id="editArticleTitle" type="text" class="form-control" placeholder="Name" ng-model="editArticle.name" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" ng-model="editArticle.email" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" ng-model="editArticle.content" disabled></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Add note</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" ng-model="editArticle.note_new"></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" ng-model="editArticle.phone" disabled>
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
                <div class="clearfix"></div>
                <div class="form-group col-sm-12" ng-if="editArticle.note">
                    <label for="" class="col-sm-12 control-label">Data noted</label>
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 5%">Id</th>
                                <th style="width: 15%">Time</th>
                                <th style="width: 15%">Author</th>
                                <th>Note</th>
                            </tr>
                            <tr ng-repeat="note in editArticle.note">
                                <td>@{{ $index + 1 }}</td>
                                <td>@{{ summarizeDateTime(note.time, true) }}</td>
                                <td>
                                    @{{ note.author }}
                                </td>
                                <td>
                                    <span>@{{ note.content }}</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    })
</script>