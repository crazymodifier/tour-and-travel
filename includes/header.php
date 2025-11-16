<?php

require './config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>
    <header class="bg-light">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">Tour &amp; Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/packages.php">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="/destinations.php">Destinations</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu" aria-labelledby="moreDropdown">
                            <a class="dropdown-item" href="/about.php">About Us</a>
                            <a class="dropdown-item" href="/contact.php">Contact</a>
                        </div>
                    </li>
                </ul>

                <!-- <form class="form-inline my-2 my-lg-0 mr-3" action="/search.php" method="get">
                    <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search packages" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->

                <button class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Sign up</button>

              <!-- Login Modal -->
              <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="loginModalLabel">Login</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="/login.php" method="post">
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="loginEmail">Email</label>
                          <input type="email" class="form-control" id="loginEmail" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="loginPassword">Password</label>
                          <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Register Modal -->
              <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="registerModalLabel">Sign up</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="actions/register.php" method="post">
                      <input type="hidden" name="action" value="register">
                      <div class="modal-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="registerFirstName">First Name</label>
                          <input type="text" class="form-control" id="registerFirstName" name="first_name" required>
                          </div>
                          <div class="form-group col-md-6">
                          <label for="registerLastName">Last Name</label>
                          <input type="text" class="form-control" id="registerLastName" name="last_name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="registerEmail">Email</label>
                          <input type="email" class="form-control" id="registerEmail" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="registerPassword">Password</label>
                          <input type="password" class="form-control" id="registerPassword" name="password" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </nav>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
