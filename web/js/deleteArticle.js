'use strict';

$('button[id^="deleteArticle"]').on('click', function(event) {
    bootbox.confirm({
        size: 'small',
        message: 'Удалить статью?',
        buttons: {
            confirm: {label: 'Да', className: 'btn-danger'},
            cancel: {label: 'Отмена'}
        },
        className: 'centerVertical',
        callback: function(result) {
            if (result === true) {
                var id = event.target.id.slice(-1);
                $(location).attr('href', '/admin/articles/delete?id=' + id);
            }
        }
    });
});
