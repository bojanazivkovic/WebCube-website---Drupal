
  

<form accept-charset="UTF-8" id="user-login-form" method="post" action="<?php print base_path( )?><?php path_to_theme() ?>node?destination=node">

  <div class="custom-form">
    <div class="form-item form-type-textfield form-item-email">
      <label for="edit-email">Email<span title="This field is required." class="form-required">*</span></label>
      <input type="text" class="form-text required" maxlength="60" size="15" value="" name="email" id="edit-email">
    </div>
    
    <div class="form-item form-type-password form-item-pass">
      <label for="edit-pass">Password <span title="This field is required." class="form-required">*</span></label>
      <input type="password" class="form-text required" maxlength="60" size="15" name="pass" id="edit-pass">
    </div>
      
    <div id="edit-actions" class="form-actions form-wrapper">
      <input type="submit" class="form-submit" value="Log in" name="op" id="edit-submit">
    </div>
    
    <div class="item-list">
      <ul>
        <li class="first"><a title="Create a new user account." href="<?php print base_path( )?><?php path_to_theme() ?>user/register">Create new account</a></li>
        <li class="last"><a title="Request new password via e-mail." href="<?php print base_path( )?><?php path_to_theme() ?>user/password">Request new password</a></li>
      </ul>
    </div>
    
    <input type="hidden" value="<?php print $elements['form_build_id']['#value']; ?> " name="form_build_id">
    <input type="hidden" value="user_login_block" name="form_id">
  </div>
</form>