$(document).ready(function() {
    var b = function() {
        var d = $(window).height();
        $("#hero").height(d)
    };
    window.onorientationchange = function() {
        var d = window.orientation;
        switch (d) {
            case 0:
            case 180:
                $("body").removeClass("landscape").addClass("portrait");
                break;
            default:
                $("body").removeClass("portrait").addClass("landscape");
                cara1.init();
                break
        }
        b()
    };
    $(document).ready(function() {
        window.onorientationchange()
    });
    $(window).resize(function() {
        b()
    });
    $("input, textarea").placeholder();
    var c = function(f) {
        var e = this;
        var g = f.id;
        var d = $(g + " .swipe-wrap li").length;
        return {
            cara: 0,
            caraCount: d,
            pageNavInit: function() {
                $(g + " ol.pagingNav").remove();
                $(g).append('<ol class="pagingNav"></ol>');
                for (var h = 0; h < d; h++) {
                    $(g + " .pagingNav").append("<li>" + h + "</li>")
                }
                $($(g + " .pagingNav li")[0]).addClass("active")
            },
            directionNavInit: function() {
                $(g).append('<ul class="directionNav"><li><a class="prev" href="javascript:void(0);">Previous</a></li><li><a class="next" href="javascript:void(0);">Next</a></li></ul>')
            },
            init: function() {
                var h = this;
                if (f.pageNav === true) {
                    this.pageNavInit()
                }
                if (f.dirNav === true) {
                    this.directionNavInit()
                }
                f.callback = function(j) {
                    var i = $(g + " .pagingNav li");
                    i.removeClass("active");
                    $(i[j]).addClass("active")
                };
                this.cara = Swipe(document.getElementById(g.slice(1)), f);
                $(g + " .directionNav .prev").click(function() {
                    h.cara.prev()
                });
                $(g + " .directionNav .next").click(function() {
                    h.cara.next()
                });
                $(g + " .pagingNav li").click(function() {
                    var i = $(this).index();
                    h.cara.slide(i)
                })
            }
        }
    };
    cara1 = c({
        id: "#heroCara",
        pageNav: true,
        dirNav: false,
        speed: 600,
        auto: 8000,
        continuous: true
    });
    cara1.init();
    cara2 = c({
        id: "#storiesCara",
        pageNav: true,
        dirNav: true,
        speed: 600,
        continuous: true
    });
    cara2.init();
    $("#hero .title h2").css("display", "block");
    $(function() {
        var d = false;
        var e = false;
        $(".popover-biz-plan").popover({
            html: true,
            trigger: "manual"
        }).click(function(f) {
            if (d) {
                $(".popover-biz-plan").popover("hide");
                d = e = false
            } else {
                $(this).popover("show");
                $(".popover").css({
                    top: ($(document).scrollTop() - 2300) / 1.5
                });
                e = false;
                d = true;
                f.preventDefault()
            }
        });
        $(document).click(function(f) {
            if (d & e) {
                $(".popover-biz-plan").popover("hide");
                d = e = false
            } else {
                e = true
            }
        })
    });
    $(".cell a.plan-select").on("click", function() {
        $(".cell").removeClass("selected"), $(this).parent().addClass("selected"), $('input[name="startsub"]').removeAttr("checked");
        $(this).parent().find('input[name="startsub"]', this).attr("checked", !0);
        $(".cell .plan-individual").removeClass("white"), $(this).parent().find(".plan-individual").addClass("white");
        $(".cell:not(.selected) a.plan-select").html("SELECT"), $(".selected a.plan-select").html('<div class="btn-selected-position">SELECTED</div><div class="checkmarked"></div>')
    });
    $("#pricing-table .cell >div:not(.clickOK):not(.plan-tooltip):not(.popover)").click(function(d) {
        if ($(".popover:hover").length != 0) {
            return true
        } else {
            $(this).parents(".cell").find(".btn-SS").click()
        }
    });
    $("#pricing-table a").click(function(d) {
        d.stopPropagation()
    });
    $(".business-plan .btn-SS").on("click", function() {
        window.location = $(this).attr("href")
    });
    if ($(window).width() > 1200) {
        $("#hero").parallax("50%", 0.4);
        $("#mobileApp").parallax("50%", 0.1)
    }
    var a = function() {
        if ($(window).scrollTop() > 150) {
            if (!$("#price2").hasClass("hidden")) {
                $("#price2").slideUp(600);
                $("#fauxBar").slideUp(1);
                $("#price2").addClass("hidden")
            }
        } else {
            if ($("#price2").hasClass("hidden")) {
                $("#price2").slideDown(600);
                $("#fauxBar").slideDown(1);
                $("#price2").removeClass("hidden")
            }
        }
    };
    $(window).scroll(function() {
        a()
    });
    a();
    $(".fauxButton").click(function() {
        $(window).scrollTo($("#signUp"), 800, {
            offset: -100
        })
    });
    $(".continue").click(function() {
        $(window).scrollTo($("#stories"), 800, {
            offset: -70
        })
    })
});