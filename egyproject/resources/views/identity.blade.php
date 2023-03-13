<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

{!! Form::open(['url' => 'i_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات البطاقه </h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات البطاقه </p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="email"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="i_name" required>
  
      <label for="text"><b>الرقم القومي  </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="i_id" required>
  
      <label for="email"><b>نوع البطاقه   </b></label>
      <input type="text" placeholder=" اكتب نوع البطاقه  " name="i_type" required>
  
      <label for="email"><b>النوع</b></label>
      <input type="text" placeholder="اكتب النوع" name="i_gender" required>
  
    <label for="email"><b> رقم الهاتف</b></label>
      <input type="text" placeholder="اكتب رقم الهاتف " name="i_phone" required>
      
    <label for="email"><b> العنوان</b></label>
    <input type="text" placeholder="اكتب العنوان" name="i_address" required>
      
    <label for="email"><b> صورة بطاقة الضامن </b></label>
    <input type="file" placeholder="ادخل صورة بطاقة الضامن" name="i_photo" required>
    
    <label for="email"><b> شهادة ميلاد حديثة </b></label>
    <input type="file" placeholder="ادخل شهادة ميلاد حديثة" name="i_photo2" required>
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
  <link rel="stylesheet" href="css/identity.css">

 {!! Form::close() !!}

</body>
</html>