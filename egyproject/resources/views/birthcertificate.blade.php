<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

{!! Form::open(['url' => 'bc_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
    <body>
      <h1 class="p2" dir="rtl">بيانات الشهادة</h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات الشهادة</p>
      <hr>

      <p class="p2" dir="rtl">
      <label for="text"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="bc_name" required>

      <label for="text"><b>الرقم القومى</b></label>
      <input type="text" placeholder="اكتب الرقم القومى" name="bc_id" required>

      <label for="text"><b>نوع الشهادة </b></label>
      <input type="text" placeholder="اكتب نوع الشهادة" name="bc_type" required>

      <label for="text"><b>النوع</b></label>
      <input type="text" placeholder="اكتب النوع" name="bc_gender" required>

      <label for="text"><b>العنوان</b></label>
      <input type="text" placeholder="اكتب العنوان" name="bc_address" required>

      <label for="text"><b>تلفون</b></label>
      <input type="text" placeholder="اكتب رقم التلفون" name="bc_phone" required>

      <label for="text"><b>اسم الام</b></label>
      <input type="text" placeholder="اكتب اسم الام" name="bc_mother" required>

      <div class="clearfix">
      <a  href="cancelbtn">
        <button type="button" class="cancelbtn">رجوع</button>
      <button>طريقة الدفع</button>
      </a>
      </div>
    </div>
  </form>
  <title>
    طلب استخراج شهادة ميلاد
  </title>
  <link rel="stylesheet" href="css/birthcertificate.css">
  
 {!! Form::close() !!}


</body>
</html>