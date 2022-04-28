<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOGIN</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: rgb(255, 255, 255);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black" style="box-shadow: 0px 0px 50px 5px #888888;">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                          <div class="mt-1 mb-5 pb-1">
                        <img src="{{ url('storage/HIAPh_INC LOGO HIGHRES-01.png') }}" style="width: 185px;" alt="logo">
                    </div>
                        <!-- <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4> -->
                      </div>
      
                      <form action="/login/account" method="get">
                        @if(Session::get('fail'))
                            <div class="alert alert-alert form-outline mb-4">
                                <span class="alert alert-danger form-control">{{ Session::get('fail') }}</span>
                            </div>
                        @endif
                        @csrf
      
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}  @enderror</span><br>
                        </div>
      
                        <div class="form-outline mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }}  @enderror</span><br>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); width: 100%;">Login</button>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <a href="{{ route('auth.register') }}" class="mb-0 me-2">I don't have an account, create new</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
                    <div class="text-light  py-4 p-md-5 mx-md-4 text-center" style="margin-left: 15%;">
                      <h4 class="mb-4">ONLINE LEARNING EXPERIENCE</h4>
                      <p class="small mb-0">Giving you an innovative way to learn and excel</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>