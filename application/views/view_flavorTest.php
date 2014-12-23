<div class = "container-fluid">
<div class="row pull-left" id = "forming" style ="width:100%;">
	<div class="col-md-3">
		<form class="form-signin" role="form">
			<fieldset>
			<h2 class="form-signin-heading">Flavor Tester</h2>
			<div class = "field-group">
				<div class="form-group">
					<label for="PartnerId">Partner ID:</label>
					<input type="text" id="PartnerId" class="form-control" placeholder="Partner Id" value = "1763321" required autofocus>
				</div>
				<div class="form-group">
					<label for="EntryId">Entry Id:</label>
					<input type="text" id="EntryId" class="form-control" value="0_hbfdx4uz" placeholder="Entry Id" required>
				</div>
			</div>
			<button id ="getSources" class="btn btn-lg btn-primary btn-block" type="submit">Test Flavors</button>
		</fieldset>
		</form>
	</div>
	<div id = "players"></div>
</div>
</div>

<script>
	var counter = 0;

  function loadSources(){
    kWidget.getSources({
      'partnerId': $('#PartnerId').val(),
      'entryId': $('#EntryId').val(),
      'callback': function(sourceSet){
        var o = '';
        for (var i in sourceSet){
        	console.log(i);
			var source = sourceSet[i];
			var test = source.src;
			var flavorUrl = test.substring(0, test.indexOf('?'));
			var flavorId = flavorUrl.slice(flavorUrl.indexOf('flavorId')+9, flavorUrl.indexOf('format')-1);
			var $playerDiv = $("<div id='"+i+"'/>").addClass('players col-md-4');
			var $newdiv1 = $("<p id = '"+i+"title'>"+ source.type + "</p>");
			var $newdiv2 = $("<br>");
			var $newdiv3 = $("<p>Flavor Id:" + flavorId + "</p>");
			var $all = $newdiv1.add($newdiv2).add($newdiv3);
			console.log(source);
			if (counter < 2) { 
				$('.players').append($all);
			} else {
				$("#"+i+"title").replaceWith($all);
			}
			$('.players').addClass('enabled');
			$('.bottom').hide();
			if (source.type !== 'application/vnd.apple.mpegurl'){
				//$( "#"+i+"title").replaceWith($titleDiv, $FlavorIdDiv);
				if (counter <2) {
					$("#players").append($playerDiv);
				} else {
					$("#"+i).replaceWith($playerDiv);
				}


				kWidget.embed({
					"targetId": i, //each div for player is created with id of 
					"wid": "_1763321",
					"uiconf_id": "27033511",
					"flashvars": {
						"streamerType": "http"
					},
					"sourceType":"url",
					"entry_id": flavorUrl
				});
 			} else {
 				$('.notSupported').show();
 				
 			}
        }
      }
    })
  }

    	$('#getSources').click(function(){
	      console.log($('#partnerId').val());
	      location.hash = '#__' +  $('#partnerId').val() + ',' + $('#entryId').val();
	      counter ++;
	      console.log(counter);
	      loadSources();
    	});


		$(window).load(function() {
			$("#forming").show(500);
		});


</script>



<footer>


<!-- Latest compiled and minified JavaScript -->



</footer>
<style>
	#forming{
		display:none;
	}
	.enabled {
		display:inline !important;

	}
	.form-control {
		text-transform: none !important;
	}
	#example_video_1 {
		padding-top:50px;
		margin-top:50px;
	}
	.notSupported{
		display:none;
	}
	
	.players{
		position:relative;
		margin: 20px;
		padding:0;
		max-width: 300px;
		height:250px;
		-webkit-box-shadow: 0 0 10px rgba(34,44,55,0.3);
		-moz-box-shadow: 0 0 10px rgba(34,44,55,0.3);
		box-shadow: 0 0 10px rgba(34,44,55,0.3);
	}
	.form-signin {
		max-width:330px;
		padding:15px;
		margin:0 auto;
	}
	.field-group{
		position:relative;
		width:100%;
	}
	.form-control {
		width:200%;
	}
	.form-group {
		width:50%
	}
	.parent {
		width: 50%;
		height:50%;
	}

	.test {
		color: #fff;
		background-color: #337ab7;
		border-color: #2e6da4;
	}

	.test:hover {
		color: #fff;
		background-color: #286090;
		border-color: #204d74;
	}

	.jumbotron {
		padding-top:20px;
	}
	.title{
		white-space: pre-wrap;
	}
	
	.container { position:relative; padding:0 0 0 55px; }
	#sidebar {
		position:absolute;
		float:left;
		top:0; bottom:0; left:0;
		width:200px;
	}




</style> 
