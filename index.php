<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"
    lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/templates/css/bootstrap.css">
    <link rel="stylesheet" href="include/templates/css/see.css">
    <script src="https://kit.fontawesome.com/759b16292f.js" crossorigin="anonymous"></script>
    <script src="include/templates/js/jquery-3.6.0.min.js"></script>

</head>

<body>


    <!-- sidebar -->
    <div class="navkiri -animate-left border border-danger" style="display:none" id="mySidebar">
        <a class="nav-link" href="#" onclick="_close()">Close &times;</a>
        <nav class="nav flex-column text-center mt-5">
            <li class="nav-item">
                <a class="nav-link" href="#">Item 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Item 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Item 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Item 4</a>
            </li>
        </nav>
    </div>
    <!-- end sidebar -->

    <div id="main">
        <!-- navbar -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" id="openNav" onclick="_open()"><i class="fas fa-stream"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsatu"
                    aria-controls="navbarsatu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsatu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropsatu" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropsatu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- end navbar -->

        <div class="container-fluid">
            <div class="row">
                <!-- conten tengah -->
                <div class="col-sm-9 border border-danger">
                    <!-- gambar -->

                    <!-- end gambar -->
                    <!-- tab konten -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true"><i class="fas fa-business-time"></i> NEWS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false"><i class="fas fa-cloud-moon"></i>
                                EVENTS</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown
                                            by default, thanks to the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the second accordion panel. This panel is
                                            hidden by default.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>profil</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum amet provident
                                praesentium porro nam? Sunt consequatur, cupiditate non nisi labore natus repellat cum
                                pariatur aspernatur, voluptatibus accusamus explicabo voluptates repudiandae!
                                Animi rerum quisquam et nisi, minus pariatur reiciendis assumenda necessitatibus sit
                                magnam voluptates voluptate quas sed facilis dolores molestiae accusamus tempora a
                                itaque dicta voluptatum inventore eligendi aspernatur! Officiis, corporis.
                                Natus cum illo neque eius doloribus nihil adipisci tempora non quo ex inventore labore
                                minus corrupti dicta id, voluptatibus minima perspiciatis explicabo dolor distinctio in?
                                Vitae similique laborum sequi explicabo.</p>
                            <a href="">profil</a>
                        </div>
                    </div>
                    <!-- end tab konten -->

                </div>
                <!-- end konten tengah -->
                <!-- konten kanan -->
                <div class="col-sm-3 border border-warning">
                    <h3 class="text-center">satu</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            satu <span class="float-right">satu</span>
                        </li>
                        <li class="list-group-item">
                            satu <span class="float-right">satu</span>
                        </li>
                    </ul>
                    <h3 class="text-center mt-3">dua</h3>
                    <div class="progress mt-1">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <div class="progress mt-2">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>dua <span class="float-right">dua</span></p>
                            <p>dua <span class="float-right">dua</span></p>
                        </li>
                    </ul>
                    <h3 class="text-center">tiga</h3>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">nama</th>
                                <th scope="col">dua</th>
                                <th scope="col">tiga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>nama</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>nama</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>nama</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end konten kanan -->
            </div>
        </div>
    </div>





    <script src="include/templates/js/bootstrap.bundle.js"></script>
    <script src="include/templates/js/lain.js"></script>
</body>

</html>