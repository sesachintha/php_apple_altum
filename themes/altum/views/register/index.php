<?php defined('ALTUMCODE') || die() ?>

<?= \Altum\Alerts::output_alerts() ?>

<h1 class="h5"><?= l('register.header') ?></h1>

<form action="" method="post" class="mt-4" role="form">
    <div class="form-group">
        <label for="name"><?= l('global.name') ?></label>
        <input id="name" type="text" name="name" class="form-control <?= \Altum\Alerts::has_field_errors('name') ? 'is-invalid' : null ?>" value="<?= $data->values['name'] ?>" maxlength="32" required="required" autofocus="autofocus" />
        <?= \Altum\Alerts::output_field_error('name') ?>
    </div>

    <div class="form-group">
        <label for="email"><?= l('global.email') ?></label>
        <input id="email" type="email" name="email" class="form-control <?= \Altum\Alerts::has_field_errors('email') ? 'is-invalid' : null ?>" value="<?= $data->values['email'] ?>" maxlength="128" required="required" />
        <?= \Altum\Alerts::output_field_error('email') ?>
    </div>

    <div class="form-group">
        <label for="password"><?= l('global.password') ?></label>
        <input id="password" type="password" name="password" class="form-control <?= \Altum\Alerts::has_field_errors('password') ? 'is-invalid' : null ?>" value="<?= $data->values['password'] ?>" required="required" />
        <?= \Altum\Alerts::output_field_error('password') ?>
    </div>

    <?php if (settings()->captcha->register_is_enabled): ?>
        <div class="form-group">
            <?php $data->captcha->display() ?>
        </div>
    <?php endif ?>

    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="accept" class="custom-control-input" id="accept" required="required">
        <label class="custom-control-label" for="accept">
            <small class="text-muted">
                <?=
                sprintf(
                        l('register.form.accept'),
                        '<a href="' . settings()->main->terms_and_conditions_url . '" target="_blank">' . l('global.terms_and_conditions') . '</a>',
                        '<a href="' . settings()->main->privacy_policy_url . '" target="_blank">' . l('global.privacy_policy') . '</a>'
                )
                ?>
            </small>
        </label>
    </div>

    <div class="form-group mt-4">
        <button type="submit" name="submit" class="btn btn-primary btn-block"><?= l('register.form.register') ?></button>
    </div>

    <?php if (settings()->facebook->is_enabled || settings()->google->is_enabled || settings()->twitter->is_enabled || settings()->apple->is_enabled || settings()->discord->is_enabled): ?>
        <hr class="border-gray-100 my-3" />

        <div class="">
            <?php if (settings()->facebook->is_enabled): ?>
                <div class="mt-2">
                    <a href="<?= url('login/facebook-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/facebook.svg' ?>" class="mr-1" />
                        <?= l('login.display.facebook') ?>
                    </a>
                </div>
            <?php endif ?>
            <?php if (settings()->google->is_enabled): ?>
                <div class="mt-2">
                    <a href="<?= url('login/google-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/google.svg' ?>" class="mr-1" />
                        <?= l('login.display.google') ?>
                    </a>
                </div>
            <?php endif ?>
            <?php if (settings()->twitter->is_enabled): ?>
                <div class="mt-2">
                    <a href="<?= url('login/twitter-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/twitter.svg' ?>" class="mr-1" />
                        <?= l('login.display.twitter') ?>
                    </a>
                </div>
            <?php endif ?>


            <?php if (settings()->twitter->is_enabled): ?>
                <div class="mt-2">
                    <a href="<?= url('login/twitter-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/twitter.svg' ?>" class="mr-1" />
                        <?= l('login.display.twitter') ?>
                    </a>
                </div>
            <?php endif ?>
            
                        <?php if (settings()->twitter->is_enabled): ?>
                <div class="mt-2">
                    <a href="<?= url('login/twitter-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/twitter.svg' ?>" class="mr-1" />
                        <?= l('login.display.twitter') ?>
                    </a>
                </div>
            <?php endif ?>

            <?php if (settings()->apple->is_enabled): ?>
            <!-- Render the Apple Sign-In button -->
                <div class="mt-2">
                               <!--<div id="appleid-signin" class="signin-button" data-color="black" data-border="true" data-type="sign in"></div>-->
 
                    <a href="<?= url('login/apple-initiate') ?>" class="btn btn-light btn-block">
                        <img src="<?= ASSETS_FULL_URL . 'images/Apple-Logo.png' ?>" width="10%" class="mr-1" />
                        <?= l('login.display.apple') ?>
                    </a>
                </div>
            <?php endif ?>


        </div>
    <?php endif ?>
</form>


<div class="mt-5 text-center text-muted">
    <?= sprintf(l('register.display.login'), '<a href="' . url('login' . $data->redirect_append) . '" class="font-weight-bold">' . l('register.display.login_help') . '</a>') ?></a>
</div>


<script>
    AppleID.auth.init({
        clientId: 'com.ras.signphpserviceid', // Replace with your client ID
        scope: 'email', // Define the scope of information you want to retrieve
        redirectURI: 'https://www.cosmetron.tech/wp/backend.php', // Replace with your redirect URI
        response_type: 'code',
        approval_prompt:'auto'
    });

    document.getElementById('appleid-signin').addEventListener('click', function () {
        AppleID.auth.signIn();
    });

    // Once the user signs in, handle the response
    AppleID.auth.onSignIn(function (response) {
        // Send the response to your server for further processing
        // You might use AJAX to send this data to a PHP endpoint
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login/apple-initiate');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify(response));
        
        // Redirect or perform actions after successful sign-in
        // window.location.href = "redirect_url_after_signin.php";
    });
</script>