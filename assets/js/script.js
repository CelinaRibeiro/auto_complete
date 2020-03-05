$(function(){
	$('#busca').on('keyup', function(){
		var texto = $(this).val();
		
		$.ajax({
			url:'busca.php',
			type:'POST',
			dataType:'json',
			data:{texto:texto},
			success:function(json) {
				//$('#resultado').html(html);
				var html = '';
				for (var i in json) {
					html += '<li><a href="poduto.php?id='+json[i].id+'">'+json[i].nome+'</a></li>';					
				}
				
				$('#resultado').html(html);
			}
		});
	});
});