<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            setInterval(function(){
                $("#volumeair").load("volumeair.php");
                $("#arus").load("arus.php");
                $("#ph").load("ph.php");
            }, 1000);

            
        });
    </script>
</head>
<body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">MY WATER </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Link</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
        
    </div>

    <div class="konten">
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Volume Air</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <!-- <canvas id="myAreaChart"></canvas> -->
                            <table class="table">
                                <tr>
                                    <th style="width: 20%">
                                        <span id="volumeair"></span>
                                    </th>
                                    <th>
                                        Tampilan
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="card text-right" style="height: 200px">
                                            <h5>1000 L</h5>
                                            <h5></h5>
                                            <h5>750 L</h5>
                                            <h5></h5>
                                            <h5>500 L</h5>
                                            <h5></h5>
                                            <h5>250 L</h5>
                                            <h5></h5>
                                            <h5>0 L</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="card bg-primary" style="height: 200px; width: 50%;">
                                            <div class="card bg-light" style="height: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Arus Air yang Masuk</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table bg-light text-primary text-center">
                            <tr>
                                <td>100</td>
                            </tr>
                        </table>
            <!--                                     <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Siang
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Pagi
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Malam
                            </span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Kualitas Air</h6>
                    </div>
                    <div class="card-body">
                        <h4>Nilai Sensor</h4>
                        <div class="panel-default">
                            <div class="grid">
                            <div class="card bg-light text-primary text-center"><span id="volumeair"></span></div>
                            </div>
                            <table class="table-light">
                                <span id="volumeair">0</span>
                            </table>
                        </div>
                    </div>

                    <div class="card-body">

                        <h4 class="small font-weight-bold">Sangat Buruk <span
                                class="float-right">Ph = >0</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Buruk <span
                                class="float-right">Ph = 1-6</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Sangat Baikk<span
                                class="float-right">Ph = 6,5-7,5</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Cukup  <span
                                class="float-right">Ph = 8-9</span></h4>
                        <div class="progress">
                            <div class="progress-bar bg-safe" role="progressbar" style="width: 80%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Keterangan</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="img/undraw_posting_photo.svg" alt="...">
                        </div>
                        <p>Air tanah yang baik dan aman digunakan harus memiliki pH netral, yakni antara 6,8 hingga 7,2 untuk bak penampungan kecil, serta 6,5 hingga 7,5 untuk bak penampungan besar.Air tanah dengan tingkat keasaman yang terlampau tinggi atau rendah berisiko memberi dampak buruk pada kesehatan. Oleh karena itu, pastikan air tanah di rumah Anda memiliki pH netral sebelum digunakan.</p>
                        <a target="_blank" rel="nofollow" href="https://www.alodokter.com/manfaat-ph-air-minum-yang-lebih-tinggi-bagi-tubuh#:~:text=Kadar%20pH%20air%20minum%20umumnya,dapat%20menetralkan%20asam%20dalam%20tubuh.">keterangan lainya...
                            </a>
                    </div>
                </div>                      
            </div>
        </div>
        
                        
    </div>
      
    <table class="col-12">
        <tr>
            <td ></td>
            <td ></td>
            <td ></td>
        </tr>
    </table>

    <table class="table table-dark">
        <thead>
            ...
        </thead>
        <tbody>
            <tr class="table-active">
            ...
            </tr>
            <tr>
            ...
            </tr>
            <tr>
            <td><span  id="volumeair"> 0 </span></td>
            <td><span  id="arus"> 0 </span></td>
            <td><span  id="ph"> 0 </span></td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>