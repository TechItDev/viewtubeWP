<?php
/**
 * The framework heading fields file.
 *
 * @package Smart_Post_Show
 * @subpackage Smart_Post_Show/admin
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

if ( ! class_exists( 'SP_PC_Field_heading' ) ) {
	/**
	 * SP_PC_Field_heading
	 */
	class SP_PC_Field_heading extends SP_PC_Fields {

		/**
		 * Field constructor.
		 *
		 * @param array  $field The field type.
		 * @param string $value The values of the field.
		 * @param string $unique The unique ID for the field.
		 * @param string $where To where show the output CSS.
		 * @param string $parent The parent args.
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		/**
		 * The render method.
		 *
		 * @return void
		 */
		public function render() {

			echo ( ! empty( $this->field['content'] ) ) ? wp_kses_post( $this->field['content'] ) : '';
			echo ( ! empty( $this->field['image'] ) ) ? '<img src="' . esc_url( $this->field['image'] ) . '">' : '';

			echo ( ! empty( $this->field['after'] ) && ! empty( $this->field['link'] ) ) ? '<span class="spacer"></span><span class="support"><a target="_blank" href="' . esc_url( $this->field['link'] ) . '">' . wp_kses_post( $this->field['after'] ) . '</a></span>' : '';
		}

	}
}
