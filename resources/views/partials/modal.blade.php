<div class="mymodal">
            <div class="modal-content">
                <div class="d-flex justify-content-between align-items-center p-3 modal-head">
                    <h1 class="m-0">Add User</h1>
                    <button class="" onclick="closeModal()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <form class="">
                    <div class="row g-3 p-3">
                        <div class="col-12">
                            <!-- <label for="inputAddress" class="form-label">Address</label> -->
                            <input type="text" class="form-control" id="inputAddress" placeholder="Employee ID*">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                            <input type="text" placeholder="First Name*" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="inputPassword4" class="form-label">Password</label> -->
                            <input type="text" placeholder="Last Name*" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-4">
                            <!-- <label for="inputAddress2" class="form-label">Address 2</label> -->
                            <input type="email" class="form-control" id="inputAddress2" placeholder="Email ID*">
                        </div>
                        <div class="col-md-4">
                            <!-- <label for="inputCity" class="form-label">City</label> -->
                            <input type="tel" placeholder="Mobile No" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <!-- <label for="inputState" class="form-label"></label> -->
                            <select id="inputState" class="form-select">
                                <option selected>Select Role Type</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="Username*" class="form-control" id="inputZip">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="password" placeholder="Password*" id="gridCheck">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="password" placeholder="Confirm Password*" id="gridCheck">
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
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">Admin</div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">Employee</div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                        </div>
                    </div>
                    <div class="w-100 px-3">
                        <div class="row">
                            <div class="col-6">HR Admin</div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                            <div class="col-2"><input type="checkbox" name="" id=""></div>
                        </div>
                    </div>
                    <div class="w-full p-3 d-flex justify-content-end">
                        <div class="d-flex">
                            <button type="submit" class="mybtn admin me-3"><p>Add User</p></button>
                            <button type="button" class="mybtn cancel" onclick="closeModal()"><p>Cancel</p></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
