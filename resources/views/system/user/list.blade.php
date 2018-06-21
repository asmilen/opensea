<div class="box box-solid">
    <div class="box-body">

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Balance</th>
                    <th>Payment type</th>
                    <th style="width:85px;"></th>
                </tr>
                <tr ng-repeat="item in users">
                    <td ng-bind="item.id"></td>
                    <td ng-bind="item.name"></td>
                    <td ng-bind="item.email"></td>
                    <td ng-bind="item.status"></td>
                    <td ng-bind="item.current_balance"></td>
                    <td ng-bind="item.payment_type"></td>
                    <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" title="Edit this user" ng-click="showEditUserForm(item)">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Remove this user" ng-click="showDeleteUserForm(item)">
                           <i class="fa fa-times"></i>
                       </a>

                    </td>
                </tr>
              </tbody>
          </table>
          <div class="center">
              @include('system.common.pagination', [
                'accessPageId' => 'filter.page',
                'accessPagesCount' => 'pagesCount',
                'accessFind' => 'getUsers()'
                ]);
          </div>
    </div>
</div>
