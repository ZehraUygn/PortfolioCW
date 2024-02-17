function preventSubmit() {

    var $form = $('#formId');

    // Listen for the submit event.
    $form.on('submit', function(event) {
        // Create a flag to check form validity with.
        var isValidForm = true;

        // Selecting the input fields.
        var $title = $('title');
        var $text = $('text');

        // Checking if the title and the text empty string.
        if ($title.val() === '' || $text.val() === '') {
            isValidForm = false;
        }

        if (!isValidForm) {
            event.preventDefault();
            return;
        }

    });
}