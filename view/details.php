
<div class="container">
	<div class="row">
	    <div class="col-xs-6">
	    	<div class="photo">
	    		<img src="img/<? echo $character->img?>">
	    	</div>
	    </div>
	    <div class="col-xs-6">
	    	<div class="bio">
	    		<h3><b><? echo $character->name ?></b></h3>
	    		<h4><b>Allegiance:</b> <? echo $character->allegiance ?><br><h4>
	    		<h4><b>Description:</b> <? echo $character->description ?><br></h4>
	    		<h4><b>Played by:</b> <a href="<? echo $character->link ?>"><? echo $character->actor ?></a></h4><br><br>
	    		<div class="col-xs-6">
				 	<form action="index.php">
			    		<input type="submit" value="Go Back!" />
				 	</form>
				</div>
	    	</div>
	    </div>
	</div>
</div>
