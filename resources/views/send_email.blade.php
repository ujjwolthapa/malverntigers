<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MALVERN TIGERS BASKETBALL CLUB</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::asset('assets/style.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="{{URL::asset('assets/function.js')}}"></script>
        <style>
                #txt{ 
                        display: block;
                        text-align: center;
                        margin-top:5rem;

                }
                h3{
                        display: inline-block;
                        text-align: center;
                        margin-right: 20px;
                }
        </style>
</head>
<body> 
        <h2 class="text-center text-white text-uppercase" id="text1">Malvern Tigers Basketball Club</h2>
        <div id="txt" class="text">
        <h3 class="text-center text-white text-uppercase " id="text">Website</h3>
        <h3 class="text-center text-white text-uppercase " id="text">Comming</h3>
        <h3 class="text-center text-white text-uppercase " id="text">Soon</h3>
        </div>
        <div class="container contact-form">
                @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                        <ul>
                @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                        </ul>
                        </div>
                @endif
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                                <strong>{{ $message }}</strong>
                        </div>
                @endif
                <form method="post" action="{{route('send.mails')}}">
                        @csrf
                        <h3>For enquiries, please contact us</h3>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control mb-2" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control mb-2" placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control mb-4" placeholder="Your Message *"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <input type="submit" name="btnSubmit" class="btnContact mb-4 " style="width: 120px" value="Send" />
                                            </div>
                                </div>
                        </div>
                </form>
        </div>

        

        
</body>

</html>
