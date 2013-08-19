<?php

class AddImageStyleLightwindow extends DataExtension {
	public function updateFieldsForImage($fields, $url, $file) {
		$cssClass = $fields->fieldByName('CSSClass');
		$items = $cssClass->getSource();
		$items['imageholder left'] = _t('AlignmentStyle.LIGHTBOXLEFT', 'Lightbox on the left, with text wrapping around');
		$items['imageholder right'] = _t('AlignmentStyle.LIGHTBOXRIGHT', 'Lightbox on the right, with text wrapping around');
		$cssClass->setSource($items);
		$fields->replaceField('CSSClass', $cssClass);
	}
}

