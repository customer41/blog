$('#deleteArticle').click(function() {
    var question = confirm('Удалить статью?');
    if (question === true) {
        $.get({
            url: '/admin/articles/delete',
            data: {id: $('#id').val()},
            success: function() {
                location.reload();
            }
        });
    }
});
