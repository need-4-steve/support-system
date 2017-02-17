var Comments = (function (module, $, window, globals) {
    "use strict";

    var load_comments = function (id) {
        $.ajax({
            url: globals.ajaxUrl,
            dataType: "json",
            data: {
                action: "support_list_comments",
                id: id
            },
            success: function (response) {
                var pane = $("#" + id);
                pane.find(".comments").html(response.data);
                pane.find(".comment_reply").show();
            }
        });
    };

    var initialize = function () {

        setInterval(function () {
            $("div.panel").each(function (index, element) {
                var id = $(element).attr("id");

                if (!isNaN(id)) {
                    load_comments(id);
                }
            });
        }, 1000 * 30);

    };

    return {
        initialize: initialize,
        load_comments: load_comments
    };

})(Comments || {}, jQuery, window, Globals);