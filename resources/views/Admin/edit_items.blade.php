@extends('Admin.Admin_master')

@section('content')
    <div class="limiter">
      <div class="container-upload">
        <div class="wrap-upload">
            <form class="form1" method ="post" action="{{ url('/update/items/'.$item-> id) }}" enctype="multipart/form-data">
                @csrf
                <span class="upload-form-title p-b-34 p-t-27">
                    Upload Items
                </span>

                <div class="wrap-input100 validate-input">
                    <input ID="TextBox1" class="input100" name="Name" value="{{ $item-> Name }}" placeholder="Name">
                </div>
                @error('Name')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <label class="input100">Items Type</label>
                    <select class="input100" name="ItemsType">
                        <option value="{{ $item-> ItemsType }}">{{ $item-> ItemsType }}</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Pant">Pant</option>
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Polo Shirt">Polo Shirt</option>
                        <option value="Kurta">Kurta</option>
                        <option value="Saree">Saree</option>
                        <option value="Salwar Kameez">Salwar Kameez</option>
                        <option value="Kurti">Kurti</option>
                        <option value="Top">Top</option>
                        <option value="Lehenga">Lehenga</option>
                        <option value="Shoe">Shoe</option>
                        <option value="Sunglass">Sunglass</option>
                        <option value="Bag">Bag</option>
                        <option value="Watch">Watch</option>
                        <option value="Jewellary">Jewellary</option>
                        <option value="UnderGarment">UnderGarment</option>
                    </select>
                </div>
                @error('ItemsType')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input" >
                    <input ID="TextBox1" class="input100" name="Price" value="{{ $item-> Price }}" placeholder="Price">
                </div>
                @error('Price')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <input ID="TextBox1" class="input100" name="Discount" value="{{ $item-> Discount }}" placeholder="Discount">
                </div>
                @error('Discount')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <input ID="TextBox1" class="input100" name="Ratings" value="{{ $item-> Ratings }}" placeholder="Ratings">
                </div>
                @error('Ratings')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <label class="input100">Category Type</label>
                    <select class="input100" name ="CategoryType">
                        <option value="{{ $data->Cat_Type }}">{{ $data->Cat_Type }}</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        <option value="Kids">Kids</option>
                    </select>
                </div>
                @error('CategoryType')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <div class="btn btn-primary btn-sm btn float-left">
                      <span class="input100">Choose file</span>
                      <input type="file" name="Photo">
                      <input type="hidden" name="old_photo" value="{{ $item-> Photo }}">
                    </div>
                </div>
                 @error('Photo')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="container-upload-form-btn">
                    <button class="upload-form-btn">
                      UPDATE
                    </button>
                </div>
            </form>                 
        </div>
      </div>
    </div>
@endsection