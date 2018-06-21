<div class="box box-solid" ng-cloak>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Content</th> -->
                    <th>Status</th>
                    <th>Created at</th>
                    <th style="width: 30px"></th>
                </tr>
                <tr ng-repeat="article in articles">
                    <td>@{{ article.id }}</td>
                    <td>@{{ article.name }}</td>
                    <td>@{{ article.email }}</td>
                    <!-- <td>
                        @{{ article.content }}
                    </td> -->
                    <td>
                        <span ng-if="article.status == 'new'"><label class="label label-success">New</label></span>
                        <span ng-if="article.status == 'inprocess'"><label class="label label-warning">Inprocess</label></span>
                        <span ng-if="article.status == 'done'"><label class="label label-info">Done</label></span>
                        <span ng-if="article.status == 'cancel'"><label class="label label-default">Cancel</label></span>
                    </td>
                    <td>
                        <span>@{{ summarizeDateTime(article.created_at, true) }}</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Edit this tour request" ng-click="showEditArticle(article)">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right" style="margin-right: 30px; margin-top: 10px;">
            <?=
            view('/system/common/pagination', [
                "accessPageId" => "pageId",
                "accessPagesCount" => "pagesCount",
                "accessFind" => "find(null)"
            ]);
            ?>
        </div>

    </div>
</div>

