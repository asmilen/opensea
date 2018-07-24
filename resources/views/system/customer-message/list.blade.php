<div class="box box-solid" ng-cloak>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th style="width: 30px"></th>
                </tr>
                <tr ng-repeat="article in articles">
                    <td>@{{ article.id }}</td>
                    <td>@{{ article.email }}</td>
                    <td>@{{ article.phone_number }}</td>
                    <td>@{{ article.name }}</td>
                    <td>
                        <span>@{{ article.message }}<br></span>
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
                        <a href="/system/customer-messages/@{{ article.id }}/edit" class="btn btn-warning btn-sm">
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

