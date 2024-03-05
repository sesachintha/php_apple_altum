<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <?= \Altum\Alerts::output_alerts() ?>

    <?= $this->views['account_header_menu'] ?>

    <form action="" method="post" role="form">
        <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

        <div class="">
            <div class="d-flex align-items-center mb-3">
                <h1 class="h4 m-0"><?= l('account.settings.header') ?></h1>

                <div class="ml-2">
                    <span data-toggle="tooltip" title="<?= l('account.settings.subheader') ?>">
                        <i class="fa fa-fw fa-info-circle text-muted"></i>
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> <?= l('global.name') ?></label>
                        <input type="text" id="name" name="name" class="form-control <?= \Altum\Alerts::has_field_errors('name') ? 'is-invalid' : null ?>" value="<?= $this->user->name ?>" maxlength="32" />
                        <?= \Altum\Alerts::output_field_error('name') ?>
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="fa fa-fw fa-sm fa-envelope text-muted mr-1"></i> <?= l('global.email') ?></label>
                        <input type="text" id="email" name="email" class="form-control <?= \Altum\Alerts::has_field_errors('email') ? 'is-invalid' : null ?>" value="<?= $this->user->email ?>" maxlength="128" />
                        <?= \Altum\Alerts::output_field_error('email') ?>
                    </div>

                    <div class="form-group">
                        <label for="timezone"><i class="fa fa-fw fa-sm fa-user-clock text-muted mr-1"></i> <?= l('account.settings.timezone') ?></label>
                        <select id="timezone" name="timezone" class="custom-select">
                            <?php foreach(DateTimeZone::listIdentifiers() as $timezone) echo '<option value="' . $timezone . '" ' . ($this->user->timezone == $timezone ? 'selected="selected"' : null) . '>' . $timezone . '</option>' ?>
                        </select>
                        <small class="form-text text-muted"><?= l('account.settings.timezone_help') ?></small>
                    </div>

                    <div class="form-group">
                        <label for="anti_phishing_code"><i class="fa fa-fw fa-sm fa-user-secret text-muted mr-1"></i> <?= l('account.settings.anti_phishing_code') ?></label>
                        <input type="text" id="anti_phishing_code" name="anti_phishing_code" class="form-control <?= \Altum\Alerts::has_field_errors('anti_phishing_code') ? 'is-invalid' : null ?>" value="<?= $this->user->anti_phishing_code ?>" maxlength="8" />
                        <?= \Altum\Alerts::output_field_error('anti_phishing_code') ?>
                        <small class="form-text text-muted"><?= l('account.settings.anti_phishing_code_help') ?></small>
                    </div>

                    <div class="form-group custom-control custom-switch">
                        <input id="is_newsletter_subscribed" name="is_newsletter_subscribed" type="checkbox" class="custom-control-input" <?= $this->user->is_newsletter_subscribed ? 'checked="checked"' : null ?>>
                        <label class="custom-control-label" for="is_newsletter_subscribed"><i class="fa fa-fw fa-sm fa-newspaper text-muted mr-1"></i> <?= l('account.settings.is_newsletter_subscribed') ?></label>
                        <small class="form-text text-muted"><?= l('account.settings.is_newsletter_subscribed_help') ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- <hr class="border-gray-50 my-4" /> -->

        <div class="" id="billing" style="<?= !settings()->payment->is_enabled || !settings()->payment->taxes_and_billing_is_enabled ? 'display: none;' : null ?>">
            <div class="d-flex align-items-center mb-3">
                <h1 class="h4 m-0"><?= l('account.billing.header') ?></h1>

                <div class="ml-2">
                    <span data-toggle="tooltip" title="<?= l('account.billing.subheader') ?>">
                        <i class="fa fa-fw fa-info-circle text-muted"></i>
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php if(!empty($this->user->payment_subscription_id)): ?>
                        <div class="alert alert-info" role="alert">
                            <?= l('account.billing.subscription_id_active') ?>
                        </div>
                    <?php endif ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="billing_type"><i class="fa fa-fw fa-sm fa-briefcase text-muted mr-1"></i> <?= l('account.billing.type') ?></label>
                                <div class="row btn-group-toggle" data-toggle="buttons">
                                    <div class="col-6">
                                        <label class="btn btn-light btn-block <?= $this->user->billing->type == 'personal' ? 'active"' : null?>">
                                            <input type="radio" name="billing_type" value="personal" class="custom-control-input" <?= $this->user->billing->type == 'personal' ? 'checked="checked"' : null?> required="required" />
                                            <i class="fa fa-user fa-fw fa-sm mr-1"></i> <?= l('account.billing.type_personal') ?>
                                        </label>
                                    </div>

                                    <div class="col-6">
                                        <label class="btn btn-light btn-block <?= $this->user->billing->type == 'business' ? 'active"' : null?>">
                                            <input type="radio" name="billing_type" value="business" class="custom-control-input" <?= $this->user->billing->type == 'business' ? 'checked="checked"' : null?> required="required" />
                                            <i class="fa fa-user-tag fa-fw fa-sm mr-1"></i> <?= l('account.billing.type_business') ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="billing_name"><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> <?= l('account.billing.name') ?></label>
                                <input id="billing_name" type="text" name="billing_name" class="form-control" value="<?= $this->user->billing->name ?>" maxlength="64" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="billing_address"><i class="fa fa-fw fa-sm fa-map-marker-alt text-muted mr-1"></i> <?= l('account.billing.address') ?></label>
                                <input id="billing_address" type="text" name="billing_address" class="form-control" value="<?= $this->user->billing->address ?>" maxlength="128" />
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="billing_city"><i class="fa fa-fw fa-sm fa-city text-muted mr-1"></i> <?= l('global.city') ?></label>
                                <input id="billing_city" type="text" name="billing_city" class="form-control" value="<?= $this->user->billing->city ?>" maxlength="64" />
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="billing_county"><i class="fa fa-fw fa-sm fa-building text-muted mr-1"></i> <?= l('account.billing.county') ?></label>
                                <input id="billing_county" type="text" name="billing_county" class="form-control" value="<?= $this->user->billing->county ?>" maxlength="64" />
                            </div>
                        </div>

                        <div class="col-12 col-lg-2">
                            <div class="form-group">
                                <label for="billing_zip"><i class="fa fa-fw fa-sm fa-sort-numeric-up-alt text-muted mr-1"></i> <?= l('account.billing.zip') ?></label>
                                <input id="billing_zip" type="text" name="billing_zip" class="form-control" value="<?= $this->user->billing->zip ?>" maxlength="32" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="billing_country"><i class="fa fa-fw fa-sm fa-flag text-muted mr-1"></i> <?= l('global.country') ?></label>
                                <select id="billing_country" name="billing_country" class="custom-select">
                                    <?php foreach(get_countries_array() as $key => $value): ?>
                                        <option value="<?= $key ?>" <?= $this->user->billing->country == $key ? 'selected="selected"' : null ?>><?= $value ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="billing_phone"><i class="fa fa-fw fa-sm fa-phone-square-alt text-muted mr-1"></i> <?= l('account.billing.phone') ?></label>
                                <input id="billing_phone" type="text" name="billing_phone" class="form-control" value="<?= $this->user->billing->phone ?>" maxlength="32" />
                            </div>
                        </div>

                        <div class="col-12" data-billing-type="business">
                            <div class="form-group">
                                <label for="billing_tax_id"><i class="fa fa-fw fa-sm fa-tag text-muted mr-1"></i> <?= !empty(settings()->business->tax_type) ? settings()->business->tax_type : l('account.billing.tax_id') ?></label>
                                <input id="billing_tax_id" type="text" name="billing_tax_id" class="form-control" value="<?= $this->user->billing->tax_id ?>" maxlength="64" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php ob_start() ?>
        <script>
            'use strict';

            type_handler('[name="billing_type"]', 'data-billing-type');
            document.querySelector('[name="billing_type"]') && document.querySelectorAll('[name="billing_type"]').forEach(element => element.addEventListener('change', () => { type_handler('[name="billing_type"]', 'data-billing-type'); }));

            <?php if(!empty($this->user->payment_subscription_id)): ?>
            document.querySelectorAll('[name^="billing_"]').forEach(element => {
                element.setAttribute('disabled', 'disabled');
            });
            <?php endif ?>

        </script>
        <?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>

        <hr class="border-gray-50 my-4" />

        <div class="">
            <div class="d-flex align-items-center mb-3">
                <h1 class="h4 m-0"><?= l('account.twofa.header') ?></h1>

                <div class="ml-2">
                    <span data-toggle="tooltip" title="<?= l('account.twofa.subheader') ?>">
                        <i class="fa fa-fw fa-info-circle text-muted"></i>
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="twofa_is_enabled"><i class="fa fa-fw fa-sm fa-passport text-muted mr-1"></i> <?= l('account.twofa.is_enabled') ?></label>
                        <select id="twofa_is_enabled" name="twofa_is_enabled" class="custom-select <?= \Altum\Alerts::has_field_errors('twofa_token') ? 'is-invalid' : null ?>">
                            <option value="1" <?= $this->user->twofa_secret ? 'selected="selected"' : null ?>><?= l('global.yes') ?></option>
                            <option value="0" <?= !$this->user->twofa_secret ? 'selected="selected"' : null ?>><?= l('global.no') ?></option>
                        </select>
                    </div>

                    <div data-twofa-is-enabled="1">
                        <?php if(!$this->user->twofa_secret): ?>
                            <div class="form-group">
                                <label><?= l('account.twofa.qr') ?></label>
                                <p class="text-muted"><?= l('account.twofa.qr_help') ?></p>

                                <div class="d-flex flex-column flex-md-row align-items-center">
                                    <div class="mb-3 mb-md-0 mr-md-5">
                                        <img src="<?= $data->twofa_image ?>" alt="<?= l('account.twofa.qr') ?>" />
                                    </div>

                                    <div>
                                        <label><?= l('account.twofa.secret') ?></label>
                                        <p class="text-muted"><?= l('account.twofa.secret_help') ?></p>

                                        <p class="h5"><?= $data->twofa_secret ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twofa_token"><?= l('account.twofa.verify') ?></label>
                                <p class="text-muted"><?= l('account.twofa.verify_help') ?></p>
                                <input type="text" id="twofa_token" name="twofa_token" class="form-control <?= \Altum\Alerts::has_field_errors('twofa_token') ? 'is-invalid' : null ?>" value="" autocomplete="off" />
                                <?= \Altum\Alerts::output_field_error('twofa_token') ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-gray-50 my-4" />

        <div class="">
            <div class="d-flex align-items-center mb-3">
                <h1 class="h4 m-0"><?= l('account.change_password.header') ?></h1>

                <div class="ml-2">
                    <span data-toggle="tooltip" title="<?= l('account.change_password.subheader') ?>">
                        <i class="fa fa-fw fa-info-circle text-muted"></i>
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="old_password"><i class="fa fa-fw fa-sm fa-unlock text-muted mr-1"></i> <?= l('account.change_password.current_password') ?></label>
                        <input type="password" id="old_password" name="old_password" class="form-control <?= \Altum\Alerts::has_field_errors('old_password') ? 'is-invalid' : null ?>" />
                        <?= \Altum\Alerts::output_field_error('old_password') ?>
                    </div>

                    <div class="form-group">
                        <label for="new_password"><i class="fa fa-fw fa-sm fa-lock text-muted mr-1"></i> <?= l('account.change_password.new_password') ?></label>
                        <input type="password" id="new_password" name="new_password" class="form-control <?= \Altum\Alerts::has_field_errors('new_password') ? 'is-invalid' : null ?>" />
                        <?= \Altum\Alerts::output_field_error('new_password') ?>
                    </div>

                    <div class="form-group">
                        <label for="repeat_password"><i class="fa fa-fw fa-sm fa-lock text-muted mr-1"></i> <?= l('account.change_password.repeat_password') ?></label>
                        <input type="password" id="repeat_password" name="repeat_password" class="form-control <?= \Altum\Alerts::has_field_errors('repeat_password') ? 'is-invalid' : null ?>" />
                        <?= \Altum\Alerts::output_field_error('repeat_password') ?>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-block btn-primary mt-5"><?= l('global.update') ?></button>
    </form>
</div>

<?php if(!$this->user->twofa_secret): ?>
    <?php ob_start() ?>
    <script>
        'use strict';

        type_handler('select[name="twofa_is_enabled"]', 'data-twofa-is-enabled');
        document.querySelector('select[name="twofa_is_enabled"]') && document.querySelectorAll('select[name="twofa_is_enabled"]').forEach(element => element.addEventListener('change', () => { type_handler('select[name="twofa_is_enabled"]', 'data-twofa-is-enabled'); }));
    </script>
    <?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>
<?php endif ?>