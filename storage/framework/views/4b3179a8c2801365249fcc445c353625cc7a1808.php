<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li>حساب کاربری</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>ورود</h2>
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <p>
                                <label>نام کاربری یا ایمیل <span>*</span></label>
                                <input type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="ایمیل" required="">
                            </p>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                            <p>
                                <label>رمز عبور <span>*</span></label>
                                <input type="password" name="password" placeholder="رمز عبور" required="">
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </p>
                            <div class="login_submit">
                                <a href="/reset">رمز عبور خود را فراموش کرده اید؟</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox"> به خاطر سپاری
                                </label>
                                <button type="submit">ورود</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>ثبت نام</h2>
                        <form class="needs-validation" method="POST" action="<?php echo e(route('register')); ?>" novalidate="">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                        <label for="reg-fn">نام و نام خانوادگی</label>
                                        <input class="form-control" name="name" type="text" required="" id="reg-fn">
                                        <div class="invalid-feedback">لطفا نام  و نام خانوادگی خود را وارد کنید!</div>
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <label for="reg-email">آدرس ایمیل</label>
                                        <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>"  required="" id="reg-email">
                                        <div class="invalid-feedback">لطفا یک آدرس ایمیل معتبر وارد کنید!</div>
                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group <?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                        <label for="reg-phone">شماره تلفن</label>
                                        <input class="form-control" type="text" name="mobile" value="<?php echo e(old('mobile')); ?>"  required="" id="reg-phone">
                                        <div class="invalid-feedback">لطفا شماره تلفن خود را وارد کنید!</div>
                                        <?php if($errors->has('mobile')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('mobile')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <label for="reg-password">رمز عبور</label>
                                        <input class="form-control" type="password" name="password" required="" id="reg-password">
                                        <div class="invalid-feedback">لطفا رمز عبور را وارد کنید!</div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="reg-password-confirm">تایید رمز عبور</label>
                                        <input class="form-control" type="password" name="password_confirmation" required="" id="reg-password-confirm">
                                        <div class="invalid-feedback">رمزهای ورود مطابقت ندارند!</div>
                                    </div>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">ثبت نام</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>