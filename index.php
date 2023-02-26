<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Task One</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        #spider-web {
            width: 100%;
            height: 100%;
            border: 1px solid red;
        }

        .point-1-y,
        .point-2-y,
        .point-3-y,
        .point-4-y,
        .point-5-y,
        .point-6-y,
        .point-7-y,
        .point-8-y,
        .point-9-y,
        .point-10-y,
        .point-11-y,
        .point-12-y {
            appearance: slider-vertical;
        }
    </style>
</head>

<body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <div class=" my-3">
        <div class="card text-center">
            <div class="card-header">
               <h4> Task One - Spider-map powered by equalizer buttons </h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <canvas id="spider-web"></canvas>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="container">
                        <div class="row">
                            <!-- Point 1 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-1-x">Point 1 X:</label>
                                            <input type="range" id="point-1-x" min="0" max="350" value="80"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_1_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-1-y">Point 1 Y:</label>
                                            <input type="range" id="point-1-y" class="point-1-y" min="0" max="150"
                                                value="25"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_1_Y"></span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 2 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-2-x">Point 2 X:</label>
                                            <input type="range" id="point-2-x" min="0" max="300" value="180"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_2_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-2-y">Point 2 Y:</label>
                                            <input type="range" id="point-2-y" class="point-2-y" min="0" max="150"
                                                value="75"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_2_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Point 3 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-3-x">Point 3 X:</label>
                                            <input type="range" id="point-3-x" min="0" max="300" value="140"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_3_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-3-y">Point 3 Y:</label>
                                            <input type="range" id="point-3-y" class="point-3-y" min="0" max="150"
                                                value="5"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_3_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Point 4 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-4-x">Point 4 X:</label>
                                            <input type="range" id="point-4-x" min="0" max="300" value="255"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_4_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-4-y">Point 4 Y:</label>
                                            <input type="range" id="point-4-y" class="point-4-y" min="0" max="150"
                                                value="30"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_4_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 5 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-5-x">Point 5 X:</label>
                                            <input type="range" id="point-5-x" min="0" max="300" value="230"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_5_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-5-y">Point 5 Y:</label>
                                            <input type="range" id="point-5-y" class="point-5-y" min="0" max="150"
                                                value="50"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_5_Y"></span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 6 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-6-x">Point 6 X:</label>
                                            <input type="range" id="point-6-x" min="0" max="300" value="280"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_6_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-6-y">Point 6 Y:</label>
                                            <input type="range" id="point-6-y" class="point-6-y" min="0" max="150"
                                                value="70"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_6_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Point 7 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-7-x">Point 7 X:</label>
                                            <input type="range" id="point-7-x" min="0" max="300" value="240"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_7_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-7-y">Point 7 Y:</label>
                                            <input type="range" id="point-7-y" class="point-7-y" min="0" max="150"
                                                value="85"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_7_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Point 8 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-8-x">Point 8 X:</label>
                                            <input type="range" id="point-8-x" min="0" max="300" value="265"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_8_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-8-y">Point 8 Y:</label>
                                            <input type="range" id="point-8-y" class="point-8-y" min="0" max="150"
                                                value="91"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_8_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 9 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-9-x">Point 9 X:</label>
                                            <input type="range" id="point-9-x" min="0" max="300" value="220"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_9_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-9-y">Point 9 Y:</label>
                                            <input type="range" id="point-9-y" class="point-9-y" min="0" max="150"
                                                value="130"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_9_Y"></span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Point 10 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-10-x">Point 10 X:</label>
                                            <input type="range" id="point-10-x" min="0" max="300" value="85"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_10_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-10-y">Point 10 Y:</label>
                                            <input type="range" id="point-10-y" class="point-10-y" min="0" max="150"
                                                value="95"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_10_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 11 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-11-x">Point 11 X:</label>
                                            <input type="range" id="point-11-x" min="0" max="300" value="60"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_11_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-11-y">Point 11 Y:</label>
                                            <input type="range" id="point-11-y" class="point-11-y" min="0" max="150"
                                                value="90"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_11_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Point 12 -->
                            <div class="col">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="point-12-x">Point 12 X:</label>
                                            <input type="range" id="point-12-x" min="0" max="300" value="20"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_12_X"></span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <label for="point-12-y">Point 12 Y:</label>
                                            <input type="range" id="point-12-y" class="point-12-y" min="0" max="150"
                                                value="65"> <br>
                                            <p class="badge badge-dark">Value: <span id="equalizer_value_12_Y"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-warning float-right" type="reset">
                        <a onclick="reset()">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Reset in here
                        </a>
                    </button>

                </form>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <script src="equalizer_value_x.js"></script>
    <script src="equalizer_value_y.js"></script>
    <script src="javascript.js"></script>

</body>

</html>