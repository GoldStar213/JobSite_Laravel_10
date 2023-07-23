$(document).ready(async function () {

  // TAB FUNCTIONvar 
  quill = new Quill('#editor', {
    theme: 'snow'
  });
  quill.on('text-change', function (delta, oldDelta, source) {
    if (source == 'api') {
      console.log("An API call triggered this change.");
    } else if (source == 'user') {
      console.log(quill.getContents().ops[0]);
      if (new String(quill.getContents().ops[0].insert) == '\n') {
        $("#save_continue").removeClass("active");
        $("#save_continue").attr("disabled", " ");
        $("#save_continue").removeClass("active").attr("disabled", "");
      } else {
        $("#save_continue").addClass("active");
        $("#save_continue").removeAttr("disabled");
        $("#save_continue").addClass("active").removeAttr("disabled");
      }
    }
  });
  $('.no-group a').click(function () {
    var tab_id = $(this).attr('data-tab');

    $('.no-group a').removeClass('active');
    $('.tab-content').removeClass('active');

    let elements = document.querySelectorAll(".no-group a");
    let len = elements.length;
    for (let i = 0; i < len; i++) {
      elements[i].classList.add("active");
      if (elements[i] == this) {
        break;
      }
    }
    $(this).addClass('active');
    $("#" + tab_id).addClass('active');
  });

  $("#save_continue").click(function () {
    $("#tab-1").removeClass("active");
    $("#tab-2").addClass("active");
    document.querySelectorAll(".no-group a");
    for (let i = 0; i < 2; i++) {
      elements[i].classList.add("active");
    }
  })

  $("#go_interview").click(function () {
    $("#welcome_message").addClass("d-none");
    $("#test").removeClass("d-none")
  })


  // WHEN FINISH BUTTON IS PRESSED
  $("#test_finish").click(function () {
    // IDENTIFY IF TEST IS FINISHED


    // IF TEST CAN BE FINISHED
    $(".test-flow").hide();
    $(".test-content").hide();

    // $(".test-complete").show();
    $(".test-complete").removeClass("d-block").addClass("d-none");
    $(".test-complete").removeClass("d-none").addClass("d-block");

  })


  $(".answer-item").click(function () {
    $(".answer-item").removeClass("active");
    $(this).addClass("active");
    let privewEle = document.getElementById("test-preview")

    let type = $(this).attr("data-type");
    if (type == "writing") {
      let data = $(this).attr("data-content");
      privewEle.innerHTML = data;
    }
    else if (type == "video") {
      let data = $(this).attr("data-content");
      let ele = '<video controls class="rounded-4 w-100 h-100" crossorigin playsinlineposter="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">'
        + '<source src="' + data + '" type="video/mp4" size="300">'
        + '<a>Video Oynatılamıyor</a>'
        + '</video>';

      privewEle.innerHTML = ele;
      var plaryer = new Plyr('video', {
        muted: false,
        volume: 1,
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
      });
    } else if (type == "voice") {
      let data = $(this).attr("data-content");
      let ele = '<div style="width:100%;text-align:center;padding-top:25%" >' +
        '<audio style="height: 60px; max-width: 360px; margin:auto;" controls="controls" src="' + data + '" type="audio/mpeg"></div>';
      privewEle.innerHTML = ele;
    } else if (type == "file") {
      let data = $(this).attr("data-content");
      let name = data.split("/");
      name = name[name.length - 1];
      privewEle.innerHTML = "<div style='width:100%;text-align:center;padding-top:25%' ><a href='" + data + "'>" + name + "</a></div>";
    }
  })
  $("#answer_confirm").click(function () {
    // $(".test-complete").hide();
    // $(".meeting-book").show();
    $(".test-complete").removeClass("d-block").addClass("d-none");
    $(".meeting-book").removeClass("d-none").addClass("d-block");
  })
  $("#meeting_book_ok, #meeting_book_skip1").click(function () {
    $(".meeting-book").removeClass("d-block").addClass("d-none");
    $(".congratulation").removeClass("d-none").addClass("d-block");
  })

  $(".meeting-book td").click(function () {
    $(this).toggleClass("active");
  })
  $("#fileupload").change(function () {
    $(".file_preview").html($("#fileupload").val())
  })

  $(".btn_upload").click(function () {
    $('#fileupload').click();
  })

  $("#restart").click(function(){
      window.location.href = "/test"
  })

  // $("#restart_test").hover(function(){
  //   $("#restart_test")
  // })
  // VIDEO RECODING

  // let videoRecordingState = false;
  // let preview = document.getElementById("preview");
  // let recording = document.getElementById("recording");
  // let startButton = document.getElementById("videoRecord");
  // // let stopButton = document.getElementById("stopButton");
  // // let downloadButton = document.getElementById("downloadButton");
  // // let logElement = document.getElementById("log");

  // let recordingTimeMS = 5000;

  // function startRecording(stream, lengthInMS) {

  //   if (!videoRecordingState) {
  //     let recorder = new MediaRecorder(stream);
  //     let data = [];

  //     recorder.ondataavailable = (event) => data.push(event.data);
  //     recorder.start();
  //     log(`${recorder.state} for ${lengthInMS / 1000} seconds…`);

  //     let stopped = new Promise((resolve, reject) => {
  //       recorder.onstop = resolve;
  //       recorder.onerror = (event) => reject(event.name);
  //     });

  //     let recorded = wait(lengthInMS).then(() => {
  //       if (recorder.state === "recording") {
  //         recorder.stop();
  //       }
  //     });

  //     return Promise.all([stopped, recorded]).then(() => data);

  //   }
  //   else {
  //     stream.getTracks().forEach((track) => track.stop());
  //   }
  //   videoRecordingState = !videoRecordingState;

  // }


})