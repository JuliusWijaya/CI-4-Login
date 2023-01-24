<?= $this->extend('auth/template/index') ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form class="user" action="<?= url_to('login') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <?php if ($config->validFields === ['email']) : ?>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            name="login" placeholder="<?= lang('Auth.email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php else : ?>
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            placeholder="<?= lang('Auth.password') ?>" name="password">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <label class="custom-control-label" for="customCheck">
                                                <input type="checkbox" name="remember"
                                                    class="custom-control-input <?php if (old('remember')) : ?> checked <?php endif ?>">
                                                <?= lang('Auth.rememberMe') ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?= lang('Auth.loginAction') ?>
                                    </button>
                                </form>
                                <hr>
                                <?php if ($config->allowRegistration) : ?>
                                <div class="text-center">
                                    <p>
                                        <a href="<?= url_to('register') ?>"
                                            class="small"><?= lang('Auth.needAnAccount') ?>
                                        </a>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <?php if ($config->activeResetter) : ?>
                                <div class="text-center">
                                    <p>
                                        <a href="<?= url_to('forgot') ?>"
                                            class="small"><?= lang('Auth.forgotYourPassword') ?>
                                        </a>
                                    </p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?= $this->endSection(); ?>