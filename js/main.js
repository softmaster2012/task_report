/* Файл браузерных сценариев */
var x, N, timer;

$(document).ready(function() {
    $('nav ul li a').click(function(event) {
        event.preventDefault();        
        x = 0;
        window.scroll(0, 0);        
        var flag = $(this).html();        
        if (flag === 'Условия') {
            N = 0;
        } else if (flag === 'Решение1') {
            N = 561;
        } else if (flag === 'Решение2') {
            N = 1141;
        } else {
            N = 1720;
        }
        timer = setInterval(myscroll, 10);        
    });
    
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

function myscroll() {
    if (x < N) {
        x += 20;
        window.scroll(0, x);
    } else {
        clearInterval(timer);
    }    
}