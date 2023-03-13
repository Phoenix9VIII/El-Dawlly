<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


{!! Form::open(['url' => 'p_save','files'=>true]) !!}

<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1 class="p2" dir="rtl">بيانات جواز السفر </h1>
      <p class="p2" dir="rtl">من فضلك ادخل بيانات الجواز </p>
      <hr>
      <p class="p2" dir="rtl">
      <label for="email"><b>الاسم</b></label>
      <input type="text" placeholder="اكتب الاسم" name="p_name" required>
  
      <label for="text"><b>الرقم القومي  </b></label>
      <input type="text" placeholder="اكتب الرقم القومي" name="p_id" required>
  
      <label for="email"><b>الديانة  </b></label>
      <input type="text" placeholder=" اكتب الديانة  " name="p_religion" required>
  
      <label for="email"><b>النوع</b></label>
      <input type="text" placeholder="اكتب النوع" name="p_gender" required>
  
    <label for="email"><b> رقم الهاتف</b></label>
    <input type="text" placeholder="اكتب رقم الهاتف " name="p_phone" required>
      
    <label for="email"><b> العنوان</b></label>
    <input type="text" placeholder="اكتب العنوان" name="p_address" required>

    <label for="email"><b> المهنة  </b></label>
    <input type="text" placeholder="اكتب  المهنة " name="p_work" required>

    <label for="email"><b> صورة البطاقة  </b></label>
    <input type="file" placeholder="صورة البطاقة " name="p_photo" required>

    <label for="email"><b>  صورة شهادة الجيش  </b></label>
    <input type="file" placeholder=" صورة شهادة الجيش " name="p_photo2" required>

    <label for="email"><b> اربعة صور اربعة في ستة</b></label>
    <input type="file" placeholder=" اربعة صور اربعة في ستة" name="p_photo3" required>
      <div class="clearfix">
      <a  href="cancelbtn">
        <button type="button" class="cancelbtn">رجوع</button>
      <button>طريقة الدفع</button>
       </a>
      </div>
    </div>
  </form>
  <title>
    clientinfo!
  </title>
  <link rel="stylesheet" href="css/passport.css">

  {!! Form::close() !!}

</body>
</html>