 var m, g;
    $(document).on({
        mouseenter: function() {
            var t = $(this);
            return t.hasClass("active-m") ? (clearTimeout(g),
            !1) : (m = setTimeout(function() {
                t.addClass("active-m"),
                t.find(".show-m").show()
            }, 200),
            void 0)
        },
        mouseleave: function() {
            var e = $(this);
            return e.hasClass("active-m") ? (g = setTimeout(function() {
                e.find(".show-m").hide(),
                e.removeClass("active-m"),
                t(e)
            }, 200),
            void 0) : (clearTimeout(m),
            !1)
        }
    }, ".menu-m"),
    $("#nav-menu ul.cats li.cat-item").mouseenter(function() {
        var t = $(this);
        t.hasClass("current") || ($("#nav-menu ul.cats li.current").removeClass("current"),
        $(this).addClass("current"))
    }),