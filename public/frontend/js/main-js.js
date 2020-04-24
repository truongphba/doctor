$(document).ready(function () {
    $("#male").click(function () {
        $(".select-gender").hide();
        $(".suggest-center").show();
        $("#model-male").show();
        $("#model-male-front").show();
        $("#model-male-back").hide();
        $("#model-female-front").hide();
        $("#model-female-back").hide();
    });
    $("#female").click(function () {
        $(".select-gender").hide();
        $(".suggest-center").show();
        $("#model-female").show();
        $("#model-female-front").show();
        $("#model-female-back").hide();
        $("#model-male").hide();
    });
    $('.account').click(function () {
        $('.dropdown-menu').css('display', 'block');
    });
    $('main').click(function () {
        $('.dropdown-menu').css('display', 'none');
    });
    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 50) {
            $('.header').css("background", "#efefef")
        } else {
            $('.header').css("background", "transparent")
        }
    });


    $('.body-area-head').click(function () {
            $('.head-loca').show();
            $('.location:not(.head-loca)').hide();
    });
    $('.body-area-eyes').click(function () {
        $('.eye-loca').show();
        $('.location:not(.eye-loca)').hide();
    });
    $('.body-area-ears').click(function () {
        $('.ear-loca').show();
        $('.location:not(.ear-loca)').hide();
    });
    $('.body-area-nose').click(function () {
        $('.nose-loca').show();
        $('.location:not(.nose-loca)').hide();
    });
    $('.body-area-oral_cavity').click(function () {
        $('.oral-loca').show();
        $('.location:not(.oral-loca)').hide();
    });
    $('.body-area-neck_or_throat').click(function () {
        $('.neck-loca').show();
        $('.location:not(.neck-loca)').hide();
    });
    $('.body-area-chest').click(function () {
        $('.chest-loca').show();
        $('.location:not(.chest-loca)').hide();
    });
    // $('.body-area-eyes').click(function () {
    //     $('#location-name').text("Eyes")
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Eye pain\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Red eye\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Red and stinging eyes\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Itching of eyes\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Watery eyes\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
    // $('.body-area-ears').click(function () {
    //     $('#location-name').text("Ears")
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Earache\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Decreased hearing\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Dischage from ear\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Clogged ear\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Itching in ear\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
    // $('.body-area-nose').click(function () {
    //     $('#location-name').text("Noses")
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Runny\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Block nose\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Impaired smell\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Itching of nose or thoat\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Bleeding from nose\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
    // $('.body-area-oral_cavity').click(function () {
    //     $('#location-name').text("Oral cavity")
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Toothache\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Loose teeth\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Gum pain\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Swollen gums\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Bleeding gums\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
    // $('.body-area-neck_or_throat').click(function () {
    //     $('#location-name').text("Neck or throat")
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Sore throat\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Pain while swallowing\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Red throat\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Hoarseness\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Shortness of breath\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
    // $('.body-area-chest').click(function () {
    //     $('#location-name').text("Chest");
    //     $('#symptoms-list').html('<form method="post">\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Chest pain\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Palpitations\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Fast heartbeat\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Slow heart rate\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                            <div class="form-check">\n' +
    //         '                                                <label class="form-check-label">\n' +
    //         '                                                    <input type="checkbox" class="form-check-input" value="">Cough\n' +
    //         '                                                </label>\n' +
    //         '                                            </div>\n' +
    //         '                                        </form>')
    // });
});
