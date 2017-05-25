$(document).ready(function() {
    $('#dataTables').DataTable({
        responsive: true
    });
});

// function addGalleryModel(){
// 	$("#createForm")[0].reset();

// 	$("#createForm").unbind('submit').bind('submit', function(){
// 		var form = $(this);

// 		$.ajax({
// 			url: form.attr('action'),
// 			type: form.attr('method'),
// 			data: form.serialize(),
// 			dataType: 'json',
// 			success:function(response){
// 				if(response.success === true){
// 					$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
// 						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 						'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
// 						'</div>'); 
// 				} else {
// 					$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
// 					'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
// 					'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
// 					'</div>');
// 				}
// 			}
// 		})
// 	})
// }

// function editArticlee($no){
// 	if($no){
// 		$.ajax({
// 			url: 'Article/getSelectedArticle/'+$no,
// 			type: 'post',
// 			dataType: 'json',
// 			success:function(response){

// 				// alert(response);
// 				// alert(val.(response->no));

// 				$('#noo').val(response.no);
// 				$('#judull').val(response.judul);
// 				$('#isi').val(response.isi);
// 			}
// 		});
// 	} else {
// 		alert('error');
// 	}
// }

function editGalleryy($no){
	if($no){
		$.ajax({
			url: 'Gallery/getSelectedGallery/'+$no,
			type: 'post',
			dataType: 'json',
			success:function(response){

				// alert(response);
				// alert(val.(response->no));

				$('#noo').val(response.no);
				$('#judull').val(response.judul);
				$('#ket').val(response.keterangan);
			}
		});	
	} else {
		alert('error');
	}
}

// function deleteGalleryy($no){
// 	if($no){
// 		$("#btnDelete").unbind('click').bind('click', function(){
// 			$.ajax({
// 				url: 'Gallery/doDelete/'+$no,
// 				success:function(response){
// 					$("#deleteGallery").modal('hide');

// 					updateTable.ajax.reload(null, false);
// 				}
// 			});
// 		});
// 	} else {
// 		alert('error');
// 	}
// }