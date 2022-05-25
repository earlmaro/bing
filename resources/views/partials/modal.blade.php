<div class="mymodal">
    <div class="modal-content">
        <div class="d-flex justify-content-between align-items-center p-3 modal-head">
            <h1 class="m-0">Add User {{ $user->id }}{{ old('title', $user->id) }}"</h1>
            <button class="" onclick="closeModal()">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </div>

        <form action="/create-user" method="post">
            @csrf
            <div class="row g-3 p-3">
                <div class="col-12">
                    <!-- <label for="inputAddress" class="form-label">Address</label> -->
                    <input type="text" name="employee_id" value="{{ old('employee_id', $user->employee_id) }}" class="form-control"
                        id="employee_id" placeholder="Employee ID*">
                </div>
                <div class="col-md-6">
                    <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                    <input type="text" id="f_name" name="f_name" value="{{ old('f_name', $user->f_name) }}" placeholder="First Name*"
                        class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <!-- <label for="inputPassword4" class="form-label">Password</label> -->
                    <input type="text"  id="l_name" name="l_name" value="{{ old('l_name', $user->l_name) }}" placeholder="Last Name*"
                        class="form-control" id="inputPassword4">
                </div>
                <div class="col-4">
                    <!-- <label for="inputAddress2" class="form-label">Address 2</label> -->
                    <input type="email"  id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control"
                        id="inputAddress2" placeholder="Email ID*">
                </div>
                <div class="col-md-4">
                    <!-- <label for="inputCity" class="form-label">City</label> -->
                    <input type="tel"  id="phone" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Mobile No"
                        class="form-control" >
                </div>
                <div class="col-md-4">
                    <!-- <label for="inputCity" class="form-label">City</label> -->
                    <input type="text" id="designation" name="designation" value="{{ old('designation', $user->designation) }}" placeholder="designation"
                        class="form-control" >
                </div>
                <div class="col-4">
                    <input type="text"  id="username" name="username" placeholder="Username*" class="form-control" >
                </div>
                <div class="col-4">
                    <input class="form-control"  id="password" name="password" type="password" placeholder="Password*" >
                </div>
                <div class="col-4">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password*" id="password_confirmation">
                </div>
            </div>

            <div class="w-100 t-head p-3">
                        <div class="row">
                            <div class="col-6">Module Permission</div>
                            <div class="col-2">
                                <h3>Read</h3>
                            </div>
                            <div class="col-2">
                                <h3>Write</h3>
                            </div>
                            <div class="col-2">
                                <h3>Delete</h3>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 px-3 mt-2">
                        <div class="row">
                            <div class="col-6">Super Admin</div>
                            <div class="col-2"><input type="checkbox" name="super_admin_read" value="false"  id="super_admin_read"></div>
                            <div class="col-2"><input type="checkbox" name="super_admin_write" value="false"  id="super_admin_write"></div>
                            <div class="col-2"><input type="checkbox" name="admin_read" value="false"  id="super_admin_delete"></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">Admin</div>
                            <div class="col-2"><input type="checkbox" name="admin_read" value="false"  id="admin_read"></div>
                            <div class="col-2"><input type="checkbox" name="admin_write" value="false"  id="admin_write"></div>
                            <div class="col-2"><input type="checkbox" name="admin_delete" value="false"  id="admin_delete"></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">Employee</div>
                            <div class="col-2"><input type="checkbox" name="employee_read" value="false"  id="employee_read"></div>
                            <div class="col-2"><input type="checkbox" name="employee_write" value="false"  id="employee_write"></div>
                            <div class="col-2"><input type="checkbox" name="employee_delete" value="false"  id="employee_delete"></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">HR Admin</div>
                            <div class="col-2"><input type="checkbox" name="hr_read" value="false" onclick="toggle() id="hr_read"></div>
                            <div class="col-2"><input type="checkbox" name="hr_write" value="false" onclick="toggle() id="hr_write"></div>
                            <div class="col-2"><input type="checkbox" name="hr_delete" value="false"  id="hr_delete"></div>
                        </div>
                    </div>
                    <div class="w-full p-3 d-flex justify-content-end">
                        <div class="d-flex">
                            <button type="submit" id="submitBtn"  class="mybtn admin me-3"><p>Adddd User</p></button>
                            <button type="button" class="mybtn cancel" onclick="closeModal()"><p>Cancel</p></button>
                        </div>
                    </div>
        </form>
    </div>
</div>
