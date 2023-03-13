<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
{!! Form::open(['url' => 'fr_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات طلب القيد</h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات القيد</p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="email"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="fr_name" required>
  
      <label for="text"><b>الرقم القومي </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="fr_id" required>
  
      <label for="email"><b>العنوان</b></label>
      <input type="text" placeholder="اكتب العنوان" name="fr_address" required>
  
      <label for="email"><b>رقم الهاتف </b></label>
      <input type="text" placeholder="اكتب رقم الهاتف" name="fr_phone" required>

      <label for="email"><b> صور بطاقة </b></label>
      <input type="file" placeholder="ادخل  صور بطاقة" name="fr_photo" required>

      <label for="email"><b> صور قسيمة الجواز </b></label>
      <input type="file" placeholder="ادخل صور قسيمة الجواز" name="fr_photo2" required>

      <label for="email"><b> صورة شهادة ميلاد جميع افراد العائلة </b></label>
      <input type="file" placeholder="ادخل  صورة شهادة ميلاد جميع افراد العائلة" name="fr_photo3" required>
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
    <link rel="stylesheet" href="css/familyrestriction.css">

    {!! Form::close() !!}

</body>
</html>