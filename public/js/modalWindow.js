/**
 * Created by Nadine on 19.01.2018.
 */
$(document).ready(function() {
    $(document).on('hidden.bs.modal', '.modal', function () {
        var modalData = $(this).data('bs.modal');
        // Destroy modal if has remote source – don't want to destroy modals with static content.
        if (modalData && modalData.options.remote) {
            // Destroy component. Next time new component is created and loads fresh content
            $(this).removeData('bs.modal');
            // Also clear loaded content, otherwise it would flash before new one is loaded.
            $(this).find(".modal-content").empty();
        }
    });
});
