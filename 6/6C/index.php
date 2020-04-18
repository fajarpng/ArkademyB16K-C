<?php
$conn = mysqli_connect("localhost", "root", "", "database");
?>
<!DOCTYPE html>
<html>
<head>
    <title>mookup</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="125" height="40" class="d-inline-block align-top" alt="">
        </a>
        </a>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search ...">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-color " data-toggle="modal" data-target="#add">ADD</button>
        </div>
    </nav>

    <div class="container mt-5">
        <table class="table table-borderless text-center table-set shadow-sm">
            <thead class="btn-color">
                <tr>
                    <th class="text-black p-4" scope="col">No</th>
                    <th class="text-black p-4" scope="col">Cashier</th>
                    <th class="text-black p-4" scope="col">Product</th>
                    <th class="text-black p-4" scope="col">Category</th>
                    <th class="text-black p-4" scope="col">Price</th>
                    <th class="text-black p-4" cope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Pevita Pearce</td>
                    <td>Latte</td>
                    <td>Drink</td>
                    <td>Rp. 10.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Raisa Andriana</td>
                    <td>Cake</td>
                    <td>Food</td>
                    <td>Rp. 15.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Raisa Andriana</td>
                    <td>Fried Race</td>
                    <td>Food</td>
                    <td>Rp. 30.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>Pevita Pearce</td>
                    <td>Gudeg</td>
                    <td>Food</td>
                    <td>Rp. 35.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th>5</th>
                    <td>Joko Purwadhi</td>
                    <td>Ice Tea</td>
                    <td>Drink</td>
                    <td>Rp. 55.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th>6</th>
                    <td>Tri Fajar Pangestu</td>
                    <td>Bakso</td>
                    <td>Food</td>
                    <td>Rp. 15.000</td>
                    <td>
                        <button type="button" class="btn text-success" data-toggle="modal" data-target="#edit">Edit</button>
                        |
                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   <!-- Add Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-radius">
                <div class="modal-header no-border">
                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body no-border">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" id="InputCashier">
                                    <option>Raisa Andriana</option>
                                    <option>Pevita Pearce</option>
                                    <option>Tri Fajar Pangestu</option>
                                    <option>Joko Purwadhi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" id="inputProduct">
                                    <option>Food</option>
                                    <option>Drink</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"></label>
                                <input type="text" class="form-control" id="inputCategory" placeholder="Bakso">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2"></label>
                                <input type="text" class="form-control" id="inputPrice" placeholder="RP.15.000">
                            </div>
                            <div class="modal-footer no-border">
                                <button type="button" class="btn btn-color">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-radius">
                <div class="modal-header no-border">
                    <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body no-border">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" id="InputCashier">
                                    <option>Raisa Andriana</option>
                                    <option>Pevita Pearce</option>
                                    <option>Tri Fajar Pangestu</option>
                                    <option>Joko Purwadhi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" id="inputProduct">
                                    <option>Food</option>
                                    <option>Drink</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"></label>
                                <input type="text" class="form-control" id="inputCategory" placeholder="Bakso">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2"></label>
                                <input type="text" class="form-control" id="inputPrice" placeholder="RP.15.000">
                            </div>
                            <div class="modal-footer no-border">
                                <button type="button" class="btn btn-color">EDIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-radius">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body no-border">
                    <div class="container text-center">
                        <H4>Data Raisa Andriani <a class="text-pink"> #1</a></H4>
                        <img class="m-2" src="img/cropped-centang.png" width="300" height="300">
                        <H4>Berhasil Dihapus!</H4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>