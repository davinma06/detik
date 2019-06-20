<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detik</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logodetik {
                float: left;
                padding: 15px 0 0 10px;
                display: block;
            }
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
            }

            .navbar .navbar-collapse {
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <img class="img-responsive logodetik" src="https://cdn.detik.net.id/detik2/images/logodetikcom.png?3" alt="">
            <div class="col-md-12" style="margin-top: 20px">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">detikNews</a></li>
                            <li><a href="#">detikFinance</a></li>
                            <li><a href="#">detikHot</a></li>
                            <li><a href="#">detiki-Net</a></li>
                            <li><a href="#">detikSport</a></li>
                            <li><a href="#">detikOto</a></li>
                            <li><a href="#">detikTravel</a></li>
                            <li><a href="#">detikFood</a></li>
                            <li><a href="#">detikHealth</a></li>
                            <li><a href="#">Wolipop</a></li>
                            <li><a href="#">indeks</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <table class="table table-bordered">
                        <tbody>
                            @if(count($data) > 0)
                            @foreach ($data as $key => $value)
                            <tr>
                                <td style="vertical-align : middle;text-align:center;">
                                    <div>
                                        <p>{{$value->article_title}}</p>
                                        <div style="margin-left: 20px">
                                        <img class="img-responsive" src="{{Storage::url($value->article_image_preview)}}" style="width: 300px;"></img>
                                        </div>
                                        <div>
                                            <p>{{$value->article_content}}</p>
                                        </div>
                                        <span>Posted by {{$value->name}}</span>
                                        <p>{{date('d M Y',strtotime($value->created_at))}}</p>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
