$(document).ready(function(){
    window.clicks = 0;

    window.limit = 3;
    window.fns = null;

    function anim() {
        $(".tease-box").effect("bounce", {times: 1}, 700, function() {
            anim();
        })
    }

    $(".tease-box").on("mousedown", function(){
        window.clicks++;
        if (window.clicks >= window.limit) {
            alert("\
                Sorry For Messing Around :P :) ;)..\n\
                Hang On , letme redirect you to main site"
            );
            $.cookie("messedWith", "yes");
            window.location.href = "/";
        }
    });
    
    anim();
});

