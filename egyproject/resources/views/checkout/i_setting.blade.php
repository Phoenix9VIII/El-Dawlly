


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@if(count($data)>0)

@foreach($data as $d)
<p class="p2" dir="rtl">
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">

                    <address>
                        <p class="p2" dir="rtl"id="i_name">الاسم:{{$d->i_name}}</p>
                        <p class="p2" dir="rtl"id="i_id">رقم البطاقة:{{$d->i_id}}</p>
                        <p class="p2" dir="rtl"id="i_address">العنوان:{{$d->i_address}}</p>
                        <p class="p2" dir="rtl"id="i_phone">رقم التلفون:{{$d->i_phone}}</p>
                        </p>
                        {!! Form::open(['url' => 'del_i','files'=>true]) !!}
                        <input type="hidden" name="t_delete_id" value="{{$d->i_id}}">
                        <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <p class="p2" dir="rtl">
                <table class="table table-hover">
                
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th class="text-center">جنية</th>
                            <th class="text-center">اجمالي</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>بطاقه الشخصية</em></h4></td>
                            <td class="col-md-1" style="text-align: center"></td>
                            <td class="col-md-1 text-center">150</td>
                            <td class="col-md-1 text-center">150</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>ضريبة</em></h4></td>
                            <td class="col-md-1" style="text-align: center"></td>
                            <td class="col-md-1 text-center">30</td>
                            <td class="col-md-1 text-center">30</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>خدمة التوصيل</em></h4></td>
                            <td class="col-md-1" style="text-align: center"></td>
                            <td class="col-md-1 text-center">50</td>
                            <td class="col-md-1 text-center">50</td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>المجموع: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>200</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
 @endforeach
@endif

</div>
      <div class="clearfix">
      <a  href="cancelbtn">
      <div class="clearfix">
      <a  href="donebtn">
      <button type="button" class="cancelbtn">رجوع</button>
      <button type="button" class="donebtnbtn"> اتمام العملية</button>
      </div>
<link rel="stylesheet" href="css/birthcertificate.css">
</div>

</body>
</html>




