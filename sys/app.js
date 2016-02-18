//
//functions
//
var show_message = function(str){
	$('.message').html('<p>'+str+'</p>');
	setTimeOut(function(){$('.message p').hide();},5000);
};
var show_msg_trans = function(str){
	$('.loading').css()
}