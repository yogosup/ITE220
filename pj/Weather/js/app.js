//math
$(function(){
	$("a").on("click",function(e){
		e.preventDefault();
		var city=this.text.toLowerCase();
$.ajax({
	type:'Get',
	url:'http://api.openweathermap.org/data/2.5/weather?q='+city+'appid=93e6c9ebb4bc4f59c5b311f6f47ad4d2',
	success: function(data){
		//console.log(data.name);
		$("#container").html(data.name+" "+data.main.temp);
	}
});
	});
});