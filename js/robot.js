$(function () {
    var now = new Date();
    var hour = now.getHours();
    var min = now.getMinutes();
    var dinoSay = document.querySelectorAll('.introDinoWords');
    var wordsArea = document.querySelector('.introRobot2');
    // dinoSay.forEach(element => {
    //     element.dataset.time = `${hour}:${min}`;

    // });
    // 下方圖片點選

    
    $(".autotext").on('click', cute)

    function cute() {
        var text = this.innerHTML;
        var p2 = document.createElement("p")
        var p1 = document.createElement("p");

        var now1 = new Date();
        hour = now1.getHours();
        min = now1.getMinutes();

        p1.classList.add('introMyWords');
        p1.dataset.time = `${hour}:${min}`;
        p1.innerText = text;
        wordsArea.appendChild(p1);
        var scrollHeight = $('.introRobot2').prop("scrollHeight");
        $('.introRobot2').scrollTop(scrollHeight);

        var value =text;
        setTimeout(function () {
            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    showMember(xhr.responseText);
                    // alert( xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
            xhr.open("get", "php/ajaxLogin.php?no=" + value, true);
            xhr.send(null)

            function showMember(msg) {
                console.log("hi");
                var p2 = document.createElement("p");
                var wordsArea = document.querySelector('.introRobot2');

                var now2 = new Date();
                hour = now2.getHours();
                min = now2.getMinutes();

                p2.dataset.time = `${hour}:${min}`;
                p2.classList.add('introDinoWords');
                p2.innerHTML = msg;
                wordsArea.appendChild(p2);


                var scrollHeight = $('.introRobot2').prop("scrollHeight");
                $('.introRobot2').scrollTop(scrollHeight);

            };

        }, 1000)
        $('#say').val('');

    }
    $('#submit').on('click', chat);

    function chat() {
        if ($('#say').val() == false) {
            return false
        }
        var p1 = document.createElement("p");
        p1.classList.add('introMyWords');
        p1.dataset.time = `${hour}:${min}`;
        p1.innerText = document.querySelector('#say').value;
        wordsArea.appendChild(p1);
        var scrollHeight = $('.introRobot2').prop("scrollHeight");
        $('.introRobot2').scrollTop(scrollHeight);

        var value = $('#say').val();
        setTimeout(function () {
            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    showMember(xhr.responseText);
                    // alert( xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
            xhr.open("get", "php/ajaxLogin.php?no=" + value, true);
            xhr.send(null)

            function showMember(msg) {
                console.log("hi");
                var p2 = document.createElement("p");
                var wordsArea = document.querySelector('.introRobot2');

                var now2 = new Date();
                hour = now2.getHours();
                min = now2.getMinutes();

                p2.dataset.time = `${hour}:${min}`;
                p2.classList.add('introDinoWords');
                p2.innerText = msg;
                wordsArea.appendChild(p2);


                var scrollHeight = $('.introRobot2').prop("scrollHeight");
                $('.introRobot2').scrollTop(scrollHeight);

            };

        }, 1000)
        $('#say').val('');
    }
    $('#say').on('focus', function () {
        $(window).on('keyup', function (e) {
            if (e.keyCode == 13) {
                $('#submit').click();
            }
        })
    });
    var isOpen = false;
    $('.robotToggle').on('click', function () {
        if (!isOpen) {
            $(this).css('transform', 'rotate(45deg)');
            $('.introRobot2').css('display', 'block');
            $('.introRobot3').css('display', 'block');
            $('.introRobot4').css('display', 'flex');
            $('.introRobotBox').css('height', 'unset');
            isOpen = true;
            clearInterval(timerId);
            $('.introRobotCome').hide();

            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    showMember(xhr.responseText);
                    // alert( xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
            xhr.open("get", "php/ajaxLogin.php?no=1"  , true);
            // xhr.open("get", `rbtauto.php?no=${no}&test=${test}` , true);
            // xhr.open("get", "rbtauto.php?no=" + 1 +"&test=" + 2  , true);
            xhr.send(null)

            function showMember(msg) {
                var p2 = document.createElement("p");
                var wordsArea = document.querySelector('.introRobot2');

                var now2 = new Date();
                hour = now2.getHours();
                min = now2.getMinutes();

                p2.dataset.time = `${hour}:${min}`;
                p2.classList.add('introDinoWords');
                p2.innerText = msg;
                wordsArea.appendChild(p2);


                var scrollHeight = $('.introRobot2').prop("scrollHeight");
                $('.introRobot2').scrollTop(scrollHeight);

            };
            

        } else {
            $('.introRobot2 p').remove();
            $(this).css('transform', 'rotate(0deg)');
            $('.introRobot2').css('display', 'none');
            $('.introRobot3').css('display', 'none');
            $('.introRobot4').css('display', 'none');
            $('.introRobotBox').css('height', '60px');
            isOpen = false;
        }
    })
    var timerId = setInterval(function () {
        $('.introRobotCome').toggle();
    }, 4000)
})
window.addEventListener("load", function  () {
    console.log("HI");
    $(this).css('transform', 'rotate(0deg)');
    $('.introRobot2').css('display', 'none');
    $('.introRobot3').css('display', 'none');
    $('.introRobot4').css('display', 'none');
    $('.introRobotBox').css('height', '60px');
    isOpen = false;

});