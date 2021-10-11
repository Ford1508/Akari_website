<!DOCTYPE html>
<html lang="en">
<head>
    <title>create post</title>
    <link href="../../css/create.css" rel="stylesheet">
    <meta charset="UTF-8">
</head>

<body>
    <div class="createpost-content">
        <h1 class="title">投稿追加</h1>
        <form id="contactform" name="contact" method="post" action="#" enctype="multipart/form-data">
            <div class="row">
                <label class="name-input" for="name">投稿名<span class="req">*</span></label>

                <input type="text" class="input" id="name" placeholder="">
            </div>
            <div class="row">
                <label class="name-input" for="email">記述</label>

                <input type="email" class="input" id="email" placeholder="">
            </div>
            <div class="row">
                <label class="name-input" for="description">住所<span class="req">*</span></label>

                <input type="description" class="input" id="description" placeholder="">
            </div>
            <div class="row">
                <label class="name-input" for="type">テーマ<span class="req">*</span></label>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="anuong" name="anuong" value="">
                    <label class="radio-input" for="anuong">​飲食</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="thamquan" name="thamquan" value="">
                    <label class="radio-input" for="thamquan">観光</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="giaitri" name="giaitri" value="">
                    <label class="radio-input" for="giaitri">娯楽</label>
                </div>
                <div class="choose-input">
                    <input type="radio" class="radio-input" id="dichvu" name="dichvu" value="">
                    <label class="radio-input" for="dichvu">サービス</label>
                </div>
            </div>
            <div class="row">
                <label class="name-input" for="name">タイプ<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>Danh sách 01</option>
                    <option>Danh sách 02</option>
                    <option>Danh sách 03</option>
                    <option>Danh sách 03</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="name">市<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>Danh sách 01</option>
                    <option>Danh sách 02</option>
                    <option>Danh sách 03</option>
                    <option>Danh sách 03</option>
                </select>
                <select class="name-input option-content">
                    <option>Danh sách 01</option>
                    <option>Danh sách 02</option>
                    <option>Danh sách 03</option>
                    <option>Danh sách 03</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="name">平均の値段<span class="req">*</span></label>
                <select class="name-input option-content">
                    <option>Danh sách 01</option>
                    <option>Danh sách 02</option>
                    <option>Danh sách 03</option>
                    <option>Danh sách 03</option>
                </select>
            </div>
            <div class="row">
                <label class="name-input" for="message">内容<span class="req">*</span></label>
                <textarea class="input textarea" id="message" placeholder="Your message here"></textarea>
            </div>
            <div class="row">
                <label class="name-input" for="name">添付ファイル<span class="req">*</span></label>
                <input type="file" value="ビデオ">
                <input type="file" value="写真">
            </div>
            <div class="row">
            <input type="submit" class="button" value="Send message"></div>
        </form>
    </div>

</body>

</html>