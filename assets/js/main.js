$("#nav-btn").on("click",function(){
    $("#nav").toggle();
});

$("#question-box-1").on("click",function(){
    $("#answer-box-1").slideToggle();

    $('#question-box-1').toggleClass("question-box-2")
});

$("#question-box-2").on("click",function(){
    $("#answer-box-2").slideToggle();

    $('#question-box-2').toggleClass("question-box-2")
});

$("#question-box-3").on("click",function(){
    $("#answer-box-3").slideToggle();

    $('#question-box-3').toggleClass("question-box-2")
});

$("#question-box-4").on("click",function(){
    $("#answer-box-4").slideToggle();

    $('#question-box-4').toggleClass("question-box-2")
});

$("#question-box-5").on("click",function(){
    $("#answer-box-5").slideToggle();

    $('#question-box-5').toggleClass("question-box-2")
});

$("#question-box-6").on("click",function(){
    $("#answer-box-6").slideToggle();

    $('#question-box-6').toggleClass("question-box-2")
});

function mailSent(){
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Ditt mejl skickades!',
        showConfirmButton: false,
        timer: 5000
      })
  }