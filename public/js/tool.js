$(function(){
   var $body = $("body");

   $body.on("click", ".melis-laravel-refresh", function(){
       // Melis js helper that reload Zone interface
       melisHelper.zoneReload("id_melisplatformframeworklaraveldemotool_tool", "melisplatformframeworklaraveldemotool_tool");
   });

   $body.on("click", ".btn-add-update-action", function(){
       var modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
       var melisKey = "melisplatformframeworklaraveldemotool_generic_modal_tool";

       var param = {};
       var albumId = $(this).parents("tr").attr('id');
       if (typeof albumId !== "undefined"){
           param = {albumId: albumId};
       }

       // Melis js helper that generate modal
       melisHelper.createModal("id_"+melisKey, melisKey, false, param, modalUrl);
   });

   $body.on("click", ".btn-save-action", function(){
       // Form collection
       var data = $("#laravel-album-form").serializeArray();

       var param = "";
       var albumId = $(this).attr('id');
       if (typeof albumId !== "undefined"){
           param = "/"+albumId;
       }

       $.post('/melis/laravel-save-album'+param, data).done(function(res){

           var data = JSON.parse(res);
           var errors = [];

           if (data.success){
               // hide modal
               $(".modal").modal("hide");
               $(".melis-laravel-refresh").trigger("click");
           }else{
               // Melis js helper that pop-up input errors
               melisHelper.melisKoNotification(data.title, data.message, data.errors);
               // form errors
               errors = data.errors;
           }
           //  Melis js helper that highlight input errors
           melisCoreTool.highlightErrors(data.success, errors, "laravel-album-form");
       });
   });

   $body.on("click", ".btn-delete-album", function(){

       var albumId = $(this).parents("tr").attr('id');

       melisCoreTool.confirm(
           translations.tr_meliscore_common_yes,
           translations.tr_meliscore_common_no,
           translations.delete_title,
           translations.delete_confirm_message,
           function () {
               $.post('/melis/laravel-delete-album/'+albumId).done(function(){
                   $(".melis-laravel-refresh").trigger("click");
               });
           });
   });
});