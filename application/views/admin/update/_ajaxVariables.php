<?php
/**
 * This file generate the hidden inputs required by the ajax process.
 * If a step is defined in the url's getters, then we parse it in an hidden input
 * comfortupdate.js will check this hidden input, and load the correct step. 
 * Most steps also need to know the destination build  
 */
 
 
 /**
  * 
  * IN 2.06, those input MUST be generated by the globalsettings controller.
  * Test UPDATE
  */
?>

<script>
    var csrf_token_name = "<?php echo Yii::app()->request->csrfTokenName;?>";
    var csrf_token = "<?php echo Yii::app()->request->csrfToken;?>";
</script>

<?php if(isset($_REQUEST['update'])):?>
    <input type="hidden" id="update_step" value="<?php echo $_REQUEST['update']; ?>"/>
    
<?php else:?>
    <input type="hidden" id="update_step" value=""/>
<?php endif;?>

<?php if(isset($_REQUEST['destinationBuild'])):?>
    <input type="hidden" id="destinationBuildForAjax" value="<?php echo $_REQUEST['destinationBuild']; ?>"/>
<?php endif;?>

<?php if(isset($_REQUEST['access_token'])):?>
    <input type="hidden" id="access_tokenForAjax" value="<?php echo $_REQUEST['access_token']; ?>"/>
<?php endif;?>

 <input id="updatebothbranchdatas" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/getbothbuttons"); ?>"/>
 <input id="updatestrablebranchdatas" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/getstablebutton"); ?>"/>
 
 <input id="newkeyurl" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/getnewkey"); ?>"/>        
 <input id="filesystemurl" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/fileSystem"); ?>"/>
 <input id="checklocalerrorsurl" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/checkLocalErrors"); ?>"/>
 <input id="welcomeurl" type="hidden" aria-data-url="<?php echo Yii::app()->createUrl("admin/update/sa/getwelcome"); ?>"/>
 
 