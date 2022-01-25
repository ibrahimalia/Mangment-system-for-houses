<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="../assets/css/addHome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <a href="/dashboard" style="text-decoration-line: none;color: black;font-size: 30px;float:right;top: 0px;right:0;position: absolute" title="Return  Home"><strong><i class="fa fa-fast-backward" style="font-size:40px;color:red"></i></strong></a>
    <div class="progress-bar">
        <div class="step">
            <p>
                step1</p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check">
            </div>
        </div>
        <div class="step">
            <p>
                step2</p>
            <div class="bullet">
                <span>2</span>
            </div>
            <div class="check fas fa-check">
            </div>
        </div>
        <div class="step">
            <p>
                step3</p>
            <div class="bullet">
                <span>3</span>
            </div>
            <div class="check fas fa-check">
            </div>
        </div>
        <div class="step">
            <p>
                step4</p>
            <div class="bullet">
                <span>4</span>
            </div>
            <div class="check fas fa-check">
            </div>
        </div>
    </div>
    <div class="form-outer" style="color: whitesmoke">
//<form action="" method="post" enctype="multipart/form-data">
         <form action='/role-house-update/{{$houses->id}}' method="post"  enctype="multipart/form-data">


{{csrf_field()}}
                            {{method_field('PUT')}}

            <div class="page slide-page">
                <div class="title">
                   Home Property :</div>
                <div class="field">
                    <div class="label">
                        Name Governorate :</div>
                    <input type="text" class="@error('governorate') is-invalid @enderror form-control" value="{{$houses->governorate}}" name="governorate" >
                    @error('governorate')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                         Name House :</div>
                    <input type="text" class="@error('nameHouse') is-invalid @enderror form-control"   value="{{$houses->nameHouse}}" name="nameHouse" >
                    @error('nameHouse')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <div class="label">
                        Category House : </div>
                    <select  name="categoryHouse" >
                        <option value="{{$houses->categoryHouse}}" selected="selected">{{$houses->categoryHouse}}2</option>

                        <option>sell</option>
                        <option>rent</option>
                    </select>
                </div>

                <div class="field">
                    <div class="label">
                        Type House : </div>
                    <select name="typeHouse" >
                    <option value="{{$houses->typeHouse}}" selected="selected">{{$houses->typeHouse}}2</option>
                        <option>flat</option>
                        <option>land</option>
                        <option>Villa</option>
                        <option>palace</option>
                        <option>office</option>
                    </select>
                </div>
                <div class="field">
                    <button class="firstNext next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Home Property :</div>
                <div class="field">
                    <div class="label">
                        Site Address :</div>
                    <input type="text" class="@error('site') is-invalid @enderror form-control"  value="{{$houses->site}}" name="site" >
                    @error('site')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Price(Private or public(default)) :</div>
                    <input type="number" class="@error('price') is-invalid @enderror form-control" min="0" value="{{$houses->price}}" name="price" ><input class="form-check-input" name="typePrice" value="private"  type="checkbox">

                    @error('price')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Phone Number :</div>
                    <input type="number" class="@error('phone') is-invalid @enderror form-control" min="0" value="{{$houses->phone}}" name="phone" >
                    @error('phone')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        description House :</div>
                    <textarea col="5" row="5" id="subject" title="ادخل وصف عن اعلانك يتضمن صورة كي يتمكن الناس من مشاهدة عقارك" name="description" value="{{$houses->description}}" style="height:60px;width:100%;" class="@error('description') is-invalid @enderror" ></textarea>
                    @error('description')
                    <div class="mess">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field btns">
                    <button class="prev-1 prev">Previous</button>
                    <button class="next-1 next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Home Property :</div>
                <div class="field">
                    <div class="label">
                        Bathroom Number :</div>
                    <input type="number" class="@error('bathroom') is-invalid @enderror form-control" min="0"  value="{{$houses->bathroom}}" name="bathroom" >
                    @error('bathroom')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Room Number :</div>
                    <input type="number" class="@error('roomNumber') is-invalid @enderror form-control" min="0" value="{{$houses->roomNumber}}" name="roomNumber" >
                    @error('roomNumber')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Main Image :</div>
                    <input  type="file" class="form-control @error('mainImage') is-invalid @enderror" name="mainImage"  >
                    @error('mainImage')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Apartment Image :</div>
                    <input type="file"  name="apartmentImage[]" class="@error('apartmentImage') is-invalid @enderror"  multiple >
                    @error('apartmentImage')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field btns">
                    <button class="prev-2 prev">Previous</button>
                    <button class="next-2 next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Home Property :</div>
                <div class="field">
                    <div class="label">
                        Living Room Image :</div>
                    <input type="file"  name="livingRoomImage[]" class="@error('livingRoomImage') is-invalid @enderror"  multiple >
                    @error('livingRoomImage')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Bed Room Image :</div>
                    <input type="file"  name="bedRoomImage[]" class="@error('bedRoomImage') is-invalid @enderror"  multiple >
                    @error('bedRoomImage')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Kitchen Image :</div>
                    <input type="file"  name="kitchenImage[]" class="@error('kitchenImage') is-invalid @enderror"  multiple >
                    @error('kitchenImage')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <div class="label">
                        Garage Image :</div>
                    <input type="file"  name="garageImage[]" class="@error('garageImage') is-invalid @enderror"  multiple >
                    @error('garageImage')
                    <div class="mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field btns">
                    <button class="prev-3 prev">Previous</button>
                    <button class="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->
<script>
    <!-- Created By CodingNepal -->
    const slidePage = document.querySelector(".slide-page");
    const nextBtnFirst = document.querySelector(".firstNext");
    const prevBtnSec = document.querySelector(".prev-1");
    const nextBtnSec = document.querySelector(".next-1");
    const prevBtnThird = document.querySelector(".prev-2");
    const nextBtnThird = document.querySelector(".next-2");
    const prevBtnFourth = document.querySelector(".prev-3");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    let current = 1;

    nextBtnFirst.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    nextBtnSec.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    nextBtnThird.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "-75%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    submitBtn.addEventListener("click", function(){
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;

    });

    prevBtnSec.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "0%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnThird.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnFourth.addEventListener("click", function(event){
        event.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });

</script>
</body>
</html>
