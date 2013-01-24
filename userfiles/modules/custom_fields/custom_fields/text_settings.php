<? include('settings_header.php'); ?>

<script type="text/javascript">

if(typeof mw.custom_fields.text === 'undefined'){
    mw.custom_fields.text = {}
    mw.custom_fields.text._globalinput = mwd.createElement('input');
    mw.custom_fields.text._globalinput.type = 'text';
    mw.custom_fields.text._globalarea = mwd.createElement('textarea');
}

$(document).ready(function(){
  mw.$("#mw-custom-fields-text-switch").commuter(function(){
    var curr = mwd.querySelector('#mw-custom-fields-text-holder input');
    mw.tools.migrateAttributes(curr, mw.custom_fields.text._globalarea, ['type']);
    curr.parentNode.replaceChild(mw.custom_fields.text._globalarea, curr);
  }, function(){
     var curr = mwd.querySelector('#mw-custom-fields-text-holder textarea');
     mw.tools.migrateAttributes(curr, mw.custom_fields.text._globalinput, ['type']);
     curr.parentNode.replaceChild(mw.custom_fields.text._globalinput, curr);

  });
});


</script>
<style>
    #mw-custom-fields-text-holder textarea{
      resize:none;
    }

</style>
 <div class="custom-field-col-left">


  <label class="mw-ui-label" for="input_field_label<? print $rand ?>">
    <?php _e('Define Title'); ?>
  </label>

    <input type="text" onkeyup="" class="mw-ui-field" value="<? print ($data['custom_field_name']) ?>" name="custom_field_name" id="input_field_label<? print $rand ?>">


    <label class="mw-ui-check"><input type="checkbox" id="mw-custom-fields-text-switch"><span></span><span>Use as Text Area</span></label>

</div>



   <div class="custom-field-col-right">
    <div class="mw-custom-field-group">
      <label class="mw-ui-label" for="custom_field_value<? print $rand ?>">Value</label>
        <div id="mw-custom-fields-text-holder">
            <input type="text" class="mw-ui-field" name="custom_field_value"  value="<? print ($data['custom_field_value']) ?>"  />
        </div>
    </div>

    <button type="button" class="mw-ui-btn mw-ui-btn-blue mw-custom-fields-save" onclick="__save();"><?php _e('Save changes'); ?></button>
    </div>

    <? include('settings_footer.php'); ?>
