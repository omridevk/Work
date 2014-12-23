<div class ="middle">
  <div class ="container" style = "margin-top:50px;">
     <div class ="row">
      <h1> JSON Tester</h1>
        <div id="editor" class ="col-md-4">
           Insert JSON
        </div>
        <div  id="kaltura_player" style = "height:40%;"class ="col-md-6"></div>
     </div>
     <button type="" class="btn btn-lg btn-success" id ="jsonBtn">Test JSON</button>
  </div>
</div> <!-- End of middle -->


</body>
<script>
//$('body').css('min-height', $(window).height() - parseInt( $('body').css('padding-bottom') ) + 150 );
kWidget.embed({
   'targetId': 'kaltura_player',
   'wid': '_1763321',
   'uiconf_id' : '27053901',
   'flashvars': {},
   "entry_id": "1_91do9jzq" // Entry with captions
});

$('#jsonBtn').click(function() {
   $('#kaltura_player').hide();
   var jsonConfig = editor.getValue();
   kWidget.embed({
      'targetId': 'kaltura_player',
      'wid': '_1763321',
      'uiconf_id' : '27053901',
      'flashvars': {
         "jsonConfig": jsonConfig
      },
   "entry_id": "1_91do9jzq" // Entry with captions
   }); 
$('#kaltura_player').show(1000);

});


$('#test').click(function() {
  var kdp = document.getElementById('kaltura_player');
  //kdp.sendNotification("enableGui", false);
  var test = kdp.evaluate('{mediaProxy.entry.name}');
  console.log(test);
});

var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/json");

</script>

<style type="text/css" media="screen">

body {
  padding-top:70px;
}

#editor { 
position:relative;
width:50%;
height:52%;    
}

.btn-lg {
margin-top:10px;
position:relative;
left:21%;
}



</style>