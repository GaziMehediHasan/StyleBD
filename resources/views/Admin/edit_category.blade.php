@extends('Admin.Admin_master')

@section('content')
    <div class="limiter">
      <div class="container-upload">
        <div class="wrap-upload">
            <form class="form1" method ="post" action="{{ url('/update/category/'.$category-> Cat_ID) }}" enctype="multipart/form-data">
                @csrf
                <span class="upload-form-title p-b-34 p-t-27">
                   Update Categories
                </span>

                <div class="wrap-input100 validate-input">
                    <label class="input100">Name</label>
                    <select class="input100" name="Name">
                        <option value="{{$category-> Name}}">{{ $category-> Name }}</option>
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
                        <option value="Jeans">Jeans</option>
                        <option value="Shoe">Shoe</option>
                        <option value="Sunglass">Sunglass</option>
                        <option value="Bag">Bag</option>
                        <option value="Watch">Watch</option>
                        <option value="Jewellary">Jewellary</option>
                        <option value="UnderGarment">UnderGarment</option>
                    </select>
                </div>
                @error('Name')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <label class="input100">Category Type</label>
                    <select class="input100" name ="CategoryType">
                        <option value="{{$category-> Cat_Type}}">{{ $category-> Cat_Type }}</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        <option value="Kids">Kids</option>
                    </select>
                </div>
                @error('CategoryType')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <input ID="TextBox2" class="input100" value="{{ $category-> Cat_ID }}" name="Cat_ID" placeholder="Category ID">
                </div>
                @error('Cat_ID')
                  <div class="alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input">
                    <div class="btn btn-primary btn-sm btn float-left">
                      <span class="input100">Choose file</span>
                      <input type="file" name ="Logo">
                      <input type="hidden" name="old_logo" value="{{ $category-> Logo }}">
                    </div>
                </div>
                @error('Logo')
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