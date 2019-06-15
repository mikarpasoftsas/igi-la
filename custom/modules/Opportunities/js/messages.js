var messageConfig = {
    title: 'Mensajes',
    url : 'http://pelitosdeamor.com/crm-creacttive/index.php?entryPoint=getMessagesFb',
    resultsNotFound : 'No hay mensajes',
    form: {
        input : {'placeholder' : 'Type message ...'},
        button: {'label' : 'Send'},
        actionUrl: 'http://pelitosdeamor.com/crm-creacttive/index.php?entryPoint=saveMessageFb'
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
    messagesLoaded = false;
	var $idpreinforme = $("#formDetailView").find('input[name="record"]').val();	
	var $account_id = $("#account_id").val();
    $.ajax(
        {
            url: messageConfig.url,
			data : {				
				'messagesPage':messagesPage,
				'idpreinforme':$idpreinforme,
				'idcontacto':$account_id
			},			
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
	var $idpreinforme = $("#formDetailView").find('input[name="record"]').val();
	var $account_id = $("#EditView").find('input[id="account_id"]').val();	
    var $btn = $form.find('[type="submit"]');
    $input.attr('readonly', true);
    $btn.attr('disabled', true);
    $.ajax(
        {
            url: messageConfig.form.actionUrl,
            data : {
				
				'text': $input.val(),
				'idpreinforme':$idpreinforme,
				'idcontacto':$account_id
			},
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