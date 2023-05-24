<!DOCTYPE html>
<html>
  <head>
    <title>New Member Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href=" {{asset('css/app.css')}}" type="text/css">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999;
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("images/gath.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="container">
    <div class="testbox">
     <div class="row">
        @if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('msg') }}
        </div>
    @endif

        <div class="col-md-3"></div>
        <div class="col-md-6">
      <form action="{{ url('createform')}}" method="post">
        @csrf
        <div class="banner">
          <h1>New Member Registration</h1>
        </div>
        <div class="colums">
          <div class="item">
            <label for="fname"> First Name<span>*</span></label>
            <input id="fname" type="text" name="fname" value="{{old('fname')}}" required/>

            @error('fname')
                <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" value="{{old('lname')}}" required/>

            @error('lname')
                <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="address1">Address 1<span>*</span></label>
            <input id="address1" type="text"   name="address1" value="{{old('address1')}}" required/>

            @error('address1')
                <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>
          <div class="item">
            <label for="address2">Address 2<span>*</span></label>
            <input id="address2" type="text"   name="address2" value="{{old('address2')}}" required/>
            @error('address2')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" value="{{old('state')}}" required/>
            @error('state')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="zip">Zip/Postal Code<span>*</span></label>
            <input id="zip" type="text" name="zip" value="{{old('zip')}}" required/>
            @error('zip')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" value="{{old('city')}}" required/>
            @error('city')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="email">Email Address<span>*</span></label>
            <input id="email" type="text"   name="email" value="{{old('email')}}" required/>
            @error('email')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>

          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" value="{{old('phone')}}" required/>
            @error('phone')
            <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="question">
          <label>Membership Type</label>
          <div class="category">
            <div>
              <input type="radio"  id="radio_1" value="standard" name="category"/>
              <label for="radio_1" class="radio"><span>Standard</span></label>
            </div>
            <div>
              <input  type="radio"  id="radio_2" value="premium" name="category"/>
              <label for="radio_2" class="radio"><span>Premium</span></label>
            </div>
            <div>
              <input  type="radio"  id="radio_3" value="ultimate" name="category"/>
              <label for="radio_3" class="radio"><span>Ultimate</span></label>
            </div>
          </div>
          @error('category')
          <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
          @enderror
        </div>
        <div class="question">
          <label>Preferred way to contact </label>
          <div class="contect">
            <div>
              <input type="radio" value="phone" id="radio_4" name="contectway"/>
              <label for="radio_4" class="radio"><span>Phone</span></label>
            </div>
            <div>
              <input  type="radio" value="email" id="radio_5" name="contectway"/>
              <label for="radio_5" class="radio"><span>Email</span></label>
            </div>
            <div>
              <input  type="radio" value="any" id="radio_6" name="contectway"/>
              <label for="radio_6" class="radio"><span>Any</span></label>
            </div>
          </div>
          @error('contectway')
          <div class="text-white bg-danger w-100 p-1 ">{{ $message }}</div>
          @enderror
        </div>
        <h2>Terms and Conditions</h2>
        <input type="checkbox" name="checkbox1">
        <label>You consent to receive communications from us electronically.
            We will communicate with you by e-mail or phone. You agree that all agreements,
            notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</label>
        <div class="btn-block">
          <button type="submit" >Submit</button>
        </div>
      </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
</div>
  </body>
</html>
