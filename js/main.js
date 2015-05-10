/* Файл браузерных сценариев */
$(document).ready(function() {
    $('#view_students').click(function() {
       $('#frame3').attr('src', 'views/view1.php');
    });
    $('#view_likes').click(function() {
       $('#frame3').attr('src', 'views/view2.php');
    });
    $('#view_a').click(function() {
       $('#frame3').attr('src', 'views/view_a.php');
    });
    $('#view_b').click(function() {
       $('#frame3').attr('src', 'views/view_b.php');
    });
    $('#view_c').click(function() {
       $('#frame3').attr('src', 'views/view_c.php');
    });
});