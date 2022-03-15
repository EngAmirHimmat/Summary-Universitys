<?php include 'includes/header.php';?>
</br>
</br>
<div class="bg">
      <div class="row algin-items-center">
             <div class="col-2"></div>
            <div class="col-8">
               <form class="form-signin" method="post" action="verify.php">
                 <p style="color: red;" align="center"><?php echo $_COOKIE['message'];
                    setcookie('message',' ');
                 ?></p>
                  <h1 class="h3 mb-3 font-weight-normal text-center">تسجيل مستخدم  جديد</h1>



                  <label for="إسم المستخدم" class="sr-only">إسم المستخدم</label>
                  <input type="text" name="user_name" class="form-control text-center" placeholder="إسم المستخدم" required autofocus>

                  <label for="inputPassword" class="sr-only">كلة المرور</label>
                  <input type="password"  id="inputPassword" name="user_pass" class="form-control text-center" placeholder="كلمة المرور" required>

                  <label for="inputPassword" class="sr-only">أعد كلمة المرور</label>
                  <input type="password" id="inputPassword" name="reuser_pass" class="form-control text-center" placeholder="إعادة كلمة المرور" required>

                  <label for="البريد الإلكتروني" class="sr-only">البريد الإلكتروني </label>
                  <input type="email" id="inputEmail" name="user_email" class="form-control text-center" placeholder="البريد الإلكتروني" required autofocus>

                  <label for="رقم الجوال" class="sr-only">رقم الجوال</label>
                  <input type="number" id="inputNumber" name="user_phone" class="form-control text-center" placeholder="رقم الجوال" required autofocus>

                  <button class="btn btn-lg btn-primary btn-block" name="singup" type="submit">تسجيل</button>
                  
                  <div class="checkbox mb-3 text-right">
                    <label>
                      <a href="singin.php">تسجيل الدخول</a>
                    </label>
                    <p class="mt-5 mb-3 text-center">&copy; 2020</p>
                  </div>
                  
              </form>
            </div>
            <div class="col-2 bg"></div></div>
      </div>
</div>      