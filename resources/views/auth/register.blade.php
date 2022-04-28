<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/registration.css') }}">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100 gradient-custom" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
        <div class=" py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;box-shadow: 0px 0px 50px 5px #575757;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <form action="add/save" method="post">
                    @csrf
                    <!-- <span class="text-danger"> @error('firstName'){{ $message }} @enderror</span><br> -->
                    <!-- <span class="text-danger"> @error('lastName'){{ $message }} @enderror</span><br> -->
                    
                    <span class="text-danger"> @error('dateOfBirth'){{ $message }} @enderror</span><br>
                    <span class="text-danger"> @error('age'){{ $message }} @enderror</span><br>
                    <span class="text-danger"> @error('email'){{ $message }} @enderror</span><br>
                    <span class="text-danger"> @error('password'){{ $message }} @enderror    </span>
                    <span class="text-danger"> @error('confirmPassword'){{ $message }} @enderror</span><br>
                    <!-- <span class="text-danger"> @error('municipalityCity'){{ $message }} @enderror</span> <br> -->
                    <!-- <span class="text-danger"> @error('province'){{ $message }} @enderror</span><br> -->
                    <!-- <span class="text-danger"> @error('country'){{ $message }} @enderror</span><br> -->
                    <!-- <span class="text-danger"> @error('zipCode'){{ $message }} @enderror</span><br> -->
                    <div class="">
                            <input type="text"  name="firstName"  placeholder="Enter first name"  style="width: 32%;"  value="{{ old('firstName') }}" required>
                            <!-- <span class="text-danger"> @error('firstName'){{ $message }} @enderror</span> -->
                            <input type="text" style="width: 32%;"  name="middleName" placeholder="Enter middle name"  value="{{ old('middleName') }}">
                            <!-- <span class="text-danger"> @error('middleName'){{ $message }} @enderror</span> -->
                            <input type="text"  style="width: 32%;" name="lastName" placeholder="Enter last name"  value="{{ old('lastName') }}" required>
                            <!-- <span class="text-danger"> @error('lastName'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="">
                            <input type="date" style="width: 20%;"  name="dateOfBirth"  placeholder="Date of Birth" value="{{ old('dateOfBirth') }}" required>
                            <!-- <span class="text-danger"> @error('dateOfBirth'){{ $message }} @enderror</span> -->
                            <input type="number" style="width: 20%;"  name="age"  placeholder="Age" value="{{ old('age') }}" required>
                            <!-- <span class="text-danger"> @error('age'){{ $message }} @enderror</span> -->
                            <label style="margin-left: 5%; font-size: 20px;" class="pb-2 pb-md-0">Gender :</label>
                          <input
                            class=""
                            type="radio"
                            name="gender"
                            id="femaleGender"
                            value="Female"
                          />
                          <label class="form-check-label" for="femaleGender">Female</label>
                          <input
                            class=""
                            type="radio"
                            name="gender"
                            id="maleGender"
                            value="Male"
                          />
                          <label class="form-check-label" for="maleGender">Male</label>
                          <input
                            class=""
                            type="radio"
                            name="gender"
                            id="otherGender"
                            value="Other"
                            checked
                          />
                          <label class="form-check-label" for="otherGender">Other</label> 
                    </div>

                    <div class="">
                      <input type="text"  name="email" style="width: 32%;"  placeholder="Enter your email"  value="{{ old('email') }}" required>
                      <!-- <span class="text-danger"> @error('email'){{ $message }} @enderror</span> -->
                      <input type="password"  name="password" style="width: 32%;" placeholder="Enter your password" value="{{ old('password') }}" required>
                      <!-- <span class="text-danger"> @error('password'){{ $message }} @enderror</span> -->
                      <input type="password"  name="confirmPassword"  style="width: 32%;"   placeholder="Enter your Confirm password"  value="{{ old('confirmPassword') }}" required>
                      <!-- <span class="text-danger"> @error('confirmPassword'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="">
                      <input type="text"  name="houseUnitNo"  style="width: 32%;"  placeholder="House Unit no."  value="{{ old('houseOfNo') }}">
                      <!-- <span class="text-danger"> @error('houseUnitNo'){{ $message }} @enderror</span> -->
                      <input type="text"  name="floor"  style="width: 32%;"  placeholder="Floor" value="{{ old('floor') }}">
                      <!-- <span class="text-danger"> @error('floor'){{ $message }} @enderror</span> -->
                      <input type="text"  name="buildingName" style="width: 32%;" placeholder="Building name" value="{{ old('buildName') }}">
                      <!-- <span class="text-danger"> @error('buildingName'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="">
                      <input type="text"  name="street" style="width: 32%;" placeholder="Street"  value="{{ old('street') }}">
                      <!-- <span class="text-danger"> @error('street'){{ $message }} @enderror</span> -->
                      <input type="text"  name="subdivision"  style="width: 32%;"  placeholder="Subdivision">
                      <!-- <span class="text-danger"> @error('subdivision'){{ $message }} @enderror</span> -->
                      <input type="text"  name="barangay" style="width: 32%;" placeholder="Barangay"  value="{{ old('barangay') }}">
                      <!-- <span class="text-danger"> @error('barangay'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="">
                      <input type="text"  name="municipalityCity" style="width: 30%;"  placeholder="Municipality/City" value="{{ old('municipalityCity') }}" required>
                      <!-- <span class="text-danger"> @error('municipalityCity'){{ $message }} @enderror</span>  -->
                      <input type="text"  name="province" style="width: 30%;"  placeholder="Province"  value="{{ old('province') }}" required>
                      <!-- <span class="text-danger"> @error('province'){{ $message }} @enderror</span> -->
                      <input type="text"  name="country" style="width: 23%;"  placeholder="Country" value="{{ old('country') }}" required>
                      <!-- <span class="text-danger"> @error('country'){{ $message }} @enderror</span> -->
                      <input type="text"  name="zipCode" style="width: 13%;"  placeholder="Zip code"  value="{{ old('zipCode') }}" required>
                      <!-- <span class="text-danger"> @error('zipCode'){{ $message }} @enderror</span><br> -->
                    </div>
                 
                    <div class="mt-4 pt-2">
                      <button class="btn btn-primary btn-lg" type="submit">ADD</button>
                      <a href="/login">I already have an account, sign in</a>
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>