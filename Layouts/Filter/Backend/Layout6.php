<?php
namespace WPTE_PRODUCT_LAYOUT\Layouts\Filter\Backend;

use WPTE_PRODUCT_LAYOUT\Layouts\Filter\Layout;

/**
 * Layout6
 */
class Layout6 extends Layout {
	/**
	 * Method register_controls
	 *
	 * @return void
	 */
	public function register_layout() {

		// Start Genetal Tabs.
		$this->start_section_tabs(
			'wpte-table-section-layout5-tabs',
			[
				'condition' => [
					'general',
				],
			]
		);

		$this->wpte_filter_for_attributee_shortcode_list();
		$this->wpte_product_filter_title();

		// =============END CART SETTINGS=====================

		$this->end_section_tabs();

		/**
		 * =========================================================================
		 * =================================STAET STYLE TAB=========================
		 * =========================================================================
		 */
		$this->start_section_tabs(
			'wpte-tab-section-layout1-style-tabs',
			[
				'condition' => [
					'style',
				],
			]
		);

		$this->wpte_product_filter_box();
		$this->wpte_product_filter_dropdown();
		$this->wpte_product_filter_title_style();
		$this->wpte_product_filter_color_checkbox();
		$this->wpte_product_filter_post_count();

		$this->end_section_tabs();
	}
}
