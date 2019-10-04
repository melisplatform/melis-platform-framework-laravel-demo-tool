$(function(){
   var $body = $("body");

   $body.on("click", ".btn-add-new-album", function(){
       var modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
       var melisKey = "melisplatformframeworklaraveldemotool_generic_modal_tool";
       melisHelper.createModal("id_"+melisKey, melisKey, false, {}, modalUrl);
   });

});