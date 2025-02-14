jQuery(document).ready(function($) {
    // Lorsqu'on clique sur le bouton de fermeture
    $('.popup-close').click(function() {
        // Cache la popup et l'overlay
        $('.popup-overlay').hide();
    });

    // Optionnel : Fermer la popup si on clique en dehors de celle-ci
    $('.popup-overlay').click(function(e) {
        if ($(e.target).closest('.popup-salon').length === 0) {
            $(this).hide();
        }
    });
});
