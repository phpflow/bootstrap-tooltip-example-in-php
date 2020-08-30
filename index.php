<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding:5% 19% 0">
<div class="well">
<ul class="list-group">
<li class="list-group-item"><a href="#" data-original-title="I am in top" rel="tooltip" class="toptooltip">Tooltip top position</a>
</li>
<li class="list-group-item">
<a href="#" data-original-title="I am in left" rel="tooltip" class="lefttooltip">Tooltip left position</a>
</li>
<li class="list-group-item">
<a href="#" data-original-title="I am in left" rel="tooltip" class="righttooltip">Tooltip right position</a>
</li>
<li class="list-group-item">
<a href="#" data-original-title="I am in left" rel="tooltip" class="bottomtooltip">Tooltip bottom position</a>
</li>
</ul>
</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$(".toptooltip").tooltip({'placement':'top', 'trigger' : 'hover'});
	$(".lefttooltip").tooltip({'placement':'left', 'trigger' : 'hover'});
	$(".righttooltip").tooltip({'placement':'right', 'trigger' : 'hover'}); 
	$(".bottomtooltip").tooltip({'placement':'bottom', 'trigger' : 'hover'}); 
});
</script>