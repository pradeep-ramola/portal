var acc=document.getElementsByClassName("accordion");
var i;for(i=0;i<acc.length;i++)
{acc[i].addEventListener("click",function()
{this.classList.toggle("active");
var panel=this.nextElementSibling;
if(panel.style.maxHeight){panel.style.maxHeight=null;
}else{panel.style.maxHeight=panel.scrollHeight+"px";}});
}function testAnim(x){$('.modal .modal-dialog').attr('class','modal-dialog  '+x+'  animated');
};$('#myModal').on('show.bs.modal',function(e){var anim="fadeInRight";testAnim(anim);});$('#myModal').on('hide.bs.modal',function(e){
    var anim="fadeOutLeft";testAnim(anim);
});$('#regSuccess').on('show.bs.modal',function(e){var anim="fadeInRight";testAnim(anim);}
);$('#regSuccess').on('hide.bs.modal',function(e){var anim="fadeOutLeft";testAnim(anim);});$('#signup').on('show.bs.modal',function(e){
    var anim="fadeInRight";testAnim(anim);});
    $('#signup').on('hide.bs.modal',function(e){
        var anim="fadeOutLeft";testAnim(anim);});
        $('.hide-password').on('click',function(){var $this=$(this),$password_field=$this.prev('input');
        ('password'==$password_field.attr('type'))?$password_field.attr('type','text'):$password_field.attr('type','password');
        ('Hide'==$this.text())?$this.text('Show'):$this.text('Hide');
        $password_field.putCursorAtEnd();});$forgot_password_link.on('click',function(event){event.preventDefault();
            forgot_password_selected();});