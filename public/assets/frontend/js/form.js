// SELECTING FORM JS START
$(".form__product1").click(function() {
    $(this).toggleClass("selected");
    var id = $(this).attr("id");

    if (id == "individual") {
        if ($('#form-a').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-a").css("background-color", 'white');
            $("#form-a").css("color", 'black');
            $('#inputindividual').val('0');
        } else {
            $("#form-a").css("background-color", 'rgb(2, 56, 123)');
            $("#form-a").css("color", 'white');
            $('#inputindividual').val('1');
        }
    }

    if (id == "freelancer") {
        if ($('#form-b').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-b").css("background-color", 'white');
            $("#form-b").css("color", 'black');
            $('#inputfreelancer').val('0');
        } else {
            $("#form-b").css("background-color", 'rgb(2, 56, 123)');
            $("#form-b").css("color", 'white');
            $('#inputfreelancer').val('1');
        }
    }

    if (id == "employee") {
        if ($('#form-c').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-c").css("background-color", 'white');
            $("#form-c").css("color", 'black');
            $('#inputemployee').val('0');
        } else {
            $("#form-c").css("background-color", 'rgb(2, 56, 123)');
            $("#form-c").css("color", 'white');
            $('#inputemployee').val('1');
        }
    }

    if (id == "agency") {
        if ($('#form-d').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-d").css("background-color", 'white');
            $("#form-d").css("color", 'black');
            $('#inputagency').val('0');
        } else {
            $("#form-d").css("background-color", 'rgb(2, 56, 123)');
            $("#form-d").css("color", 'white');
            $('#inputagency').val('1');
        }
    }

    if (id == "government") {
        if ($('#form-e').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-e").css("background-color", 'white');
            $("#form-e").css("color", 'black');
            $('#inputgovernment').val('0');
        } else {
            $("#form-e").css("background-color", 'rgb(2, 56, 123)');
            $("#form-e").css("color", 'white');
            $('#inputgovernment').val('1');
        }
    }

    if (id == "partner") {
        if ($('#form-f').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-f").css("background-color", 'white');
            $("#form-f").css("color", 'black');
            $('#inputpartner').val('0');
        } else {
            $("#form-f").css("background-color", 'rgb(2, 56, 123)');
            $("#form-f").css("color", 'white');
            $('#inputpartner').val('1');
        }
    }

    if (id == "marketing") {
        if ($('#form-g').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-g").css("background-color", 'white');
            $("#form-g").css("color", 'black');
            $('#inputmarketing').val('0');
        } else {
            $("#form-g").css("background-color", 'rgb(2, 56, 123)');
            $("#form-g").css("color", 'white');
            $('#inputmarketing').val('1');
        }
    }
    if (id == "design") {
        if ($('#design-a').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-a").css("background-color", 'white');
            $("#design-a").css("color", 'black');
            $('#inputdesign').val('0');
        } else {
            $("#design-a").css("background-color", 'rgb(2, 56, 123)');
            $("#design-a").css("color", 'white');
            $('#inputdesign').val('1');
        }
    }
    if (id == "web") {
        if ($('#design-b').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-b").css("background-color", 'white');
            $("#design-b").css("color", 'black');
            $('#inputweb').val('0');
        } else {
            $("#design-b").css("background-color", 'rgb(2, 56, 123)');
            $("#design-b").css("color", 'white');
            $('#inputweb').val('1');
        }
    }
    if (id == "online") {
        if ($('#design-c').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-c").css("background-color", 'white');
            $("#design-c").css("color", 'black');
            $('#inputonline').val('0');
        } else {
            $("#design-c").css("background-color", 'rgb(2, 56, 123)');
            $("#design-c").css("color", 'white');
            $('#inputonline').val('1');
        }
    }
    if (id == "code") {
        if ($('#design-d').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-d").css("background-color", 'white');
            $("#design-d").css("color", 'black');
            $('#inputcode').val('0');
        } else {
            $("#design-d").css("background-color", 'rgb(2, 56, 123)');
            $("#design-d").css("color", 'white');
            $('#inputcode').val('1');
        }
    }
    if (id == "analysis") {
        if ($('#design-e').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-e").css("background-color", 'white');
            $("#design-e").css("color", 'black');
            $('#inputanalysis').val('0');
        } else {
            $("#design-e").css("background-color", 'rgb(2, 56, 123)');
            $("#design-e").css("color", 'white');
            $('#inputanalysis').val('1');
        }
    }
    if (id == "fill") {
        if ($('#design-f').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-f").css("background-color", 'white');
            $("#design-f").css("color", 'black');
            $('#inputfill').val('0');
        } else {
            $("#design-f").css("background-color", 'rgb(2, 56, 123)');
            $("#design-f").css("color", 'white');
            $('#inputfill').val('1');
        }
    }
    if (id == "ppc") {
        if ($('#design-g').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-g").css("background-color", 'white');
            $("#design-g").css("color", 'black');
            $('#inputppc').val('0');
        } else {
            $("#design-g").css("background-color", 'rgb(2, 56, 123)');
            $("#design-g").css("color", 'white');
            $('#inputppc').val('1');
        }
    }
    if (id == "surface") {
        if ($('#design-h').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-h").css("background-color", 'white');
            $("#design-h").css("color", 'black');
            $('#inputsurface').val('0');
        } else {
            $("#design-h").css("background-color", 'rgb(2, 56, 123)');
            $("#design-h").css("color", 'white');
            $('#inputsurface').val('1');
        }
    }
    if (id == "content") {
        if ($('#design-i').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-i").css("background-color", 'white');
            $("#design-i").css("color", 'black');
            $('#inputcontent').val('0');
        } else {
            $("#design-i").css("background-color", 'rgb(2, 56, 123)');
            $("#design-i").css("color", 'white');
            $('#inputcontent').val('1');
        }
    }
    if (id == "b2b") {
        if ($('#design-j').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-j").css("background-color", 'white');
            $("#design-j").css("color", 'black');
            $('#inputb2b').val('0');
        } else {
            $("#design-j").css("background-color", 'rgb(2, 56, 123)');
            $("#design-j").css("color", 'white');
            $('#inputb2b').val('1');
        }
    }
    if (id == "artificial") {
        if ($('#design-k').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-k").css("background-color", 'white');
            $("#design-k").css("color", 'black');
            $('#inputartificial').val('0');
        } else {
            $("#design-k").css("background-color", 'rgb(2, 56, 123)');
            $("#design-k").css("color", 'white');
            $('#inputartificial').val('1');
        }
    }
    if (id == "trading") {
        if ($('#design-l').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-l").css("background-color", 'white');
            $("#design-l").css("color", 'black');
            $('#inputtrading').val('0');
        } else {
            $("#design-l").css("background-color", 'rgb(2, 56, 123)');
            $("#design-l").css("color", 'white');
            $('#inputtrading').val('1');
        }
    }
    if (id == "multiple") {
        if ($('#design-m').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-m").css("background-color", 'white');
            $("#design-m").css("color", 'black');
            $('#inputmultiple').val('0');
        } else {
            $("#design-m").css("background-color", 'rgb(2, 56, 123)');
            $("#design-m").css("color", 'white');
            $('#inputmultiple').val('1');
        }
    }
    if (id == "outstanding") {
        if ($('#design-n').css("background-color") == 'rgb(2, 56, 123)') {
            $("#design-n").css("background-color", 'white');
            $("#design-n").css("color", 'black');
            $('#inputoutstanding').val('0');
        } else {
            $("#design-n").css("background-color", 'rgb(2, 56, 123)');
            $("#design-n").css("color", 'white');
            $('#inputoutstanding').val('1');
        }
    }
    if (id == "estate") {
        if ($('#estate-a').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-a").css("background-color", 'white');
            $("#estate-a").css("color", 'black');
            $('#inputestate').val('0');
        } else {
            $("#estate-a").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-a").css("color", 'white');
            $('#inputestate').val('1');
        }
    }
    if (id == "automobile") {
        if ($('#estate-b').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-b").css("background-color", 'white');
            $("#estate-b").css("color", 'black');
            $('#inputautomobile').val('0');
        } else {
            $("#estate-b").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-b").css("color", 'white');
            $('#inputautomobile').val('1');
        }
    }
    if (id == "business") {
        if ($('#estate-c').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-c").css("background-color", 'white');
            $("#estate-c").css("color", 'black');
            $('#inputbusiness').val('0');
        } else {
            $("#estate-c").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-c").css("color", 'white');
            $('#inputbusiness').val('1');
        }
    }
    if (id == "customer") {
        if ($('#estate-d').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-d").css("background-color", 'white');
            $("#estate-d").css("color", 'black');
            $('#inputcustomer').val('0');
        } else {
            $("#estate-d").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-d").css("color", 'white');
            $('#inputcustomer').val('1');
        }
    }
    if (id == "shopping") {
        if ($('#estate-e').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-e").css("background-color", 'white');
            $("#estate-e").css("color", 'black');
            $('#inputshopping').val('0');
        } else {
            $("#estate-e").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-e").css("color", 'white');
            $('#inputshopping').val('1');
        }
    }
    if (id == "finance") {
        if ($('#estate-f').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-f").css("background-color", 'white');
            $("#estate-f").css("color", 'black');
            $('#inputfinance').val('0');
        } else {
            $("#estate-f").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-f").css("color", 'white');
            $('#inputfinance').val('1');
        }
    }
    if (id == "health") {
        if ($('#estate-g').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-g").css("background-color", 'white');
            $("#estate-g").css("color", 'black');
            $('#inputhealth').val('0');
        } else {
            $("#estate-g").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-g").css("color", 'white');
            $('#inputhealth').val('1');
        }
    }
    if (id == "industrial") {
        if ($('#estate-h').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-h").css("background-color", 'white');
            $("#estate-h").css("color", 'black');
            $('#inputindustrial').val('0');
        } else {
            $("#estate-h").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-h").css("color", 'white');
            $('#inputindustrial').val('1');
        }
    }
    if (id == "corporate") {
        if ($('#estate-i').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-i").css("background-color", 'white');
            $("#estate-i").css("color", 'black');
            $('#inputcorporate').val('0');
        } else {
            $("#estate-i").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-i").css("color", 'white');
            $('#inputcorporate').val('1');
        }
    }
    if (id == "education") {
        if ($('#estate-j').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-j").css("background-color", 'white');
            $("#estate-j").css("color", 'black');
            $('#inputeducation').val('0');
        } else {
            $("#estate-j").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-j").css("color", 'white');
            $('#inputeducation').val('1');
        }
    }
    if (id == "food") {
        if ($('#estate-k').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-k").css("background-color", 'white');
            $("#estate-k").css("color", 'black');
            $('#inputfood').val('0');
        } else {
            $("#estate-k").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-k").css("color", 'white');
            $('#inputfood').val('1');
        }
    }
    if (id == "entertainment") {
        if ($('#estate-l').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-l").css("background-color", 'white');
            $("#estate-l").css("color", 'black');
            $('#inputentertainment').val('0');
        } else {
            $("#estate-l").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-l").css("color", 'white');
            $('#inputentertainment').val('1');
        }
    }

    if (id == "officer") {
        if ($('#estate-m').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-m").css("background-color", 'white');
            $("#estate-m").css("color", 'black');
            $('#inputofficer').val('0');
        } else {
            $("#estate-m").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-m").css("color", 'white');
            $('#inputofficer').val('1');
        }
    }
    if (id == "fashion") {
        if ($('#estate-n').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-n").css("background-color", 'white');
            $("#estate-n").css("color", 'black');
            $('#inputfashion').val('0');
        } else {
            $("#estate-n").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-n").css("color", 'white');
            $('#inputfashion').val('1');
        }
    }
    if (id == "hospitality") {
        if ($('#estate-o').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-o").css("background-color", 'white');
            $("#estate-o").css("color", 'black');
            $('#inputhospitality').val('0');
        } else {
            $("#estate-o").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-o").css("color", 'white');
            $('#inputhospitality').val('1');
        }
    }
    if (id == "other") {
        if ($('#estate-p').css("background-color") == 'rgb(2, 56, 123)') {
            $("#estate-p").css("background-color", 'white');
            $("#estate-p").css("color", 'black');
            $('#inputother').val('0');
        } else {
            $("#estate-p").css("background-color", 'rgb(2, 56, 123)');
            $("#estate-p").css("color", 'white');
            $('#inputother').val('1');
        }
    }
});

function showViaKeypresss(element_id) {
    $(".description__agency").text('');
    $('#agency').removeClass('selected');
    if ($('#form-d').css("background-color") == 'rgb(2, 56, 123)') {
        $("#form-d").css("background-color", 'white');
        $("#form-d").css("color", 'black');
    }
    showpopup();
}

$(document).ready(function() {
    $(document).keypress(function(e) {
        switch (e.which) {
            case 97:
                // KEYPRESS "A"
                // Step 1 
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#individual").toggleClass("selected");
                    if ($('#form-a').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-a").css("background-color", 'white');
                        $("#form-a").css("color", 'black');
                        $('#inputindividual').val('0');
                    } else {
                        $("#form-a").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-a").css("color", 'white');
                        $('#inputindividual').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#design").toggleClass("selected");
                    if ($('#design-a').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-a").css("background-color", 'white');
                        $("#design-a").css("color", 'black');
                        $('#inputdesign').val('0');
                    } else {
                        $("#design-a").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-a").css("color", 'white');
                        $('#inputdesign').val('1');

                    }
                    break;
                }

                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    // alert('asaad');
                    showViaKeypress();
                    $("#estate").toggleClass("selected");
                    if ($('#estate-a').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-a").css("background-color", 'white');
                        $("#estate-a").css("color", 'black');
                        $('#inputestate').val('0');
                    } else {
                        $("#estate-a").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-a").css("color", 'white');
                        $('#inputestate').val('1');
                    }
                    break;
                }

            case 98:
                // KEYPRESS "B"
                // Step 1
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#freelancer").toggleClass("selected");
                    if ($('#form-b').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-b").css("background-color", 'white');
                        $("#form-b").css("color", 'black');
                        $('#inputfreelancer').val('0');
                    } else {
                        $("#form-b").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-b").css("color", 'white');
                        $('#inputfreelancer').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#web").toggleClass("selected");
                    if ($('#design-b').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-b").css("background-color", 'white');
                        $("#design-b").css("color", 'black');
                        $('#inputweb').val('0');
                    } else {
                        $("#design-b").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-b").css("color", 'white');
                        $('#inputweb').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    // alert('asaad');
                    showViaKeypress();
                    $("#automobile").toggleClass("selected");
                    if ($('#estate-b').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-b").css("background-color", 'white');
                        $("#estate-b").css("color", 'black');
                        $('#inputautomobile').val('0');
                    } else {
                        $("#estate-b").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-b").css("color", 'white');
                        $('#inputautomobile').val('1');
                    }
                    break;
                }

            case 99:
                // KEYPRESS "C"
                // Step 1
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#employee").toggleClass("selected");
                    if ($('#form-c').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-c").css("background-color", 'white');
                        $("#form-c").css("color", 'black');
                        $('#inputemployee').val('0');
                    } else {
                        $("#form-c").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-c").css("color", 'white');
                        $('#inputemployee').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#online").toggleClass("selected");
                    if ($('#design-c').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-c").css("background-color", 'white');
                        $("#design-c").css("color", 'black');
                        $('#inputonline').val('0');
                    } else {
                        $("#design-c").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-c").css("color", 'white');
                        $('#inputonline').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#business").toggleClass("selected");
                    if ($('#estate-c').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-c").css("background-color", 'white');
                        $("#estate-c").css("color", 'black');
                        $('#inputbusiness').val('0');
                    } else {
                        $("#estate-c").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-c").css("color", 'white');
                        $('#inputbusiness').val('1');
                    }
                    break;
                }

            case 100:
                // KEYPRESS "D"
                // Step 1
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypresss();
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#code").toggleClass("selected");
                    if ($('#design-d').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-d").css("background-color", 'white');
                        $("#design-d").css("color", 'black');
                        $('#inputcode').val('0');
                    } else {
                        $("#design-d").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-d").css("color", 'white');
                        $('#inputcode').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#customer").toggleClass("selected");
                    if ($('#estate-d').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-d").css("background-color", 'white');
                        $("#estate-d").css("color", 'black');
                        $('#inputcustomer').val('0');
                    } else {
                        $("#estate-d").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-d").css("color", 'white');
                        $('#inputcustomer').val('1');
                    }
                    break;
                }

            case 101:
                // KEYPRESS "E"
                // Step 1
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#government").toggleClass("selected");
                    if ($('#form-e').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-e").css("background-color", 'white');
                        $("#form-e").css("color", 'black');
                        $('#inputgovernment').val('0');
                    } else {
                        $("#form-e").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-e").css("color", 'white');
                        $('#inputgovernment').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#analysis").toggleClass("selected");
                    if ($('#design-e').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-e").css("background-color", 'white');
                        $("#design-e").css("color", 'black');
                        $('#inputanalysis').val('0');
                    } else {
                        $("#design-e").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-e").css("color", 'white');
                        $('#inputanalysis').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#shopping").toggleClass("selected");
                    if ($('#estate-e').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-e").css("background-color", 'white');
                        $("#estate-e").css("color", 'black');
                        $('#inputshopping').val('0');
                    } else {
                        $("#estate-e").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-e").css("color", 'white');
                        $('#inputshopping').val('1');
                    }
                    break;
                }
            case 102:
                // KEYPRESS "F"
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#partner").toggleClass("selected");
                    if ($('#form-f').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-f").css("background-color", 'white');
                        $("#form-f").css("color", 'black');
                        $('#inputpartner').val('0');
                    } else {
                        $("#form-f").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-f").css("color", 'white');
                        $('#inputpartner').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#fill").toggleClass("selected");
                    if ($('#design-f').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-f").css("background-color", 'white');
                        $("#design-f").css("color", 'black');
                        $('#inputfill').val('0');
                    } else {
                        $("#design-f").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-f").css("color", 'white');
                        $('#inputfill').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#finance").toggleClass("selected");
                    if ($('#estate-f').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-f").css("background-color", 'white');
                        $("#estate-f").css("color", 'black');
                        $('#inputfinance').val('0');
                    } else {
                        $("#estate-f").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-f").css("color", 'white');
                        $('#inputfinance').val('1');
                    }
                    break;
                }
            case 103:
                // KEYPRESS "G"
                // Step 1
                if ($('fieldset').hasClass("saad")) {
                    showViaKeypress();
                    $("#marketing").toggleClass("selected");
                    if ($('#form-g').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#form-g").css("background-color", 'white');
                        $("#form-g").css("color", 'black');
                        $('#inputmarketing').val('0');
                    } else {
                        $("#form-g").css("background-color", 'rgb(2, 56, 123)');
                        $("#form-g").css("color", 'white');
                        $('#inputmarketing').val('1');
                    }
                    break;
                }
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#ppc").toggleClass("selected");
                    if ($('#design-g').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-g").css("background-color", 'white');
                        $("#design-g").css("color", 'black');
                        $('#inputppc').val('0');
                    } else {
                        $("#design-g").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-g").css("color", 'white');
                        $('#inputppc').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#health").toggleClass("selected");
                    if ($('#estate-g').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-g").css("background-color", 'white');
                        $("#estate-g").css("color", 'black');
                        $('#inputhealth').val('0');
                    } else {
                        $("#estate-g").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-g").css("color", 'white');
                        $('#inputhealth').val('1');
                    }
                    break;
                }
            case 104:
                // KEYPRESS "H"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#surface").toggleClass("selected");
                    if ($('#design-h').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-h").css("background-color", 'white');
                        $("#design-h").css("color", 'black');
                        $('#inputsurface').val('0');
                    } else {
                        $("#design-h").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-h").css("color", 'white');
                        $('#inputsurface').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#industrial").toggleClass("selected");
                    if ($('#estate-h').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-h").css("background-color", 'white');
                        $("#estate-h").css("color", 'black');
                        $('#inputindustrial').val('0');
                    } else {
                        $("#estate-h").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-h").css("color", 'white');
                        $('#inputindustrial').val('1');
                    }
                    break;
                }
            case 105:
                // KEYPRESS "I"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#content").toggleClass("selected");
                    if ($('#design-i').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-i").css("background-color", 'white');
                        $("#design-i").css("color", 'black');
                        $('#inputcontent').val('0');
                    } else {
                        $("#design-i").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-i").css("color", 'white');
                        $('#inputcontent').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#corporate").toggleClass("selected");
                    if ($('#estate-i').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-i").css("background-color", 'white');
                        $("#estate-i").css("color", 'black');
                        $('#inputcorporate').val('0');
                    } else {
                        $("#estate-i").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-i").css("color", 'white');
                        $('#inputcorporate').val('1');
                    }
                    break;
                }
            case 106:
                // KEYPRESS "J"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#b2b").toggleClass("selected");
                    if ($('#design-j').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-j").css("background-color", 'white');
                        $("#design-j").css("color", 'black');
                        $('#inputb2b').val('0');
                    } else {
                        $("#design-j").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-j").css("color", 'white');
                        $('#inputb2b').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#education").toggleClass("selected");
                    if ($('#estate-j').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-j").css("background-color", 'white');
                        $("#estate-j").css("color", 'black');
                        $('#inputeducation').val('0');
                    } else {
                        $("#estate-j").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-j").css("color", 'white');
                        $('#inputeducation').val('1');
                    }
                    break;
                }
            case 107:
                // KEYPRESS "K"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#artificial").toggleClass("selected");
                    if ($('#design-k').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-k").css("background-color", 'white');
                        $("#design-k").css("color", 'black');
                        $('#inputartificial').val('0');
                    } else {
                        $("#design-k").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-k").css("color", 'white');
                        $('#inputartificial').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#food").toggleClass("selected");
                    if ($('#estate-k').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-k").css("background-color", 'white');
                        $("#estate-k").css("color", 'black');
                        $('#inputfood').val('0');
                    } else {
                        $("#estate-k").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-k").css("color", 'white');
                        $('#inputfood').val('1');
                    }
                    break;
                }
            case 108:
                // KEYPRESS "L"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#trading").toggleClass("selected");
                    if ($('#design-l').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-l").css("background-color", 'white');
                        $("#design-l").css("color", 'black');
                        $('#inputtrading').val('0');
                    } else {
                        $("#design-l").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-l").css("color", 'white');
                        $('#inputtrading').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#entertainment").toggleClass("selected");
                    if ($('#estate-l').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-l").css("background-color", 'white');
                        $("#estate-l").css("color", 'black');
                        $('#inputentertainment').val('0');
                    } else {
                        $("#estate-l").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-l").css("color", 'white');
                        $('#inputentertainment').val('1');
                    }
                    break;
                }
            case 109:
                // KEYPRESS "M"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#multiple").toggleClass("selected");
                    if ($('#design-m').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-m").css("background-color", 'white');
                        $("#design-m").css("color", 'black');
                        $('#inputmultiple').val('0');
                    } else {
                        $("#design-m").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-m").css("color", 'white');
                        $('#inputmultiple').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#officer").toggleClass("selected");
                    if ($('#estate-m').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-m").css("background-color", 'white');
                        $("#estate-m").css("color", 'black');
                        $('#inputofficer').val('0');
                    } else {
                        $("#estate-m").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-m").css("color", 'white');
                        $('#inputofficer').val('1');
                    }
                    break;
                }
            case 110:
                // KEYPRESS "N"
                // Step 2
                if ($('fieldset').hasClass("saad1")) {
                    showViaKeypress();
                    $("#outstanding").toggleClass("selected");
                    if ($('#design-n').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#design-n").css("background-color", 'white');
                        $("#design-n").css("color", 'black');
                        $('#inputoutstanding').val('0');
                    } else {
                        $("#design-n").css("background-color", 'rgb(2, 56, 123)');
                        $("#design-n").css("color", 'white');
                        $('#inputoutstanding').val('1');
                    }
                    break;
                }
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#fashion").toggleClass("selected");
                    if ($('#estate-n').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-n").css("background-color", 'white');
                        $("#estate-n").css("color", 'black');
                        $('#inputfashion').val('0');
                    } else {
                        $("#estate-n").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-n").css("color", 'white');
                        $('#inputfashion').val('1');
                    }
                    break;
                }
            case 111:
                // KEYPRESS "O"
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#hospitality").toggleClass("selected");
                    if ($('#estate-o').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-o").css("background-color", 'white');
                        $("#estate-o").css("color", 'black');
                        $('#inputhospitality').val('0');
                    } else {
                        $("#estate-o").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-o").css("color", 'white');
                        $('#inputhospitality').val('1');
                    }
                    break;
                }
            case 112:
                // KEYPRESS "P"
                // Step 3
                if ($('fieldset').hasClass("saad2")) {
                    showViaKeypress();
                    $("#other").toggleClass("selected");
                    if ($('#estate-p').css("background-color") == 'rgb(2, 56, 123)') {
                        $("#estate-p").css("background-color", 'white');
                        $("#estate-p").css("color", 'black');
                        $('#inputother').val('0');
                    } else {
                        $("#estate-p").css("background-color", 'rgb(2, 56, 123)');
                        $("#estate-p").css("color", 'white');
                        $('#inputother').val('1');
                    }
                    break;
                }
        }

    });
});

$('#carouselExampleFade').carousel({
interval: 3000
});
function showViaKeypress(element_id) {}

$(document).ready(function() {
    $("#display_popup").click(function() {
        showpopup();
        if ($('#form-d').css("background-color") == 'rgb(2, 56, 123)') {
            $("#form-d").css("background-color", 'white');
            $("#form-d").css("color", 'black');
        }
        $(".description__agency").text('');
        $('#agency').removeClass('selected');
    });
    $("#cancel_button").click(function() {
        hidepopup();
    });
});

function showpopup() {
    $("#popup_box").fadeToggle();
    $("#popup_box").css({ "visibility": "visible", "display": "block" });
}

function hidepopup() {
    $("#popup_box").fadeToggle();
    $("#popup_box").css({ "visibility": "hidden", "display": "none" });
}

function myclass(value) {
    $("#agency").toggleClass("selected");
    var val = $("#agency_popup").val();
    $(".description__agency").text(value);
    if ($('#form-d').css("background-color") == 'rgb(2, 56, 123)') {
        $("#form-d").css("background-color", 'white');
        $("#form-d").css("color", 'black');
    } else {
        $("#form-d").css("background-color", 'rgb(2, 56, 123)');
        $("#form-d").css("color", 'white');
    }
    hidepopup();

}
// SELECTING FORM JS END


// MULTI STEP FORM JS START
$(document).ready(function() {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    setProgressBar(current);
    $(".next").click(function() {
        $(this).parent().next().addClass("saad1");
        $(this).parent().removeClass("saad");
        if ($(this).parent().hasClass("saad1")) {
            $(this).parent().next().removeClass("saad1");
            $(this).parent().prev().removeClass("saad");
            $(this).parent().removeClass("saad1");
            $(this).parent().next().addClass("saad2");
        }
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //Add Class Active
        // $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
    $(".previous").click(function() {


        $(this).parent().prev().addClass("saad1");
        $(this).parent().removeClass("saad2");
        if ($(this).parent().hasClass("saad1")) {
            $(this).parent().removeClass("saad1");
            $(this).parent().prev().addClass("saad");
            $(this).parent().prev().removeClass("saad1");
        }

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        // current_fs = $(this).parent().prev().removeClass("saad");

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
  
    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
  
});

