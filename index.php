<!doctype html>
<html lang="en">
<?php include 'functions.php' ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>  
        <?php $ob1 = new os(); ?>
        <div class="row">
            <div class="col-4">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">FCFS</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">SJF</a>
                <a class="nav-link active" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">SRT</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Priority Scheduling</a>
                <a class="nav-link" id="v-pills-rr-tab" data-toggle="pill" href="#v-pills-rr" role="tab" aria-controls="v-pills-rr" aria-selected="false">Round Robin</a>
                </div>
            </div>
            <div class="col-8">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                
                <h1> First Come First Serve </h1>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Process Name:</b> Process 1</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Burst Time</label>
                        <input type="number" class="form-control mb-2"  id="bt" placeholder="eg. 21"><button type="button" id="addp" class="btn btn-primary" name="addp">Add</button>
                    </div>
                    
                    </form>

                    <h1>Gantt Chart</h1>

                        <div id="prog" class="progress"></div>
                        <span><b>AWT:</b>
                            <span id="awt"></span>ms
                        </span>

                    <table id="disp" class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Process ID</th>
                            <th scope="col">Burst Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Completion Time</th>
                            <th scope="col">Turn Around Time</th>
                            </tr>
                        </thead>
                        <tbody id="dispI">    
                        </tbody>
                        </table>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                     <h1>Shortest Job First</h1>
                     <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Process Name:</b> Process 1</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Burst Time</label>
                        <input type="number" class="form-control mb-2"  id="sjfbt" placeholder="eg. 21"><button type="button" id="addsjf" class="btn btn-primary" name="addp">Add</button>
                    </div>
                    
                    </form>

                    <h1>Gantt Chart</h1><button type="button" id="sjf_gen" class="btn btn-success" name="sjfadd">Generate</button>

                        <div id="sjfprog" class="progress"></div>
                        <span><b>AWT:</b>
                            <span id="sjfawt"></span>ms
                        </span>

                    <table id="sjfdisp" class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Process ID</th>
                            <th scope="col">Burst Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Completion Time</th>
                            <th scope="col">Turn Around Time</th>
                            </tr>
                        </thead>
                        <tbody id="sjfdispI">    
                        </tbody>
                        </table>
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h1>Shortest Remaining Time</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Process Name:</b> Process 1</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Burst Time</label>
                        <input type="number" class="form-control mb-2"  id="srtbst" placeholder="eg. 21">
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Arrival Time</label>
                        <input type="number" class="form-control mb-2"  id="srtat" placeholder="eg. 21">
                        <button type="button" id="addsrt" class="btn btn-primary" name="addp">Add</button>
                    </div>
                    
                    </form>

                    <h1>Gantt Chart</h1><button type="button" id="srt_gen" class="btn btn-success" name="sjfadd">Generate</button>

                        <div id="srtprog" class="progress"></div>
                        <span><b>AWT:</b>
                            <span id="srtawt"></span>ms
                        </span>

                    <table id="srtdisp" class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Process ID</th>
                            <th scope="col">Burst Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Completion Time</th>
                            <th scope="col">Turn Around Time</th>
                            </tr>
                        </thead>
                        <tbody id="srtdispI">    
                        </tbody>
                        </table>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Priority Scheduling</div>
                <div class="tab-pane fade" id="v-pills-rr" role="tabpanel" aria-labelledby="v-pills-rr-tab">Round Robin Scheduling</div>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="http://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="sjf.js"></script>
    <script src="srt.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>