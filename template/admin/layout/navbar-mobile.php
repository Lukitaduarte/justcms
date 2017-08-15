<nav class="navbar navbar-toggleable-md navbar-light bg-faded hidden-sm-up">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPost" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Posts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownPost">
                    <a class="dropdown-item" href="/admin/post/new">New Post</a>
                    <a class="dropdown-item" href="/admin/post/manage">Manage Posts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownPage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownPage">
                    <a class="dropdown-item" href="/admin/page/new">New Page</a>
                    <a class="dropdown-item" href="/admin/page/manage">Manage Pages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                    <a class="dropdown-item" href="/admin/category/new">New Category</a>
                    <a class="dropdown-item" href="/admin/category/manage">Manage Categories</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                    <a class="dropdown-item" href="/admin/user/new">New User</a>
                    <a class="dropdown-item" href="/admin/user/manage">Manage Users</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>