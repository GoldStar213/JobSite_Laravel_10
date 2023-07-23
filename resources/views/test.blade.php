<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会社ロゴ</title>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/plyr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/application/fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/application/application.css') }}">

    <style>
        .bg-active {
            background-color: #4cadee;
        }
    </style>
</head>

<body>
    <header>
        <div class="container max-1200">
            <a href="/" class="fs-1 text-black">会社ロゴ</a>
        </div>
    </header>
    <main class="message">
        <div class="container max-1200 d-none" id="test">
            <div class="test-flow">
                <div class="no-group">
                    <a class="no active d-flex justify-content-center align-items-center " data-tab="tab-1" href="#tab-1">
                        1
                    </a>
                    <!-- <img src="assets/img/application/test-dash.svg" alt="dashed"> -->
                    <div class="dashed">

                    </div>
                    <a class="no d-flex justify-content-center align-items-center" data-tab="tab-2" href="#tab-2">
                        2
                    </a>
                    <div class="dashed"></div>
                    <a class="no d-flex justify-content-center align-items-center" data-tab="tab-3" href="#tab-3">
                        3
                    </a>
                    <div class="dashed"></div>
                    <a class="no d-flex justify-content-center align-items-center" data-tab="tab-4" href="#tab-4">
                        4
                    </a>
                    <div class="dashed"></div>
                    <a class="no d-flex justify-content-center align-items-center" data-tab="tab-5" href="#tab-5">
                        5
                    </a>
                </div>
            </div>
            <div class="test-content">
                <!-- WRITE -->
                <div class="test-writing w-100 tab-content active" id="tab-1">
                    <!-- NO -->
                    <div class="test-title">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                        </div>

                        <div class="flex-grow-1">
                            質問1
                        </div>
                    </div>
                    <!-- DESCRIPTION -->
                    <div class="test-descrtion">
                        <div>
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>

                        <div class="flex-grow-1">
                            <p>この質問には 5 分 00 秒以内に回答することをお勧めします。あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00
                                    秒</span></p>
                        </div>
                    </div>
                    <div class="test-problem">
                        質問文2
                    </div>
                    <div class="input-box w-100">
                        <div class="w-100 d-flex justify-content-between px-18">
                            <span class="d-block">答え</span>
                            <span class="d-block">文字数制限: 2</span>
                        </div>
                        <!-- <div class="card card-custom">
              
                        <!-- EDITOR -->
                        <div name="" id="editor">
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center align-items-baseline text-center">
                        <button class="btn rounded-5" id="save_continue">保存して続行</button>
                    </div>

                </div>
                <!-- VIDEO -->
                <div class="test-video tab-content" id="tab-2">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="test-title">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>

                                <div class="flex-grow-1">
                                    質問2
                                </div>
                            </div>

                            <div class="test-descrtion">
                                <div>
                                    <i class="fa-solid fa-hourglass-start"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <p>この質問には 5 分 00 秒以内に回答することをお勧めします。
                                        あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00 秒</span></p>
                                </div>
                            </div>
                            <div class="test-problem">
                                質問文2
                            </div>
                            <div class="test-button">
                                <button class="video-recoding" id="videoRecord">
                                    <i class="fa-solid fa-video text-white"></i>&nbsp;&nbsp;&nbsp;
                                    今すぐ録音する</button>
                            </div>
                            <div class="test-state d-flex justify-content-between">
                                <div>
                                    <span>
                                        <i class="fa-solid fa-stopwatch"></i>
                                        &nbsp;
                                        応答時間 01:00</span>
                                </div>
                                <div>
                                    <span>
                                        <i class="fa-solid fa-video text-white"></i>
                                        &nbsp;
                                        0/1をリテイク</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <!-- <video id="preview" class="w-100" height="333" autoplay muted></video> -->
                            <!-- <video id="recording" class="d-none" width="590" height="333" controls></video> -->
                            <img class="w-100" src="./assets/img/application/camera-screen.svg" alt="camera_screen">
                        </div>
                    </div>
                </div>
                <!-- VOICE -->
                <div class="test-voice tab-content" id="tab-3">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="test-title">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>

                                <div class="flex-grow-1">
                                    質問3
                                </div>
                            </div>

                            <div class="test-descrtion">
                                <div>
                                    <i class="fa-solid fa-hourglass-start"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <p>この質問には 5 分 00 秒以内に回答することをお勧めします。
                                        あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00 秒</span></p>
                                </div>
                            </div>
                            <div class="test-problem">
                                質問文3
                            </div>
                            <div class="test-button">
                                <button class="video-recoding">
                                    <i class="fa-solid fa-microphone"></i>
                                    &nbsp;&nbsp;&nbsp;今すぐ録音する</button>
                            </div>
                            <div class="test-state d-flex justify-content-between">
                                <div>
                                    <span>
                                        <i class="fa-solid fa-stopwatch"></i>
                                        &nbsp;
                                        応答時間 01:00</span>
                                </div>
                                <div>
                                    <span>
                                        <i class="fa-solid fa-video text-white"></i>
                                        &nbsp;
                                        0/1をリテイク</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <img class="w-100" src="./assets/img/application/camera-screen.svg" alt="camera_screen">
                        </div>
                    </div>
                </div>
                <!-- FILE -->
                <div class="test-file tab-content " id="tab-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="test-title">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>

                                <div class="flex-grow-1">
                                    質問4
                                </div>
                            </div>

                            <div class="test-descrtion">
                                <div>
                                    <i class="fa-solid fa-hourglass-start"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <p>この質問には 5 分 00 秒以内に回答することをお勧めします。
                                        あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00 秒</span></p>
                                </div>
                            </div>
                            <div class="test-problem">
                                質問文4
                            </div>

                            <div class="test-state d-flex justify-content-between mb-3">
                                <div>
                                    <span>
                                        <i class="fa-solid fa-stopwatch"></i>
                                        &nbsp;
                                        応答時間 01:00</span>
                                </div>
                                <div>
                                    <span>
                                        <i class="fa-solid fa-video text-white"></i>
                                        &nbsp;
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <section class="bg-diffrent">
                                <div class="w-100 text-center">
                                    <div class="col-xl-12">
                                        <div class="file-upload-contain">
                                            <div class="file-drop-zone clickable" tabindex="-1">
                                                <div class="file-drop-zone-title">
                                                    <div class="upload-area">
                                                        <p class="file_preview">ここにファイルをドラッグ アンド ドロップしますまた</p>
                                                        <div> <button class="btn_upload">ブラウズ</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input id="fileupload" type="file" accept="*.* " multiple=false />
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>

                    <!-- FINISH BUTTON -->
                </div>
                <!-- FILE -->
                <div class="test-ai tab-content " id="tab-5">
                    <div class="w-100">
                        <div class="m-auto">
                            <div class="test-title">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>

                                <div class="flex-grow-1">
                                    質問5
                                </div>
                            </div>

                            <div class="test-descrtion">
                                <div>
                                    <i class="fa-solid fa-hourglass-start"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <p>この質問には 5 分 00 秒以内に回答することをお勧めします。
                                        あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00 秒</span></p>
                                </div>
                            </div>
                            <div class="test-problem">
                                質問文
                            </div>

                            <div class="test-state d-flex justify-content-between mb-3">
                                <div>
                                    <span>
                                        <i class="fa-solid fa-stopwatch"></i>
                                        &nbsp;
                                        応答時間 01:00</span>
                                </div>
                                <div>
                                    <span>
                                        <i class="fa-solid fa-video text-white"></i>
                                        &nbsp;
                                        <!-- 0/1をリテイク -->
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="card ai-box m-auto mb-4 bg-info-subtle shadow p-3" style="max-width: 600px;"> -->
                            <!-- <div class="chat_history w-100" style="height: 400px;">


                                </div>
                                <div class="w-100">
                                    <input type="text" class="form-control">
                                </div> -->

                            <!-- </div> -->

                            <div class="card m-auto my-5 p-0" id="chat2">
                                <!-- <div class="card-header d-flex justify-content-between align-items-center p-3">
                                                    <h5 class="mb-0">Chat</h5>
                                                    <button type="button" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">Let's Chat
                                                        App</button>
                                                </div> -->
                                <div class="card-body overflow-y-auto" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">



                                </div>
                                <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 3" style="width: 40px; height: 100%;">
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- FINISH BUTTON -->
                    <div class="w-100 d-flex align-items-center justify-content-center">
                        <button class="btn rounded-5 text-white align-self-center mb-5" id="test_finish"><span>テスト完了</span></button>
                    </div>
                </div>
                <!-- FILE -->
                <div class="test-ai tab-content " id="tab-5">
                    <div class="w-100">
                        <div class="m-auto">
                            <div class="test-title">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>

                                <div class="flex-grow-1">
                                    質問5
                                </div>
                            </div>

                            <div class="test-descrtion">
                                <div>
                                    <i class="fa-solid fa-hourglass-start"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <p>この質問には 5 分 00 秒以内に回答することをお勧めします。
                                        あなたのタイム: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 分 00 秒</span></p>
                                </div>
                            </div>
                            <div class="test-problem">
                                質問文
                            </div>

                            <div class="test-state d-flex justify-content-between mb-3">
                                <div>
                                    <span>
                                        <i class="fa-solid fa-stopwatch"></i>
                                        &nbsp;
                                        応答時間 01:00</span>
                                </div>
                                <div>
                                    <span>
                                        <i class="fa-solid fa-video text-white"></i>
                                        &nbsp;
                                        <!-- 0/1をリテイク -->
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="card ai-box m-auto mb-4 bg-info-subtle shadow p-3" style="max-width: 600px;"> -->
                            <!-- <div class="chat_history w-100" style="height: 400px;">


                                </div>
                                <div class="w-100">
                                    <input type="text" class="form-control">
                                </div> -->

                            <!-- </div> -->

                            <div class="card m-auto my-5 p-0" id="chat2">
                                <!-- <div class="card-header d-flex justify-content-between align-items-center p-3">
                                                    <h5 class="mb-0">Chat</h5>
                                                    <button type="button" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">Let's Chat
                                                        App</button>
                                                </div> -->
                                <div class="card-body overflow-y-auto" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                                    <div class="d-flex flex-row justify-content-start">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                        <div>
                                            <p class="small p-2 ms-3 mb-1 rounded-3 chat-message" style="background-color: #f5f6f7;">
                                                こんにちは。</p>
                                            <p class="small p-2 ms-3 mb-1 rounded-3 chat-message" style="background-color: #f5f6f7;">
                                                こんにちは。
                                            </p>
                                            <p class="small p-2 ms-3 mb-1 rounded-3 chat-message" style="background-color: #f5f6f7;">
                                                こんにちは。</p>
                                            <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                                        </div>
                                    </div>

                                    <div class="divider d-flex align-items-center mb-4">
                                        <p class="text-center mx-3 mb-0" style="color: #a2aab7;">今日</p>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                                        <div>
                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-active chat-message right">こんにちは。</p>
                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-active chat-message right">こんにちは。</p>
                                            <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-active chat-message right">
                                                こんにちは。こんにちは。こんにちは。
                                            </p>
                                            <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">
                                                00:06</p>
                                        </div>
                                        <img src="https://www.pngitem.com/pimgs/m/122-1223088_one-bot-discord-avatar-hd-png-download.png" alt="avatar 1" style="width: 45px; height: 100%;">
                                    </div>

                                    <div class="d-flex flex-row justify-content-start mb-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                        <div>
                                            <p class="small p-2 ms-3 mb-1 rounded-3 chat-message" style="background-color: #f5f6f7;">
                                                こんにちは。こんにちは。こんにちは。</p>
                                            <p class="small p-2 ms-3 mb-1 rounded-3 chat-message" style="background-color: #f5f6f7;">
                                                こんにちは。こんにちは。こんにちは。
                                                Sunday?</p>
                                            <p class="small ms-3 mb-3 rounded-3 text-muted">00:0`7</p>
                                        </div>
                                    </div>`



                                </div>
                                <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 3" style="width: 40px; height: 100%;">
                                    <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Type message">
                                    <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                    <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                    <a class="ms-3" href="#!"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- FINISH BUTTON -->
                    <div class="w-100 d-flex align-items-center justify-content-center">
                        <button class="btn rounded-5 text-white align-self-center mb-5" id="test_finish"><span>テスト完了</span></button>
                    </div>
                </div>
            </div>

            <!-- CONTENT CONFIRM -->
            <div class="test-complete d-none">
                <h1 class="text-center">ほぼ完了しました</h1>
                <p class="text-center">回答を注意深く確認し、満足していることを確認してください。</p>
                <div id="test-confirm" class="test-confirm w-100 d-flex flex-wrap flex-lg-nowrap justify-content-center gap-3">
                    <div class="flex-grow-1">
                        <div class="test-problem-no ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            &nbsp;&nbsp;
                            <span>
                                質問2
                            </span>  
                        </div>
                        <div class="w-100 pl-md-0 pl-lg-73">
                            <div class="test-title">
                                <p>自己紹介</p>
                            </div>
                            <div id="test-preview" class="w-100 mb-4">
                                <img src="./assets/img/application/test_preview.png" alt="Test Preview">
                            </div>
                        </div>
                        <div class="w-100 text-center mb-4">
                            <button id="restart_test" class="bg-white rounded-5 bg-red" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <svg id="Group_2290" data-name="Group 2290" xmlns="http://www.w3.org/2000/svg" width="18.5" height="18.5" viewBox="0 0 18.5 18.5">
                                    <g id="Group_2289" data-name="Group 2289" opacity="0">
                                        <path id="Path_132" data-name="Path 132" d="M18.5,0H0V18.5H18.5Z" fill="#4ca7ee" />
                                    </g>
                                    <path id="Path_133" data-name="Path 133" d="M6.571,14.005a.768.768,0,0,1,.964.5,5.561,5.561,0,0,0,10.83-1.6,5.471,5.471,0,0,0-5.535-5.4A5.578,5.578,0,0,0,9.246,8.795l1.673-.278a.773.773,0,0,1,.578.135.762.762,0,0,1,.308.5.773.773,0,0,1-.135.578.762.762,0,0,1-.5.308l-3.268.54H7.766a.767.767,0,0,1-.262-.046.315.315,0,0,1-.077-.046.6.6,0,0,1-.154-.085L7.2,10.321c0-.039-.069-.069-.1-.116s0-.077-.039-.108a1.03,1.03,0,0,1-.054-.139L6.432,6.875a.785.785,0,0,1,1.542-.293L8.182,7.7A7.1,7.1,0,0,1,12.83,5.966,7.012,7.012,0,0,1,19.906,12.9a7.012,7.012,0,0,1-7.076,6.938,7.033,7.033,0,0,1-6.8-4.872.788.788,0,0,1,.066-.6A.779.779,0,0,1,6.571,14.005Z" transform="translate(-3.719 -3.653)" fill="#4ca7ee" />
                                    <path id="Path_134" data-name="Path 134" d="M18.5,0H0V18.5H18.5Z" fill="none" />
                                </svg>

                                再受験
                            </button>
                        </div>
                    </div>

                    <div class="answer-list">
                        <p class="ps-3">回答2/8</p>
                        <!-- BOX LIST -->
                        <div class="list-box card rounded-2 px-2 m-auto d-flex flex-column py-2  align-items-center shadow gap-2 w-100">
                            <!--WRITING BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="writing" data-content="さささ">
                                <!-- HEADER -->
                                <div class="answer-type text-center rounded-2 d-none d-sm-block">
                                    <i class="fa-solid fa-align-center"></i>
                                    <div class="mt-3">
                                        <span>ワード数: 1</span>
                                    </div>
                                </div>
                                <!-- END HEADER -->
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                                <!-- END CONTENT -->
                            </div>
                            <!-- END BOX -->
                            <!-- VIDEO BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4 active" data-type="video" data-content="./assets/video/interview01.mp4">
                                <!-- HEADER -->
                                <div class="answer-type text-center pt-0 rounded d-none d-sm-block">
                                    <img src="./assets/img/application/answer-video.png" alt="">
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!-- VOICE BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="voice" data-content="./assets/video/voice.wav">
                                <!-- HEADER -->
                                <div class="answer-type text-center pt-0 rounded d-none d-sm-block">
                                    <img src="./assets/img/application/answer-voice.png" alt="">
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!-- FILE UPLOAD BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="file" data-content="./assets/video/wordpress.rar">
                                <!-- HEADER -->
                                <div class="answer-type text-center rounded-2 d-none d-sm-block">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <div class="mt-3">
                                        <span>mt.chilbo.webp</span>
                                    </div>
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!--WRITING BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="writing" data-content="さささ">
                                <!-- HEADER -->
                                <div class="answer-type text-center rounded-2 d-none d-sm-block">
                                    <i class="fa-solid fa-align-center"></i>
                                    <div class="mt-3">
                                        <span>ワード数: 1</span>
                                    </div>
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!-- VIDEO BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="video" data-content="./assets/video/interview01.mp4">
                                <!-- HEADER -->
                                <div class="answer-type text-center pt-0 rounded d-none d-sm-block">
                                    <img src="./assets/img/application/answer-video.png" alt="">
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!-- VOICE BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="voice" data-content="./assets/video/voice.wav">
                                <!-- HEADER -->
                                <div class="answer-type text-center pt-0 rounded d-none d-sm-block">
                                    <img src="./assets/img/application/answer-voice.png" alt="">
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->
                            <!-- FILE UPLOAD BOX -->
                            <div class="answer-item p-1 rounded-3 d-flex gap-4" data-type="file" data-content="./assets/video/wordpress.rar">
                                <!-- HEADER -->
                                <div class="answer-type text-center rounded-2 d-none d-sm-block">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <div class="mt-3">
                                        <span>wordpress.rar</span>
                                    </div>
                                </div>
                                <!-- CONTENT -->
                                <div class="answer-content text-left flex-grow-1 overflow-hidden">
                                    <div class="w-100 pt-3 pb-2">
                                        <img src="./assets/img/application/chat-right.png" alt="chat">
                                        &nbsp;&nbsp;&nbsp;質問1
                                    </div>
                                    <p>
                                        さささ
                                    </p>
                                </div>
                            </div>
                            <!-- END BOX -->

                        </div>
                        <!-- END LIST -->
                    </div>
                </div>
                <div class="w-100 text-center">
                    <button class="text-white rounded-5 mb-5" id="answer_confirm">次に</button>
                </div>

            </div>
            <!-- END CONTENT CONFIRM -->

            <!-- MEETING BOOXING -->
            <div class="meeting-book d-none">
                <h1 class="text-center mb-0">あなたの空き状況</h1>
                <p class="">今後数日間、フォローアップの会話にいつ対応できるかを知っておくと便利です。空き枠を 3 つ以上選択してください。このセクションはオプションです。</p>
                <div class="w-100 pt-3">
                    <table id="booking_table" class="table table-hover table-bordered w-100 text-white text-center">
                        <thead>
                            <tr class="text-white">
                                <th class="p-0"><i class="fa-solid fa-clock text-white"></i></th>
                                <th class="text-white">木曜日</th>
                                <th class="text-white">金曜日</th>
                                <th class="text-white">月曜日</th>
                                <th class="text-white">火曜日</th>
                                <th class="text-white">水曜日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>午前8:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前8:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前9:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前9:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前10:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前10:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前11:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前11:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午前12:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後12:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後1:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後1:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後2:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後2:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後3:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後3:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後4:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後4:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後5:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後5:30</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>
                            <tr>
                                <td>午後6:00</td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                                <td><i class="fa-regular fa-circle-check"></i></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="w-100 text-center">
                    <button class="text-white rounded-5 mb-5 " id="meeting_book_ok">確認</button>
                    <button class="rounded-5 mb-5 bg-white " id="meeting_book_skip1">スキップ</button>
                </div>
            </div>
            <!-- END MEETING BOOKING -->
            <!-- CONGRATULATION -->
            <div class="congratulation d-none">
                <div class="container">
                    <div class="w-100 text-center">
                        <img src="./assets/img/application/congratulation.png" alt="ok">
                    </div>
                    <div class="w-100 text-center mt-5 pb-5">
                        <button class="bg-white rounded-5">あなたの経験を評価してください</button>
                    </div>
                </div>
            </div>
            <!-- END CONGRATULATION -->
        </div>
        <div class="container py-5 d-flex justify-content-center" id="welcome_message">
            <div class="card rounded-5 shadow ">
                <div class="title">
                    <h3>Default Invite Email</h3>
                </div>
                <div class="content">

                    <p>Thanks for your interest in the {interview_name}, {company_name} position. I'd like to get to
                        know you
                        better with a short one-way video interview.
                        <br><br>
                        Your interview will consist of a set of questions for you to answer using your camera and
                        microphone. If you
                        don't have access to a computer you can also complete your interview using any smartphone or
                        tablet.
                        <br><br>
                        How it works:
                        If you're unfamiliar with one-way interviews, they are simply interviews with pre-written
                        questions where
                        you record a video response, at your convenience. Each question should be answered before you
                        move on to the
                        next one.
                        <br><br>
                        Completing this interview will allow us to get to know you more quickly than a phone or video
                        call, and you
                        can complete it anywhere, any time.
                        <br><br>
                        Please read this guide to your interview before starting:
                        5 Easy steps to a great interview
                        <br><br>
                        Thanks,
                        {interview_owner_name}
                    </p>
                </div>
                <div class="button-group">
                    <button class="btn  rounded-5" id="go_interview">Go to interview</button>
                </div>
                <div class="content">
                    <p>
                        Thanks for your interest in the {interview_name}, {company_name} position. I'd like to get to
                        know you
                        better with a short one-way video interview.
                        <br><br>
                        Your interview will consist of a set of questions for you to answer using your camera and
                        microphone. If you
                        don't have access to a computer you can also complete your interview using any smartphone or
                        tablet.
                        <br><br>
                        How it works:
                        If you're unfamiliar with one-way interviews, they are simply interviews with pre-written
                        questions where
                        you record a video response, at your convenience. Each question should be answered before you
                        move on to the
                        next one.
                        <br><br>
                        Completing this interview will allow us to get to know you more quickly than a phone or video
                        call, and you
                        can complete it anywhere, any time.
                        <br><br>
                        Please read this guide to your interview before starting:
                        5 Easy steps to a great interview
                        <br><br>
                        Thanks,
                        {interview_owner_name}
                    </p>
                </div>

            </div>
        </div>

    </main>
    <footer>
        <div class="container-fluid">
            <div class="container max-1200 d-flex flex-column flex-sm-column flex-md-column flex-lg-row align-items-center align-items-sm-center align-items-md-center align-items-xs-center justify-content-lg-between">
                <a href="/">
                    <img src="./assets/img/logo01.png" class="display-block w-auto" alt="logo">
                </a>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
                        <div class="navbar-nav gap-sm-1 align-items-xs-center align-items-center align-items-sm-center justify-content-sm-center gap-md-0">
                            <a class="nav-link" aria-current="page" href="#">サポート</a>
                            <a class="nav-link" href="#">プライバシーポリシー</a>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
        <div class="container-fluid">
            <span>Copyright © PROS Co., Ltd. All Rights Reserved.</span>
        </div>
    </footer>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">確認</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                テストを再開しますか？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                    <button type="button" class="btn btn-primary" id="restart">確認</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('/assets/js/common/jquery-3.7.0.min.js') }}"></script>
    <!-- <script src="{{ asset('/assets/js/common/bootstrap.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    
    <!-- <script src="{{ asset('/assets/js/application/fileupload.js') }}"></script> -->
    <script src="{{ asset('/assets/js/common/plyr.min.js') }}"></script>
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script src="{{ asset('/assets/js/application/application.js') }}"></script>

</body>

</html>