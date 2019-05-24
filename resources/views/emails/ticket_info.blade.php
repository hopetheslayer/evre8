<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppor Ticket Information</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="receipt-header">

                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <div class="receipt-right">
                            <h5>Önal Patent</h5>
                            <p>0 (312) 440 71 11  <i class="fa fa-phone"></i></p>
                            <p>info@onalpatent.com  <i class="fa fa-envelope-o"></i></p>
                            <p>Ankara/Turkiye<i class="fa fa-location-arrow"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <p>{{ date('d/m/Y ') }}</p>
                            <h4 style="color: rgb(140, 140, 140);"> <p>
                                    Teşekkür ederin sayın {{ ucfirst($user->name) }} Destek ekibimizle iletişim kurduğun için.Destek bileti sizin için açıldı. Sonucu size mail olarak en kısa sürede ulaştıracağız. Destek biletine ilişkin detaylar alttadır.
                                </p></h4>
                        </div>
                    </div>

                </div>
            </div>



            <p>Konu: {{ $ticket->title }}</p>
            <p>Öncelik: {{ $ticket->priority }}</p>
            <p>Durumu: {{ $ticket->status }}</p>

            <p>
                Destek biletinizi görmek için {{ url('tickets/'. $ticket->ticket_id) }}
            </p>


            <div>

            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="receipt-left">
                    <img class="img-responsive" alt="iamgurdeeposahan" src="http://onalpatent.com/assets/images/2.png" style="width: 71px; border-radius: 43px;">
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

