<html>
<?php echo $this->view( 'shared/head' ) ?>
<body>

<?php echo $this->view( 'shared/header' ) ?>

<div id="container">
  <?php echo $this->view( 'shared/nav' ) ?>

  <?php echo validation_errors() ?>

  <?php echo form_open( 'items/create' ) ?>
    <p>
    <?php echo form_label( 'お名前', 'provider_name' ) ?>
    <?php echo form_input( 'provider_name', set_value('provider_name', '名無しの職人') ) ?>
    </p>

    <p>
    <?php echo form_label( 'メールアドレス' , 'provider_email' ) ?>
    <?php echo form_input( 'provider_email', set_value('provider_email', '774@example.com') ) ?>
    </p>

    <p>
    <?php echo form_label( '編集用パスワード', 'pw_edit' ) ?>
    <?php echo form_input( 'pw_edit', set_value('pw_edit') ) ?>
    </p>

    <p>
    <?php echo form_label( '提供品名', 'name' ) ?>
    <?php echo form_input( 'name', set_value('name') ) ?>
    </p>

    <p>
    <?php echo form_label( '提供品種別', 'type' ) ?>
    <?php echo form_dropdown( 'type', $types, set_value('type') ) ?>
    </p>

    <p>
    <?php echo form_label( '提供品URL', 'uri' ) ?>
    </p>
    <p>
    <?php echo form_textarea( 'uri', set_value('uri') ) ?>
    </p>

    <p>
    <?php echo form_label( '強制書き込み要求', 'force_post' ) ?>
    <?php echo form_checkbox( 'force_post', 1, set_value('force_post') ) ?>全員に書き込みをさせる
    </p>

    <p>
    <?php echo form_label( 'ダウンロード制限数', 'dl_limit' ) ?>
    <?php echo form_input( 'dl_limit', set_value('dl_limit', 0) ) ?>(制限なしの場合は「0」)
    </p>

    <p>
    <?php echo form_submit( 'add', '送信' ) ?>
    </p>
  <?php echo form_close() ?>
</div>

<?php echo $this->view( 'shared/footer' ) ?>

</body>
</html>