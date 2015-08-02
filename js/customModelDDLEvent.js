( function( $ ) {
  var customBoxes = [
    {key: "hp" , boxes : ["hpBox1", "hpBox2"]},
    {key: "lv1", boxes : ["imgConTesto"]}
  ];


  if($("select[id=page_template]").length > 0){
    hideBoxesByModel($("select[id=page_template]").val());
    $("select[id=page_template]").change(function() {
      hideBoxesByModel($(this).val());
    });
  }

  function hideBoxesByModel(model){
    var res = model.split("-");
    var key = res[1].split(".");
    var boxesToShow = "";
    for(var i=0; i < customBoxes.length; i++){
      if(customBoxes[i].key == key[0]){
        boxesToShow = customBoxes[i].boxes;
      }
    }
    if(boxesToShow != ""){
      $("#normal-sortables .postbox").hide();
      $("#normal-sortables .postbox").each(function(){
        for(var i=0; i < boxesToShow.length; i++)
        {
          if($(this).attr("id") == boxesToShow[i])
            $(this).show();
        }
      });
    }
  }

} )( jQuery );
