<?php
namespace ElatedListing\Lib;
class CustomFieldCreator{
	public function __construct() {}
	public function render(){ ?>
		<tr class="form-field term-description-wrap">
			<th>
				<h2>
					<?php echo esc_html_e('Custom Field Creator' , 'eltd-listing'); ?>
				</h2>
			</th>
			<td class="eltd-custom-field-wrapper-outer">

				<div class="eltd-taxonomy-add-custom-field">
					<a class="eltd-add-custom-field" data-type="text"><?php esc_html_e('Text','eltd-listing') ?></a>
				</div>
				<div class="eltd-taxonomy-add-custom-field">
					<a class="eltd-add-custom-field" data-type="textarea"><?php esc_html_e('Textarea','eltd-listing') ?></a>
				</div>
				<div class="eltd-taxonomy-add-custom-field">
					<a class="eltd-add-custom-field" data-type="select"><?php esc_html_e('Select','eltd-listing') ?></a>
				</div>
				<div class="eltd-taxonomy-add-custom-field">
					<a class="eltd-add-custom-field" data-type="checkbox"><?php esc_html_e('Checkbox','eltd-listing') ?></a>
				</div>

			</td>

		</tr>

	<?php }
}

class CustomFieldText{

	private $name;
	private $default_value;
	private $id;

	public function __construct( $name = '', $default_value = '', $id){
		$this->name = $name;
		$this->default_value = $default_value;
		$this->id = $id;
	}

	public function render(){ ?>

		<tr class="form-field term-description-wrap custom-term-row">
			<th>
				<label><?php esc_html_e('Text field','eltd-listing') ?></label>
			</th>
			<td class="form-field term-description-wrap-inner custom-term-row-inner">
				<div class="eltd-custom-field-wrapper eltd-custom-text-field">

					<div class="eltd-custom-field-inner">
						<h3><?php esc_html_e('Text field','eltd-listing') ?></h3>
						<div class="eltd-custom-field-title">

							<label for="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Title','eltd-listing'); ?>
							</label>

							<input type="text" name="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]" value="<?php echo esc_attr($this->name); ?>"/>

						</div>

						<div class="eltd-custom-field-default-value">

							<label for="eltd_custom_field_default_value[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Default value','eltd-listing'); ?>
							</label>

							<input type="text" name="eltd_custom_field_default_value[<?php echo esc_attr($this->id); ?>]" value="<?php echo esc_attr($this->default_value); ?>"/>

						</div>

					</div>
					<?php do_action('eltd_listing_action_delete_custom_row'); ?>
					<?php do_action('eltd_listing_action_expand_custom_row'); ?>
					<input type="hidden" value="text_<?php echo esc_attr($this->id); ?>" name="eltd_custom_field_taxonomy_type[]">
				</div>
			</td>

		</tr>

	<?php }

}
class CustomFieldSelect{

	private $name;
	private $default_value;
	private $option_labels;
	private $option_values;
	private $id;

	public function __construct( $name = '', $default_value = '', $option_labels = array(), $option_values = array(), $id ){

		$this->name = $name;
		$this->default_value = $default_value;
		$this->option_labels = $option_labels;
		$this->option_values = $option_values;
		$this->id = $id;

	}

	public function render(){ ?>

		<tr class="form-field term-description-wrap custom-term-row">
			<th>
				<label>
                    <?php esc_html_e('Select field','eltd-listing') ?>
                </label>
			</th>

			<td class="form-field term-description-wrap-inner custom-term-row-inner">

				<div class="eltd-custom-field-wrapper eltd-custom-select-field" data-select-field-id = "<?php echo esc_attr($this->id); ?>">

					<div class="eltd-custom-field-inner">

						<div class="eltd-custom-field-title">
							<label for="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Title','eltd-listing'); ?>
							</label>
							<input type="text" name="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]" value="<?php echo esc_attr($this->name); ?>"/>
						</div>

						<div class="eltd-custom-select-field-option-holder" >
							<h4>
								<?php esc_html_e('Options','eltd-listing'); ?>
							</h4>
							<div class="eltd-custom-select-field-option-wrapper">

								<?php
								//check if are set repeater options and list them
								if(is_array($this->option_values) && count($this->option_values)){
									for($i=0 ; $i < count($this->option_values); $i++){
										$option_builder = new CustomOptionField($this->option_values[$i],$this->option_labels[$i],$this->id);
										$option_builder->render();
									}
								}?>

							</div>
							<?php do_action('eltd_listing_action_add_repeater_option_trigger');?>

						</div>
					</div>
					<?php
                        do_action('eltd_listing_action_delete_custom_row');
                        do_action('eltd_listing_action_expand_custom_row');
					?>
					<input type="hidden" value="select_<?php echo esc_attr($this->id); ?>" name="eltd_custom_field_taxonomy_type[]">
				</div>
			</td>
		</tr>
	<?php }
}

class CustomOptionField{

	private $label;
	private $name;
	private $id;

	public function __construct($name = '', $label = '', $id) {

		$this->label = $label;
		$this->name = $name;
		$this->id = $id;

	}

	public function render(){?>

		<div class="eltd-option-repeater-field-row clearfix">

			<div class="eltd-option-repeater-field-row-inner">
				<label for="eltd_repeater_option_label[<?php echo $this->id; ?>][]"><?php esc_html_e('Label(*)', 'eltd-listing') ?></label>
				<input type="text" name="eltd_repeater_option_label[<?php echo $this->id; ?>][]" value="<?php echo esc_attr($this->label) ?>"/>
			</div>

			<div class="eltd-option-repeater-field-row-inner">
				<?php
					do_action('eltd_listing_action_delete_repeater_option_trigger');
				?>
			</div>

		</div>

	<?php }

}
class CustomFieldTextArea{

	private $name;
	private $default_value;
	private $id;

	public function __construct( $name = '', $default_value = '', $id){
		$this->name = $name;
		$this->default_value = $default_value;
		$this->id = $id;
	}

	public function render(){ ?>

		<tr class="form-field term-description-wrap custom-term-row">
			<th>
				<label>
                    <?php esc_html_e('Textarea field','eltd-listing') ?>
                </label>
			</th>

			<td class="form-field term-description-wrap-inner custom-term-row-inner">
				<div class="eltd-custom-field-wrapper eltd-custom-text-field">

					<div class="eltd-custom-field-inner">
						<div class="eltd-custom-field-title">

							<label for="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Title','eltd-listing'); ?>
							</label>

							<input type="text" name="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]" value="<?php echo esc_attr($this->name); ?>"/>

						</div>

						<div class="eltd-custom-field-default-value">

							<label for="eltd_custom_field_default_value[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Default value','eltd-listing'); ?>
							</label>

							<textarea name="eltd_custom_field_default_value[<?php echo esc_attr($this->id); ?>]"><?php echo esc_attr($this->default_value); ?></textarea>

						</div>

					</div>
					<?php
                        do_action('eltd_listing_action_delete_custom_row');
                        do_action('eltd_listing_action_expand_custom_row');
                     ?>
					<input type="hidden" value="textarea_<?php echo esc_attr($this->id); ?>" name="eltd_custom_field_taxonomy_type[]">
				</div>
			</td>

		</tr>

	<?php }

}

class CustomFieldCheckBox{

	private $name;
	private $id;

	public function __construct( $name = '', $id){
		$this->name = $name;
		$this->id = $id;
	}

	public function render(){ ?>

		<tr class="form-field term-description-wrap custom-term-row">
			<th>
				<label><?php esc_html_e('Checkbox field','eltd-listing') ?></label>
			</th>
			<td class="form-field term-description-wrap-inner custom-term-row-inner">
				<div class="eltd-custom-field-wrapper eltd-custom-text-field">

					<div class="eltd-custom-field-inner">
						<div class="eltd-custom-field-title">

							<label for="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]">
								<?php esc_html_e('Title','eltd-listing'); ?>
							</label>

							<input type="text" name="eltd_custom_field_title[<?php echo esc_attr($this->id); ?>]" value="<?php echo esc_attr($this->name); ?>"/>

						</div>

					</div>
					<?php do_action('eltd_listing_action_delete_custom_row'); ?>
					<?php do_action('eltd_listing_action_expand_custom_row'); ?>
					<input type="hidden" value="checkbox_<?php echo esc_attr($this->id); ?>" name="eltd_custom_field_taxonomy_type[]">
				</div>
			</td>

		</tr>

	<?php }

}

class CustomAmenityCreator{
	private $amenity;
	private $name = '';
    private $unique_id = '';
	private $icon_pack = '';
	private $icon  = '';

	public function __construct($amenity = array()) {

		$this->amenity = $amenity;
		if(isset($amenity['name'])){
			$this->name = $amenity['name'];
		}
        if(isset($amenity['unique_id']) && !empty($amenity['unique_id'])){
            $this->unique_id = $amenity['unique_id'];
        } else {
            $this->unique_id = uniqid();
        }
		if(isset($amenity['icon_pack'])){
			$this->icon_pack = $amenity['icon_pack'];
		}
		if(isset($amenity['icon'])){
			$this->icon = $amenity['icon'];
		}
	}
	public function render(){

		$icon_collections = findme_elated_icon_collections()->getIconCollections();
		$collections      = array();

		foreach ( $icon_collections as $ic_key => $ic_name ) {
			$collections[] = findme_elated_icon_collections()->getIconCollection( $ic_key );
		}
		?>

		<div class="eltd-option-repeater-field-row eltd-amenity-repeater-row clearfix">

			<div class="eltd-option-repeater-field-row-inner">
				<input type="text" name="eltd_ls_taxonomy_amenity_list[][name]" value="<?php echo esc_attr($this->amenity['name']) ?>" />
                <input type="hidden" name="eltd_ls_taxonomy_amenity_list[][unique_id]" value="<?php echo esc_attr($this->unique_id) ?>" />
			</div>

			<div class="eltd-option-repeater-field-row-inner">
				<label for="eltd_amenity_icon_pack">Icon Pack</label>
				<select name="eltd_ls_taxonomy_amenity_list[][icon_pack]" id="eltd_amenity_icon_pack">
					<?php
					foreach ( $icon_collections as $key => $value ) {
						$selected = '';
						if($key == $this->icon_pack){
							$selected = 'selected';
						}
						?>
						<option value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($selected)?>>
							<?php echo esc_attr($value); ?>
						</option>

					<?php } ?>
				</select>
			</div>
			<div class="eltd-option-repeater-field-row-inner">

				<?php foreach ( $collections as $col ) { ?>
					<div class="icon-collection <?php echo str_replace( ' ', '_', strtolower( $col->title ) ); ?>"	style="display: none">
						<label for="<?php echo $col->param; ?>"><?php echo $col->title; ?></label>
						<select name="eltd_ls_taxonomy_amenity_list[][<?php echo $col->param; ?>]" id="<?php echo $col->param; ?>">
							<?php

							$icons = findme_elated_icon_collections()->getIconCollectionIcons( $col );
							foreach ( $icons as $key => $value ) {
								$selected = '';
								if($key == $this->icon){
									$selected = 'selected';
								}
								?>
								<option value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($selected) ?>>
									<?php echo esc_attr($value); ?>
								</option>

							<?php } ?>
						</select>
					</div>
				<?php } ?>

			</div>

			<div class="eltd-option-repeater-field-row-inner">
				<?php
					do_action('eltd_listing_action_delete_amenity_trigger');
				?>
			</div>
		</div>

	<?php }
}