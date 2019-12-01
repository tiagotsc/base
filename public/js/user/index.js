$('.remove').on('click', function(e){
    e.preventDefault();
    let r = confirm("Deseja remover usuário "+$(this).attr('name')+"?");
    if (r == true) {
        $('#delete').attr('action', $(this).attr('id')).submit();
    } 
});