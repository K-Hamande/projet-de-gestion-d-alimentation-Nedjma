<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Liens du Site </h2>
                    <ul class="useful-links">
                        <li><a href="rooms.html">Rooms & Suites</a></li>
                        <li><a href=" {{Route('Photo_Home')}} ">Gallerie Photo</a></li>
                        <li><a href="{{Route('Blog_Home')}}">Blog</a></li>
                    @if($contactDisplay->contactStatus == 1 )
                        <li><a href="{{Route('contactHome')}}"> {{$contactDisplay->contacTitre }} </a></li>
                    @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Liens Usuel </h2>
                    <ul class="useful-links">
                        <li><a href="{{Route('Home')}}">Home</a></li>
                        @if ($Terme_Display->status_terme == 1 )

                            <li><a href="{{Route('Terme_Home')}}"> {{ $Terme_Display->titre_terme }} </a></li>
                            
                        @endif

                       

                        @if($Politique_Display->status_politique == 1 )

                            <li><a href="{{Route('Politique_Home')}}">  {{ $Politique_Display->titre_politique}}</a></li>
                            
                        @endif
                        <li><a href="disclaimer.html">Disclaimer</a></li>

                        <li><a href="{{ Route('FAQ_Home') }}">FAQ</a></li>
                    </ul>
                </div>
            </div>
            
            
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Contact</h2>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="right">
                            34 Antiger Lane,<br>
                            PK Lane, USA, 12937
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                        <div class="right">
                            contact@arefindev.com
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="right">
                            122-222-1212
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Newsletter</h2>
                    <p>
                        In order to get the latest news and other great items, please subscribe us here: 
                    </p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Subscribe Now">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>