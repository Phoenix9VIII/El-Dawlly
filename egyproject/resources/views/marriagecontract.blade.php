<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

{!! Form::open(['url' => 'mc_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات عقد الزواج</h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات العقد</p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="text"><b>اسم الزوج</b></label>
      <input type="text" placeholder="اكتب الاسم" name="mc_name" required>
  
      <label for="text"><b>الرقم القومي </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="mc_id" required>
  
      
      <label for="text"><b>اسم الزوجة</b></label>
      <input type="text" placeholder="اكتب الاسم" name="mc_wife" required>
  
      <label for="text"><b>الرقم القومي </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="mc_wid" required>
  
      <label for="text"><b>العنوان</b></label>
      <input type="text" placeholder="اكتب العنوان" name="mc_address" required>
  
      <label for="text"><b>رقم الهاتف </b></label>
      <input type="text" placeholder="اكتب رقم الهاتف" name="mc_phone" required>

      <label for="text"><b> صورة بطاقة الزوج + الزوجة </b></label>
      <input type="file" placeholder="ادخل صورة بطاقة الزوج + الزوجة" name="mc_photo" required>

      </label>  
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
  <link rel="stylesheet" href="css/marriagecontract.css">
  

 {!! Form::close() !!}

</body>
</html>