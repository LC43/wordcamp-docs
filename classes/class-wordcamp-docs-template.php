<?php
interface WordCamp_Docs_Template {
	public function get_name();
	public function get_filename();

	public function form( $data );
	public function sanitize( $input );
	public function render( $data );
}