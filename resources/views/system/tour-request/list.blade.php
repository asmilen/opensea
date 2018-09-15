<div class="box box-solid" ng-cloak>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Tour</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Number people</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th style="width: 30px"></th>
                </tr>
                <tr ng-repeat="article in articles">
                    <td>@{{ article.id }}</td>
                    <td>@{{ article.email }}</td>
                    <td>
                        @{{ article.tour_name }}
                    </td>
                    <td>
                        <span>@{{ summarizeDateTime(article.date, true) }}</span>
                    </td>
                    <td>
                        <span ng-if="article.time == '1'">9 a.m - 1 p.m</span>
                        <span ng-if="article.time == '2'">1 p.m - 5 p.m</span>
                    </td>
                    <td>
                        <span>@{{ article.number_people }}<br></span>
                    </td>
                    <td>
                        <span ng-if="article.status == 'new'"><label class="label label-success">New</label></span>
                        <span ng-if="article.status == 'inprocess'"><label class="label label-warning">Inprocess</label></span>
                        <span ng-if="article.status == 'done'"><label class="label label-info">Done</label></span>
                        <span ng-if="article.status == 'cancel'"><label class="label label-default">Cancel</label></span>
                    </td>
                    <td>
                        @{{ summarizeDateTime(article.created_at, true) }}
                    </td>
                    <td>
                        <a href="/system/tour-requests/@{{ article.id }}/edit" class="btn btn-warning btn-sm">
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

