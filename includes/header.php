<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Webian World: UI UX Software Design Company</title>
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/responsive.css" />
  <link rel="stylesheet" href="./CSS/contact-us.css" />
  <link rel="stylesheet" href="../CSS/Enterprises.css">
  <link rel="stylesheet" href="../CSS/StartUp.css">
  <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
  <link
    rel="shortcut icon"
    href="./assests/icons/w-Edu.svg"
    type="image/x-icon" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <!-- swiper css -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
</head>

<body>
  <header class="container-fluid">
    <nav class="navbar navbar-expand-lg py-4 py-lg-0">
      <div class="container-fluid px-lg-5 py-lg-2">
        <a class="navbar-brand fs-2" href="#"><img
            src="./assests/images/logo.svg"
            width="230px"
            height="80px"
            class="pb-2"
            alt="" /></a>
        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="navbarSupportedContent"
          aria-labelledby="navbarSupportedContentLabel">
          <!-- naviation bar content collapse navbar-collapse-->
          <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation circle">
            <div class="d-flex justify-content-between p-3">
              <a class="navbar-brand fs-2" href="#"><img
                  src="./assests/images/logo.svg"
                  width="230px"
                  height="80px"
                  class="pb-2"
                  alt="" /></a>
              <i class="lni lni-xmark-circle fs-2"></i>
            </div>
          </button>
          <ul
            class="navbar-nav me-lg-auto mb-2 p-4 mb-lg-0 p-lg-0 gap-4 fs-6 animate-links">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="./our-works.php">Our works</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link d-flex align-items-center dropdown-toggle open-inline-popup"
                href="#"
                id="dropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Service
              </a>
              <ul class="dropdown-menu main-drop-menu" aria-labelledby="dropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="../Enterprises.php">
                    <span class="menu-text">Enterprises</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../StartUp.php">
                    <span class="menu-text">UX StartUp</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="menu-text">UX Audit</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="menu-text">Design System</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Enterprises.php">Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Blog</a>
            </li>
          </ul>
          <form
            class="d-flex mx-4"
            role="search"
            action="./contact-us.php">
            <button class="btn btn-outline-primary" type="submit">
              Contact Us
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>