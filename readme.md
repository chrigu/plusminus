#PlusMinus
Contributors: Christian Cueni

Tags: list, plus, minus, pro, contra

Requires at least: 3.0.1

Tested up to: 4.0

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

##Description

This plugin adds 3 shortcodes to Wordpress that allow to have additional div-tags that can be used to create a pro/contra list.
The shortcodes are used in the following manner:

	[plusminus title="some title" heading_level="some heading level e.g. h3"]
		[plus]
			...plus content...
		[/plus]

		[minus]
			...minus...
		[/minus]

	[/plusminus]

This will create the following output:

	<div class="plusminus"><h3>some title</h3>
		<div class="plus plusminus_item">
			...plus...
		</div>
		<div class="minus plusminus_item">
			...minus...
		</div>
	</div>

##Installation

Zip the folder and upload via the webinterface to your wordpress installation.
