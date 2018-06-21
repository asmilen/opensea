<div id="createUserForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create new user</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Name" ng-model="newUser.name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" ng-model="newUser.email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Password" ng-model="newUser.password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select ng-model="newUser.status"
                                    class="form-control"
                                    ng-options="status.value as status.name for status in statuses">
                                <option value="" disabled>Please select status</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Payment type</label>
                        <div class="col-sm-9">
                            <select ng-model="newUser.payment_type"
                                    class="form-control"
                                    ng-options="payment_type.value as payment_type.name for payment_type in payment_types">
                                <option value="" disabled>Please select payment type</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Paypal email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="abc@example.com" ng-model="newUser.paypal_email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" ng-click="createUser()" id="createUserButton" class="btn btn-success" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Create</button>
            </div>
        </div>
    </div>
</div>

<div id="editUserForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit user</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Name" ng-model="editUser.name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" ng-model="editUser.email" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Password" ng-model="editUser.password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select ng-model="editUser.status"
                                    class="form-control"
                                    ng-options="status.value as status.name for status in statuses">
                                <option value="" disabled>Please select status</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Payment type</label>
                        <div class="col-sm-9">
                            <select ng-model="editUser.payment_type"
                                    class="form-control"
                                    ng-options="payment_type.value as payment_type.name for payment_type in payment_types">
                                <option value="" disabled>Please select payment type</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Paypal email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="abc@example.com" ng-model="editUser.paypal_email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" ng-click="updateUser()" id="updateUserButton" class="btn btn-success" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Update</button>
            </div>
        </div>
    </div>
</div>
<div id="deleteUserForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete user</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete @{{deleteUser.email}}'s user?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="destroyUser()" id="deleteUserButton" class="btn btn-danger" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Delete</button>
            </div>
        </div>
    </div>
</div>
