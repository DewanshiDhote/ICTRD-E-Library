<?php
$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="index.php" >
        <h4>ICTRD E-Library</h4>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'index.php' ? 'active': ''; ?>
          " href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="fa fa-home <?= $pageName == 'index.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'categories.php' ? 'active': ''; ?>
          <?= $pageName == 'categories-create.php' ? 'active': ''; ?>
          <?= $pageName == 'categories-edit.php' ? 'active': ''; ?>
          <?= $pageName == 'categories-delete.php' ? 'active': ''; ?>
          " href="categories.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-bookmark <?= $pageName == 'categories.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'sub-categories.php' ? 'active': ''; ?>
          <?= $pageName == 'subcategories-create.php' ? 'active': ''; ?>
          <?= $pageName == 'subcategories-delete.php' ? 'active': ''; ?>
          <?= $pageName == 'subcategories-edit.php' ? 'active': ''; ?>
          " href="sub-categories.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-bookmark-o <?= $pageName == 'sub-categories.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Sub-category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'author.php' ? 'active': ''; ?>
          <?= $pageName == 'author-edit.php' ? 'active': ''; ?>
          <?= $pageName == 'author-create.php' ? 'active': ''; ?>
          <?= $pageName == 'author-delete.php' ? 'active': ''; ?>

          " href="author.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-address-book <?= $pageName == 'author.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Author</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'publisher.php' ? 'active': ''; ?>
          <?= $pageName == 'publisher-create.php' ? 'active': ''; ?>
          <?= $pageName == 'publisher-edit.php' ? 'active': ''; ?>
          <?= $pageName == 'publisher-delete.php' ? 'active': ''; ?>

          " href="publisher.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-bell-o <?= $pageName == 'publisher.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Publisher</span>
          </a>
        </li>
        

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage Books</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'books.php' ? 'active': ''; ?>
          <?= $pageName == 'books-create.php' ? 'active': ''; ?>
          <?= $pageName == 'books-edit.php' ? 'active': ''; ?>
          <?= $pageName == 'books-delete.php' ? 'active': ''; ?>

          " href="books.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book <?= $pageName == 'books.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Book List</span>
          </a>
        </li>
       
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'users.php' ? 'active': ''; ?>
          <?= $pageName == 'users-create.php' ? 'active': ''; ?>
          <?= $pageName == 'users-edit.php' ? 'active': ''; ?>
          <?= $pageName == 'users-delete.php' ? 'active': ''; ?>

          " href="users.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-user-plus <?= $pageName == 'users.php' ? 'text-white': 'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Admin / Users</span>
          </a>
        </li>



        

    
        
      </ul>
    </div>

    <div class="sidenav-footer mx-3 ">
      <a class="btn bg-gradient-primary mt-3 w-100" href="logout.php">Logout</a>
    </div>
  </aside>