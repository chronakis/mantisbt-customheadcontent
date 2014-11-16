<?php
# Copyright (C) 2014 Yiannis Chronakis i.chronakis@gmail.com
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU Affero General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU Affero General Public License for more details.


/**
 * Allows you to add custom head content via a file
 */
class customHeadContentPlugin extends MantisPlugin {

	function register() {
		$this->name = 'Custom Head Content';
		$this->description = 'Allows to add custom html head content.';

		$this->version = '1.0';
		$this->requires = array(
			'MantisCore' => '1.2.0, < 1.3', # Make it available only to 1.2.x
		);

		$this->author	= 'Yiannis Chronakis';
		$this->contact	= 'jchronakis@gmail.com';
		$this->url		= 'https://github.com/chronakis/mantisbt-customheadcontent';
	}

	// FIXME How do I activate this?
	function config() {
		return array(
			'custom_head_content_file' => 'customHeadContent.html',
		);
	}
	
	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	/**
	 * Create the resource link to load the custom head content.
	 */
	function resources( $p_event ) {
		$customHeadFile = plugin_config_get('custom_head_content_file');
		if (!file_exists($customHeadFile))
			return '';
		
		$res = file_get_contents($customHeadFile);
		if (!$res)
			return '';
			
		return $res;
	}
}
