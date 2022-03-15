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
                  <h1 class="h3 mb-3 font-weight-normal text-center">تسجيل الدخول</h1>
                  <label for="إسم المستخدم" class="sr-only">إسم المستخدم</label>
                  <input type="text" name="username" class="form-control text-center" placeholder="إسم المستخدم" required autofocus>
                  <label for="inputPassword" class="sr-only">كلة المرور</label>
                  <input type="password" name="password" id="inputPassword" class="form-control text-center" placeholder="كلمة المرور" required>
                  <button class="btn btn-lg btn-primary btn-block" name="singin" type="submit">تسجيل الدخول</button>
                  
                  <div class="checkbox mb-3 text-right">
                    <label>
                      <a href="#">نسيت كلمة المرور</a></br>
                      <a href="singup.php">تسجيل مستخدم جديد</a>
                    </label>
                    <p class="mt-5 mb-3 text-center">&copy; 2020</p>
                  </div>
              </form>
            </div>
            <div class="col-2 bg"></div></div>
      </div>
</div>      