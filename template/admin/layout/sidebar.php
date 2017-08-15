<div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
        <div class="logo"></div>
        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a data-parent="#accordion" href="/admin/dashboard">
                            Home
                        </a>
                    </h5>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Posts
                        </a>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block padding-20">
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/post/new">New Post</a></li>
                            <li><a href="/admin/post/manage">Manage Posts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Categories
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block padding-20">
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/category/new">New Category</a></li>
                            <li><a href="/admin/category/manage">Manage Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Pages
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block padding-20">
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/page/new">New Page</a></li>
                            <li><a href="/admin/page/manage">Manage Pages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingFive">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Users
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="card-block padding-20">
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/user/new">New User</a></li>
                            <li><a href="/admin/user/manage">Manage Users</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>