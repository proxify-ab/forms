window.registerFormBuilder = function() {
    jQuery($ => {
      setTimeout(function() {
	const fbTemplate = document.getElementById('build-wrap');
	var formBuilder = $(fbTemplate).formBuilder();
	document.addEventListener('fieldAdded', function() {
		Nova.$emit('frm-fieldAdded', formBuilder.actions.getData('json'));
	});
      }, 1000);
    });
};
