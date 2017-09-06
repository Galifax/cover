<<<<<<< HEAD
$(document).ready(function() {
    var num = 20;

    $(window).scroll(function){
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

            $.ajax({
               url: '/video/comments',
               method: 'GET',
               data: ("num" : num), 
               beforeSend: function() {
                inProcess = true;
               }
            }).done(function(data)) {
                console.log(data);

                data = jQuery.parseJSON(data);

                if (data.length > 0) {
                    $.each(data, function(index, data){
                        $("comments").append();
                    });
                    inProcess = false;
                    num += 10;
                }

            }
        }
    }
})
=======
>>>>>>> parent of e1aa40c... detete
    $(function(){
$('#modalButton, #modalButton1, #modalButton2, #upload').click(function(){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
});


    /**
     * Created by Kupletsky Sergey on 17.10.14.
     *
     * Material Sidebar (Profile menu)
     * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
     * You can use this sidebar in Bootstrap (v3) projects. HTML-markup like Navbar bootstrap component will make your work easier.
     * Dropdown menu and sidebar toggle button works with JQuery and Bootstrap.min.js
     */

// Sidebar toggle
//
// -------------------
    $(document).ready(function() {
        var overlay = $('.sidebar-overlay');

        $('.sidebar-toggle').on('click', function() {
            var sidebar = $('#sidebar');
            sidebar.toggleClass('open');
            if ((sidebar.hasClass('sidebar-fixed-left') || sidebar.hasClass('sidebar-fixed-right')) && sidebar.hasClass('open')) {
                overlay.addClass('active');
            } else {
                overlay.removeClass('active');
            }
        });

        overlay.on('click', function() {
            $(this).removeClass('active');
            $('#sidebar').removeClass('open');
        });

    });

    // Sidebar constructor
    //
    // -------------------
    $(document).ready(function() {

        var sidebar = $('#sidebar');
        var sidebarHeader = $('#sidebar .sidebar-header');
        var toggleButtons = $('.sidebar-toggle');


        // Sidebar position
        $('#sidebar-position').change(function() {
            var value = $( this ).val();
            sidebar.removeClass('sidebar-fixed-left sidebar-fixed-right sidebar-stacked').addClass(value).addClass('open');
            if (value == 'sidebar-fixed-right') {
                $('#sidebar-r').addClass('hidden');
                $('#sidebar-l').removeClass('hidden');
            }
            if (value == 'sidebar-fixed-left') {
                $('#sidebar-l').addClass('hidden');
                $('#sidebar-r').removeClass('hidden');
            }
            // Show toggle buttons

        });

        // Sidebar theme
        $('#sidebar-theme').change(function() {
            var value = $( this ).val();
            sidebar.removeClass('sidebar-default sidebar-inverse sidebar-colored sidebar-colored-inverse').addClass(value)
        });

    });

    /**
     * Created by Kupletsky Sergey on 08.09.14.
     *
     * Add JQuery animation to bootstrap dropdown elements.
     */





    (function(removeClass) {

        jQuery.fn.removeClass = function( value ) {
            if ( value && typeof value.test === "function" ) {
                for ( var i = 0, l = this.length; i < l; i++ ) {
                    var elem = this[i];
                    if ( elem.nodeType === 1 && elem.className ) {
                        var classNames = elem.className.split( /\s+/ );

                        for ( var n = classNames.length; n--; ) {
                            if ( value.test(classNames[n]) ) {
                                classNames.splice(n, 1);
                            }
                        }
                        elem.className = jQuery.trim( classNames.join(" ") );
                    }
                }
            } else {
                removeClass.call(this, value);
            }
            return this;
        }

    })(jQuery.fn.removeClass);

    // ****************************
    //input area
    //*****************************
    function textAreaAdjust(o) {
        o.style.height = "1px";
        o.style.height = (25+o.scrollHeight)+"px";
    }
    // ****************************
    //3d Test
    //*****************************
    var carousel1 = $(".carousel1"),
        currdeg  = 0

    $(".next1").on("click", { d: "n1" }, rotate);
    $(".prev1").on("click", { d: "p1" }, rotate);

    $("#comments-content").emojioneArea({
       pickerPosition: "bottom" 
    });



    function rotate(e){
        if(e.data.d=="n1"){
            currdeg = currdeg - 60;
        }
        if(e.data.d=="p1"){
            currdeg = currdeg + 60;
        }

        carousel1.css({
            "-webkit-transform": "rotateY("+currdeg+"deg)",
            "-moz-transform": "rotateY("+currdeg+"deg)",
            "-o-transform": "rotateY("+currdeg+"deg)",
            "transform": "rotateY("+currdeg+"deg)"
        });

    }

