<div class="box box-solid" ng-cloak>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th style="width: 90px;"></th>
                </tr>
                <tr ng-repeat="ticket in tickets">
                    <td>@{{ $index + 1 }}</td>
                    <td>
                        <span>@{{ ticket.name }}</span>
                    </td>
                    <td>
                        <span>@{{ ticket.type }}</span>
                    </td>
                    <td>
                        <span>@{{ ticket.duration }} day</span>
                    </td>
                    <td>
                        <span>$@{{ ticket.price }}</span>
                    </td>
                    <td>
                        <span ng-if="ticket.status == 'enable'" class="label label-success">Enable</span>
                        <span ng-if="ticket.status == 'disable'" class="label label-default">Disable</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Edit this article" ng-click="showEditArticle(article)">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Delete this article" ng-click="deleteArticle(article)">
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

