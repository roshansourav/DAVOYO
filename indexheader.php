    <style type="text/css">
      .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fdfdfd; box-shadow: 0 10px 6px -6px #e8dede;">
      <a class="navbar-brand" href="index.php" ><span class="navbar-brand mb-0 h1" style="font-size: 1.5rem; color: #208898;">BrandName</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style=" color: black;">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: black;" >Home</a>
          </li>&nbsp;&nbsp;
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
              Men
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><b>Item Type</b></a>
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
              <a class="dropdown-item" href="#">Item 4</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>&nbsp;&nbsp;
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
              Women
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><b>Item Type</b></a>
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
              <a class="dropdown-item" href="#">Item 4</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>&nbsp;&nbsp;
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
              Kids
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><b>Item Type</b></a>
              <a class="dropdown-item" href="#">Item 1</a>
              <a class="dropdown-item" href="#">Item 2</a>
              <a class="dropdown-item" href="#">Item 3</a>
              <a class="dropdown-item" href="#">Item 4</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;" >Link 4</a>
          </li>&nbsp;&nbsp;
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for products, brands and more..." aria-label="Search" style="width: 335px; height: 35px; background-color: whitesmoke;">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit" style="height: 34px;"><i class="fa fa-search-plus" style="font-size:20px"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="login.php"><i class="fa fa-user-circle-o" data-toggle="tooltip" data-placement="bottom" title="Sign in" style="font-size:24px; color: #17a2b8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

          <a href=""><i class="fa fa-file" data-toggle="tooltip" data-placement="bottom" title="Wishlist" style="font-size:20px; color: #17a2b8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

          <a href=""><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Add to Cart" style="font-size:25px; color: #17a2b8;"></i></a>
        </form>
      </div>
    </nav>

    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>