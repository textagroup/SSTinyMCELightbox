To setup add the required lightbox class to mysite_config.php

`// Add a style to TinyMCE`
`Object::add_extension('HtmlEditorField_Toolbar', 'AddImageStyleLightwindow');`

This just estends HtmlEditorField_Toolbar so that more styles are added to the TinyMCE alignemt dropdown

You will also need to include the javascript file LightBoxPage.js which takes care of changing the dom in the front end
