// Disclose the all the things!
$(document).ready(function() {
    var toggleState = false;
    $('div .toggle').click();
    window.setTimeout(function(event) {
        if (Garnish.Modal.visibleModal) {
            if (!toggleState) {
                $('div .toggle').click();
                toggleState = true;
            }
        } else {
            toggleState = false;
        }
    }, 1000);
});
