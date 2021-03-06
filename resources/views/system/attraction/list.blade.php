<div class="box box-solid" ng-cloak>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th style="width: 90px;"></th>
                </tr>
                <tr ng-repeat="article in articles">
                    <td>@{{ $index + 1 }}</td>
                    <td>
                        <img src="@{{ article.image }}" width="50px">
                    </td>
                    <td>
                        <span><a href="<?= config('app.frontend_url') ?>/tour/@{{article.slug}}" target="_blank">@{{ article.name }}</a></span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Edit this attraction" ng-click="showEditArticle(article)">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Delete this attraction" ng-click="deleteArticle(article)">
                            <i class="fa fa-times"></i>
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

