$('[data-toggle="tooltip"]').tooltip(); //提示工具

//异步链接
$("a.ajax").click(function(){
    var $this = $(this);
    if(!$this.hasClass("operation-delete") || confirm("数据删除后不能恢复，你确定要继续？")){
        $.get(this.href).done(function(data){
            if(data.status){
                var back_url = $this.data("backUrl");
                if(back_url){
                    window.location.href = back_url;
                } else {
                    window.location.reload();
                }
            } else {
                alert(data.info);
            }
        });
    }
    return false;
});

//异步提交表单
$("form.auto-put-form").submit(function (event) {
    var $this = $(this);
    window.editor && editor.sync();
    $this.find("button:submit").prop("disabled", true);
    $.ajax({
        "url": $this.attr("action"),
        "type": $this.attr("method"),
        "data": $this.serialize()
    }).done(function (data) {
        $this.find("button:submit").prop("disabled", false);
        if (data.status) {
            var back_url = $this.data("backUrl");
            if (back_url) {
                window.location.href = back_url;
            } else {
                alert(data.info);
            }
        } else {
            alert(data.error || data.info);
        }
    });

    return false;
});