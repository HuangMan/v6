$(function(){
    $('.hd-form').validate({
    title:{
    	rule:{
    			required:true,
    		},
    	error:{
    		required:'栏目名称必须填写',
    	},
    	message:'请填写栏目名称',
    	},
   
    })
})