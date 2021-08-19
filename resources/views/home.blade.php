<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body{
            background-color: #f8f9fa!important
        }
        .p-4 {
            padding: 1.5rem!important;
        }
        .mb-0, .my-0 {
            margin-bottom: 0!important;
        }
        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }
        }
        /* user-dashboard-info-box */
        .user-dashboard-info-box .candidates-list .thumb {
            margin-right: 20px;
        }
        .user-dashboard-info-box .candidates-list .thumb img {
            width: 80px;
            height: 80px;
            -o-object-fit: cover;
            object-fit: cover;
            overflow: hidden;
            border-radius: 50%;
        }

        .user-dashboard-info-box .title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 30px 0;
        }

        .user-dashboard-info-box .candidates-list td {
            vertical-align: middle;
        }

        .user-dashboard-info-box td li {
            margin: 0 4px;
        }

        .user-dashboard-info-box .table thead th {
            border-bottom: none;
        }

        .table.manage-candidates-top th {
            border: 0;
        }

        .user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
            margin-bottom: 10px;
        }

        .table.manage-candidates-top {
            min-width: 650px;
        }

        .user-dashboard-info-box .candidate-list-details ul {
            color: #969696;
        }

        /* Candidate List */
        .candidate-list {
            background: #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-bottom: 1px solid #eeeeee;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 20px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .candidate-list:hover {
            -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
            box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
            position: relative;
            z-index: 99;
        }
        .candidate-list:hover a.candidate-list-favourite {
            color: #e74c3c;
            -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
            box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
        }

        .candidate-list .candidate-list-image {
            margin-right: 25px;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 80px;
            flex: 0 0 80px;
            border: none;
        }
        .candidate-list .candidate-list-image img {
            width: 80px;
            height: 80px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .candidate-list-title {
            margin-bottom: 5px;
        }

        .candidate-list-details ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-bottom: 0px;
        }
        .candidate-list-details ul li {
            margin: 5px 10px 5px 0px;
            font-size: 13px;
        }

        .candidate-list .candidate-list-favourite-time {
            margin-left: auto;
            text-align: center;
            font-size: 13px;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 90px;
            flex: 0 0 90px;
        }
        .candidate-list .candidate-list-favourite-time span {
            display: block;
            margin: 0 auto;
        }
        .candidate-list .candidate-list-favourite-time .candidate-list-favourite {
            display: inline-block;
            position: relative;
            height: 40px;
            width: 40px;
            line-height: 40px;
            border: 1px solid #eeeeee;
            border-radius: 100%;
            text-align: center;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            margin-bottom: 20px;
            font-size: 16px;
            color: #646f79;
        }
        .candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
            background: #ffffff;
            color: #e74c3c;
        }

        .candidate-banner .candidate-list:hover {
            position: inherit;
            -webkit-box-shadow: inherit;
            box-shadow: inherit;
            z-index: inherit;
        }

        .bg-white {
            background-color: #ffffff !important;
        }
        .p-4 {
            padding: 1.5rem!important;
        }
        .mb-0, .my-0 {
            margin-bottom: 0!important;
        }
        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }

        .user-dashboard-info-box .candidates-list .thumb {
            margin-right: 20px;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <title>Kullanıcı Listesi</title>
</head>
<body>
<div class="container mt-3 mb-4">
    <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="row">
            <div class="col-md-12">
                <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                    <table class="table manage-candidates-top mb-0">
                        <thead>
                        <tr>
                            <th>Kullanıcı Listesi</th>
                            <th>ID</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{$d['avatar']}}" alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">{{$d['first_name']." ".$d['last_name']}}</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-envelope pr-1"></i>{{$d['email']}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">{{$d['id']}}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
