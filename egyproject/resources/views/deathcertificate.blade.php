<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

{!! Form::open(['url' => 'ds_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات شهادة الوفاه</h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات الشهادة</p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="text"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="ds_name" required>
  
      <label for="text"><b>الرقم القومي </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="ds_id" required>

      <label for="text"><b>تاريخ الوفاه</b></label>
      <input type="text" placeholder="اكتب تاريخ الوفاه" name="ds_date" required>
  
      <label for="text"><b>العنوان</b></label>
      <input type="text" placeholder="اكتب العنوان" name="ds_address" required>
  
      <label for="text"><b>رقم الهاتف </b></label>
      <input type="text" placeholder="اكتب رقم الهاتف" name="ds_phone" required>

      <label for="text"><b> صورة شهادة الوفاه من الصحة</b></label>
      <input type="file" placeholder="ادخل صورة شهادة الوفاه من الصحة" name="ds_photo" required>

      <div class="clearfix">
      <a  href="cancelbtn">
        <button type="button" class="cancelbtn">رجوع</button>
      <button>طريقة الدفع</button>
      </div>
    </div>
  </form>
  <title>
    clientinfo!
  </title>
  <link rel="stylesheet" href="css/deathcertificate.css">
  

 {!! Form::close() !!}


</body>
</html>