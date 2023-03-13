<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{!! Form::open(['url' => 'dl_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات الرخصه</h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات الرخصه</p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="email"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="dl_name" required>
  
      <label for="text"><b>الرقم القومي </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="dl_id" required>
  
      <label for="email"><b>نوع الرخصه </b></label>
      <input type="text" placeholder="اكتب  نوع البطاقة" name="dl_type" required>
  
      <label for="email"><b>العنوان</b></label>
      <input type="text" placeholder="اكتب العنوان" name="dl_address" required>
  
      <label for="email"><b> رقم الهاتف </b></label>
      <input type="text" placeholder="اكتب رقم الهاتف" name="dl_phone" required>

      <label for="email"><b> صورة شهادة بطنة  </b></label>
      <input type="file" placeholder="ادخل صورة شهادة بطنة" name="dl_photo" required>

      <label for="email"><b> صورة شهادة نظر</b></label>
      <input type="file" placeholder="ادخل صورة شهادة نظر " name="dl_photo2" required>

      <label for="email"><b>صورة بطاقة سارية </b></label>
      <input type="file" placeholder="ادخل صورة بطاقة سارية" name="dl_photo3" required>
      <div class="clearfix">
      <a  href="cancelbtn">
        <button type="button" class="cancelbtn">رجوع</button>
      <button>طريقة الدفع</button>
      </div>
      </a>
      </div>
      </form>
      <title>
      clientinfo!
      </title>
      <link rel="stylesheet" href="css/drivinglicense.css">
     {!! Form::close() !!}
     </body>
    </html>