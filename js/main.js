// alert("js work");
// для відправки твітів 
$('#formTwit').on('submit', function(e) {  // id у формі відправки 
    e.preventDefault();
    
    let form = $('#formTwit');
    // let data = form.serialize(); // це працює тільки для тексту

    // для загрузки файлів потрібні ще ці дані
    // projImage додати у інпут в формі
    let file_data = $('projImage').prop('files'); 
    // отримати проперті - файл з projImage
    let form_data = new FormData($('#formTwit')[0]);
        form_data.append('file', file_data);


    $.ajax({
        url:"/modules/add-proj-img.php",
        type:"POST",
        data: form_data,
        processData: false,
        contentType: false,
        success:function(data) {
            let ajaxStatus = $('#listTwits').prepend(data)
           // console.dir(data)
       },
    });

});