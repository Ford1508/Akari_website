@extends('web.layouts.template')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>create post</title>
    <!-- <link href="../../css/demo.css" rel="stylesheet"> -->
    <meta charset="UTF-8">
    <style>
        html,body
{
    margin: 0;
    padding: 0;
}

.title{
    color: red;
    margin: 0;
}
.createpost-content
{
    width: 90%;
    max-width: 80%;
    padding: 10px;
    margin: 40px;  
    position: relative;
    border: 1px solid blue;
    border-radius: 5px;
    background-color: #fff;
    top:0;
    left:0;
    right:0;							
}
.input{
   width: 80%;
}

.row {

    display: block;
  
    padding: 7px 8px;
  
    margin-bottom: 7px;
  
  }
.name-input{
    display: inline-block;
  
    font-size: 1.2em;
  
    font-weight: bold;
    padding: 0;
    width: 150px;
  
    color: #464646;
  
    vertical-align: top;
  
  }
form .req { color: #ca5354; }
.choose-input{
display: inline-block;
width: 100px;
}
input[type=radio] {
   width: 20px;
   height: 20px;
}
.option-content{
font-weight: normal;
font-size: 16px;
}
.button{
  float: right;
  padding: 6px 10px;
  color: #fff;
  background-color: rgb(0, 217, 255);
  border: none;
  cursor: pointer;
}
.row::after{
  display: block;
  content: "";
  clear: both;
}
.row .form-message{
  color: red;
  font-size: 10px;
  margin-left: 150px;
}
.createpost-content{
    top:40px;
}
    </style>
</head>

<body>

@section('content')
    <div class="createpost-content">
        <h1 class="title">投稿追加</h1>
        <form id="contactform" name="contact" method="post" action="{{route('baiviet.store')}}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <label class="name-input" for="content-name">投稿名<span class="req">*</span></label>

                <input type="text" class="input" id="content-name" placeholder="" name="name">
                <div class="form-message"></div>
            </div>
            <div class="row">
                <label class="name-input" for="decrip">記述</label>

                <input type="name" class="input" id="decrip" placeholder="">
            </div>
            <div class="row">
                <label class="name-input" for="description">住所<span class="req">*</span></label>

                <input type="description" class="input" id="description" placeholder="">
            </div>
            <div class="row">
                <label class="name-input" for="type">テーマ<span class="req">*</span></label>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="anuong" name="type" value="">
                    <label class="radio-input" for="anuong">​飲食</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="thamquan" name="type" value="">
                    <label class="radio-input" for="thamquan">観光</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="giaitri" name="type" value="">
                    <label class="radio-input" for="giaitri">娯楽</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="dichvu" name="type" value="">
                    <label class="radio-input" for="dichvu">サービス</label>
                </div>
            </div>
            <div class="row">
                <label class="name-input" for="name">タイプ<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>コーヒー</option>
                    <option>ミルクティー</option>
                    <option>オレンジジュース</option>
                    <option>ミルクコーヒー</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="name">市<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>Ho Chi Minh</option>
                    <option>Ha Noi</option>
                    <option>Da Nang</option>
                    <option>Hue</option>
                </select>
                <select class="name-input option-content">
                    <option>Q10</option>
                    <option>Q8</option>
                    <option>Thu Duc</option>
                    <option>Q1</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="name">平均の値段<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>20.000đ-30.000đ</option>
                    <option>30.000đ-100.000đ</option>
                    <option>100.000đ-300.000đ</option>
                    <option>300.000đ-500.000đ</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="message">内容<span class="req">*</span></label>
                <textarea class="input textarea" id="message" placeholder="Your message here" name="content"></textarea>
            </div>
            <div class="row">
                <label class="name-input" for="name">添付ファイル<span class="req">*</span></label>
                <input type="file" value="ビデオ">
                <input type="file" value="写真">
            </div>
            <div class="row">
            <input type="submit" class="button" value="Submit"></div>
        </form>
    </div>
    @endsection
    <script>
        function Validator(options){
        var formElement = document.querySelector(options.form);
        if(formElement) {
            options.rules.forEach(function(rule){
                    var inputElement = formElement.querySelector(rule.selector);
                    var errorElement = inputElement.parentElement.querySelector('.form-message');
                    if (inputElement){
                        inputElement.onblur =function(){
                            var errorMessage = rule.test(inputElement.value);
                            
                            if (errorMessage){
                                errorElement.innerText = errorMessage;
                                inputElement.parentElement.classList.add('invalid')
                            } else errorElement.innerText ='';
                            inputElement.parentElement.classList.remove('invalid')
                        }
                    }
            });
        }
    }
        Validator.isRequired = function(selector){
            return{
                selector: selector,
                test: function(value){
                    return value.trim() ? undefined : 'データを入力してください'
                }
            };
        }       
 Validator({
        form: '#contactform',
        rules:[
            Validator.isRequired('#content-name'),
        ]
    });
  
    </script>
</body>

</html>