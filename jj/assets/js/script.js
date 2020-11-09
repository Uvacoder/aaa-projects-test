var utils = (function () {
	'use strict';
	
	/**
	 * Returns the offset of an element relative to the document, or at least that's what I think it does 
	 */ 
	function offset(element) {
		var rect = element.getBoundingClientRect();
		var docElem = document.documentElement;

		return {
			top: rect.top + 
						window.pageYOffset - docElem.clientTop,
			left: rect.left + 
						window.pageXOffset - docElem.clientLeft
		};
	};

	/**
	 * Show an element using the display style
	 */
	function show(target) {
		target.style.display = '';
	}
	
	/**
	 * Hide an element using the display style
	 */
	function hide(target) {
		target.style.display = 'none';
	}

	return {
		dom: {
			offset,
			show,
			hide
		}
	};
}());



(function () {
	'use strict';
	
	/**
	 * Handles the category and tags options lists
	 */
	
	var classes = {
		component: '.js-OptionsList',
		state: {
			selected: 'is-selected'
		}
	};

	$$(classes.component)._.events({
		'click': function onOptionListClick({ target }) {
			var isChecked = 
				! target.classList
					.contains(classes.state.selected)
			
			setChecked({
				target, 
				checked: isChecked
			});
		}
	});

	function setChecked({ target, checked }) {
		var isChecked = !!checked;
		target.setAttribute('aria-checked', !! isChecked);

		if (isChecked) {
			target.classList.add(classes.state.selected);
		} else {
			target.classList.remove(classes.state.selected);
		}
	}
}());



(function () {
	'use strict';

	/**
	 * Sets the text body for the post editor 
	 */

	var classes = {
		component: '.js-PostEditor',
		textarea: '.js-PostEditor-textarea',
		editOptions: '.js-postEditOptions',
	};
	
	/**
	 * The user's mouse position when starting the text selection
	 * @type {Object}
	 */
	var startMousePosition;	

	/**
	 * The user's current mouse position
	 * @type {Object}
	 */
	var currentMousePosition = {};
	
	var $editor = $(classes.textarea);
	var $postEditOptions = $(classes.editOptions);

	$editor._.events({
		'select': function onEditorTextSelect(e) {
			var editorOffset = utils.dom.offset($editor);
			var editorRight = editorOffset.left + $editor.getBoundingClientRect().width;
			
			// Gotta show the element before we can get its width
			utils.dom.show($postEditOptions);
			
			var optionsWidth = $postEditOptions.offsetWidth;
			var top  = currentMousePosition.y - editorOffset.top;
			// Not sure why subtracting the padding on the container makes it center (which is the 30 * 2), but okay
			var left = Math.min(
					currentMousePosition.x - editorOffset.left - Math.abs((currentMousePosition.x - startMousePosition.x)  / 2) - (30 * 2),
					editorRight
			);

			$postEditOptions.style.top  = `${top}px`;
			$postEditOptions.style.left = `${left}px`;
		}
	})
	
	window.addEventListener('mousedown', onMouseDown);
	window.addEventListener('mousemove', onMouseMove);
	
	function onMouseDown(e) {
		utils.dom.hide($postEditOptions);
		startMousePosition = {
			x: e.pageX,
			y: e.pageY
		};
	}
	
	function onMouseMove(e) {
		currentMousePosition.x = e.pageX;
		currentMousePosition.y = e.pageY;
	}
	
	$editor.textContent = body;
}());

