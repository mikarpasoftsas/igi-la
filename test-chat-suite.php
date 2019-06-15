<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .box {
                position: relative;
                border-radius: 3px;
                background: #ffffff;
                border-top: 3px solid #d2d6de;
                margin-bottom: 0px; /* 20 */
                width: 100%;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            }
            .box.box-primary {
                border-top-color: #3c8dbc;
            }
            .box.box-info {
                border-top-color: #00c0ef;
            }
            .box.box-danger {
                border-top-color: #dd4b39;
            }
            .box.box-warning {
                border-top-color: #f39c12;
            }
            .box.box-success {
                border-top-color: #00a65a;
            }
            .box.box-default {
                border-top-color: #d2d6de;
            }
            .box.collapsed-box .box-body, .box.collapsed-box .box-footer {
                display: none;
            }
            .box .nav-stacked>li {
                border-bottom: 1px solid #f4f4f4;
                margin: 0;
            }
            .box .nav-stacked>li:last-of-type {
                border-bottom: none;
            }
            .box.height-control .box-body {
                max-height: 300px;
                overflow: auto;
            }
            .box .border-right {
                border-right: 1px solid #f4f4f4;
            }
            .box .border-left {
                border-left: 1px solid #f4f4f4;
            }
            .box.box-solid {
                border-top: 0;
            }
            .box.box-solid>.box-header .btn.btn-default {
                background: transparent;
            }
            .box.box-solid>.box-header .btn:hover, .box.box-solid>.box-header a:hover {
                background: rgba(0, 0, 0, 0.1);
            }
            .box.box-solid.box-default {
                border: 1px solid #d2d6de;
            }
            .box.box-solid.box-default>.box-header {
                color: #444;
                background: #d2d6de;
                background-color: #d2d6de;
            }
            .box.box-solid.box-default>.box-header a, .box.box-solid.box-default>.box-header .btn {
                color: #444;
            }
            .box.box-solid.box-primary {
                border: 1px solid #3c8dbc;
            }
            .box.box-solid.box-primary>.box-header {
                color: #fff;
                background: #3c8dbc;
                background-color: #3c8dbc;
            }
            .box.box-solid.box-primary>.box-header a, .box.box-solid.box-primary>.box-header .btn {
                color: #fff;
            }
            .box.box-solid.box-info {
                border: 1px solid #00c0ef;
            }
            .box.box-solid.box-info>.box-header {
                color: #fff;
                background: #00c0ef;
                background-color: #00c0ef;
            }
            .box.box-solid.box-info>.box-header a, .box.box-solid.box-info>.box-header .btn {
                color: #fff;
            }
            .box.box-solid.box-danger {
                border: 1px solid #dd4b39;
            }
            .box.box-solid.box-danger>.box-header {
                color: #fff;
                background: #dd4b39;
                background-color: #dd4b39;
            }
            .box.box-solid.box-danger>.box-header a, .box.box-solid.box-danger>.box-header .btn {
                color: #fff;
            }
            .box.box-solid.box-warning {
                border: 1px solid #f39c12;
            }
            .box.box-solid.box-warning>.box-header {
                color: #fff;
                background: #f39c12;
                background-color: #f39c12;
            }
            .box.box-solid.box-warning>.box-header a, .box.box-solid.box-warning>.box-header .btn {
                color: #fff;
            }
            .box.box-solid.box-success {
                border: 1px solid #00a65a;
            }
            .box.box-solid.box-success>.box-header {
                color: #fff;
                background: #00a65a;
                background-color: #00a65a;
            }
            .box.box-solid.box-success>.box-header a, .box.box-solid.box-success>.box-header .btn {
                color: #fff;
            }
            .box.box-solid>.box-header>.box-tools .btn {
                border: 0;
                box-shadow: none;
            }
            .box.box-solid[class*='bg']>.box-header {
                color: #fff;
            }
            .box .box-group>.box {
                margin-bottom: 5px;
            }
            .box .knob-label {
                text-align: center;
                color: #333;
                font-weight: 100;
                font-size: 12px;
                margin-bottom: 0.3em;
            }
            .box>.overlay, .overlay-wrapper>.overlay, .box>.loading-img, .overlay-wrapper>.loading-img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%}
            .box .overlay, .overlay-wrapper .overlay {
                z-index: 50;
                background: rgba(255, 255, 255, 0.7);
                border-radius: 3px;
            }
            .box .overlay>.fa, .overlay-wrapper .overlay>.fa {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -15px;
                margin-top: -15px;
                color: #000;
                font-size: 30px;
            }
            .box .overlay.dark, .overlay-wrapper .overlay.dark {
                background: rgba(0, 0, 0, 0.5);
            }
            .box-header:before, .box-body:before, .box-footer:before, .box-header:after, .box-body:after, .box-footer:after {
                content: " ";
                display: table;
            }
            .box-header:after, .box-body:after, .box-footer:after {
                clear: both;
            }
            .box-header {
                color: #fff;
                display: block;
                padding: 10px;
                position: relative;
                cursor: pointer;
                background-color: #f39c12;
            }
            .box-header.with-border {
                border-bottom: 1px solid #f4f4f4;
            }
            .collapsed-box .box-header.with-border {
                border-bottom: none;
            }
            .box-header>.fa, .box-header>.glyphicon, .box-header>.ion, .box-header .box-title {
                display: inline-block;
                font-size: 18px;
                margin: 0;
                line-height: 1;
            }
            .box-header>.fa, .box-header>.glyphicon, .box-header>.ion {
                margin-right: 5px;
            }
            .box-header>.box-tools {
                position: absolute;
                right: 10px;
                top: 5px;
            }
            .box-header>.box-tools [data-toggle="tooltip"] {
                position: relative;
            }
            .box-header>.box-tools.pull-right .dropdown-menu {
                right: 0;
                left: auto;
            }
            .btn-box-tool {
                padding: 5px;
                font-size: 12px;
                background: transparent;
                color: #fff;
            }
            .open .btn-box-tool, .btn-box-tool:hover {
                color: #fff;
            }
            .btn-box-tool.btn:active {
                box-shadow: none;
            }
            .box-body {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px;
                padding: 10px;
            }
            .no-header .box-body {
                border-top-right-radius: 3px;
                border-top-left-radius: 3px;
            }
            .box-body>.table {
                margin-bottom: 0;
            }
            .box-body .fc {
                margin-top: 5px;
            }
            .box-body .full-width-chart {
                margin: -19px;
            }
            .box-body.no-padding .full-width-chart {
                margin: -9px;
            }
            .box-body .box-pane {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 3px;
            }
            .box-body .box-pane-right {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 0;
            }
            .box-footer {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px;
                border-top: 1px solid #f4f4f4;
                padding: 10px;
                background-color: #fff;
            }
            .box-footer .btn-warning {
                background-color: #d58512;
            }
            .direct-chat .box-body {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
                position: relative;
                overflow-x: hidden;
                padding: 0;
            }
            .direct-chat.chat-pane-open .direct-chat-contacts {
                -webkit-transform: translate(0,  0);
                -ms-transform: translate(0,  0);
                -o-transform: translate(0,  0);
                transform: translate(0,  0);
            }
            .direct-chat-messages {
                -webkit-transform: translate(0,  0);
                -ms-transform: translate(0,  0);
                -o-transform: translate(0,  0);
                padding: 10px;
                height: 450px;
                overflow-y: auto;
                overflow-x:hidden;
                transform: rotate(180deg);
                direction: rtl;
            }
            .direct-chat-msg, .direct-chat-text {
                display: block;
            }
            .direct-chat-msg {
                margin-bottom: 20px;
                transform: rotate(180deg);
                direction: ltr;
            }
            .direct-chat-msg:before, .direct-chat-msg:after {
                content: " ";
                display: table;
            }
            .direct-chat-msg:after {
                clear: both;
            }
            .direct-chat-messages, .direct-chat-contacts {
                -webkit-transition: -webkit-transform .5s ease-in-out;
                -moz-transition: -moz-transform .5s ease-in-out;
                -o-transition: -o-transform .5s ease-in-out;
                transition: transform .5s ease-in-out;
            }
            .direct-chat-text {
                border-radius: 5px;
                position: relative;
                padding: 5px 10px;
                background: #d2d6de;
                border: 1px solid #d2d6de;
                margin: 5px 0 0 50px;
                color: #444;
            }
            .direct-chat-text:after, .direct-chat-text:before {
                position: absolute;
                right: 100%;
                top: 15px;
                border: solid transparent;
                border-right-color: #d2d6de;
                content: ' ';
                height: 0;
                width: 0;
                pointer-events: none;
            }
            .direct-chat-text:after {
                border-width: 5px;
                margin-top: -5px;
            }
            .direct-chat-text:before {
                border-width: 6px;
                margin-top: -6px;
            }
            .right .direct-chat-text {
                margin-right: 50px;
                margin-left: 0;
            }
            .right .direct-chat-text:after, .right .direct-chat-text:before {
                right: auto;
                left: 100%;
                border-right-color: transparent;
                border-left-color: #d2d6de;
            }
            .direct-chat-img {
                border-radius: 50%;
                float: left;
                width: 40px;
                height: 40px;
            }
            .right .direct-chat-img {
                float: right;
            }
            .direct-chat-info {
                display: block;
                margin-bottom: 2px;
                font-size: 12px;
            }
            .direct-chat-name {
                font-weight: 600;
            }
            .direct-chat-timestamp {
                color: #999;
            }
            .direct-chat-contacts-open .direct-chat-contacts {
                -webkit-transform: translate(0,  0);
                -ms-transform: translate(0,  0);
                -o-transform: translate(0,  0);
                transform: translate(0,  0);
            }
            .direct-chat-contacts {
                -webkit-transform: translate(101%,  0);
                -ms-transform: translate(101%,  0);
                -o-transform: translate(101%,  0);
                transform: translate(101%,  0);
                position: absolute;
                top: 0;
                bottom: 0;
                height: 250px;
                width: 100%;
                background: #222d32;
                color: #fff;
                overflow: auto;
            }
            .contacts-list>li {
                border-bottom: 1px solid rgba(0, 0, 0, 0.2);
                padding: 10px;
                margin: 0;
            }
            .contacts-list>li:before, .contacts-list>li:after {
                content: " ";
                display: table;
            }
            .contacts-list>li:after {
                clear: both;
            }
            .contacts-list>li:last-of-type {
                border-bottom: none;
            }
            .contacts-list-img {
                border-radius: 50%;
                width: 40px;
                float: left;
            }
            .contacts-list-info {
                margin-left: 45px;
                color: #fff;
            }
            .contacts-list-name, .contacts-list-status {
                display: block;
            }
            .contacts-list-name {
                font-weight: 600;
            }
            .contacts-list-status {
                font-size: 12px;
            }
            .contacts-list-date {
                color: #aaa;
                font-weight: normal;
            }
            .contacts-list-msg {
                color: #999;
            }
            .direct-chat-danger .right>.direct-chat-text {
                background: #dd4b39;
                border-color: #dd4b39;
                color: #fff;
            }
            .direct-chat-danger .right>.direct-chat-text:after, .direct-chat-danger .right>.direct-chat-text:before {
                border-left-color: #dd4b39;
            }
            .direct-chat-primary .right>.direct-chat-text {
                background: #3c8dbc;
                border-color: #3c8dbc;
                color: #fff;
            }
            .direct-chat-primary .right>.direct-chat-text:after, .direct-chat-primary .right>.direct-chat-text:before {
                border-left-color: #3c8dbc;
            }
            .direct-chat-warning .right>.direct-chat-text {
                background: #f0ad4e; /* #f39c12; */
                border-color: #f39c12;
                color: #fff;
            }
            .direct-chat-warning .right>.direct-chat-text:after, .direct-chat-warning .right>.direct-chat-text:before {
                border-left-color: #f39c12;
            }
            .direct-chat-info .right>.direct-chat-text {
                background: #00c0ef;
                border-color: #00c0ef;
                color: #fff;
            }
            .direct-chat-info .right>.direct-chat-text:after, .direct-chat-info .right>.direct-chat-text:before {
                border-left-color: #00c0ef;
            }
            .direct-chat-success .right>.direct-chat-text {
                background: #00a65a;
                border-color: #00a65a;
                color: #fff;
            }
            .direct-chat-success .right>.direct-chat-text:after, .direct-chat-success .right>.direct-chat-text:before {
                border-left-color: #00a65a;
            }

            .chat-box{
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100% !important;
                border: 0px solid;
                padding-left: 10px;
                padding-right: 10px;
            }
            .chat-box .chat-box-section {
                display: none;
            }
            .chat-box .chat-box-section.open-more{
                display: block;
                transition: 2s;
                border-left: 1px solid #f39c12;
                border-right: 1px solid #f39c12;
            }
            
            .chat-box .chat-box-section .loading, .chat-box .chat-box-section .noresults {
                display: none;
            }

            /* @media (max-width:480px){ */
            @media (min-width: 768px) {
                .chat-box{
                    position: fixed;
                    bottom: 0;
                    left: unset;
                    right: 50px;
                    width: 30% !important;
                    border: 0px solid;
                    padding: 0px;
                    margin: 0px;
                } 
            }
        </style>
    </head>
    <body>
        <script>
            var messageConfig = {
                title: 'Mensajes',
                url : 'http://pelitosdeamor.com/crm-creacttive/test-messages.php?page=',
                resultsNotFound : 'No hay mensajes',
                form: {
                    input : {'placeholder' : 'Type message ...'},
                    button: {'label' : 'Send'},
                    actionUrl: 'http://pelitosdeamor.com/crm-creacttive/test-save-message.php'
                }
            };
            var messagesLoaded = true;
            var $messagesLoading = null;
            var $messagesNoResults = null;
            var $messagesContent = null;
            var messagesPage = 1;
            $(document).ready(function () {
                createChatBox(function(){
                    loadMoreData();
                });
            });

            function loadMoreData() {
                messagesLoaded = false; // Stop it from repeating itself
                $.ajax(
                    {
                        url: messageConfig.url + messagesPage,
                        type: "get",
                        dataType: "json",
                        beforeSend: function ()
                        {
                            $messagesNoResults.hide();
                            $messagesLoading.show();
                        }
                    })
                    .done(function (data)
                    {
                        if(data.messages.length > 0){
                            messagesPage++;
                            $.each(data.messages, function(i,item){
                                $messagesContent.append(loadMessage(item));
                            });
                            messagesLoaded = true;
                            $messagesLoading.hide();
                        }else{
                            $messagesLoading.hide(function(){
                                $messagesNoResults.fadeIn();
                            });
                            setTimeout(function(){
                                messagesLoaded = true;
                            }, 120000);
                        }
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError)
                    {
                        console.log('ERROR load more messages', thrownError);
                        messagesLoaded = true;
                    });
            }
            
            function loadMessage(obj){
                var $html = null;
                if(obj.type === 'sent'){
                    $html = $('<div class="direct-chat-msg right">' +
                            '<div class="direct-chat-info clearfix">' +
                                '<span class="direct-chat-name pull-right">'+ obj.from.name +'</span>' +
                                '<span class="direct-chat-timestamp pull-left">'+ obj.created_at +'</span>' +
                            '</div>' +
                            '<img class="direct-chat-img" src="'+ obj.from.avatar +'" alt="'+ obj.from.name +'">' +
                            '<div class="direct-chat-text">' + obj.text + '</div>' +
                        '</div>');
                }else{
                    $html = $('<div class="direct-chat-msg">' +
                            '<div class="direct-chat-info clearfix">' +
                                '<span class="direct-chat-name pull-left">'+ obj.from.name +'</span>' +
                                '<span class="direct-chat-timestamp pull-right">'+ obj.created_at +'</span>' +
                            '</div>' +
                            '<img class="direct-chat-img" src="'+ obj.from.avatar +'" alt="'+ obj.from.name +'">' +
                            '<div class="direct-chat-text">' + obj.text + '</div>' +
                        '</div>');
                }
                return $html;
            }
            
            function createChatBox(callback){
                $('body').append('<div class="chat-box">' +
                    '<div class="row bootstrap snippets">' +
                        '<div class="col-md-12 col-xs-12 col-sm-12">' +
                            '<div class="box box-warning direct-chat direct-chat-warning">' +
                                '<div class="box-header with-border" data-widget="collapse">' +
                                    '<h3 class="box-title">'+ messageConfig.title +'</h3>' +
                                    '<div class="box-tools pull-right">' +
                                        '<span class="btn-box-tool"><i class="fa fa-2x fa-comments"></i></span>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="chat-box-section">' +
                                    '<div class="loading row">' +
                                        '<div class="col-md-12 text-center">' +
                                            '<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:16px;"></i>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="noresults row">' +
                                        '<div class="col-md-12 text-center">' +
                                            '<div class="alert alert-info">' +
                                                '<i class="fa fa-info-circle"></i> ' + messageConfig.resultsNotFound +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="box-body"><div class="direct-chat-messages"></div></div>' +
                                    '<div class="box-footer">' +
                                        '<form action="" method="post">' +
                                            '<div class="input-group">' +
                                                '<input required="required" type="text" name="message" placeholder="'+ messageConfig.form.input.placeholder +'" class="form-control" autocomplete="off">' +
                                                '<span class="input-group-btn">' +
                                                    '<button type="submit" class="btn btn-warning btn-flat">'+ messageConfig.form.button.label +'</button>' +
                                                '</span>' +
                                            '</div>' +
                                        '</form>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>');
        
                $('.box-header[data-widget="collapse"]').click(function () {
                    $('.chat-box-section').toggleClass("open-more");
                });
                $('.chat-box form').on('submit', function (event) {
                    event.preventDefault();
                    sendMessage($(this));
                });

                var $boxBody = $('.box-body');
                
                $messagesLoading = $('.chat-box-section .loading');
                $messagesNoResults = $('.chat-box-section .noresults');
                $messagesContent = $boxBody.find('.direct-chat-messages');
                
                $messagesContent.scroll(function () {
                    // if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    // if (($messagesContent.scrollTop() == $messagesContent.height() - $boxBody.height()) && messagesLoaded) {
                    // if (($messagesContent.scrollTop() + $messagesContent.height() >= $boxBody.height()) && messagesLoaded) {
                    if (messagesLoaded && (parseInt($messagesContent[0].scrollHeight - $messagesContent.scrollTop()) == parseInt($messagesContent.outerHeight()))) {
                        loadMoreData();
                    }
                });
        
                if(callback != null && typeof callback == 'function'){
                    callback();
                }
            }
            
            function sendMessage($form){
                var $input = $form.find('input[type="text"]');
                var $btn = $form.find('[type="submit"]');
                $input.attr('readonly', true);
                $btn.attr('disabled', true);
                $.ajax(
                    {
                        url: messageConfig.form.actionUrl,
                        data : {'text': $input.val()},
                        type: "post",
                        dataType: "json",
                        beforeSend: function ()
                        {
                            
                        }
                    })
                    .done(function (data)
                    {
                        $input.removeAttr('readonly');
                        $btn.attr('disabled', false);
                        if(data.message != null){
                            $input.val('');
                            $messagesContent.prepend(loadMessage(data.message));
                        }
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError)
                    {
                        $input.removeAttr('readonly');
                        $btn.attr('disabled', false);
                        console.log('ERROR save message', thrownError);
                    });
            }
        </script>
    </body>
</html>